@extends('layouts.calculator')

@section('guide')
<h2>How to Calculate Percentages</h2>

<p>Enter two numbers, X and Y, and the calculator answers the three most common percentage questions at once.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>X% of Y = X &times; Y &divide; 100</strong></p>
    <p class="mb-1"><strong>X is what % of Y = X &divide; Y &times; 100</strong></p>
    <p class="mb-0"><strong>% change from X to Y = (Y &minus; X) &divide; X &times; 100</strong></p>
</div>

<h3>Examples with X = 20 and Y = 150</h3>
<ul>
    <li><strong>20% of 150</strong> is 30.</li>
    <li><strong>20 is 13.33% of 150.</strong></li>
    <li><strong>Going from 20 to 150</strong> is a 650% increase.</li>
</ul>

<h3>Percent increase and decrease</h3>
<p>A price that rises from $80 to $100 went up 25% ($20 &divide; $80). A price that falls from $100 to $80 went down 20% ($20 &divide; $100). The change is the same $20, but the percentage differs because it's measured against the starting value.</p>
<p>That's also why a 50% loss followed by a 50% gain doesn't get you back to even: $100 falls to $50, then rises to $75.</p>

<h3>Mental math shortcuts</h3>
<ul>
    <li><strong>10%:</strong> move the decimal one place left.</li>
    <li><strong>5%:</strong> half of 10%.</li>
    <li><strong>25%:</strong> divide by 4.</li>
    <li><strong>Swap trick:</strong> X% of Y equals Y% of X. 8% of 50 is the same as 50% of 8, which is 4.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What's the difference between percent and percentage points?</h4>
    <p>If a rate goes from 4% to 5%, it rose by 1 percentage point, but by 25 percent.</p>

    <h4>How do I add a percentage to a number?</h4>
    <p>Multiply by 1 plus the percentage. Adding 15% to 200 is 200 &times; 1.15 = 230.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Shopping? The <a href="/discount">discount calculator</a> finds sale prices.</li>
        <li>Pricing a product? See the <a href="/margin">profit margin calculator</a>.</li>
    </ul>
</div>
@endsection
