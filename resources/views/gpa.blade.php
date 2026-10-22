@extends('layouts.calculator')

@section('guide')
<h2>How to Calculate Your GPA</h2>

<p>Your grade point average (GPA) is a credit-weighted average of your grades. Each letter grade is worth a number of points, and courses with more credit hours count more.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Quality points for a course = Grade points &times; Credits</strong></p>
    <p class="mb-0"><strong>GPA = Total quality points &divide; Total credits</strong></p>
</div>

<h3>Standard 4.0 scale</h3>
<div class="table-responsive mb-3">
    <table class="table table-sm table-bordered bg-white">
        <thead><tr><th>Grade</th><th>Points</th><th>Grade</th><th>Points</th></tr></thead>
        <tbody>
            <tr><td>A</td><td>4.0</td><td>C+</td><td>2.3</td></tr>
            <tr><td>A&minus;</td><td>3.7</td><td>C</td><td>2.0</td></tr>
            <tr><td>B+</td><td>3.3</td><td>C&minus;</td><td>1.7</td></tr>
            <tr><td>B</td><td>3.0</td><td>D+</td><td>1.3</td></tr>
            <tr><td>B&minus;</td><td>2.7</td><td>D</td><td>1.0</td></tr>
            <tr><td></td><td></td><td>F</td><td>0.0</td></tr>
        </tbody>
    </table>
</div>

<h3>Example</h3>
<p>You take four courses: an A in a 3-credit class (12 points), a B+ in a 4-credit class (13.2 points), an A&minus; in a 3-credit class (11.1 points), and a B in a 3-credit class (9 points). That's 45.3 quality points over 13 credits, for a GPA of 3.48.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>How do I calculate cumulative GPA?</h4>
    <p>Add this semester's quality points to your previous total, and this semester's credits to your previous credits, then divide. Your transcript lists both totals.</p>

    <h4>What about weighted GPA for honors or AP classes?</h4>
    <p>Many high schools add 0.5 or 1.0 point for honors and AP courses, so an A can count as 4.5 or 5.0. This calculator uses the unweighted 4.0 scale.</p>

    <h4>Do pass/fail classes count?</h4>
    <p>Usually not. Leave them out.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Working toward a grade? Find what you need with the <a href="/final-grade">final grade calculator</a>.</li>
        <li>High-credit courses move your GPA the most, so focus effort there.</li>
    </ul>
</div>
@endsection
