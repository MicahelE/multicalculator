@extends('layouts.calculator')

@section('guide')
<h2>How to Simplify and Scale a Ratio</h2>

<p>A ratio compares two amounts, like 4 cups of flour to 6 cups of water, or a 16:9 screen. Simplifying a ratio means dividing both sides by their greatest common factor, so it's as small as it can be without changing the relationship. Scaling a ratio keeps the relationship but changes the size.</p>

<h3>The formulas</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Simplified = A &divide; GCF : B &divide; GCF</strong></p>
    <p class="mb-1"><strong>Percentage split = A &divide; (A + B) and B &divide; (A + B)</strong></p>
    <p class="mb-0"><strong>Scaled second number = New first number &times; B &divide; A</strong></p>
</div>

<h3>Example</h3>
<p>The ratio 4 : 6 has a greatest common factor of 2, so it simplifies to <strong>2 : 3</strong>. As a decimal it's 0.67, and as a split it's 40% / 60%. To scale it so the first number is 10, multiply 10 by 6 &divide; 4: the matching second number is 15, giving 10 : 15.</p>
<p>Decimals work too: 1.5 : 2 becomes 15 : 20 when multiplied by 10, which simplifies to 3 : 4.</p>

<h3>Everyday uses</h3>
<ul>
    <li><strong>Recipes:</strong> scale ingredients up or down for more or fewer servings.</li>
    <li><strong>Screens and photos:</strong> keep an aspect ratio like 16 : 9 when resizing. Enter 1920 and 1080, then a new width, to get the height.</li>
    <li><strong>Mixing:</strong> concrete, paint, fertilizer and cleaning solutions are all given as ratios.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Is a ratio the same as a fraction?</h4>
    <p>Close. The ratio 2 : 3 compares two parts, while the fraction 2/3 is one part out of a whole. In a 2 : 3 mix, the first part is 2/5 of the total, which is why the split here is 40% / 60%.</p>

    <h4>How do I solve for a missing number in a ratio?</h4>
    <p>That's a proportion. Use the <a href="/proportion">proportion calculator</a> to solve A : B = C : X.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Need a percent of a number instead? Use the <a href="/percentage">percentage calculator</a>.</li>
        <li>Working with points on a graph? The <a href="/slope">slope calculator</a> gives rise over run.</li>
    </ul>
</div>
@endsection
