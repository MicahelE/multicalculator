@extends('layouts.calculator')

@section('guide')
<h2>2026 Federal Income Tax Brackets and How They Work</h2>

<p>The U.S. uses a progressive tax system: your income is split into layers, and each layer is taxed at its own rate. Moving into a higher bracket only raises the tax on the dollars in that bracket, never on all of your income.</p>

<h3>2026 tax brackets</h3>
<div class="table-responsive mb-3">
    <table class="table table-sm table-bordered bg-white">
        <thead><tr><th>Rate</th><th>Single</th><th>Married filing jointly</th></tr></thead>
        <tbody>
            <tr><td>10%</td><td>$0 &ndash; $12,400</td><td>$0 &ndash; $24,800</td></tr>
            <tr><td>12%</td><td>$12,401 &ndash; $50,400</td><td>$24,801 &ndash; $100,800</td></tr>
            <tr><td>22%</td><td>$50,401 &ndash; $105,700</td><td>$100,801 &ndash; $211,400</td></tr>
            <tr><td>24%</td><td>$105,701 &ndash; $201,775</td><td>$211,401 &ndash; $403,550</td></tr>
            <tr><td>32%</td><td>$201,776 &ndash; $256,225</td><td>$403,551 &ndash; $512,450</td></tr>
            <tr><td>35%</td><td>$256,226 &ndash; $640,600</td><td>$512,451 &ndash; $768,700</td></tr>
            <tr><td>37%</td><td>Over $640,600</td><td>Over $768,700</td></tr>
        </tbody>
    </table>
</div>
<p>The 2026 standard deduction is $16,100 for single filers and $32,200 for married couples filing jointly. These figures apply to returns filed in 2027.</p>

<h3>Effective vs. marginal tax rate</h3>
<ul>
    <li><strong>Marginal rate:</strong> the rate on your last dollar of taxable income, i.e. your tax bracket.</li>
    <li><strong>Effective rate:</strong> your total tax divided by your gross income. It's always lower than your marginal rate.</li>
</ul>

<h3>Example</h3>
<p>A single filer earns $75,000. After the $16,100 standard deduction, taxable income is $58,900. The tax is 10% of the first $12,400 ($1,240), plus 12% of the next $38,000 ($4,560), plus 22% of the last $8,500 ($1,870), for a total of $7,670. That's a 22% marginal rate but an effective rate of about 10.2%.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Will a raise put me in a higher bracket and cost me money?</h4>
    <p>No. Only the part of your income above the bracket line is taxed at the higher rate, so a raise always leaves you with more money after tax.</p>

    <h4>I file as head of household. Can I use this?</h4>
    <p>Head of household filers have wider brackets and a $24,150 standard deduction, so choosing "Single" here will overstate your tax a little.</p>

    <h4>What about credits?</h4>
    <p>This shows tax before credits. Subtract credits like the <a href="/child-tax-credit">child tax credit</a> to estimate what you'll owe.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>See what lands in your bank account with the <a href="/take-home-pay">take home pay calculator</a>.</li>
        <li>New 2025&ndash;2028 deductions can lower your taxable income: <a href="/no-tax-on-overtime">overtime</a>, <a href="/no-tax-on-tips">tips</a>, <a href="/senior-deduction">seniors</a> and <a href="/car-loan-interest-deduction">car loan interest</a>.</li>
    </ul>
</div>
@endsection
