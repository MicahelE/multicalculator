@extends('layouts.calculator')

@section('guide')
<h2>How to Convert an Hourly Wage to Salary</h2>

<p>Multiply your hourly wage by the hours you work in a year. At 40 hours a week for 52 weeks, that's 2,080 hours, so every $1 an hour is worth about $2,080 a year.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-0"><strong>Annual salary = Hourly wage &times; Hours per week &times; Weeks per year</strong></p>
</div>

<h3>Example</h3>
<p>$25 an hour at 40 hours a week for 52 weeks is $25 &times; 2,080 = $52,000 a year. That's $4,333.33 a month, $2,000 every two weeks, or $1,000 a week.</p>

<h3>Hourly wages as annual salaries</h3>
<div class="table-responsive mb-3">
    <table class="table table-sm table-bordered bg-white">
        <thead><tr><th>Hourly</th><th>Annual (2,080 hrs)</th><th>Monthly</th></tr></thead>
        <tbody>
            <tr><td>$15</td><td>$31,200</td><td>$2,600</td></tr>
            <tr><td>$18</td><td>$37,440</td><td>$3,120</td></tr>
            <tr><td>$20</td><td>$41,600</td><td>$3,467</td></tr>
            <tr><td>$22</td><td>$45,760</td><td>$3,813</td></tr>
            <tr><td>$25</td><td>$52,000</td><td>$4,333</td></tr>
            <tr><td>$30</td><td>$62,400</td><td>$5,200</td></tr>
            <tr><td>$40</td><td>$83,200</td><td>$6,933</td></tr>
        </tbody>
    </table>
</div>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>How much is $20 an hour a year?</h4>
    <p>$41,600 at 40 hours a week, every week of the year. With two unpaid weeks off (50 weeks) it's $40,000.</p>

    <h4>What about part-time hours?</h4>
    <p>Enter your actual weekly hours. $20 an hour at 25 hours a week is $26,000 a year.</p>

    <h4>Does this include overtime?</h4>
    <p>No. Overtime is usually paid at 1.5 times your rate. Add it with the <a href="/overtime">overtime calculator</a>.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>See your paycheck after taxes with the <a href="/take-home-pay">take home pay calculator</a>.</li>
        <li>Wondering what rent fits that wage? Try the <a href="/rent-affordability">rent affordability calculator</a>.</li>
    </ul>
</div>
@endsection
