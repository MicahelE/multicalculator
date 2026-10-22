@extends('layouts.calculator')

@section('guide')
<h2>Capital Gains Tax Rates for 2026</h2>

<p>When you sell a stock, fund, crypto or property for more than you paid, the profit is a capital gain. How it's taxed depends on how long you held it.</p>

<ul>
    <li><strong>Short-term (held 1 year or less):</strong> taxed as ordinary income at your regular bracket, 10% to 37%.</li>
    <li><strong>Long-term (held more than 1 year):</strong> taxed at 0%, 15% or 20%, depending on your taxable income.</li>
</ul>

<h3>2026 long-term capital gains brackets</h3>
<div class="table-responsive mb-3">
    <table class="table table-sm table-bordered bg-white">
        <thead><tr><th>Rate</th><th>Single</th><th>Married filing jointly</th></tr></thead>
        <tbody>
            <tr><td>0%</td><td>Up to $49,450</td><td>Up to $98,900</td></tr>
            <tr><td>15%</td><td>$49,451 &ndash; $545,500</td><td>$98,901 &ndash; $613,700</td></tr>
            <tr><td>20%</td><td>Over $545,500</td><td>Over $613,700</td></tr>
        </tbody>
    </table>
</div>
<p>Gains stack on top of your other taxable income. Your salary fills the brackets first, and your gains go on top of it.</p>

<h3>Examples</h3>
<p>A single filer with $60,000 of other taxable income sells stock held for three years at a $20,000 gain. Their income is already past $49,450, so the whole gain is taxed at 15%: $3,000. If they'd held it less than a year, it would be taxed at their 22% bracket: $4,400.</p>
<p>With only $30,000 of other taxable income, the first $19,450 of gain fills the 0% band. Only $550 is taxed at 15%, for a tax of $82.50.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Can losses reduce my tax?</h4>
    <p>Yes. Capital losses offset gains, and up to $3,000 of net losses a year can offset ordinary income. Extra losses carry forward to future years.</p>

    <h4>What is the 3.8% net investment income tax?</h4>
    <p>An extra 3.8% on investment income when your MAGI is over $200,000 (single) or $250,000 (joint). This calculator leaves it out.</p>

    <h4>Is crypto taxed the same way?</h4>
    <p>Yes. The IRS treats crypto as property, so selling, swapping or spending it can create a capital gain or loss.</p>

    <h4>What about selling my home?</h4>
    <p>If you owned and lived in it for 2 of the last 5 years, you can exclude up to $250,000 of gain ($500,000 joint).</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Waiting until you pass the one-year mark can cut the tax on a gain substantially.</li>
        <li>Measure the return before tax with the <a href="/roi">ROI calculator</a> or <a href="/cagr">CAGR calculator</a>.</li>
    </ul>
</div>
@endsection
