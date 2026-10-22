@extends('layouts.calculator')

@section('guide')
<h2>How to Convert Salary to Hourly</h2>

<p>To compare a salaried job with an hourly one, or to see what your time is really worth, divide your annual salary by the hours you work in a year. A standard full-time year is 40 hours a week for 52 weeks, or 2,080 hours.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Hourly wage = Annual salary &divide; (Hours per week &times; Weeks per year)</strong></p>
    <p class="mb-0">Quick rule: divide the salary by 2,000 for a rough hourly rate (and multiply an hourly rate by 2,000 for salary).</p>
</div>

<h3>Example</h3>
<p>A $60,000 salary at 40 hours a week for 52 weeks is $60,000 &divide; 2,080 = $28.85 an hour. That's $1,153.85 a week, $2,307.69 every two weeks, or $5,000 a month.</p>

<h3>Common salaries as hourly wages</h3>
<div class="table-responsive mb-3">
    <table class="table table-sm table-bordered bg-white">
        <thead><tr><th>Annual salary</th><th>Hourly (2,080 hrs)</th><th>Monthly</th></tr></thead>
        <tbody>
            <tr><td>$40,000</td><td>$19.23</td><td>$3,333</td></tr>
            <tr><td>$50,000</td><td>$24.04</td><td>$4,167</td></tr>
            <tr><td>$60,000</td><td>$28.85</td><td>$5,000</td></tr>
            <tr><td>$75,000</td><td>$36.06</td><td>$6,250</td></tr>
            <tr><td>$100,000</td><td>$48.08</td><td>$8,333</td></tr>
        </tbody>
    </table>
</div>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Should I count paid vacation?</h4>
    <p>Salaried employees are paid for vacation, so 52 weeks gives your true hourly rate. If you want the rate per hour actually worked, use 50 weeks (for two weeks off) or fewer.</p>

    <h4>I work more than 40 hours. How does that change things?</h4>
    <p>Enter your real hours. A $60,000 salary at 50 hours a week works out to just $23.08 an hour, which is worth knowing when you compare offers.</p>

    <h4>Is this before or after tax?</h4>
    <p>Before tax. Use the <a href="/take-home-pay">take home pay calculator</a> to see your net pay.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Going the other way? Use the <a href="/hourly-to-salary">hourly to salary calculator</a>.</li>
        <li>Comparing offers? Benefits like health insurance and a 401(k) match can be worth $5&ndash;$10 an hour.</li>
    </ul>
</div>
@endsection
