@extends('layouts.calculator')

@section('guide')
<h2>How Much Should I Save Each Month?</h2>

<p>Pick a goal, a deadline and a realistic interest rate, and this calculator tells you the monthly deposit that gets you there. It counts the growth on what you've already saved and the interest your deposits earn along the way.</p>

<h3>The formula</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Still needed = Goal &minus; Current savings &times; (1 + r)<sup>n</sup></strong></p>
    <p class="mb-0"><strong>Monthly deposit = Still needed &times; r &divide; [(1 + r)<sup>n</sup> &minus; 1]</strong> &nbsp;(r = monthly rate, n = months)</p>
</div>

<h3>Example</h3>
<p>You want $20,000 for a house down payment in 3 years. You have $2,000 saved in a high-yield account paying 4%, which grows to about $2,255. You need to save $464.77 a month (about $107 a week). Your deposits total $16,732, and interest covers the rest.</p>

<h3>Common savings goals</h3>
<ul>
    <li><strong>Emergency fund:</strong> 3&ndash;6 months of essential expenses.</li>
    <li><strong>Home down payment:</strong> 3&ndash;20% of the price, plus 2&ndash;5% for closing costs.</li>
    <li><strong>Car:</strong> a 20% down payment keeps your loan, and your interest, smaller.</li>
    <li><strong>Vacation or holidays:</strong> divide the cost by the months you have left.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Where should I keep short-term savings?</h4>
    <p>For goals within a few years, a high-yield savings account, money market account or CDs. They pay interest without stock market risk.</p>

    <h4>What if the monthly amount is too high?</h4>
    <p>Extend the deadline, lower the goal, or start with what you can and increase it when your income goes up. Even a smaller automatic transfer builds the habit.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Automate the transfer for the day after payday so it happens before you can spend it.</li>
        <li>Saving for something years away? Check how prices may rise with the <a href="/inflation">inflation calculator</a>.</li>
        <li>See long-term growth with the <a href="/compound-interest">compound interest calculator</a>.</li>
    </ul>
</div>
@endsection
