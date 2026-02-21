<?php

return [

    'site_name' => 'MultiCalculator',
    'base_url' => env('APP_URL', 'https://multicalculator.itechy.xyz'),

    'pages' => [

        'home' => [
            'title' => 'Free Online Calculators for Finance, Business & Math | MultiCalculator',
            'description' => 'Free online calculator suite for financial, business, and math calculations. Calculate averages, discounts, markups, pay raises, overtime, commissions, and CAGR instantly.',
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
            'keywords' => 'time and a half calculator, double time calculator, double time pay calculator, overtime calculator gov, time and a half for holiday',
            'canonical' => '/overtime',
            'icon' => 'fas fa-clock',
            'hero_title' => 'Overtime Pay Calculator',
            'hero_description' => 'Calculate overtime pay with time and a half, double time, and custom multipliers. See weekly, monthly, and yearly totals.',
            'related' => ['monthly-income', 'payraise', 'commission'],
        ],

        'commission' => [
            'title' => 'Sales Commission Calculator - Calculate Earnings | MultiCalculator',
            'description' => 'Free sales commission calculator. Enter sale price and commission rate to instantly calculate your commission earnings. Simple, accurate, no signup required.',
            'keywords' => 'tiered commission calculator, sales commission formula, real estate commission calculator, commission percentage calculator',
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

    ],

    'calculators' => [
        'average' => ['name' => 'Average Calculator', 'url' => '/average', 'icon' => 'fas fa-chart-bar', 'color' => '#4F46E5'],
        'payraise' => ['name' => 'Pay Raise Calculator', 'url' => '/payraise', 'icon' => 'fas fa-hand-holding-usd', 'color' => '#10B981'],
        'discount' => ['name' => 'Discount Calculator', 'url' => '/discount', 'icon' => 'fas fa-tags', 'color' => '#F59E0B'],
        'markup' => ['name' => 'Markup Calculator', 'url' => '/markup', 'icon' => 'fas fa-percentage', 'color' => '#EF4444'],
        'monthly-income' => ['name' => 'Monthly Income Calculator', 'url' => '/monthly-income', 'icon' => 'fas fa-wallet', 'color' => '#0EA5E9'],
        'overtime' => ['name' => 'Overtime Calculator', 'url' => '/overtime', 'icon' => 'fas fa-clock', 'color' => '#8B5CF6'],
        'commission' => ['name' => 'Commission Calculator', 'url' => '/commission', 'icon' => 'fas fa-money-bill-wave', 'color' => '#EC4899'],
        'cagr' => ['name' => 'CAGR Calculator', 'url' => '/cagr', 'icon' => 'fas fa-chart-line', 'color' => '#14B8A6'],
    ],

];
