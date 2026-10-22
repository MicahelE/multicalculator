@extends('layouts.calculator')

@section('guide')
<h2>How to Calculate Profit Margin</h2>

<p>Profit margin tells you what share of each sale is profit. It's the number most businesses track, and the one investors and lenders ask about. Markup measures the same profit against cost instead of price, so the two are easy to mix up.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Gross margin = (Price &minus; Cost) &divide; Price</strong></p>
    <p class="mb-1"><strong>Markup = (Price &minus; Cost) &divide; Cost</strong></p>
    <p class="mb-0"><strong>Price for a target margin = Cost &divide; (1 &minus; Target margin)</strong></p>
</div>

<h3>Example</h3>
<p>A product costs $60 and sells for $100. Profit is $40, so the margin is 40% and the markup is 66.67%. To hit a 50% margin, you'd need to charge $60 &divide; 0.5 = $120.</p>

<h3>Margin vs. markup</h3>
<div class="table-responsive mb-3">
    <table class="table table-sm table-bordered bg-white">
        <thead><tr><th>Margin</th><th>Equivalent markup</th></tr></thead>
        <tbody>
            <tr><td>20%</td><td>25%</td></tr>
            <tr><td>25%</td><td>33.3%</td></tr>
            <tr><td>33.3%</td><td>50%</td></tr>
            <tr><td>40%</td><td>66.7%</td></tr>
            <tr><td>50%</td><td>100%</td></tr>
        </tbody>
    </table>
</div>
<p>A common pricing mistake is adding a 40% markup when you meant a 40% margin. Cost $60 plus 40% markup is $84, which is only a 28.6% margin.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What's a good profit margin?</h4>
    <p>It depends on the industry. Grocery stores run on low single-digit net margins, while software companies can have gross margins above 70%. Compare yourself with businesses like yours.</p>

    <h4>Gross margin or net margin?</h4>
    <p>Gross margin only subtracts the cost of the product. Net margin subtracts everything, including rent, payroll and taxes. This calculator shows gross margin.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Price from cost using the <a href="/markup">markup calculator</a>.</li>
        <li>Find how many sales cover your overhead with the <a href="/break-even">break-even calculator</a>.</li>
        <li>Importing goods? Add duties first with the <a href="/tariff">tariff calculator</a>.</li>
    </ul>
</div>
@endsection
