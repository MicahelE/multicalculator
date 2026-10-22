@extends('layouts.calculator')

@section('guide')
<h2>How to Calculate Your Break-Even Point</h2>

<p>Your break-even point is the number of sales where revenue exactly covers costs. Below it you're losing money; above it every sale adds profit. It's one of the first numbers to work out for a new product, store or side business.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Contribution margin = Price per unit &minus; Variable cost per unit</strong></p>
    <p class="mb-1"><strong>Break-even units = Fixed costs &divide; Contribution margin</strong></p>
    <p class="mb-0"><strong>Break-even sales = Break-even units &times; Price</strong></p>
</div>

<h3>Fixed vs. variable costs</h3>
<ul>
    <li><strong>Fixed costs</strong> stay the same no matter how much you sell: rent, salaries, insurance, software subscriptions.</li>
    <li><strong>Variable costs</strong> rise with each unit sold: materials, packaging, shipping, payment processing fees.</li>
</ul>

<h3>Example</h3>
<p>Your monthly fixed costs are $10,000. You sell a product for $50 that costs $30 to make and ship. Each sale contributes $20 toward fixed costs, a 40% contribution margin. You need to sell 500 units ($25,000 in sales) a month to break even.</p>

<h3>Ways to lower your break-even point</h3>
<ul>
    <li>Raise prices, which increases the margin on every unit.</li>
    <li>Cut variable costs with cheaper suppliers or shipping.</li>
    <li>Reduce fixed costs like rent or unused subscriptions.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Why round up?</h4>
    <p>You can't sell part of a unit, so the calculator rounds up to the first whole unit that covers your costs.</p>

    <h4>Can I use this for a service business?</h4>
    <p>Yes. Treat an hour, a project or a client as the "unit," and use the direct costs of delivering it as the variable cost.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Set prices with the <a href="/margin">profit margin calculator</a>.</li>
        <li>Measure the payback on your startup costs with the <a href="/roi">ROI calculator</a>.</li>
    </ul>
</div>
@endsection
