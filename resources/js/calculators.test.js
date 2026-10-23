// Run: node resources/js/calculators.test.js
// These are the worked examples quoted in each calculator's guide, so the copy and the math can't drift apart.
import assert from 'node:assert';
import { formulas as f } from './calculators.js';

const eq = (actual, expected) => assert.ok(Math.abs(actual - expected) < 0.01, `${actual} != ${expected}`);
const days = (rate = 0) => Object.fromEntries(['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'].flatMap((d, i) => [
    [`${d}In`, i < 5 ? '09:00' : i === 5 ? '09:00' : ''], [`${d}Out`, i < 5 ? '17:30' : i === 5 ? '13:00' : ''], [`${d}Break`, i < 5 ? 30 : 0],
]).concat([['rate', rate]]));

// Taxes
eq(f['federal-income-tax']({ income: 75000, status: 'single', itemized: 0 }).tax, 7670);
eq(f['take-home-pay']({ salary: 65000, status: 'single', periods: 26, k401: 5, stateRate: 4 }).paycheck, 1887.60);
eq(f['bonus-tax']({ bonus: 5000, stateRate: 5 }).net, 3267.50);
eq(f['self-employment-tax']({ profit: 60000, wages: 0 }).seTax, 8477.73);
eq(f['self-employment-tax']({ profit: 400, wages: 0 }).seTax, 0);
eq(f['capital-gains-tax']({ gain: 20000, income: 60000, status: 'single', term: 'long' }).tax, 3000);
eq(f['capital-gains-tax']({ gain: 20000, income: 30000, status: 'single', term: 'long' }).tax, 0.15 * 550);  // $19,450 at 0%
eq(f['capital-gains-tax']({ gain: 20000, income: 60000, status: 'single', term: 'short' }).tax, 4400);
eq(f['senior-deduction']({ status: 'joint', seniors: 2, magi: 180000, bracket: 22 }).deduction, 8400);
eq(f['senior-deduction']({ status: 'single', seniors: 1, magi: 175000, bracket: 22 }).deduction, 0);
eq(f['car-loan-interest-deduction']({ interest: 0, loan: 40000, apr: 7, months: 60, status: 'single', magi: 90000, bracket: 22 }).deduction, 2580.66);
eq(f['car-loan-interest-deduction']({ interest: 2500, loan: 0, apr: 0, months: 0, status: 'single', magi: 110500, bracket: 24 }).deduction, 300);
eq(f['salt-deduction']({ stateTax: 30000, propertyTax: 20000, year: 2026, status: 'joint', magi: 555000 }).deduction, 25400);
eq(f['salt-deduction']({ stateTax: 30000, propertyTax: 20000, year: 2026, status: 'joint', magi: 900000 }).deduction, 10000);
eq(f['child-tax-credit']({ children: 2, others: 0, status: 'joint', magi: 120000, earned: 120000 }).credit, 4400);
eq(f['child-tax-credit']({ children: 2, others: 0, status: 'single', magi: 200001, earned: 200001 }).credit, 4350);
eq(f['social-security-cola']({ benefit: 2095, cola: 3.6 }).monthly, 75.42);
const ca = f['california-income-tax']({ salary: 85000, status: 'single', k401: 5 });
eq(ca.caTax, 3125.12);
eq(ca.sdi, 1105);
eq(ca.net, 61082.38);
eq(f['california-income-tax']({ salary: 150000, status: 'joint', k401: 5 }).caTax, 4730.24);
eq(f['texas-income-tax']({ salary: 85000, status: 'single', k401: 5 }).net, 65312.50);
eq(f['nevada-income-tax']({ salary: 85000, status: 'single', k401: 5 }).vsCa, 4230.12);

// Income & pay
eq(f['salary-to-hourly']({ salary: 60000, hours: 40, weeks: 52 }).hourly, 28.846);
eq(f['hourly-to-salary']({ hourly: 25, hours: 40, weeks: 52 }).annual, 52000);
eq(f['time-card'](days(20)).pay, 920);
assert.strictEqual(f['hours']({ start: '22:00', end: '06:30', breakMins: 30 }).duration, '8h 0m');
eq(f['cost-of-living-raise']({ salary: 60000, inflation: 3.6, raise: 3 }).gap, -360);
eq(f['freelance-rate']({ income: 80000, expenses: 10000, hours: 25, weeks: 46, taxRate: 30 }).hourly, 108.07);
eq(f['tip']({ bill: 85, percent: 18, people: 3 }).perPerson, 33.43);

// Loans & savings
eq(f['compound-interest']({ principal: 10000, monthly: 200, rate: 7, years: 20, compounding: 12 }).balance, 144572.72);
eq(f['savings-goal']({ goal: 20000, current: 2000, years: 3, rate: 4 }).monthly, 464.77);
eq(f['loan-payment']({ amount: 15000, rate: 9, years: 5 }).pmt, 311.38);
eq(f['interest-rate']({ amount: 25000, monthly: 500, months: 60 }).apr, 7.42);
assert.ok(f['interest-rate']({ amount: 25000, monthly: 400, months: 60 }).note);
eq(f['cd']({ deposit: 10000, apy: 4, months: 12, bracket: 22 }).afterTax, 312);
eq(f['cd']({ deposit: 10000, apy: 4, months: 18, bracket: 22 }).interest, 605.96);
eq(f['car-payment']({ price: 35000, down: 5000, tradeIn: 0, taxRate: 6, rate: 6.5, months: 60 }).pmt, 628.07);
assert.strictEqual(f['credit-card-payoff']({ balance: 6000, apr: 22.99, monthly: 250 }).months, 33);
assert.ok(f['credit-card-payoff']({ balance: 6000, apr: 22.99, monthly: 100 }).note);
eq(f['debt-to-income']({ income: 6000, housing: 1600, debts: 500 }).backEnd, 35);
eq(f['rent-affordability']({ income: 20, type: 'hourly', debts: 300 }).rule30, 1040);
eq(f['401k']({ age: 30, retireAge: 65, balance: 20000, salary: 70000, contribution: 6, matchRate: 50, matchLimit: 6, returnRate: 7, raise: 3 }).total, 1451909.88);
assert.strictEqual(f['retirement']({ spending: 50000, withdrawal: 4, savings: 100000, annualSavings: 20000, returnRate: 7 }).years, '21 years');
eq(f['rule-of-72']({ rate: 8 }).rule72, 9);
eq(f['inflation']({ amount: 1000, rate: 3, years: 10 }).future, 1343.92);

// Business
eq(f['margin']({ cost: 60, price: 100, target: 50 }).priceFor, 120);
eq(f['break-even']({ fixed: 10000, price: 50, variable: 30 }).units, 500);
eq(f['tariff']({ value: 10000, rate: 25, quantity: 500, shipping: 1200, fees: 300 }).perUnit, 28);
eq(f['sales-tax']({ amount: 107.25, rate: 7.25, mode: 'remove' }).before, 100);
eq(f['roi']({ cost: 10000, value: 15000, years: 5 }).annual, 8.447);
eq(f['cap-rate']({ price: 400000, rent: 36000, vacancy: 5, expenses: 12000 }).capRate, 5.55);

// Math & everyday
eq(f['percentage']({ x: 20, y: 150 }).change, 650);
assert.strictEqual(f['age']({ birth: '1990-06-15', asOf: '2026-10-22' }).age, '36 years, 4 months, 7 days');
assert.strictEqual(f['date-difference']({ start: '2026-01-01', end: '2026-12-31', includeEnd: 'yes' }).business, 261);
eq(f['final-grade']({ current: 85, target: 88, weight: 30 }).needed, 95);
eq(f['gpa']({ g1: 4, c1: 3, g2: 3.3, c2: 4, g3: 3.7, c3: 3, g4: 3, c4: 3, g5: '', c5: 0, g6: '', c6: 0, g7: '', c7: 0, g8: '', c8: 0 }).gpa, 3.4846);
eq(f['electricity-cost']({ watts: 1500, hours: 5, rate: 0.18, quantity: 1 }).month, 41.06);
eq(f['gas-cost']({ distance: 300, mpg: 28, price: 3.2, roundTrip: 'yes', people: 2 }).cost, 68.57);
assert.strictEqual(f['ratio']({ a: 4, b: 6, c: 10 }).simplified, '2 : 3');
assert.strictEqual(f['ratio']({ a: 1.5, b: 2, c: 0 }).simplified, '3 : 4');
eq(f['ratio']({ a: 4, b: 6, c: 10 }).scaled, 15);
eq(f['proportion']({ a: 12, b: 2, c: 30 }).x, 5);
assert.strictEqual(f['slope']({ x1: 2, y1: 3, x2: 6, y2: 11 }).equation, 'y = 2x − 1');
eq(f['slope']({ x1: 2, y1: 3, x2: 6, y2: 11 }).distance, 8.944);
assert.ok(f['slope']({ x1: 2, y1: 3, x2: 2, y2: 11 }).note);
assert.strictEqual(f['tdee']({ sex: 'male', age: 30, weight: 180, feet: 5, inches: 10, activity: 1.55 }).tdee, 2763);

console.log(`calculators: ok (${Object.keys(f).length} formulas)`);
