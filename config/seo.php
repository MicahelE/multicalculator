<?php

// Config-driven calculators; each entry carries both its page (SEO, inputs) and nav fields.
$tools = require __DIR__ . '/tools.php';
foreach ($tools as $key => &$tool) {
    $tool += ['canonical' => "/$key", 'url' => "/$key", 'hero_title' => $tool['name']];
}
unset($tool);

return [

    'site_name' => 'MultiCalculator',
    'base_url' => env('APP_URL', 'https://multicalculator.itechy.xyz'),

    'pages' => [

        'home' => [
            'title' => '60+ Free Calculators for Pay, Taxes, Loans & Business | MultiCalculator',
            'description' => '60+ free online calculators for pay, taxes, loans, business and everyday math. Take-home pay, 2026 tax deductions, state income tax, interest rates, CDs and more.',
            'keywords' => 'online calculator, financial calculator, business calculator, math calculator, free calculator',
            'canonical' => '/',
            'icon' => 'fas fa-calculator',
        ],

        'average' => [
            'title' => 'Average Calculator - Calculate Mean Online Free | MultiCalculator',
            'description' => 'Free online average calculator. Quickly compute the mean of any set of numbers. Perfect for grades, statistics, and business metrics.',
            'keywords' => 'mean calculator, average score calculator, average time calculator, standard deviation calculator, calculate average percentage, calculate average grade',
            'canonical' => '/average',
            'icon' => 'fas fa-chart-bar',
            'hero_title' => 'Average Calculator',
            'hero_description' => 'Quickly compute the arithmetic mean of any set of numbers. Perfect for grades, statistics, and business metrics.',
            'related' => ['markup', 'cagr', 'commission'],
        ],

        'payraise' => [
            'title' => 'Pay Raise Calculator - Calculate Your Salary Increase | MultiCalculator',
            'description' => 'Calculate your pay raise easily. Enter your current salary and raise percentage to see new hourly, weekly, monthly, and annual income instantly.',
            'keywords' => 'salary increase percentage calculator, salary pay raise calculator, hourly raise calculator, pay raise with taxes, 3 percent raise hourly',
            'canonical' => '/payraise',
            'icon' => 'fas fa-hand-holding-usd',
            'hero_title' => 'Pay Raise Calculator',
            'hero_description' => 'Enter your current salary and raise percentage to see new hourly, weekly, monthly, and annual income instantly.',
            'related' => ['monthly-income', 'overtime', 'commission'],
        ],

        'discount' => [
            'title' => 'Discount Calculator - Calculate Sale Price & Savings | MultiCalculator',
            'description' => 'Free discount calculator to find sale prices, savings amounts, and percentage off. Supports BOGO, bulk discounts, and multi-product comparisons.',
            'keywords' => 'percentage discount calculator, reverse discount calculator, how to calculate discount percentage, simple discount calculator, price after discount',
            'canonical' => '/discount',
            'icon' => 'fas fa-tags',
            'hero_title' => 'Discount Calculator',
            'hero_description' => 'Find sale prices, savings amounts, and percentage off. Supports BOGO, bulk discounts, and multi-product comparisons.',
            'related' => ['markup', 'commission', 'average'],
        ],

        'markup' => [
            'title' => 'Markup Calculator - Calculate Price Markup & Profit | MultiCalculator',
            'description' => 'Calculate product markup percentage, selling price, and profit instantly. Essential tool for business owners, retailers, and pricing professionals.',
            'keywords' => 'markup percentage calculator, reverse markup calculator, selling price calculator, gross profit markup formula, markup vs margin',
            'canonical' => '/markup',
            'icon' => 'fas fa-percentage',
            'hero_title' => 'Markup Calculator',
            'hero_description' => 'Calculate product markup percentage, selling price, and profit instantly. Essential for business owners and retailers.',
            'related' => ['discount', 'commission', 'cagr'],
        ],

        'monthly-income' => [
            'title' => 'Monthly Income Calculator - Hourly to Monthly Salary | MultiCalculator',
            'description' => 'Convert hourly, daily, weekly, or annual pay to monthly income instantly. Free calculator with overtime adjustments for accurate salary planning.',
            'keywords' => 'monthly gross income calculator, salary to hourly calculator, annual income calculator, hourly to monthly calculator, gross annual income',
            'canonical' => '/monthly-income',
            'icon' => 'fas fa-wallet',
            'hero_title' => 'Monthly Income Calculator',
            'hero_description' => 'Convert hourly, daily, weekly, or annual pay to monthly income instantly with overtime adjustments.',
            'related' => ['payraise', 'overtime', 'commission'],
        ],

        'overtime' => [
            'title' => 'Overtime Pay Calculator - Time and a Half | MultiCalculator',
            'description' => 'Calculate overtime pay with our free calculator. Supports time and a half, double time, and custom multipliers. See weekly, monthly, and yearly totals.',
            'keywords' => 'time and a half calculator, double time calculator, double time pay calculator, overtime calculator gov, time and a half for holiday, overtime pay after taxes',
            'canonical' => '/overtime',
            'icon' => 'fas fa-clock',
            'hero_title' => 'Overtime Pay Calculator',
            'hero_description' => 'Calculate overtime pay with time and a half, double time, and custom multipliers. See weekly, monthly, and yearly totals.',
            'related' => ['no-tax-on-overtime', 'monthly-income', 'payraise'],
        ],

        'commission' => [
            'title' => 'Sales Commission Calculator - Compensation & Bonus | MultiCalculator',
            'description' => 'Free sales commission calculator. Calculate commission earnings, tiered commission structures, and sales compensation instantly. Simple, accurate, no signup required.',
            'keywords' => 'sales compensation calculator, sales commission calculation, sales commission calculator, calculate sales commission, sales comp calculator, sales bonus calculator, tiered commission calculator, commission structure calculator, sales commission formula, real estate commission calculator, commission percentage calculator',
            'canonical' => '/commission',
            'icon' => 'fas fa-money-bill-wave',
            'hero_title' => 'Sales Commission Calculator',
            'hero_description' => 'Enter sale price and commission rate to instantly calculate your commission earnings.',
            'related' => ['markup', 'discount', 'payraise'],
        ],

        'cagr' => [
            'title' => 'CAGR Calculator - Compound Annual Growth Rate | MultiCalculator',
            'description' => 'Calculate Compound Annual Growth Rate (CAGR) for your investments. Measure performance and project future growth with our free online calculator.',
            'keywords' => 'reverse CAGR calculator, CAGR formula, CAGR calculator with dates, CAGR vs growth rate, revenue growth CAGR calculator',
            'canonical' => '/cagr',
            'icon' => 'fas fa-chart-line',
            'hero_title' => 'CAGR Calculator',
            'hero_description' => 'Calculate Compound Annual Growth Rate for your investments. Measure performance and project future growth.',
            'related' => ['average', 'markup', 'commission'],
        ],

        'no-tax-on-overtime' => [
            'title' => 'No Tax on Overtime Calculator 2026 - How It Works & When It Starts | MultiCalculator',
            'description' => 'Free no tax on overtime calculator. How no tax on overtime works, when it starts, and your deduction (up to $12,500, or $25,000 joint) and tax savings under the One Big Beautiful Bill.',
            'keywords' => 'no tax on overtime, no tax on overtime calculator, when does no tax on overtime start, how does no tax on overtime work, no taxes on overtime, no tax on overtime explained, overtime tax deduction calculator',
            'canonical' => '/no-tax-on-overtime',
            'icon' => 'fas fa-user-clock',
            'hero_title' => 'No Tax on Overtime Calculator',
            'hero_description' => 'Estimate your federal overtime deduction and tax savings for tax years 2025 through 2028.',
            'related' => ['overtime', 'no-tax-on-tips', 'payraise'],
        ],

        'no-tax-on-tips' => [
            'title' => 'No Tax on Tips Calculator 2026 - Tip Income Deduction | MultiCalculator',
            'description' => 'Free no tax on tips calculator. Estimate your qualified tips deduction (up to $25,000) and federal income tax savings under the One Big Beautiful Bill, 2025-2028.',
            'keywords' => 'no tax on tips calculator, tip deduction calculator, qualified tips deduction, no tax on tips 2026, schedule 1-a tips, how much will no tax on tips save me',
            'canonical' => '/no-tax-on-tips',
            'icon' => 'fas fa-coins',
            'hero_title' => 'No Tax on Tips Calculator',
            'hero_description' => 'Estimate your federal tips deduction and tax savings for tax years 2025 through 2028.',
            'related' => ['no-tax-on-overtime', 'monthly-income', 'commission'],
        ],

    ] + $tools,

    // Nav/footer/home section order.
    'groups' => ['Taxes', 'Income & Pay', 'Loans & Savings', 'Business', 'Math & Everyday'],

    // Drives routes, sitemap, navbar, footer and the home grid. 'new' => true shows a badge.
    'calculators' => [
        'no-tax-on-overtime' => ['name' => 'No Tax on Overtime Calculator', 'url' => '/no-tax-on-overtime', 'icon' => 'fas fa-user-clock', 'color' => '#7C3AED', 'group' => 'Taxes', 'blurb' => 'Estimate your 2025-2028 federal overtime deduction and tax savings.', 'new' => true],
        'no-tax-on-tips' => ['name' => 'No Tax on Tips Calculator', 'url' => '/no-tax-on-tips', 'icon' => 'fas fa-coins', 'color' => '#D97706', 'group' => 'Taxes', 'blurb' => 'See how much of your tip income you can deduct, up to $25,000.', 'new' => true],
        'payraise' => ['name' => 'Pay Raise Calculator', 'url' => '/payraise', 'icon' => 'fas fa-hand-holding-usd', 'color' => '#10B981', 'group' => 'Income & Pay', 'blurb' => 'New hourly, monthly and annual pay after a raise.'],
        'monthly-income' => ['name' => 'Monthly Income Calculator', 'url' => '/monthly-income', 'icon' => 'fas fa-wallet', 'color' => '#0EA5E9', 'group' => 'Income & Pay', 'blurb' => 'Convert hourly, weekly or annual pay to monthly.'],
        'overtime' => ['name' => 'Overtime Calculator', 'url' => '/overtime', 'icon' => 'fas fa-clock', 'color' => '#8B5CF6', 'group' => 'Income & Pay', 'blurb' => 'Time and a half, double time and custom rates.'],
        'commission' => ['name' => 'Commission Calculator', 'url' => '/commission', 'icon' => 'fas fa-money-bill-wave', 'color' => '#EC4899', 'group' => 'Income & Pay', 'blurb' => 'Commission earned from a sale and rate.'],
        'markup' => ['name' => 'Markup Calculator', 'url' => '/markup', 'icon' => 'fas fa-percentage', 'color' => '#EF4444', 'group' => 'Business', 'blurb' => 'Markup, margin, selling price and profit.'],
        'discount' => ['name' => 'Discount Calculator', 'url' => '/discount', 'icon' => 'fas fa-tags', 'color' => '#F59E0B', 'group' => 'Business', 'blurb' => 'Sale price, savings and percent off.'],
        'average' => ['name' => 'Average Calculator', 'url' => '/average', 'icon' => 'fas fa-chart-bar', 'color' => '#4F46E5', 'group' => 'Math & Everyday', 'blurb' => 'Mean of any list of numbers.'],
        'cagr' => ['name' => 'CAGR Calculator', 'url' => '/cagr', 'icon' => 'fas fa-chart-line', 'color' => '#14B8A6', 'group' => 'Business', 'blurb' => 'Compound annual growth rate of an investment.'],
    ] + $tools,

];
