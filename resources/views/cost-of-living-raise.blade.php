@extends('layouts.calculator')

@section('guide')
<h2>Is Your Raise Keeping Up with Inflation?</h2>

<p>A raise only makes you better off if it beats inflation. If prices rise 3.6% and you get a 3% raise, you can actually afford a little less than last year. This calculator shows the raise you need to stand still and what your raise is worth in real terms.</p>

<h3>The formulas</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Raise needed = Salary &times; Inflation rate</strong></p>
    <p class="mb-0"><strong>Real raise = (1 + Raise) &divide; (1 + Inflation) &minus; 1</strong></p>
</div>

<h3>Example</h3>
<p>You earn $60,000 and inflation is 3.6%, the same as the 2027 Social Security cost-of-living adjustment. To keep up, you need $2,160 more, or $62,160. If your employer offers 3%, your real raise is about &minus;0.58%, and you're $360 short of keeping pace.</p>

<h3>What inflation rate should I use?</h3>
<ul>
    <li><strong>CPI:</strong> the Consumer Price Index from the Bureau of Labor Statistics is the standard measure.</li>
    <li><strong>Your own costs:</strong> if rent, childcare or insurance went up faster for you, use a higher number.</li>
    <li><strong>The Social Security COLA</strong> (3.6% for 2027) is a convenient benchmark, based on the CPI-W.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What's the difference between a COLA and a merit raise?</h4>
    <p>A cost-of-living adjustment (COLA) is meant to offset inflation. A merit raise rewards performance. Ideally, your total raise covers both.</p>

    <h4>How do I ask for a cost-of-living raise?</h4>
    <p>Bring numbers: the current inflation rate, the raise you need to keep pace, and market pay for your role. Showing that a raise below inflation is a pay cut in real terms is a strong argument.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>See your new paycheck with the <a href="/payraise">pay raise calculator</a>.</li>
        <li>Project prices further out with the <a href="/inflation">inflation calculator</a>.</li>
    </ul>
</div>
@endsection
