@extends('layouts.calculator')

@section('guide')
<h2>How Inflation Affects Your Money</h2>

<p>Inflation is the rise in prices over time. When prices rise, each dollar buys less. This calculator shows two sides of the same thing: what today's prices will cost in the future, and what today's money will be worth in the future.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Future cost = Amount &times; (1 + inflation)<sup>years</sup></strong></p>
    <p class="mb-0"><strong>Future buying power = Amount &divide; (1 + inflation)<sup>years</sup></strong></p>
</div>

<h3>Example</h3>
<p>With 3% inflation for 10 years, something that costs $1,000 today will cost $1,343.92. Turned around, $1,000 kept in cash will only buy what $744.09 buys today, a 25.6% loss of buying power.</p>

<h3>Recent inflation</h3>
<p>The Federal Reserve targets 2% inflation over time. Inflation spiked above 9% in 2022, then cooled. In 2026 it picked up again, mainly because of energy prices, which is why the 2027 Social Security cost-of-living adjustment is 3.6%.</p>

<h3>Protecting your money from inflation</h3>
<ul>
    <li><strong>High-yield savings and CDs:</strong> keep short-term cash earning close to or above inflation.</li>
    <li><strong>I bonds and TIPS:</strong> U.S. Treasury bonds whose value adjusts with inflation.</li>
    <li><strong>Stocks:</strong> historically the best long-term protection, with short-term swings.</li>
    <li><strong>Raises:</strong> make sure your pay keeps pace.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What inflation rate should I use for long-term planning?</h4>
    <p>2.5&ndash;3% is a common assumption. It's close to the long-run U.S. average since the 1990s.</p>

    <h4>How is inflation measured?</h4>
    <p>Mostly with the Consumer Price Index (CPI), published monthly by the Bureau of Labor Statistics. It tracks prices for a basket of goods and services.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Check whether your raise beats inflation with the <a href="/cost-of-living-raise">cost of living raise calculator</a>.</li>
        <li>See how fast prices double with the <a href="/rule-of-72">rule of 72</a>.</li>
    </ul>
</div>
@endsection
