@extends('layouts.calculator')

@section('guide')
<h2>How Compound Interest Works</h2>

<p>Compound interest is interest earned on your interest. Each period, the interest is added to your balance, and the next period's interest is calculated on the bigger balance. Over long stretches it does most of the work: in the example below, interest ends up larger than everything you put in.</p>

<h3>The formula</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Future value = P &times; (1 + r)<sup>n</sup> + C &times; [(1 + r)<sup>n</sup> &minus; 1] &divide; r</strong></p>
    <p class="mb-0">P = starting amount, C = monthly contribution, r = monthly rate, n = number of months</p>
</div>

<h3>Example</h3>
<p>You invest $10,000 and add $200 a month at 7% a year, compounded monthly. After 20 years you have $144,573. You contributed $58,000; the other $86,573 is interest. Keep going for 30 years and it grows to $325,159.</p>

<h3>Does compounding frequency matter?</h3>
<p>A little. $10,000 at 7% for 20 years grows to:</p>
<ul>
    <li><strong>Yearly compounding:</strong> $38,697</li>
    <li><strong>Monthly compounding:</strong> $40,387</li>
    <li><strong>Daily compounding:</strong> $40,547</li>
</ul>
<p>The rate and the time invested matter far more than how often interest compounds.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What rate should I use?</h4>
    <p>For a high-yield savings account, use its APY. For stock index funds, many planners use 6&ndash;7% after inflation or 8&ndash;10% before inflation, based on long-run history. Future returns aren't guaranteed.</p>

    <h4>What's the difference between APR and APY?</h4>
    <p>APR is the simple annual rate. APY includes the effect of compounding, so it's what you actually earn in a year.</p>

    <h4>How long does it take to double my money?</h4>
    <p>Divide 72 by the interest rate. At 8%, about 9 years. Try the <a href="/rule-of-72">rule of 72 calculator</a>.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Starting early beats contributing more later, because early money has more years to compound.</li>
        <li>Saving for retirement at work? The <a href="/401k">401(k) calculator</a> adds your employer match.</li>
        <li>Have a target in mind? The <a href="/savings-goal">savings goal calculator</a> works backward.</li>
    </ul>
</div>
@endsection
