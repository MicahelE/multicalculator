// Formulas for the config-driven calculators (resources/views/layouts/calculator.blade.php).
// Each takes the form values keyed by input name and returns outputs keyed by name, plus an optional `note`.
// Tax figures are tax year 2026 (IRS Rev. Proc. 2025-32) unless noted. Update yearly.

const STD_DEDUCTION = { single: 16100, joint: 32200 };
const BRACKETS = {
    single: [[12400, 0.10], [50400, 0.12], [105700, 0.22], [201775, 0.24], [256225, 0.32], [640600, 0.35], [Infinity, 0.37]],
    joint: [[24800, 0.10], [100800, 0.12], [211400, 0.22], [403550, 0.24], [512450, 0.32], [768700, 0.35], [Infinity, 0.37]],
};
const LTCG = { single: [49450, 545500], joint: [98900, 613700] }; // top of the 0% and 15% bands
const SS_WAGE_BASE = 184500;
// California 2026 (FTB Tax News, Oct 2026). SDI is 1.3% of all wages, no cap (EDD).
const CA = {
    std: { single: 5900, joint: 11800 },
    credit: { single: 158, joint: 316 },
    brackets: {
        single: [[11456, 0.01], [27157, 0.02], [42861, 0.04], [59498, 0.06], [75197, 0.08], [384109, 0.093], [460927, 0.103], [768213, 0.113], [Infinity, 0.123]],
        joint: [[22912, 0.01], [54314, 0.02], [85722, 0.04], [118996, 0.06], [150394, 0.08], [768218, 0.093], [921854, 0.103], [1536426, 0.113], [Infinity, 0.123]],
    },
    sdi: 0.013,
};
const DAYS = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];

const over = (amount, threshold) => Math.max(0, amount - threshold);

function bracketTax(taxable, brackets) {
    let tax = 0, floor = 0;
    for (const [top, rate] of brackets) {
        if (taxable <= floor) break;
        tax += (Math.min(taxable, top) - floor) * rate;
        floor = top;
    }
    return tax;
}

export const incomeTax = (taxable, status) => bracketTax(taxable, BRACKETS[status]);

const marginalRate = (taxable, status) => BRACKETS[status].find(([top]) => taxable <= top)[1];

const fica = (wages, status) => 0.062 * Math.min(wages, SS_WAGE_BASE) + 0.0145 * wages + 0.009 * over(wages, status === 'joint' ? 250000 : 200000);

// Yearly federal tax, FICA and take-home on a salary; `state` is whatever state tax the caller adds.
function paycheck(salary, status, k401, state = 0) {
    const pretax = salary * k401 / 100;
    const federal = incomeTax(over(salary - pretax, STD_DEDUCTION[status]), status);
    const payroll = fica(salary, status);
    const net = salary - pretax - federal - payroll - state;
    return { net, monthly: net / 12, federal, fica: payroll, state, pretax, rate: salary ? (federal + payroll + state) / salary * 100 : 0 };
}

const gcd = (x, y) => (y ? gcd(y, x % y) : x);
const decimals = n => Math.min(6, (String(n).split('.')[1] || '').length);
const num = n => String(+n.toFixed(4)); // for numbers inside text results

// Monthly payment on an amortized loan.
export function payment(principal, apr, months) {
    const r = apr / 1200;
    return r ? principal * r / (1 - (1 + r) ** -months) : principal / months;
}

function firstYearInterest(principal, apr, months) {
    const pmt = payment(principal, apr, months);
    let balance = principal, interest = 0;
    for (let m = 0; m < Math.min(12, months); m++) {
        const i = balance * apr / 1200;
        interest += i;
        balance -= pmt - i;
    }
    return interest;
}

// 'HH:MM' strings -> minutes worked; an end before the start counts as an overnight shift.
const minutes = t => { const [h, m] = t.split(':').map(Number); return h * 60 + m; };
const shift = (start, end) => (start && end ? (minutes(end) - minutes(start) + 1440) % 1440 : 0);
const hm = mins => `${Math.floor(mins / 60)}h ${Math.round(mins % 60)}m`;

// 'YYYY-MM-DD' -> local Date (avoids the UTC shift of new Date('YYYY-MM-DD')).
const parseDate = s => { const [y, m, d] = s.split('-').map(Number); return new Date(y, m - 1, d); };
const dayDiff = (a, b) => Math.round((b - a) / 86400000);

function ymd(from, to) {
    let y = to.getFullYear() - from.getFullYear(), m = to.getMonth() - from.getMonth(), d = to.getDate() - from.getDate();
    if (d < 0) { m--; d += new Date(to.getFullYear(), to.getMonth(), 0).getDate(); }
    if (m < 0) { y--; m += 12; }
    return [y, m, d];
}

const plural = (n, word) => `${n} ${word}${n === 1 ? '' : 's'}`;
const duration = months => `${plural(Math.floor(months / 12), 'year')}, ${plural(months % 12, 'month')}`;

export const formulas = {
    // --- Taxes ---
    'federal-income-tax': ({ income, status, itemized }) => {
        const deduction = Math.max(STD_DEDUCTION[status], itemized);
        const taxable = over(income, deduction);
        const tax = incomeTax(taxable, status);
        return { tax, taxable, deduction, effective: income ? tax / income * 100 : 0, marginal: marginalRate(taxable, status) * 100 };
    },

    'take-home-pay': ({ salary, status, periods, k401, stateRate }) => {
        const r = paycheck(salary, status, k401, salary * (1 - k401 / 100) * stateRate / 100);
        return { ...r, paycheck: r.net / periods };
    },

    'california-income-tax': ({ salary, status, k401 }) => {
        const taxable = over(salary * (1 - k401 / 100), CA.std[status]);
        // Plus the 1% Mental Health Services Tax over $1M.
        // ponytail: skips the exemption-credit phase-out (~$260k+ AGI), which only removes the $158/$316 credit.
        const caTax = Math.max(0, bracketTax(taxable, CA.brackets[status]) - CA.credit[status]) + 0.01 * over(taxable, 1e6);
        const sdi = salary * CA.sdi;
        return { ...paycheck(salary, status, k401, caTax + sdi), caTax, sdi };
    },

    'nevada-income-tax': v => noStateTax(v),
    'texas-income-tax': v => noStateTax(v),

    'bonus-tax': ({ bonus, stateRate }) => {
        // Flat supplemental withholding: 22%, or 37% on the part over $1 million.
        const federal = 0.22 * Math.min(bonus, 1e6) + 0.37 * over(bonus, 1e6);
        const fica = bonus * 0.0765;
        const state = bonus * stateRate / 100;
        return { net: bonus - federal - fica - state, federal, fica, state };
    },

    'self-employment-tax': ({ profit, wages }) => {
        const base = profit * 0.9235;
        if (base < 400) return { seTax: 0, socialSecurity: 0, medicare: 0, deductible: 0, quarterly: 0, note: 'No self-employment tax is due when net earnings are under $400.' };
        const socialSecurity = 0.124 * Math.min(base, over(SS_WAGE_BASE, wages));
        const medicare = 0.029 * base;
        const seTax = socialSecurity + medicare;
        return { seTax, socialSecurity, medicare, deductible: seTax / 2, quarterly: seTax / 4 };
    },

    'capital-gains-tax': ({ gain, income, status, term }) => {
        let tax;
        if (term === 'short') {
            tax = incomeTax(income + gain, status) - incomeTax(income, status);
        } else {
            // Long-term gains stack on top of ordinary taxable income.
            const [zeroTop, fifteenTop] = LTCG[status];
            const at0 = Math.max(0, Math.min(gain, zeroTop - income));
            const at15 = Math.max(0, Math.min(gain - at0, fifteenTop - Math.max(income, zeroTop)));
            tax = 0.15 * at15 + 0.20 * (gain - at0 - at15);
        }
        return { tax, rate: gain ? tax / gain * 100 : 0, afterTax: gain - tax };
    },

    'senior-deduction': ({ status, seniors, magi, bracket }) => {
        // $6,000 per person 65+, each reduced by 6% of MAGI over $75k ($150k joint). 2025-2028.
        const each = Math.max(0, 6000 - 0.06 * over(magi, status === 'joint' ? 150000 : 75000));
        const deduction = each * (status === 'joint' ? seniors : 1);
        return { deduction, saved: deduction * bracket / 100 };
    },

    'car-loan-interest-deduction': ({ interest, loan, apr, months, status, magi, bracket }) => {
        // Up to $10,000, reduced $200 per $1,000 (or part) of MAGI over $100k ($200k joint). 2025-2028.
        const paid = interest || (loan && months ? firstYearInterest(loan, apr, months) : 0);
        const reduction = 200 * Math.ceil(over(magi, status === 'joint' ? 200000 : 100000) / 1000);
        const deduction = Math.max(0, Math.min(paid, 10000) - reduction);
        return { paid, deduction, saved: deduction * bracket / 100 };
    },

    'salt-deduction': ({ stateTax, propertyTax, year, status, magi }) => {
        // Cap and phase-out threshold are halved for married filing separately; the cap never drops below $10,000 ($5,000 MFS).
        const split = status === 'separate' ? 2 : 1;
        const cap = (year === 2025 ? 40000 : 40400) / split;
        const limit = Math.max(10000 / split, cap - 0.3 * over(magi, (year === 2025 ? 500000 : 505000) / split));
        const paid = stateTax + propertyTax;
        const deduction = Math.min(paid, limit);
        return { deduction, limit, lost: paid - deduction };
    },

    'child-tax-credit': ({ children, others, status, magi, earned }) => {
        const reduction = 50 * Math.ceil(over(magi, status === 'joint' ? 400000 : 200000) / 1000);
        const credit = Math.max(0, 2200 * children + 500 * others - reduction);
        const refundable = Math.min(1700 * children, 0.15 * over(earned, 2500), credit);
        return { credit, refundable };
    },

    'social-security-cola': ({ benefit, cola }) => {
        const monthly = benefit * cola / 100;
        return { newBenefit: benefit + monthly, monthly, annual: monthly * 12 };
    },

    // --- Income & pay ---
    'salary-to-hourly': ({ salary, hours, weeks }) => {
        const hourly = salary / (hours * weeks);
        return { hourly, daily: hourly * hours / 5, weekly: salary / 52, biweekly: salary / 26, monthly: salary / 12 };
    },

    'hourly-to-salary': ({ hourly, hours, weeks }) => {
        const annual = hourly * hours * weeks;
        return { annual, monthly: annual / 12, biweekly: annual / 26, weekly: hourly * hours, daily: hourly * hours / 5 };
    },

    'time-card': v => {
        const mins = DAYS.reduce((sum, d) => sum + Math.max(0, shift(v[`${d}In`], v[`${d}Out`]) - v[`${d}Break`]), 0);
        const hours = mins / 60;
        const regular = Math.min(hours, 40);
        const overtime = hours - regular;
        return { total: hm(mins), hours, regular, overtime, pay: v.rate * (regular + overtime * 1.5) };
    },

    'hours': ({ start, end, breakMins }) => {
        const mins = Math.max(0, shift(start, end) - breakMins);
        return { duration: hm(mins), decimal: mins / 60, minutes: mins };
    },

    'cost-of-living-raise': ({ salary, inflation, raise }) => {
        const needed = salary * inflation / 100;
        return { needed, target: salary + needed, real: ((1 + raise / 100) / (1 + inflation / 100) - 1) * 100, gap: salary * (raise - inflation) / 100 };
    },

    'freelance-rate': ({ income, expenses, hours, weeks, taxRate }) => {
        const revenue = income / (1 - taxRate / 100) + expenses;
        const hourly = revenue / (hours * weeks);
        return { hourly, day: hourly * 8, monthly: revenue / 12, revenue };
    },

    'tip': ({ bill, percent, people }) => {
        const tip = bill * percent / 100;
        const n = Math.max(1, people);
        return { perPerson: (bill + tip) / n, tip, total: bill + tip, tipPerPerson: tip / n };
    },

    // --- Loans & savings ---
    'compound-interest': ({ principal, monthly, rate, years, compounding }) => {
        const rm = (1 + rate / 100 / compounding) ** (compounding / 12) - 1;
        const n = years * 12, growth = (1 + rm) ** n;
        const balance = principal * growth + (rm ? monthly * (growth - 1) / rm : monthly * n);
        const contributed = principal + monthly * n;
        return { balance, contributed, interest: balance - contributed };
    },

    'savings-goal': ({ goal, current, years, rate }) => {
        const rm = rate / 1200, n = years * 12;
        const grown = current * (1 + rm) ** n;
        const remaining = over(goal, grown);
        const monthly = rm ? remaining * rm / ((1 + rm) ** n - 1) : remaining / n;
        return { monthly, weekly: monthly * 12 / 52, deposits: monthly * n, grown };
    },

    'interest-rate': ({ amount, monthly, months }) => {
        if (!amount || !monthly || !months) return {};
        const total = monthly * months;
        if (total < amount) return { note: "These payments add up to less than the loan amount, so no interest rate fits. Check the numbers." };
        // The payment rises with the rate, so bisect for the APR that reproduces it.
        let lo = 0, hi = 1000;
        for (let i = 0; i < 60; i++) {
            const mid = (lo + hi) / 2;
            if (payment(amount, mid, months) > monthly) hi = mid; else lo = mid;
        }
        return { apr: lo, interest: total - amount, total };
    },

    'cd': ({ deposit, apy, months, bracket }) => {
        // APY already includes compounding, so growth is just (1 + APY) per year.
        const balance = deposit * (1 + apy / 100) ** (months / 12);
        const interest = balance - deposit;
        return { balance, interest, afterTax: interest * (1 - bracket / 100) };
    },

    'loan-payment': ({ amount, rate, years }) => {
        const n = Math.round(years * 12), pmt = payment(amount, rate, n);
        return { pmt, total: pmt * n, interest: pmt * n - amount };
    },

    'car-payment': ({ price, down, tradeIn, taxRate, rate, months }) => {
        // Most states tax the price after the trade-in credit.
        const loan = Math.max(0, price + over(price, tradeIn) * taxRate / 100 - down - tradeIn);
        const pmt = payment(loan, rate, months);
        return { pmt, loan, interest: pmt * months - loan, firstYear: firstYearInterest(loan, rate, months) };
    },

    'credit-card-payoff': ({ balance, apr, monthly }) => {
        const r = apr / 1200;
        if (balance > 0 && monthly <= balance * r) return { note: "This payment doesn't cover the monthly interest, so the balance will never go down. Try a higher payment." };
        let owed = balance, months = 0, interest = 0;
        while (owed > 0.005 && months < 1200) {
            const i = owed * r;
            interest += i;
            owed -= Math.min(monthly, owed + i) - i;
            months++;
        }
        return { months, time: duration(months), interest, total: balance + interest };
    },

    'debt-to-income': ({ income, housing, debts }) => {
        const backEnd = (housing + debts) / income * 100;
        const note = backEnd <= 36 ? 'Healthy: 36% or less is what most lenders like to see.'
            : backEnd <= 43 ? 'Borderline: many mortgage lenders cap DTI around 43%.'
            : 'High: most mortgage lenders will want this lower before approving a loan.';
        return { backEnd, frontEnd: housing / income * 100, note };
    },

    'rent-affordability': ({ income, type, debts }) => {
        const annual = type === 'hourly' ? income * 2080 : income;
        return { rule30: annual / 12 * 0.3, rule40x: annual / 40, withDebts: over(annual / 12 * 0.36, debts), monthlyIncome: annual / 12 };
    },

    '401k': ({ age, retireAge, balance, salary, contribution, matchRate, matchLimit, returnRate, raise }) => {
        // ponytail: contribution limits held at 2026 levels; real limits rise with inflation, so this understates max savers slightly.
        let total = balance, you = 0, employer = 0, pay = salary;
        for (let a = age; a < retireAge; a++) {
            const yours = Math.min(pay * contribution / 100, 24500 + (a >= 50 ? 8000 : 0));
            const match = pay * Math.min(contribution, matchLimit) / 100 * matchRate / 100;
            total = total * (1 + returnRate / 100) + yours + match;
            you += yours;
            employer += match;
            pay *= 1 + raise / 100;
        }
        return { total, you, employer, growth: total - balance - you - employer };
    },

    'retirement': ({ spending, withdrawal, savings, annualSavings, returnRate }) => {
        const target = spending / (withdrawal / 100);
        let total = savings, years = 0;
        while (total < target && years < 100) { total = total * (1 + returnRate / 100) + annualSavings; years++; }
        return { target, years: years >= 100 ? 'More than 100 years' : plural(years, 'year'), gap: over(target, savings) };
    },

    'rule-of-72': ({ rate }) => ({
        rule72: 72 / rate,
        exact: Math.log(2) / Math.log(1 + rate / 100),
        triple: Math.log(3) / Math.log(1 + rate / 100),
    }),

    'inflation': ({ amount, rate, years }) => {
        const factor = (1 + rate / 100) ** years;
        return { future: amount * factor, power: amount / factor, lost: (1 - 1 / factor) * 100 };
    },

    // --- Business ---
    'margin': ({ cost, price, target }) => {
        const profit = price - cost;
        return { margin: profit / price * 100, profit, markup: profit / cost * 100, priceFor: target < 100 ? cost / (1 - target / 100) : NaN };
    },

    'break-even': ({ fixed, price, variable }) => {
        const unitMargin = price - variable;
        if (unitMargin <= 0) return { note: 'Price must be higher than the variable cost per unit to ever break even.' };
        const units = Math.ceil(fixed / unitMargin);
        return { units, revenue: units * price, unitMargin, ratio: unitMargin / price * 100 };
    },

    'tariff': ({ value, rate, quantity, shipping, fees }) => {
        const duty = value * rate / 100;
        const landed = value + duty + shipping + fees;
        return { landed, duty, perUnit: landed / Math.max(1, quantity), increase: (landed - value) / value * 100 };
    },

    'sales-tax': ({ amount, rate, mode }) => {
        const before = mode === 'remove' ? amount / (1 + rate / 100) : amount;
        const tax = before * rate / 100;
        return { total: before + tax, tax, before };
    },

    'cap-rate': ({ price, rent, vacancy, expenses }) => {
        const noi = rent * (1 - vacancy / 100) - expenses;
        return { capRate: noi / price * 100, noi, grm: price / rent };
    },

    'roi': ({ cost, value, years }) => ({
        roi: (value - cost) / cost * 100,
        annual: years ? ((value / cost) ** (1 / years) - 1) * 100 : NaN,
        gain: value - cost,
    }),

    // --- Math & everyday ---
    'percentage': ({ x, y }) => ({ percentOf: x * y / 100, isWhat: x / y * 100, change: (y - x) / Math.abs(x) * 100 }),

    'age': ({ birth, asOf }) => {
        if (!birth || !asOf) return {};
        const from = parseDate(birth), to = parseDate(asOf);
        if (to < from) return { note: 'The "as of" date is before the date of birth.' };
        const [y, m, d] = ymd(from, to);
        const days = dayDiff(from, to);
        let next = new Date(to.getFullYear(), from.getMonth(), from.getDate());
        if (next < to) next = new Date(to.getFullYear() + 1, from.getMonth(), from.getDate());
        const untilNext = dayDiff(to, next);
        return { age: `${plural(y, 'year')}, ${plural(m, 'month')}, ${plural(d, 'day')}`, months: y * 12 + m, weeks: Math.floor(days / 7), days, next: untilNext ? plural(untilNext, 'day') : 'Today. Happy birthday!' };
    },

    'date-difference': ({ start, end, includeEnd }) => {
        if (!start || !end) return {};
        let [from, to] = [parseDate(start), parseDate(end)].sort((a, b) => a - b);
        if (includeEnd === 'yes') to = new Date(to.getFullYear(), to.getMonth(), to.getDate() + 1);
        const days = dayDiff(from, to);
        let business = 0;
        for (const d = new Date(from); d < to; d.setDate(d.getDate() + 1)) if (d.getDay() % 6) business++;
        const [y, m, dd] = ymd(from, to);
        return { days, weeks: `${plural(Math.floor(days / 7), 'week')}, ${plural(days % 7, 'day')}`, ymd: `${plural(y, 'year')}, ${plural(m, 'month')}, ${plural(dd, 'day')}`, business };
    },

    'final-grade': ({ current, target, weight }) => {
        const needed = (target - current * (1 - weight / 100)) / (weight / 100);
        const note = needed > 100 ? "You'd need more than 100% on the final, so this target may be out of reach without extra credit."
            : needed <= 0 ? "You've already locked in this grade, even with a zero on the final." : '';
        return { needed, note };
    },

    'gpa': v => {
        let points = 0, credits = 0;
        for (let i = 1; i <= 8; i++) {
            if (v[`g${i}`] === '' || !(v[`c${i}`] > 0)) continue;
            points += v[`g${i}`] * v[`c${i}`];
            credits += v[`c${i}`];
        }
        return { gpa: points / credits, credits, points };
    },

    'electricity-cost': ({ watts, hours, rate, quantity }) => {
        const kwhDay = watts * hours / 1000 * Math.max(1, quantity);
        return { month: kwhDay * 365 / 12 * rate, day: kwhDay * rate, year: kwhDay * 365 * rate, kwh: kwhDay * 365 / 12 };
    },

    'gas-cost': ({ distance, mpg, price, roundTrip, people }) => {
        const miles = distance * (roundTrip === 'yes' ? 2 : 1);
        const gallons = miles / mpg;
        const cost = gallons * price;
        return { cost, gallons, perPerson: cost / Math.max(1, people), perMile: cost / miles };
    },

    'ratio': ({ a, b, c }) => {
        if (!a || !b) return {};
        // Scale to whole numbers before reducing, so 1.5 : 2 becomes 3 : 4.
        const k = 10 ** Math.max(decimals(a), decimals(b));
        const [x, y] = [Math.round(a * k), Math.round(b * k)];
        const g = gcd(x, y);
        return { simplified: `${x / g} : ${y / g}`, decimal: a / b, split: `${+(a / (a + b) * 100).toFixed(2)}% / ${+(b / (a + b) * 100).toFixed(2)}%`, scaled: c * b / a };
    },

    'proportion': ({ a, b, c }) => {
        if (!a) return { note: 'A can’t be 0.' };
        const x = b * c / a;
        return { x, equation: `${num(a)} : ${num(b)} = ${num(c)} : ${num(x)}` };
    },

    'slope': ({ x1, y1, x2, y2 }) => {
        const dx = x2 - x1, dy = y2 - y1, distance = Math.hypot(dx, dy);
        if (!dx) return { distance, equation: `x = ${num(x1)}`, note: dy ? 'Vertical line: the slope is undefined.' : 'The two points are the same.' };
        const m = dy / dx, b = y1 - m * x1;
        return { m, equation: `y = ${num(m)}x ${b < 0 ? '−' : '+'} ${num(Math.abs(b))}`, b, distance, angle: Math.atan(m) * 180 / Math.PI };
    },

    'tdee': ({ sex, age, weight, feet, inches, activity }) => {
        // Mifflin-St Jeor BMR from pounds and feet/inches, times an activity multiplier.
        const bmr = 10 * weight * 0.45359237 + 6.25 * (feet * 12 + inches) * 2.54 - 5 * age + (sex === 'male' ? 5 : -161);
        const tdee = bmr * activity;
        return { tdee: Math.round(tdee), bmr: Math.round(bmr), lose: Math.round(tdee - 500), gain: Math.round(tdee + 250) };
    },
};

// Nevada and Texas: no state income tax, compared with the same salary in California.
function noStateTax(v) {
    const r = paycheck(v.salary, v.status, v.k401);
    return { ...r, vsCa: r.net - formulas['california-income-tax'](v).net };
}

const fmt = {
    money: n => n.toLocaleString('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }),
    money2: n => n.toLocaleString('en-US', { style: 'currency', currency: 'USD' }),
    percent: n => `${n.toLocaleString('en-US', { maximumFractionDigits: 2 })}%`,
    number: n => n.toLocaleString('en-US', { maximumFractionDigits: 2 }),
    decimal: n => n.toFixed(2),
    text: s => String(s),
};

const form = typeof document !== 'undefined' && document.getElementById('genericCalc');

if (form) {
    const d = new Date();
    const today = [d.getFullYear(), String(d.getMonth() + 1).padStart(2, '0'), String(d.getDate()).padStart(2, '0')].join('-');
    form.querySelectorAll('[data-today]').forEach(el => { el.value ||= today; });

    // Numeric strings become numbers; empty number fields become 0; dates, times and text selects stay strings.
    const read = () => Object.fromEntries([...form.elements].filter(el => el.name).map(el => {
        const n = Number(el.value);
        return [el.name, el.value !== '' && !isNaN(n) ? n : (el.type === 'number' ? 0 : el.value)];
    }));

    const update = () => {
        let out = {};
        try { out = formulas[form.dataset.calc](read()) || {}; } catch (e) { console.error(e); }
        form.querySelectorAll('[data-out]').forEach(el => {
            const v = out[el.dataset.out];
            const missing = v === undefined || v === '' || (typeof v === 'number' && !Number.isFinite(v));
            el.textContent = missing ? (el.dataset.out === 'note' ? '' : '–') : fmt[el.dataset.format](v);
        });
    };

    form.addEventListener('input', update);
    update();
}
