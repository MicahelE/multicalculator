@extends('layouts.calculator')

@section('guide')
<h2>Texas Income Tax: What You Actually Pay</h2>

<p>Texas has no state income tax, and its constitution requires voter approval before one could be created. So the only income taxes on a Texas paycheck are federal: income tax, Social Security and Medicare. This calculator works out those three and your take-home pay, and compares it with the same salary in California.</p>

<h3>What comes out of a Texas paycheck</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Federal income tax:</strong> 2026 brackets after the standard deduction ($16,100 single, $32,200 joint)</p>
    <p class="mb-1"><strong>Social Security:</strong> 6.2% up to $184,500 of wages</p>
    <p class="mb-1"><strong>Medicare:</strong> 1.45%, plus 0.9% over $200,000 ($250,000 joint)</p>
    <p class="mb-0"><strong>Texas income tax:</strong> $0</p>
</div>

<h3>Example</h3>
<p>A single filer in Austin earns $85,000 and contributes 5% to a 401(k). Federal income tax is $8,935 and FICA is $6,502.50, leaving <strong>$65,312.50</strong> a year, about $5,443 a month. That's an overall tax rate of about 18.2%. The same salary in California takes home $61,082.38, so Texas keeps about <strong>$4,230</strong> more a year in your pocket.</p>

<h3>Where Texas collects instead</h3>
<p>Texas funds itself mostly through sales tax and property tax. The state sales tax is 6.25%, and local add-ons can bring it to 8.25%. Property taxes are among the highest in the country, often around 1.6% to 2.2% of a home's value a year, so homeowners give back part of the income tax savings. Renters pay it indirectly through rent.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Does Texas tax my paycheck at all?</h4>
    <p>Not at the state level. Texas has no state income tax or state disability tax on employees, so all withholding is federal.</p>

    <h4>Does Texas tax retirement income?</h4>
    <p>No. Pensions, IRA and 401(k) withdrawals, and Social Security are free of state tax in Texas.</p>

    <h4>Do I need to file a Texas tax return?</h4>
    <p>Individuals don't. You only file a federal return. Businesses may owe the Texas franchise (margin) tax.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>See your per-paycheck amount with the <a href="/take-home-pay">take home pay calculator</a> (set the state rate to 0%).</li>
        <li>Compare with <a href="/nevada-income-tax">Nevada</a> or <a href="/california-income-tax">California</a>.</li>
        <li>Hourly worker? Convert your wage with the <a href="/hourly-to-salary">hourly to salary calculator</a> first.</li>
    </ul>
</div>
@endsection
