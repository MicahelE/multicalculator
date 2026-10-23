@extends('layouts.calculator')

@section('guide')
<h2>How to Find the Slope Between Two Points</h2>

<p>Slope measures how steep a line is: how far it rises (or falls) for each step to the right. It's "rise over run." With two points you can also find where the line crosses the y-axis, write its equation in slope-intercept form, and measure the distance between the points.</p>

<h3>The formulas</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Slope m = (y<sub>2</sub> &minus; y<sub>1</sub>) &divide; (x<sub>2</sub> &minus; x<sub>1</sub>)</strong></p>
    <p class="mb-1"><strong>Y-intercept b = y<sub>1</sub> &minus; m &times; x<sub>1</sub></strong>, so the line is <strong>y = mx + b</strong></p>
    <p class="mb-1"><strong>Distance = &radic;[(x<sub>2</sub> &minus; x<sub>1</sub>)&sup2; + (y<sub>2</sub> &minus; y<sub>1</sub>)&sup2;]</strong></p>
    <p class="mb-0"><strong>Angle = arctan(m)</strong></p>
</div>

<h3>Example</h3>
<p>For the points (2, 3) and (6, 11), the rise is 11 &minus; 3 = 8 and the run is 6 &minus; 2 = 4, so the slope is 8 &divide; 4 = <strong>2</strong>. The y-intercept is 3 &minus; 2 &times; 2 = &minus;1, so the equation is <strong>y = 2x &minus; 1</strong>. The points are &radic;(16 + 64) = 8.94 apart, and the line rises at 63.43&deg;.</p>

<h3>Reading the slope</h3>
<ul>
    <li><strong>Positive:</strong> the line goes up from left to right.</li>
    <li><strong>Negative:</strong> it goes down from left to right.</li>
    <li><strong>Zero:</strong> a flat, horizontal line (y = b).</li>
    <li><strong>Undefined:</strong> a vertical line (x = a number), because the run is zero.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Does it matter which point is first?</h4>
    <p>No. Swapping the points flips the sign of both the rise and the run, so the slope stays the same.</p>

    <h4>How do I turn slope into a percent grade?</h4>
    <p>Multiply the slope by 100. A slope of 0.06 is a 6% grade, which is common for roads and ramps.</p>

    <h4>What is point-slope form?</h4>
    <p>It's y &minus; y<sub>1</sub> = m(x &minus; x<sub>1</sub>). For the example, y &minus; 3 = 2(x &minus; 2), which simplifies to the same y = 2x &minus; 1.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Slope is a ratio of rise to run. Simplify it with the <a href="/ratio">ratio calculator</a>.</li>
        <li>Need a missing value in an equal ratio? Use the <a href="/proportion">proportion calculator</a>.</li>
    </ul>
</div>
@endsection
