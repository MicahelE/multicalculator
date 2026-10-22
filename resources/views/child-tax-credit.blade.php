@extends('layouts.calculator')

@section('guide')
<h2>2026 Child Tax Credit: $2,200 Per Child</h2>

<p>The child tax credit is worth up to $2,200 for each qualifying child under 17 for tax year 2026. Up to $1,700 per child is refundable, which means you can get it back even if you owe no income tax. The 2025 tax law raised the credit from $2,000 and made the $200,000 and $400,000 income limits permanent.</p>

<h3>How the credit is calculated</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Credit = $2,200 &times; children + $500 &times; other dependents</strong></p>
    <p class="mb-1"><strong>Minus $50 for every $1,000 (or part of $1,000) of MAGI over $200,000</strong> ($400,000 joint)</p>
    <p class="mb-0"><strong>Refundable part = lesser of $1,700 per child or 15% of earned income over $2,500</strong></p>
</div>

<h3>Who counts as a qualifying child</h3>
<ul>
    <li>Under 17 at the end of the year.</li>
    <li>Your son, daughter, stepchild, foster child, sibling, or a descendant of one of them (such as a grandchild).</li>
    <li>Lived with you for more than half the year and didn't provide more than half of their own support.</li>
    <li>Has a valid Social Security number. You (or your spouse, if filing jointly) also need one.</li>
</ul>
<p>Dependents who don't qualify, such as a 17-year-old or an elderly parent, can get the $500 credit for other dependents, which is not refundable.</p>

<h3>Examples</h3>
<p>A married couple with two kids and $120,000 of income gets the full $4,400. Of that, up to $3,400 is refundable.</p>
<p>A single parent of two with MAGI of $210,000 is $10,000 over the threshold, so the credit drops by $500 to $3,900.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What's the difference between the credit and the refundable part?</h4>
    <p>The non-refundable part can only reduce tax you owe to zero. The refundable part (the Additional Child Tax Credit) can be paid out as a refund beyond that.</p>

    <h4>Is there an income minimum?</h4>
    <p>To get the refundable part you need at least $2,500 of earned income. The refundable amount is 15% of earnings above $2,500, up to $1,700 per child.</p>

    <h4>My child turned 17 this year. What do I get?</h4>
    <p>The $500 credit for other dependents, if they still qualify as your dependent.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>See your overall bill with the <a href="/federal-income-tax">federal income tax calculator</a>, then subtract your credit.</li>
        <li>Adjust your W-4 for the credit to get the money in your paychecks instead of waiting for a refund.</li>
    </ul>
</div>
@endsection
