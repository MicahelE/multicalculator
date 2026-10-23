<?php

/*
| Config-driven calculators, merged into config('seo.pages') and config('seo.calculators') by config/seo.php.
| Each key is the URL slug, the view name (resources/views/<key>.blade.php supplies the guide) and the
| formula key in resources/js/calculators.js. Input/output format is documented in layouts/calculator.blade.php.
*/

$status = ['single' => 'Single', 'joint' => 'Married filing jointly'];
$statusHoh = ['single' => 'Single / Head of household', 'joint' => 'Married filing jointly'];
$brackets = [10 => '10%', 12 => '12%', 22 => '22%', 24 => '24%', 32 => '32%', 35 => '35%', 37 => '37%'];
$yesNo = ['no' => 'No', 'yes' => 'Yes'];
$grades = ['' => '—', '4' => 'A', '3.7' => 'A-', '3.3' => 'B+', '3' => 'B', '2.7' => 'B-', '2.3' => 'C+', '2' => 'C', '1.7' => 'C-', '1.3' => 'D+', '1' => 'D', '0' => 'F'];

$timeCard = [['rate', 'Hourly rate ($)', 20]];
foreach (['mon' => 'Mon', 'tue' => 'Tue', 'wed' => 'Wed', 'thu' => 'Thu', 'fri' => 'Fri', 'sat' => 'Sat', 'sun' => 'Sun'] as $d => $label) {
    $weekday = !in_array($d, ['sat', 'sun']);
    $timeCard[] = ["{$d}In", "$label start", $weekday ? '09:00' : '', 'time'];
    $timeCard[] = ["{$d}Out", "$label end", $weekday ? '17:30' : '', 'time'];
    $timeCard[] = ["{$d}Break", "$label break", $weekday ? 30 : 0];
}

$gpa = [];
foreach ([[4, 3], ['3.3', 4], ['3.7', 3], [3, 3], ['', ''], ['', ''], ['', ''], ['', '']] as $i => [$grade, $credits]) {
    $n = $i + 1;
    $gpa[] = ["g$n", "Course $n grade", $grade, $grades];
    $gpa[] = ["c$n", "Course $n credits", $credits];
}

$taxNote = 'Estimate only, not tax advice. Uses 2026 federal figures.';

return [

    // ---------------- Taxes ----------------

    'senior-deduction' => [
        'name' => 'Senior Deduction Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-hand-holding-heart', 'color' => '#0D9488', 'new' => true,
        'blurb' => 'The new $6,000 deduction for people 65 and older.',
        'title' => 'Senior Deduction Calculator 2026 - No Tax on Social Security? | MultiCalculator',
        'description' => 'Is there no tax on Social Security under the Big Beautiful Bill? Not quite. Estimate the $6,000 senior deduction that replaced it ($12,000 for couples) and your tax savings.',
        'keywords' => 'senior deduction calculator, no tax on social security, no tax on social security big beautiful bill, $6000 senior deduction calculator, senior bonus deduction calculator, enhanced senior deduction',
        'hero_description' => 'Estimate the new $6,000 deduction for taxpayers 65 and older, including the income phase-out.',
        'related' => ['social-security-cola', 'federal-income-tax', 'retirement'],
        'inputs' => [
            ['status', 'Filing status', 'joint', $statusHoh],
            ['seniors', 'People 65 or older on the return', 2, [1 => '1', 2 => '2 (joint returns only)']],
            ['magi', 'Modified adjusted gross income ($)', 180000],
            ['bracket', 'Federal tax bracket', 22, $brackets],
        ],
        'outputs' => ['deduction' => ['Senior deduction', 'money'], 'saved' => ['Estimated federal tax saved', 'money']],
        'disclaimer' => 'Estimate only, not tax advice. Available for tax years 2025-2028. Married filing separately is not eligible.',
    ],

    'car-loan-interest-deduction' => [
        'name' => 'Car Loan Interest Deduction Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-car', 'color' => '#2563EB', 'new' => true,
        'blurb' => 'Deduct up to $10,000 of interest on a new US-built car.',
        'title' => 'Car Loan Interest Deduction Calculator 2026 | MultiCalculator',
        'description' => 'Free car loan interest deduction calculator. Estimate how much auto loan interest you can deduct (up to $10,000) on a new US-assembled vehicle, 2025-2028.',
        'keywords' => 'car loan interest deduction calculator, car loan tax deduction calculator, auto loan interest deduction 2026, vehicle loan interest deduction, new car loan interest deduction',
        'hero_description' => 'Estimate your deduction for interest on a new, US-assembled car, truck or SUV loan.',
        'related' => ['car-payment', 'loan-payment', 'federal-income-tax'],
        'inputs' => [
            ['interest', 'Interest paid this year ($, from Form 1098-VLI)', ''],
            ['loan', 'Or estimate it: loan amount ($)', 40000],
            ['apr', 'APR (%)', 7],
            ['months', 'Loan term', 60, [36 => '36 months', 48 => '48 months', 60 => '60 months', 72 => '72 months', 84 => '84 months']],
            ['status', 'Filing status', 'single', $statusHoh],
            ['magi', 'Modified adjusted gross income ($)', 90000],
            ['bracket', 'Federal tax bracket', 22, $brackets],
        ],
        'outputs' => ['deduction' => ['Your deduction', 'money'], 'paid' => ['Interest counted', 'money'], 'saved' => ['Estimated federal tax saved', 'money']],
        'disclaimer' => 'Estimate only, not tax advice. The estimate uses your first 12 months of interest. Tax years 2025-2028.',
    ],

    'salt-deduction' => [
        'name' => 'SALT Cap Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-landmark', 'color' => '#9333EA', 'new' => true,
        'blurb' => 'Your state and local tax deduction under the $40,400 cap.',
        'title' => 'SALT Cap Calculator 2026 - $40,400 SALT Deduction Limit | MultiCalculator',
        'description' => 'Free SALT cap calculator. See how much state, local and property tax you can deduct under the new $40,000 (2025) and $40,400 (2026) SALT cap and phase-out.',
        'keywords' => 'salt cap calculator, salt deduction calculator, salt cap 2026, new salt cap calculator, salt limit calculator, state and local tax deduction',
        'hero_description' => 'See how much state, local and property tax you can deduct under the new SALT cap.',
        'related' => ['federal-income-tax', 'senior-deduction', 'take-home-pay'],
        'inputs' => [
            ['stateTax', 'State and local income (or sales) tax paid ($)', 18000],
            ['propertyTax', 'Property tax paid ($)', 12000],
            ['year', 'Tax year', 2026, [2025 => '2025', 2026 => '2026']],
            ['status', 'Filing status', 'joint', ['single' => 'Single / Head of household', 'joint' => 'Married filing jointly', 'separate' => 'Married filing separately']],
            ['magi', 'Modified adjusted gross income ($)', 250000],
        ],
        'outputs' => ['deduction' => ['SALT you can deduct', 'money'], 'limit' => ['Your SALT cap', 'money'], 'lost' => ['Taxes paid above the cap', 'money']],
        'disclaimer' => 'Estimate only, not tax advice. The SALT deduction only helps if you itemize.',
    ],

    'child-tax-credit' => [
        'name' => 'Child Tax Credit Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-child', 'color' => '#DB2777',
        'blurb' => '$2,200 per child for 2026, plus the refundable part.',
        'title' => 'Child Tax Credit Calculator 2026 - $2,200 Per Child | MultiCalculator',
        'description' => 'Free 2026 child tax credit calculator. Estimate your credit ($2,200 per child), the refundable portion (up to $1,700), and the income phase-out.',
        'keywords' => 'child tax credit 2026 calculator, child tax credit calculator, child tax credit estimator 2026, additional child tax credit, child tax credit phase out',
        'hero_description' => 'Estimate your 2026 child tax credit and how much of it is refundable.',
        'related' => ['federal-income-tax', 'take-home-pay', 'no-tax-on-tips'],
        'inputs' => [
            ['children', 'Qualifying children under 17', 2],
            ['others', 'Other dependents (17+, elderly parents)', 0],
            ['status', 'Filing status', 'joint', ['single' => 'Single / Head of household', 'joint' => 'Married filing jointly']],
            ['magi', 'Modified adjusted gross income ($)', 120000],
            ['earned', 'Earned income ($)', 120000],
        ],
        'outputs' => ['credit' => ['Total child tax credit', 'money'], 'refundable' => ['Refundable even with no tax owed (up to)', 'money']],
        'disclaimer' => 'Estimate only, not tax advice. The non-refundable part is limited to the tax you owe.',
    ],

    'social-security-cola' => [
        'name' => '2027 COLA Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-user-shield', 'color' => '#EA580C', 'new' => true,
        'blurb' => 'Your new Social Security check after the 3.6% raise.',
        'title' => '2027 COLA Calculator - Social Security 3.6% Increase | MultiCalculator',
        'description' => 'Free 2027 Social Security COLA calculator. See your new monthly benefit after the 3.6% cost-of-living adjustment and how much more you get per month and year.',
        'keywords' => '2027 cola increase, 2027 cola increase for social security, social security cola calculator, 2027 cola, cola calculator, social security increase 2027',
        'hero_description' => 'See your new Social Security benefit after the 3.6% cost-of-living adjustment for 2027.',
        'related' => ['senior-deduction', 'inflation', 'retirement'],
        'inputs' => [
            ['benefit', 'Current monthly benefit ($)', 2095],
            ['cola', 'COLA (%)', 3.6],
        ],
        'outputs' => ['newBenefit' => ['New monthly benefit', 'money2'], 'monthly' => ['Increase per month', 'money2'], 'annual' => ['Increase per year', 'money2']],
        'disclaimer' => 'Before Medicare Part B premiums or other deductions. SSA rounds benefits down to the dollar.',
    ],

    'take-home-pay' => [
        'name' => 'Take Home Pay Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-money-check-alt', 'color' => '#16A34A',
        'blurb' => 'Your paycheck after federal tax, FICA and state tax.',
        'title' => 'Take Home Pay Calculator 2026 - Paycheck After Taxes | MultiCalculator',
        'description' => 'Free take home pay calculator for 2026. Turn your salary into net pay per paycheck after federal income tax, Social Security, Medicare, state tax and 401(k).',
        'keywords' => 'take home pay calculator, paycheck calculator, salary after tax calculator, net pay calculator, biweekly pay calculator after taxes, paycheck calculator 2026',
        'hero_description' => 'Turn your salary into take-home pay per paycheck after taxes and 401(k).',
        'related' => ['salary-to-hourly', 'federal-income-tax', 'bonus-tax'],
        'inputs' => [
            ['salary', 'Annual salary ($)', 65000],
            ['periods', 'Pay frequency', 26, [52 => 'Weekly', 26 => 'Every two weeks', 24 => 'Twice a month', 12 => 'Monthly']],
            ['status', 'Filing status', 'single', $status],
            ['k401', '401(k) contribution (% of pay)', 5],
            ['stateRate', 'State income tax rate (%)', 4],
        ],
        'outputs' => [
            'paycheck' => ['Take-home pay per paycheck', 'money2'], 'net' => ['Take-home pay per year', 'money'],
            'federal' => ['Federal income tax', 'money'], 'fica' => ['Social Security & Medicare', 'money'],
            'state' => ['State income tax', 'money'], 'pretax' => ['401(k) contributions', 'money'],
        ],
        'disclaimer' => $taxNote . ' Assumes the standard deduction and a flat state rate.',
    ],

    'federal-income-tax' => [
        'name' => 'Federal Income Tax Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-file-invoice-dollar', 'color' => '#475569',
        'blurb' => '2026 tax brackets, effective rate and marginal rate.',
        'title' => 'Federal Income Tax Calculator 2026 - Effective Tax Rate & Brackets | MultiCalculator',
        'description' => 'Free 2026 federal income tax calculator. Find your tax, taxable income, effective tax rate and marginal tax bracket using the new 2026 IRS brackets.',
        'keywords' => 'federal income tax calculator, tax bracket calculator 2026, 2026 tax brackets, effective tax rate calculator, marginal tax rate calculator, income tax calculator',
        'hero_description' => 'Estimate your 2026 federal income tax, effective rate and tax bracket.',
        'related' => ['take-home-pay', 'capital-gains-tax', 'salt-deduction'],
        'inputs' => [
            ['income', 'Gross income ($)', 75000],
            ['status', 'Filing status', 'single', $status],
            ['itemized', 'Itemized deductions ($, leave 0 for standard)', 0],
        ],
        'outputs' => [
            'tax' => ['Federal income tax', 'money'], 'taxable' => ['Taxable income', 'money'], 'deduction' => ['Deduction used', 'money'],
            'effective' => ['Effective tax rate', 'percent'], 'marginal' => ['Marginal tax bracket', 'percent'],
        ],
        'disclaimer' => $taxNote . ' Before credits.',
    ],

    'bonus-tax' => [
        'name' => 'Bonus Tax Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-gift', 'color' => '#CA8A04',
        'blurb' => 'How much of your bonus you actually take home.',
        'title' => 'Bonus Tax Calculator 2026 - Bonus After Taxes | MultiCalculator',
        'description' => 'Free tax and bonus calculator. See how much of your bonus you take home after the 22% federal supplemental rate, Social Security, Medicare and state tax.',
        'keywords' => 'bonus tax calculator, tax and bonus calculator, bonus tax calculator 2026, bonus after taxes, supplemental tax rate, how much is a bonus taxed, bonus withholding calculator',
        'hero_description' => 'See how much of your bonus you take home after withholding.',
        'related' => ['take-home-pay', 'commission', 'federal-income-tax'],
        'inputs' => [
            ['bonus', 'Bonus amount ($)', 5000],
            ['stateRate', 'State tax withholding rate (%)', 5],
        ],
        'outputs' => [
            'net' => ['Bonus after taxes', 'money2'], 'federal' => ['Federal withholding', 'money2'],
            'fica' => ['Social Security & Medicare', 'money2'], 'state' => ['State withholding', 'money2'],
        ],
        'disclaimer' => 'Withholding estimate. Your actual tax is settled when you file your return.',
    ],

    'self-employment-tax' => [
        'name' => 'Self-Employment Tax Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-briefcase', 'color' => '#7C2D12',
        'blurb' => 'The 15.3% SE tax for freelancers and 1099 workers.',
        'title' => 'Self-Employment Tax Calculator 2026 - 1099 Tax | MultiCalculator',
        'description' => 'Free self-employment tax calculator for 2026. Estimate the 15.3% Social Security and Medicare tax on 1099 income, the deductible half, and quarterly payments.',
        'keywords' => 'self employment tax calculator, self employment tax calculator 2026, 1099 tax calculator, se tax calculator, quarterly estimated tax, freelance tax calculator',
        'hero_description' => 'Estimate the Social Security and Medicare tax on your 1099 and freelance income.',
        'related' => ['freelance-rate', 'federal-income-tax', 'take-home-pay'],
        'inputs' => [
            ['profit', 'Net self-employment profit ($)', 60000],
            ['wages', 'W-2 wages this year, if any ($)', 0],
        ],
        'outputs' => [
            'seTax' => ['Self-employment tax', 'money2'], 'socialSecurity' => ['Social Security part (12.4%)', 'money2'],
            'medicare' => ['Medicare part (2.9%)', 'money2'], 'deductible' => ['Deductible half', 'money2'],
            'quarterly' => ['Quarterly payment for SE tax', 'money2'],
        ],
        'disclaimer' => $taxNote . ' Income tax is separate. Excludes the 0.9% Additional Medicare Tax.',
    ],

    'capital-gains-tax' => [
        'name' => 'Capital Gains Tax Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-chart-area', 'color' => '#0891B2',
        'blurb' => 'Tax on selling stocks, crypto or property.',
        'title' => 'Capital Gains Tax Calculator 2026 - Long & Short Term | MultiCalculator',
        'description' => 'Free 2026 capital gains tax calculator. Estimate federal tax on stock, crypto or property sales using 0%, 15% and 20% long-term rates or ordinary short-term rates.',
        'keywords' => 'capital gains tax calculator, capital gains tax 2026, long term capital gains tax calculator, short term capital gains tax, crypto tax calculator, stock sale tax',
        'hero_description' => 'Estimate the federal tax on selling stocks, crypto or other investments.',
        'related' => ['federal-income-tax', 'roi', 'compound-interest'],
        'inputs' => [
            ['gain', 'Capital gain ($)', 20000],
            ['income', 'Other taxable income ($, after deductions)', 60000],
            ['status', 'Filing status', 'single', $status],
            ['term', 'Held for', 'long', ['long' => 'More than 1 year (long-term)', 'short' => '1 year or less (short-term)']],
        ],
        'outputs' => ['tax' => ['Federal tax on the gain', 'money'], 'rate' => ['Effective rate on the gain', 'percent'], 'afterTax' => ['Gain after tax', 'money']],
        'disclaimer' => $taxNote . ' Excludes the 3.8% net investment income tax and state tax.',
    ],

    'california-income-tax' => [
        'name' => 'California Income Tax Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-sun', 'color' => '#D97706',
        'blurb' => '2026 California state tax, SDI and take-home pay.',
        'title' => 'California Income Tax Calculator 2026 - CA Paycheck After Tax | MultiCalculator',
        'description' => 'Free 2026 California income tax calculator. Estimate CA state income tax with the new 2026 FTB brackets, SDI, federal tax and your take-home pay.',
        'keywords' => 'california income tax calculator, ca income tax calculator, california tax calculator 2026, california paycheck calculator, california tax brackets 2026, ca state tax calculator',
        'hero_description' => 'Estimate your 2026 California income tax, SDI and take-home pay.',
        'related' => ['nevada-income-tax', 'texas-income-tax', 'take-home-pay'],
        'inputs' => [
            ['salary', 'Annual salary ($)', 85000],
            ['status', 'Filing status', 'single', $status],
            ['k401', '401(k) contribution (% of pay)', 5],
        ],
        'outputs' => [
            'net' => ['Take-home pay per year', 'money'], 'monthly' => ['Take-home pay per month', 'money'],
            'caTax' => ['California income tax', 'money'], 'sdi' => ['CA SDI (1.3%)', 'money'],
            'federal' => ['Federal income tax', 'money'], 'fica' => ['Social Security & Medicare', 'money'],
            'rate' => ['Total tax rate', 'percent'],
        ],
        'disclaimer' => 'Estimate only, not tax advice. Uses 2026 federal and California figures and standard deductions. Ignores the exemption credit phase-out at high incomes.',
    ],

    'nevada-income-tax' => [
        'name' => 'Nevada Income Tax Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-mountain', 'color' => '#1E3A8A',
        'blurb' => 'Take-home pay in a state with no income tax.',
        'title' => 'Nevada Income Tax Calculator 2026 - NV Paycheck After Tax | MultiCalculator',
        'description' => 'Free 2026 Nevada income tax calculator. Nevada has no state income tax: see your federal tax, FICA and take-home pay, and how much more you keep than in California.',
        'keywords' => 'income tax calculator nevada, nevada income tax calculator, nevada paycheck calculator, nevada state income tax, does nevada have state income tax, nevada tax calculator 2026',
        'hero_description' => 'Nevada has no state income tax. See your take-home pay after federal tax and FICA.',
        'related' => ['texas-income-tax', 'california-income-tax', 'take-home-pay'],
        'inputs' => [
            ['salary', 'Annual salary ($)', 85000],
            ['status', 'Filing status', 'single', $status],
            ['k401', '401(k) contribution (% of pay)', 5],
        ],
        'outputs' => [
            'net' => ['Take-home pay per year', 'money'], 'monthly' => ['Take-home pay per month', 'money'],
            'state' => ['Nevada state income tax', 'money'], 'federal' => ['Federal income tax', 'money'],
            'fica' => ['Social Security & Medicare', 'money'], 'rate' => ['Total tax rate', 'percent'],
            'vsCa' => ['You keep vs. the same pay in California', 'money'],
        ],
        'disclaimer' => $taxNote . ' Assumes the standard deduction.',
    ],

    'texas-income-tax' => [
        'name' => 'Texas Income Tax Calculator', 'group' => 'Taxes', 'icon' => 'fas fa-star', 'color' => '#B91C1C',
        'blurb' => 'Texas paycheck after federal tax and FICA.',
        'title' => 'Texas Tax Calculator 2026 - Income Tax & Paycheck | MultiCalculator',
        'description' => 'Free 2026 Texas tax calculator. Texas has no state income tax: see your federal income tax, Social Security, Medicare and take-home pay on any salary.',
        'keywords' => 'texas tax calculator, texas income tax calculator, texas paycheck calculator, does texas have state income tax, texas salary calculator, texas tax calculator 2026',
        'hero_description' => 'Texas has no state income tax. See your take-home pay after federal tax and FICA.',
        'related' => ['nevada-income-tax', 'california-income-tax', 'take-home-pay'],
        'inputs' => [
            ['salary', 'Annual salary ($)', 85000],
            ['status', 'Filing status', 'single', $status],
            ['k401', '401(k) contribution (% of pay)', 5],
        ],
        'outputs' => [
            'net' => ['Take-home pay per year', 'money'], 'monthly' => ['Take-home pay per month', 'money'],
            'state' => ['Texas state income tax', 'money'], 'federal' => ['Federal income tax', 'money'],
            'fica' => ['Social Security & Medicare', 'money'], 'rate' => ['Total tax rate', 'percent'],
            'vsCa' => ['You keep vs. the same pay in California', 'money'],
        ],
        'disclaimer' => $taxNote . ' Assumes the standard deduction.',
    ],

    // ---------------- Income & pay ----------------

    'salary-to-hourly' => [
        'name' => 'Salary to Hourly Calculator', 'group' => 'Income & Pay', 'icon' => 'fas fa-exchange-alt', 'color' => '#059669',
        'blurb' => 'Convert an annual salary to an hourly wage.',
        'title' => 'Salary to Hourly Calculator - Annual Salary to Hourly Wage | MultiCalculator',
        'description' => 'Free salary to hourly calculator. Convert any annual salary into an hourly wage, plus daily, weekly, biweekly and monthly pay.',
        'keywords' => 'salary to hourly calculator, salary to hourly, salary to hourly converter, annual salary to hourly wage, how much is salary per hour',
        'hero_description' => 'Convert an annual salary into hourly, daily, weekly and monthly pay.',
        'related' => ['hourly-to-salary', 'take-home-pay', 'payraise'],
        'inputs' => [
            ['salary', 'Annual salary ($)', 60000],
            ['hours', 'Hours per week', 40],
            ['weeks', 'Weeks per year', 52],
        ],
        'outputs' => [
            'hourly' => ['Hourly wage', 'money2'], 'daily' => ['Daily pay', 'money2'], 'weekly' => ['Weekly pay', 'money2'],
            'biweekly' => ['Biweekly pay', 'money2'], 'monthly' => ['Monthly pay', 'money2'],
        ],
    ],

    'hourly-to-salary' => [
        'name' => 'Hourly to Salary Calculator', 'group' => 'Income & Pay', 'icon' => 'fas fa-exchange-alt', 'color' => '#0284C7',
        'blurb' => 'Convert an hourly wage to an annual salary.',
        'title' => 'Hourly to Salary Calculator - Hourly Wage to Annual Pay | MultiCalculator',
        'description' => 'Free hourly to salary calculator. Convert your hourly wage into annual salary, monthly, biweekly and weekly pay. See what $15, $20 or $25 an hour is per year.',
        'keywords' => 'hourly to salary calculator, hourly to annual salary, how much is $20 an hour annually, hourly wage to salary, hourly to yearly',
        'hero_description' => 'Convert an hourly wage into annual, monthly, biweekly and weekly pay.',
        'related' => ['salary-to-hourly', 'overtime', 'take-home-pay'],
        'inputs' => [
            ['hourly', 'Hourly wage ($)', 25],
            ['hours', 'Hours per week', 40],
            ['weeks', 'Weeks per year', 52],
        ],
        'outputs' => [
            'annual' => ['Annual salary', 'money2'], 'monthly' => ['Monthly pay', 'money2'], 'biweekly' => ['Biweekly pay', 'money2'],
            'weekly' => ['Weekly pay', 'money2'], 'daily' => ['Daily pay', 'money2'],
        ],
    ],

    'time-card' => [
        'name' => 'Time Card Calculator', 'group' => 'Income & Pay', 'icon' => 'fas fa-business-time', 'color' => '#4338CA',
        'blurb' => 'Weekly hours, breaks, overtime and gross pay.',
        'title' => 'Time Card Calculator - Weekly Hours with Breaks & Overtime | MultiCalculator',
        'description' => 'Free time card calculator. Add up weekly work hours with lunch breaks, overnight shifts and overtime over 40 hours, then calculate gross pay.',
        'keywords' => 'time card calculator, time card calculator with lunch, timesheet calculator, work hours calculator, time card calculator hours and minutes, weekly hours calculator',
        'hero_description' => 'Enter start and end times and unpaid break minutes for each day to get total hours, overtime and gross pay.',
        'related' => ['hours', 'overtime', 'no-tax-on-overtime'],
        'inputs' => $timeCard,
        'outputs' => [
            'total' => ['Total time worked', 'text'], 'hours' => ['Total hours (decimal)', 'decimal'],
            'regular' => ['Regular hours', 'decimal'], 'overtime' => ['Overtime hours (over 40)', 'decimal'],
            'pay' => ['Gross pay (overtime at 1.5x)', 'money2'],
        ],
    ],

    'hours' => [
        'name' => 'Hours Calculator', 'group' => 'Income & Pay', 'icon' => 'fas fa-hourglass-half', 'color' => '#6D28D9',
        'blurb' => 'Time between two times, minus breaks.',
        'title' => 'Hours Calculator - Time Between Two Times | MultiCalculator',
        'description' => 'Free hours calculator. Find the hours and minutes between two times, subtract a break, and get decimal hours for payroll. Works for overnight shifts.',
        'keywords' => 'hours calculator, time duration calculator, hours between two times, work hours calculator, decimal hours calculator, shift hours calculator',
        'hero_description' => 'Find the hours and minutes between two times, minus breaks, in decimal hours.',
        'related' => ['time-card', 'hourly-to-salary', 'overtime'],
        'inputs' => [
            ['start', 'Start time', '08:45', 'time'],
            ['end', 'End time', '17:15', 'time'],
            ['breakMins', 'Break (minutes)', 30],
        ],
        'outputs' => ['duration' => ['Time worked', 'text'], 'decimal' => ['Decimal hours', 'decimal'], 'minutes' => ['Total minutes', 'number']],
    ],

    'cost-of-living-raise' => [
        'name' => 'Cost of Living Raise Calculator', 'group' => 'Income & Pay', 'icon' => 'fas fa-balance-scale', 'color' => '#B45309',
        'blurb' => 'Is your raise keeping up with inflation?',
        'title' => 'Cost of Living Raise Calculator - Raise vs. Inflation | MultiCalculator',
        'description' => 'Free cost of living raise calculator. See the raise you need to keep up with inflation and whether your raise is a real pay increase after inflation.',
        'keywords' => 'cost of living raise calculator, cost of living increase calculator, raise vs inflation, real wage calculator, inflation raise calculator, cola raise',
        'hero_description' => 'See the raise you need to keep up with inflation, and what your raise is really worth.',
        'related' => ['payraise', 'inflation', 'social-security-cola'],
        'inputs' => [
            ['salary', 'Current salary ($)', 60000],
            ['inflation', 'Inflation rate (%)', 3.6],
            ['raise', 'Raise offered (%)', 3],
        ],
        'outputs' => [
            'needed' => ['Raise needed to keep up', 'money'], 'target' => ['Salary needed', 'money'],
            'real' => ['Your real raise after inflation', 'percent'], 'gap' => ['Your raise vs. inflation', 'money'],
        ],
    ],

    'freelance-rate' => [
        'name' => 'Freelance Rate Calculator', 'group' => 'Income & Pay', 'icon' => 'fas fa-laptop-house', 'color' => '#BE185D',
        'blurb' => 'The hourly rate you need to hit your income goal.',
        'title' => 'Freelance Rate Calculator - What Hourly Rate to Charge | MultiCalculator',
        'description' => 'Free freelance rate calculator. Work out the hourly and day rate you need to charge to cover taxes, expenses and time off and still hit your income goal.',
        'keywords' => 'freelance rate calculator, freelance hourly rate calculator, consultant rate calculator, how much to charge freelance, contractor rate calculator, day rate calculator',
        'hero_description' => 'Find the hourly and day rate you need to charge to hit your income goal.',
        'related' => ['self-employment-tax', 'salary-to-hourly', 'break-even'],
        'inputs' => [
            ['income', 'Take-home income goal ($/year)', 80000],
            ['expenses', 'Business expenses ($/year)', 10000],
            ['hours', 'Billable hours per week', 25],
            ['weeks', 'Working weeks per year', 46],
            ['taxRate', 'Total tax rate (%)', 30],
        ],
        'outputs' => ['hourly' => ['Hourly rate to charge', 'money2'], 'day' => ['Day rate (8 hours)', 'money'], 'monthly' => ['Revenue needed per month', 'money'], 'revenue' => ['Revenue needed per year', 'money']],
    ],

    'tip' => [
        'name' => 'Tip Calculator', 'group' => 'Income & Pay', 'icon' => 'fas fa-receipt', 'color' => '#65A30D',
        'blurb' => 'Tip amount and bill split per person.',
        'title' => 'Tip Calculator - Split the Bill & Tip Per Person | MultiCalculator',
        'description' => 'Free tip calculator. Work out the tip on any bill and split the total between friends. See tip amount, total and cost per person instantly.',
        'keywords' => 'tip calculator, split bill calculator, tip calculator split, how much to tip, 20 percent tip calculator, gratuity calculator',
        'hero_description' => 'Work out the tip and split the bill between everyone at the table.',
        'related' => ['no-tax-on-tips', 'percentage', 'sales-tax'],
        'inputs' => [
            ['bill', 'Bill amount ($)', 85],
            ['percent', 'Tip (%)', 18, [10 => '10%', 15 => '15%', 18 => '18%', 20 => '20%', 22 => '22%', 25 => '25%']],
            ['people', 'Number of people', 3],
        ],
        'outputs' => ['perPerson' => ['Each person pays', 'money2'], 'tip' => ['Tip', 'money2'], 'total' => ['Total with tip', 'money2'], 'tipPerPerson' => ['Tip per person', 'money2']],
    ],

    // ---------------- Loans & savings ----------------

    'compound-interest' => [
        'name' => 'Compound Interest Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-seedling', 'color' => '#15803D',
        'blurb' => 'Growth with monthly contributions over time.',
        'title' => 'Compound Interest Calculator with Monthly Contributions | MultiCalculator',
        'description' => 'Free compound interest calculator with monthly contributions. See how your savings or investments grow with daily, monthly or yearly compounding.',
        'keywords' => 'compound interest calculator, compound interest calculator monthly, compound interest calculator with monthly contributions, investment growth calculator, savings calculator',
        'hero_description' => 'See how savings grow with compound interest and regular monthly contributions.',
        'related' => ['savings-goal', 'rule-of-72', '401k'],
        'inputs' => [
            ['principal', 'Starting amount ($)', 10000],
            ['monthly', 'Monthly contribution ($)', 200],
            ['rate', 'Annual interest rate (%)', 7],
            ['years', 'Years', 20],
            ['compounding', 'Compounding', 12, [1 => 'Yearly', 4 => 'Quarterly', 12 => 'Monthly', 365 => 'Daily']],
        ],
        'outputs' => ['balance' => ['Future balance', 'money'], 'contributed' => ['Total contributed', 'money'], 'interest' => ['Interest earned', 'money']],
    ],

    'savings-goal' => [
        'name' => 'Savings Goal Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-piggy-bank', 'color' => '#DB2777',
        'blurb' => 'How much to save each month to reach a goal.',
        'title' => 'Savings Goal Calculator - How Much to Save Per Month | MultiCalculator',
        'description' => 'Free savings goal calculator. Find out how much to save each month or week to reach a goal like an emergency fund, house down payment or vacation.',
        'keywords' => 'savings goal calculator, how much to save per month, savings calculator, emergency fund calculator, down payment savings calculator, monthly savings calculator',
        'hero_description' => 'Find out how much to save each month to reach your goal on time.',
        'related' => ['compound-interest', 'rent-affordability', 'inflation'],
        'inputs' => [
            ['goal', 'Savings goal ($)', 20000],
            ['current', 'Already saved ($)', 2000],
            ['years', 'Years to reach it', 3],
            ['rate', 'Interest rate (%, e.g. high-yield savings)', 4],
        ],
        'outputs' => ['monthly' => ['Save each month', 'money2'], 'weekly' => ['Or each week', 'money2'], 'deposits' => ['Total you deposit', 'money'], 'grown' => ['Current savings will grow to', 'money']],
    ],

    'cd' => [
        'name' => 'CD Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-lock', 'color' => '#047857',
        'blurb' => 'Interest earned on a certificate of deposit.',
        'title' => 'CD Calculator - CD Rate & Interest Earned | MultiCalculator',
        'description' => 'Free CD calculator. See how much a certificate of deposit earns at any CD rate, your balance at maturity, and the interest you keep after taxes.',
        'keywords' => 'cd calculator, cd rate calculator, cd interest calculator, cd interest rate calculator, certificate of deposit calculator, cd rates calculator',
        'hero_description' => 'See what a CD earns by maturity and how much interest you keep after tax.',
        'related' => ['savings-goal', 'compound-interest', 'inflation'],
        'inputs' => [
            ['deposit', 'Deposit ($)', 10000],
            ['apy', 'APY (%)', 4],
            ['months', 'Term', 12, [3 => '3 months', 6 => '6 months', 9 => '9 months', 12 => '1 year', 18 => '18 months', 24 => '2 years', 36 => '3 years', 48 => '4 years', 60 => '5 years']],
            ['bracket', 'Federal tax bracket', 22, [0 => 'None (CD in an IRA)'] + $brackets],
        ],
        'outputs' => ['balance' => ['Balance at maturity', 'money2'], 'interest' => ['Interest earned', 'money2'], 'afterTax' => ['Interest after federal tax', 'money2']],
        'disclaimer' => 'Assumes interest stays in the CD until maturity. Withdrawing early usually costs a penalty.',
    ],

    'loan-payment' => [
        'name' => 'Loan Payment Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-hand-holding-usd', 'color' => '#1D4ED8',
        'blurb' => 'Monthly payment and total interest on any loan.',
        'title' => 'Loan Payment Calculator - Monthly Payment & Interest | MultiCalculator',
        'description' => 'Free loan payment calculator. Find the monthly payment, total interest and total cost of a personal loan or any fixed-rate amortized loan.',
        'keywords' => 'loan payment calculator, personal loan calculator, monthly payment calculator, loan interest calculator, amortization calculator, loan calculator',
        'hero_description' => 'Find the monthly payment and total interest on a fixed-rate loan.',
        'related' => ['car-payment', 'credit-card-payoff', 'debt-to-income'],
        'inputs' => [
            ['amount', 'Loan amount ($)', 15000],
            ['rate', 'Interest rate (APR %)', 9],
            ['years', 'Loan term (years)', 5],
        ],
        'outputs' => ['pmt' => ['Monthly payment', 'money2'], 'interest' => ['Total interest', 'money2'], 'total' => ['Total of all payments', 'money2']],
    ],

    'interest-rate' => [
        'name' => 'Interest Rate Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-search-dollar', 'color' => '#0E7490',
        'blurb' => 'Find the real APR from a loan\'s payment and term.',
        'title' => 'Interest Rate Calculator - Find the APR on a Loan | MultiCalculator',
        'description' => 'Free interest rate calculator. Find the actual interest rate (APR) on a loan from the amount borrowed, the monthly payment and the term, plus the total interest.',
        'keywords' => 'interest rate calculator, loan interest rate calculator, apr calculator, what is my interest rate, calculate interest rate on a loan, effective interest rate calculator',
        'hero_description' => 'Find the interest rate on a loan from the amount, monthly payment and term.',
        'related' => ['loan-payment', 'car-payment', 'credit-card-payoff'],
        'inputs' => [
            ['amount', 'Loan amount ($)', 25000],
            ['monthly', 'Monthly payment ($)', 500],
            ['months', 'Number of monthly payments', 60],
        ],
        'outputs' => ['apr' => ['Interest rate (APR)', 'percent'], 'interest' => ['Total interest', 'money2'], 'total' => ['Total of all payments', 'money2']],
    ],

    'car-payment' => [
        'name' => 'Car Payment Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-car-side', 'color' => '#0F766E',
        'blurb' => 'Monthly auto loan payment with tax and trade-in.',
        'title' => 'Car Payment Calculator - Auto Loan Monthly Payment | MultiCalculator',
        'description' => 'Free car payment calculator. Estimate your monthly auto loan payment with sales tax, down payment and trade-in, plus total interest and first-year interest.',
        'keywords' => 'car payment calculator, auto loan calculator, car loan calculator, monthly car payment, car loan payment calculator, auto loan payment',
        'hero_description' => 'Estimate your monthly car payment including sales tax, down payment and trade-in.',
        'related' => ['car-loan-interest-deduction', 'loan-payment', 'debt-to-income'],
        'inputs' => [
            ['price', 'Vehicle price ($)', 35000],
            ['down', 'Down payment ($)', 5000],
            ['tradeIn', 'Trade-in value ($)', 0],
            ['taxRate', 'Sales tax (%)', 6],
            ['rate', 'Interest rate (APR %)', 6.5],
            ['months', 'Loan term', 60, [36 => '36 months', 48 => '48 months', 60 => '60 months', 72 => '72 months', 84 => '84 months']],
        ],
        'outputs' => ['pmt' => ['Monthly payment', 'money2'], 'loan' => ['Amount financed', 'money'], 'interest' => ['Total interest', 'money'], 'firstYear' => ['Interest in year one', 'money']],
    ],

    'credit-card-payoff' => [
        'name' => 'Credit Card Payoff Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-credit-card', 'color' => '#DC2626',
        'blurb' => 'How long to pay off a card and the interest cost.',
        'title' => 'Credit Card Payoff Calculator - Months to Pay Off Debt | MultiCalculator',
        'description' => 'Free credit card payoff calculator. See how many months it takes to pay off your balance with a fixed monthly payment and how much interest you will pay.',
        'keywords' => 'credit card payoff calculator, credit card interest calculator, debt payoff calculator, how long to pay off credit card, credit card payment calculator',
        'hero_description' => 'See how long it takes to pay off a credit card and how much interest it costs.',
        'related' => ['loan-payment', 'debt-to-income', 'savings-goal'],
        'inputs' => [
            ['balance', 'Card balance ($)', 6000],
            ['apr', 'APR (%)', 22.99],
            ['monthly', 'Monthly payment ($)', 250],
        ],
        'outputs' => ['time' => ['Time to pay off', 'text'], 'months' => ['Months', 'number'], 'interest' => ['Total interest', 'money2'], 'total' => ['Total paid', 'money2']],
    ],

    'debt-to-income' => [
        'name' => 'Debt-to-Income Ratio Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-percentage', 'color' => '#7C3AED',
        'blurb' => 'Your DTI ratio, as lenders calculate it.',
        'title' => 'Debt-to-Income Ratio Calculator - DTI for Mortgages | MultiCalculator',
        'description' => 'Free debt-to-income ratio calculator. Calculate your front-end and back-end DTI the way mortgage and auto lenders do, and see how your ratio compares.',
        'keywords' => 'debt to income ratio calculator, dti calculator, debt to income ratio for mortgage, front end dti, back end dti, what is a good debt to income ratio',
        'hero_description' => 'Calculate your debt-to-income ratio the way lenders do.',
        'related' => ['rent-affordability', 'loan-payment', 'car-payment'],
        'inputs' => [
            ['income', 'Gross monthly income ($)', 6000],
            ['housing', 'Rent or mortgage payment ($/month)', 1600],
            ['debts', 'Other debt payments ($/month: car, cards, loans)', 500],
        ],
        'outputs' => ['backEnd' => ['Debt-to-income ratio', 'percent'], 'frontEnd' => ['Housing ratio (front-end)', 'percent']],
    ],

    'rent-affordability' => [
        'name' => 'Rent Affordability Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-home', 'color' => '#EA580C',
        'blurb' => 'How much rent you can afford on your income.',
        'title' => 'How Much Rent Can I Afford? Rent Calculator | MultiCalculator',
        'description' => 'Free rent affordability calculator. See how much rent you can afford using the 30% rule and the 40x landlord income rule, from your salary or hourly wage.',
        'keywords' => 'how much rent can i afford, rent affordability calculator, rent calculator, 30 percent rule rent, 40x rent rule, how much rent can i afford making $20 an hour',
        'hero_description' => 'See how much rent you can afford on your salary or hourly wage.',
        'related' => ['debt-to-income', 'hourly-to-salary', 'savings-goal'],
        'inputs' => [
            ['income', 'Income ($)', 20],
            ['type', 'Income is', 'hourly', ['hourly' => 'Per hour (full-time)', 'annual' => 'Per year']],
            ['debts', 'Monthly debt payments ($)', 300],
        ],
        'outputs' => ['rule30' => ['Rent by the 30% rule', 'money'], 'rule40x' => ['Max rent landlords allow (40x rule)', 'money'], 'withDebts' => ['Rent leaving room for your debts', 'money'], 'monthlyIncome' => ['Gross monthly income', 'money']],
    ],

    '401k' => [
        'name' => '401(k) Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-university', 'color' => '#4F46E5',
        'blurb' => 'Your 401(k) balance at retirement with employer match.',
        'title' => '401(k) Calculator - Retirement Balance with Employer Match | MultiCalculator',
        'description' => 'Free 401(k) calculator. Project your balance at retirement with your contributions, employer match, raises and investment returns. Uses 2026 IRS limits.',
        'keywords' => '401k calculator, 401k retirement calculator, 401k match calculator, 401k growth calculator, 401k contribution limit 2026, how much will my 401k be worth',
        'hero_description' => 'Project your 401(k) at retirement with contributions, employer match and growth.',
        'related' => ['retirement', 'compound-interest', 'take-home-pay'],
        'inputs' => [
            ['age', 'Current age', 30],
            ['retireAge', 'Retirement age', 65],
            ['balance', 'Current 401(k) balance ($)', 20000],
            ['salary', 'Annual salary ($)', 70000],
            ['contribution', 'Your contribution (% of salary)', 6],
            ['matchRate', 'Employer match (% of your contribution)', 50],
            ['matchLimit', 'Employer matches up to (% of salary)', 6],
            ['returnRate', 'Annual return (%)', 7],
            ['raise', 'Annual raise (%)', 3],
        ],
        'outputs' => ['total' => ['Balance at retirement', 'money'], 'you' => ['Your contributions', 'money'], 'employer' => ['Employer contributions', 'money'], 'growth' => ['Investment growth', 'money']],
        'disclaimer' => 'Projection only. Returns are not guaranteed. Not adjusted for inflation.',
    ],

    'retirement' => [
        'name' => 'Retirement Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-umbrella-beach', 'color' => '#0369A1',
        'blurb' => 'How much you need to retire, and how long it takes.',
        'title' => 'Retirement Calculator - How Much Do I Need to Retire? | MultiCalculator',
        'description' => 'Free retirement calculator. Find your retirement number with the 4% rule and how many years it will take to get there with your current savings rate.',
        'keywords' => 'retirement calculator, how much do i need to retire, retirement number calculator, 4 percent rule calculator, fire calculator, early retirement calculator',
        'hero_description' => 'Find your retirement number and how many years it will take to reach it.',
        'related' => ['401k', 'compound-interest', 'inflation'],
        'inputs' => [
            ['spending', 'Yearly spending in retirement ($)', 50000],
            ['withdrawal', 'Safe withdrawal rate (%)', 4],
            ['savings', 'Current savings ($)', 100000],
            ['annualSavings', 'Savings added per year ($)', 20000],
            ['returnRate', 'Annual return (%)', 7],
        ],
        'outputs' => ['target' => ['Your retirement number', 'money'], 'years' => ['Time to get there', 'text'], 'gap' => ['Still to save', 'money']],
        'disclaimer' => 'Projection only. Returns are not guaranteed.',
    ],

    'rule-of-72' => [
        'name' => 'Rule of 72 Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-redo', 'color' => '#A16207',
        'blurb' => 'How long it takes money to double.',
        'title' => 'Rule of 72 Calculator - How Long to Double Your Money | MultiCalculator',
        'description' => 'Free rule of 72 calculator. See how many years it takes to double your money at any interest rate, compared with the exact answer and time to triple.',
        'keywords' => 'rule of 72 calculator, rule of 72, how long to double money, doubling time calculator, rule of 72 formula',
        'hero_description' => 'See how many years it takes to double your money at any rate of return.',
        'related' => ['compound-interest', 'inflation', 'cagr'],
        'inputs' => [['rate', 'Annual rate of return (%)', 8]],
        'outputs' => ['rule72' => ['Years to double (rule of 72)', 'decimal'], 'exact' => ['Years to double (exact)', 'decimal'], 'triple' => ['Years to triple (exact)', 'decimal']],
    ],

    'inflation' => [
        'name' => 'Inflation Calculator', 'group' => 'Loans & Savings', 'icon' => 'fas fa-arrow-up', 'color' => '#B91C1C',
        'blurb' => 'Future cost of money and lost buying power.',
        'title' => 'Inflation Calculator - Future Value & Buying Power | MultiCalculator',
        'description' => 'Free inflation calculator. See what something will cost in the future and how much buying power your money loses to inflation over time.',
        'keywords' => 'inflation calculator, future value of money calculator, purchasing power calculator, inflation rate calculator, cost of inflation, buying power calculator',
        'hero_description' => 'See future prices and how much buying power your money loses to inflation.',
        'related' => ['cost-of-living-raise', 'compound-interest', 'social-security-cola'],
        'inputs' => [
            ['amount', 'Amount today ($)', 1000],
            ['rate', 'Inflation rate (%/year)', 3],
            ['years', 'Years', 10],
        ],
        'outputs' => ['future' => ['Cost in the future', 'money2'], 'power' => ['Buying power of today\'s amount', 'money2'], 'lost' => ['Buying power lost', 'percent']],
    ],

    // ---------------- Business ----------------

    'margin' => [
        'name' => 'Profit Margin Calculator', 'group' => 'Business', 'icon' => 'fas fa-chart-pie', 'color' => '#E11D48',
        'blurb' => 'Gross margin, markup and price for a target margin.',
        'title' => 'Profit Margin Calculator - Gross Margin & Price | MultiCalculator',
        'description' => 'Free profit margin calculator. Calculate gross margin, markup and profit from cost and price, or the price you need to hit a target margin.',
        'keywords' => 'margin calculator, profit margin calculator, gross margin calculator, margin calculator formula, margin vs markup, price for margin calculator',
        'hero_description' => 'Calculate gross margin, markup and the price you need for a target margin.',
        'related' => ['markup', 'break-even', 'discount'],
        'inputs' => [
            ['cost', 'Cost ($)', 60],
            ['price', 'Selling price ($)', 100],
            ['target', 'Target margin (%)', 50],
        ],
        'outputs' => ['margin' => ['Gross margin', 'percent'], 'profit' => ['Profit', 'money2'], 'markup' => ['Markup', 'percent'], 'priceFor' => ['Price for target margin', 'money2']],
    ],

    'break-even' => [
        'name' => 'Break-Even Calculator', 'group' => 'Business', 'icon' => 'fas fa-balance-scale-right', 'color' => '#0F766E',
        'blurb' => 'Units and sales needed to cover your costs.',
        'title' => 'Break-Even Calculator - Break-Even Point in Units & Sales | MultiCalculator',
        'description' => 'Free break-even calculator. Find how many units you need to sell to cover fixed costs, your break-even revenue and contribution margin.',
        'keywords' => 'break even calculator, break even point calculator, break even analysis, contribution margin calculator, how many units to break even',
        'hero_description' => 'Find how many units you need to sell to cover your costs.',
        'related' => ['margin', 'markup', 'roi'],
        'inputs' => [
            ['fixed', 'Fixed costs ($)', 10000],
            ['price', 'Price per unit ($)', 50],
            ['variable', 'Variable cost per unit ($)', 30],
        ],
        'outputs' => ['units' => ['Break-even units', 'number'], 'revenue' => ['Break-even sales', 'money'], 'unitMargin' => ['Contribution margin per unit', 'money2'], 'ratio' => ['Contribution margin ratio', 'percent']],
    ],

    'tariff' => [
        'name' => 'Tariff Calculator', 'group' => 'Business', 'icon' => 'fas fa-ship', 'color' => '#1E40AF',
        'blurb' => 'Import duty and landed cost per unit.',
        'title' => 'Tariff Calculator - Import Duty & Landed Cost | MultiCalculator',
        'description' => 'Free tariff calculator. Estimate import duty and the landed cost per unit for goods shipped to the US from China, Canada, Mexico or anywhere else.',
        'keywords' => 'tariff calculator, tariff calculator usa, import duty calculator, landed cost calculator, tariff calculator china to usa, customs duty calculator',
        'hero_description' => 'Estimate import duty and the landed cost of your goods per unit.',
        'related' => ['margin', 'markup', 'sales-tax'],
        'inputs' => [
            ['value', 'Customs value of goods ($)', 10000],
            ['rate', 'Total tariff rate (%)', 25],
            ['quantity', 'Units in shipment', 500],
            ['shipping', 'Freight and insurance ($)', 1200],
            ['fees', 'Broker and other fees ($)', 300],
        ],
        'outputs' => ['landed' => ['Total landed cost', 'money2'], 'duty' => ['Tariff / duty', 'money2'], 'perUnit' => ['Landed cost per unit', 'money2'], 'increase' => ['Added on top of goods value', 'percent']],
        'disclaimer' => 'Estimate only. Look up the exact rate for your product\'s HTS code and country of origin.',
    ],

    'sales-tax' => [
        'name' => 'Sales Tax Calculator', 'group' => 'Business', 'icon' => 'fas fa-cash-register', 'color' => '#4D7C0F',
        'blurb' => 'Add or remove sales tax from a price.',
        'title' => 'Sales Tax Calculator - Add or Remove Sales Tax | MultiCalculator',
        'description' => 'Free sales tax calculator. Add sales tax to a price or work backward from a total to find the price before tax and the tax amount.',
        'keywords' => 'sales tax calculator, reverse sales tax calculator, price before tax, how to calculate sales tax, sales tax rate calculator',
        'hero_description' => 'Add sales tax to a price, or work backward from a total that includes tax.',
        'related' => ['discount', 'tip', 'margin'],
        'inputs' => [
            ['amount', 'Amount ($)', 100],
            ['rate', 'Sales tax rate (%)', 7.25],
            ['mode', 'The amount is', 'add', ['add' => 'Before tax (add tax)', 'remove' => 'Total with tax (remove tax)']],
        ],
        'outputs' => ['total' => ['Total with tax', 'money2'], 'tax' => ['Sales tax', 'money2'], 'before' => ['Price before tax', 'money2']],
    ],

    'roi' => [
        'name' => 'ROI Calculator', 'group' => 'Business', 'icon' => 'fas fa-chart-line', 'color' => '#047857',
        'blurb' => 'Return on investment, total and annualized.',
        'title' => 'ROI Calculator - Return on Investment & Annualized ROI | MultiCalculator',
        'description' => 'Free ROI calculator. Calculate return on investment and annualized ROI for any investment, project or marketing campaign.',
        'keywords' => 'roi calculator, return on investment calculator, annualized roi calculator, roi formula, how to calculate roi, marketing roi calculator',
        'hero_description' => 'Calculate total and annualized return on investment.',
        'related' => ['cagr', 'compound-interest', 'break-even'],
        'inputs' => [
            ['cost', 'Amount invested ($)', 10000],
            ['value', 'Final value ($)', 15000],
            ['years', 'Years held', 5],
        ],
        'outputs' => ['roi' => ['ROI', 'percent'], 'annual' => ['Annualized ROI', 'percent'], 'gain' => ['Gain', 'money']],
    ],

    'cap-rate' => [
        'name' => 'Cap Rate Calculator', 'group' => 'Business', 'icon' => 'fas fa-building', 'color' => '#7C2D12',
        'blurb' => 'Cap rate and NOI on a rental property.',
        'title' => 'Cap Rate Calculator - Rental Property Capitalization Rate | MultiCalculator',
        'description' => 'Free cap rate calculator. Work out a rental property\'s net operating income (NOI), capitalization rate and gross rent multiplier from price, rent and expenses.',
        'keywords' => 'cap rate calculator, capitalization rate calculator, cap rate formula, noi calculator, rental property calculator, real estate cap rate',
        'hero_description' => 'Work out net operating income and cap rate on a rental property.',
        'related' => ['roi', 'rent-affordability', 'break-even'],
        'inputs' => [
            ['price', 'Property price or value ($)', 400000],
            ['rent', 'Gross annual rent ($)', 36000],
            ['vacancy', 'Vacancy rate (%)', 5],
            ['expenses', 'Annual operating expenses ($, not the mortgage)', 12000],
        ],
        'outputs' => ['capRate' => ['Cap rate', 'percent'], 'noi' => ['Net operating income (NOI)', 'money'], 'grm' => ['Gross rent multiplier', 'decimal']],
    ],

    // ---------------- Math & everyday ----------------

    'percentage' => [
        'name' => 'Percentage Calculator', 'group' => 'Math & Everyday', 'icon' => 'fas fa-percent', 'color' => '#2563EB',
        'blurb' => 'X% of Y, X as a percent of Y, and percent change.',
        'title' => 'Percentage Calculator - Percent Of, Percent Change | MultiCalculator',
        'description' => 'Free percentage calculator. Find X% of Y, what percent X is of Y, and the percentage increase or decrease between two numbers, all at once.',
        'keywords' => 'percentage calculator, percent calculator, percentage increase calculator, percent change calculator, what percent of, percentage decrease calculator',
        'hero_description' => 'Find a percent of a number, one number as a percent of another, and percent change.',
        'related' => ['discount', 'average', 'sales-tax'],
        'inputs' => [['x', 'X', 20], ['y', 'Y', 150]],
        'outputs' => ['percentOf' => ['X% of Y', 'number'], 'isWhat' => ['X is what % of Y', 'percent'], 'change' => ['% change from X to Y', 'percent']],
    ],

    'age' => [
        'name' => 'Age Calculator', 'group' => 'Math & Everyday', 'icon' => 'fas fa-birthday-cake', 'color' => '#C026D3',
        'blurb' => 'Exact age in years, months and days.',
        'title' => 'Age Calculator - Exact Age in Years, Months & Days | MultiCalculator',
        'description' => 'Free age calculator. Find your exact age in years, months and days from your date of birth, plus total weeks and days lived and days to your next birthday.',
        'keywords' => 'age calculator, how old am i, date of birth calculator, exact age calculator, age in days calculator, birthday calculator',
        'hero_description' => 'Find your exact age in years, months and days, and days until your next birthday.',
        'related' => ['date-difference', 'retirement', 'percentage'],
        'inputs' => [
            ['birth', 'Date of birth', '1990-06-15', 'date'],
            ['asOf', 'Age as of', 'today', 'date'],
        ],
        'outputs' => ['age' => ['Age', 'text'], 'months' => ['Total months', 'number'], 'weeks' => ['Total weeks', 'number'], 'days' => ['Total days', 'number'], 'next' => ['Next birthday in', 'text']],
    ],

    'date-difference' => [
        'name' => 'Days Between Dates Calculator', 'group' => 'Math & Everyday', 'icon' => 'fas fa-calendar-alt', 'color' => '#0E7490',
        'blurb' => 'Days, weeks and business days between two dates.',
        'title' => 'Days Between Dates Calculator - Date Duration | MultiCalculator',
        'description' => 'Free days between dates calculator. Count the days, weeks, months and business days between any two dates, with the option to include the end date.',
        'keywords' => 'days between dates, date calculator, how many days between dates, business days calculator, date duration calculator, days until calculator',
        'hero_description' => 'Count the days, weeks and business days between two dates.',
        'related' => ['age', 'time-card', 'hours'],
        'inputs' => [
            ['start', 'Start date', 'today', 'date'],
            ['end', 'End date', '2026-12-31', 'date'],
            ['includeEnd', 'Include the end date', 'no', $yesNo],
        ],
        'outputs' => ['days' => ['Days', 'number'], 'weeks' => ['Weeks', 'text'], 'ymd' => ['Years, months, days', 'text'], 'business' => ['Business days (Mon-Fri)', 'number']],
    ],

    'final-grade' => [
        'name' => 'Final Grade Calculator', 'group' => 'Math & Everyday', 'icon' => 'fas fa-user-graduate', 'color' => '#9333EA',
        'blurb' => 'The score you need on your final exam.',
        'title' => 'Final Grade Calculator - What Do I Need on My Final? | MultiCalculator',
        'description' => 'Free final grade calculator. Find the score you need on your final exam to get the grade you want, based on your current grade and the final\'s weight.',
        'keywords' => 'final grade calculator, what do i need on my final, final exam calculator, grade calculator, final grade calculator weighted, college final grade calculator',
        'hero_description' => 'Find the score you need on your final exam to reach your target grade.',
        'related' => ['gpa', 'average', 'percentage'],
        'inputs' => [
            ['current', 'Current grade (%)', 85],
            ['target', 'Grade you want (%)', 88],
            ['weight', 'Final exam weight (%)', 30],
        ],
        'outputs' => ['needed' => ['You need on the final', 'percent']],
    ],

    'gpa' => [
        'name' => 'GPA Calculator', 'group' => 'Math & Everyday', 'icon' => 'fas fa-graduation-cap', 'color' => '#1D4ED8',
        'blurb' => 'Semester GPA from letter grades and credits.',
        'title' => 'GPA Calculator - Semester GPA on a 4.0 Scale | MultiCalculator',
        'description' => 'Free GPA calculator. Enter letter grades and credit hours to calculate your semester GPA on a 4.0 scale, with total credits and quality points.',
        'keywords' => 'gpa calculator, college gpa calculator, semester gpa calculator, how to calculate gpa, 4.0 gpa scale, cumulative gpa calculator',
        'hero_description' => 'Calculate your GPA on a 4.0 scale from letter grades and credit hours.',
        'related' => ['final-grade', 'average', 'percentage'],
        'inputs' => $gpa,
        'outputs' => ['gpa' => ['GPA', 'decimal'], 'credits' => ['Total credits', 'number'], 'points' => ['Quality points', 'decimal']],
    ],

    'electricity-cost' => [
        'name' => 'Electricity Cost Calculator', 'group' => 'Math & Everyday', 'icon' => 'fas fa-bolt', 'color' => '#CA8A04',
        'blurb' => 'What an appliance costs to run per day, month and year.',
        'title' => 'Electricity Cost Calculator - Appliance Cost per kWh | MultiCalculator',
        'description' => 'Free electricity cost calculator. See what any appliance costs to run per day, month and year from its wattage, hours of use and your rate per kWh.',
        'keywords' => 'electricity cost calculator, electricity cost calculator kwh, appliance energy cost calculator, watts to cost calculator, power consumption calculator, space heater cost',
        'hero_description' => 'See what an appliance costs to run per day, month and year.',
        'related' => ['gas-cost', 'inflation', 'savings-goal'],
        'inputs' => [
            ['watts', 'Power (watts)', 1500],
            ['hours', 'Hours used per day', 5],
            ['rate', 'Electricity rate ($ per kWh)', 0.18],
            ['quantity', 'Number of devices', 1],
        ],
        'outputs' => ['month' => ['Cost per month', 'money2'], 'day' => ['Cost per day', 'money2'], 'year' => ['Cost per year', 'money2'], 'kwh' => ['Energy per month (kWh)', 'number']],
    ],

    'gas-cost' => [
        'name' => 'Gas Cost Calculator', 'group' => 'Math & Everyday', 'icon' => 'fas fa-gas-pump', 'color' => '#B91C1C',
        'blurb' => 'Fuel cost for a road trip, split per person.',
        'title' => 'Gas Cost Calculator - Trip Fuel Cost & Split | MultiCalculator',
        'description' => 'Free gas cost calculator. Estimate the fuel cost of a road trip or commute from distance, MPG and gas price, and split it between passengers.',
        'keywords' => 'gas cost calculator, trip cost calculator, fuel cost calculator, gas calculator for trip, road trip gas calculator, gas split calculator',
        'hero_description' => 'Estimate the fuel cost of a trip and split it between passengers.',
        'related' => ['electricity-cost', 'car-payment', 'tip'],
        'inputs' => [
            ['distance', 'Distance one way (miles)', 300],
            ['mpg', 'Fuel economy (MPG)', 28],
            ['price', 'Gas price ($/gallon)', 3.20],
            ['roundTrip', 'Round trip', 'yes', $yesNo],
            ['people', 'People splitting the cost', 2],
        ],
        'outputs' => ['cost' => ['Total fuel cost', 'money2'], 'gallons' => ['Gallons needed', 'number'], 'perPerson' => ['Cost per person', 'money2'], 'perMile' => ['Cost per mile', 'money2']],
    ],

    'ratio' => [
        'name' => 'Ratio Calculator', 'group' => 'Math & Everyday', 'icon' => 'fas fa-divide', 'color' => '#0369A1',
        'blurb' => 'Simplify a ratio and scale it up or down.',
        'title' => 'Ratio Calculator - Simplify & Scale Ratios | MultiCalculator',
        'description' => 'Free ratio calculator. Simplify any ratio to lowest terms, convert it to a decimal and a percentage split, and scale it to a new size.',
        'keywords' => 'ratio calculator, simplify ratio calculator, ratio simplifier, ratio to percentage, scale ratio calculator, aspect ratio calculator',
        'hero_description' => 'Simplify a ratio, see it as a decimal and percentage split, and scale it.',
        'related' => ['proportion', 'percentage', 'slope'],
        'inputs' => [
            ['a', 'First number (A)', 4],
            ['b', 'Second number (B)', 6],
            ['c', 'Scale it: new first number', 10],
        ],
        'outputs' => [
            'simplified' => ['Simplified ratio', 'text'], 'decimal' => ['As a decimal (A ÷ B)', 'number'],
            'split' => ['Percentage split', 'text'], 'scaled' => ['Matching second number', 'number'],
        ],
    ],

    'proportion' => [
        'name' => 'Proportion Calculator', 'group' => 'Math & Everyday', 'icon' => 'fas fa-equals', 'color' => '#6D28D9',
        'blurb' => 'Solve A : B = C : X for the missing number.',
        'title' => 'Proportion Calculator - Solve for X | MultiCalculator',
        'description' => 'Free proportion calculator. Solve A/B = C/X for the missing value with cross multiplication. Handy for recipes, maps, unit rates and homework.',
        'keywords' => 'proportion calculator, solve proportion calculator, cross multiplication calculator, proportion solver, solve for x proportion, ratio and proportion calculator',
        'hero_description' => 'Solve A : B = C : X for the missing number using cross multiplication.',
        'related' => ['ratio', 'percentage', 'slope'],
        'inputs' => [['a', 'A', 12], ['b', 'B', 2], ['c', 'C', 30]],
        'outputs' => ['x' => ['X', 'number'], 'equation' => ['Proportion', 'text']],
    ],

    'slope' => [
        'name' => 'Slope Calculator', 'group' => 'Math & Everyday', 'icon' => 'fas fa-ruler-combined', 'color' => '#BE123C',
        'blurb' => 'Slope, line equation and distance from two points.',
        'title' => 'Slope Calculator - Slope, Equation & Distance from 2 Points | MultiCalculator',
        'description' => 'Free slope calculator. Enter two points to get the slope, y-intercept, the line equation in slope-intercept form, the distance between the points and the angle.',
        'keywords' => 'slope calculator, slope intercept form calculator, find the slope calculator, slope of a line calculator, two point slope calculator, rise over run calculator',
        'hero_description' => 'Enter two points to find the slope, line equation, distance and angle.',
        'related' => ['ratio', 'proportion', 'percentage'],
        'inputs' => [
            ['x1', 'Point 1: x', 2, 'signed'], ['y1', 'Point 1: y', 3, 'signed'],
            ['x2', 'Point 2: x', 6, 'signed'], ['y2', 'Point 2: y', 11, 'signed'],
        ],
        'outputs' => [
            'm' => ['Slope (m)', 'number'], 'equation' => ['Equation', 'text'], 'b' => ['Y-intercept (b)', 'number'],
            'distance' => ['Distance between the points', 'number'], 'angle' => ['Angle (degrees)', 'number'],
        ],
    ],

    'tdee' => [
        'name' => 'TDEE Calculator', 'group' => 'Math & Everyday', 'icon' => 'fas fa-fire', 'color' => '#EA580C',
        'blurb' => 'Calories you burn per day, and targets to lose or gain.',
        'title' => 'TDEE Calculator - Calories Burned Per Day | MultiCalculator',
        'description' => 'Free TDEE calculator. Estimate your total daily energy expenditure and BMR with the Mifflin-St Jeor equation, plus calorie targets to lose or gain weight.',
        'keywords' => 'tdee calculator, total daily energy expenditure calculator, maintenance calorie calculator, bmr calculator, calories burned per day, calorie deficit calculator',
        'hero_description' => 'Estimate the calories you burn per day and your targets to lose or gain weight.',
        'related' => ['age', 'percentage', 'average'],
        'inputs' => [
            ['sex', 'Sex', 'male', ['male' => 'Male', 'female' => 'Female']],
            ['age', 'Age', 30],
            ['weight', 'Weight (lb)', 180],
            ['feet', 'Height (feet)', 5],
            ['inches', 'Height (inches)', 10],
            ['activity', 'Activity level', '1.55', [
                '1.2' => 'Sedentary (desk job, little exercise)', '1.375' => 'Light (exercise 1-3 days a week)',
                '1.55' => 'Moderate (exercise 3-5 days a week)', '1.725' => 'Very active (6-7 days a week)',
                '1.9' => 'Athlete (hard training or a physical job)',
            ]],
        ],
        'outputs' => [
            'tdee' => ['Maintenance calories per day (TDEE)', 'number'], 'bmr' => ['Basal metabolic rate (BMR)', 'number'],
            'lose' => ['To lose about 1 lb a week', 'number'], 'gain' => ['To gain about 0.5 lb a week', 'number'],
        ],
        'disclaimer' => 'Estimate only, not medical advice. Real needs vary with body composition and health.',
    ],

];
