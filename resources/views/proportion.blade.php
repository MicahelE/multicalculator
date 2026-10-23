@extends('layouts.calculator')

@section('guide')
<h2>How to Solve a Proportion</h2>

<p>A proportion says two ratios are equal: A is to B as C is to X. If you know three of the numbers, cross multiplication finds the fourth. It's the quickest way to scale a recipe, read a map, convert units or work out a unit price.</p>

<h3>The formula</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>A &divide; B = C &divide; X</strong></p>
    <p class="mb-0"><strong>Cross multiply: A &times; X = B &times; C, so X = B &times; C &divide; A</strong></p>
</div>

<h3>Example</h3>
<p>A recipe makes 12 cookies with 2 cups of flour. How much flour do you need for 30 cookies? Set it up as 12 : 2 = 30 : X. Then X = 2 &times; 30 &divide; 12 = <strong>5 cups</strong>.</p>

<h3>More examples</h3>
<ul>
    <li><strong>Maps:</strong> if 1 inch is 25 miles, then 3.5 inches is 25 &times; 3.5 &divide; 1 = 87.5 miles.</li>
    <li><strong>Unit price:</strong> if 3 pounds cost $7.50, then 5 pounds cost $7.50 &times; 5 &divide; 3 = $12.50.</li>
    <li><strong>Speed:</strong> if you drive 120 miles in 2 hours, 300 miles takes 2 &times; 300 &divide; 120 = 5 hours.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Does the order of the numbers matter?</h4>
    <p>Yes. Keep the same kind of quantity in the same position on both sides. If A is cookies and B is cups, then C must be cookies and X will be cups.</p>

    <h4>Does this work for inverse proportions?</h4>
    <p>No. If one amount goes up when the other goes down, like workers and time to finish a job, multiply instead: A &times; B = C &times; X.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Simplify or scale a ratio with the <a href="/ratio">ratio calculator</a>.</li>
        <li>Percent problems are proportions out of 100. Try the <a href="/percentage">percentage calculator</a>.</li>
    </ul>
</div>
@endsection
