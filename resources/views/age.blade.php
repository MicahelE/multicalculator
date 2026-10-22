@extends('layouts.calculator')

@section('guide')
<h2>How to Calculate Your Exact Age</h2>

<p>Enter a date of birth and the calculator gives your exact age in years, months and days as of today (or any date you choose), along with the total weeks and days you've been alive and how long until your next birthday.</p>

<h3>How it works</h3>
<ol>
    <li>Count the full years between the two dates.</li>
    <li>Count the full months since your last birthday.</li>
    <li>Count the remaining days, borrowing the length of the previous month when needed.</li>
</ol>

<h3>Example</h3>
<p>Someone born on June 15, 1990 is 36 years, 4 months and 7 days old on October 22, 2026. That's 436 months, 1,896 weeks, or 13,278 days. Their next birthday is 236 days away.</p>

<h3>Common uses</h3>
<ul>
    <li>Checking age requirements for school, sports, licenses or benefits.</li>
    <li>Retirement planning: full Social Security retirement age is 67 for anyone born in 1960 or later.</li>
    <li>Tax rules tied to age, like the <a href="/senior-deduction">senior deduction</a> at 65 or 401(k) catch-up contributions at 50.</li>
    <li>Finding your age on a past or future date by changing the "as of" date.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>How are leap-day birthdays handled?</h4>
    <p>If you were born on February 29, the calculator treats March 1 as your birthday in non-leap years.</p>

    <h4>Why do other sites give a different number of days?</h4>
    <p>Some count both the birth date and today, adding one day. This calculator counts the days between the two dates.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Count down to any date with the <a href="/date-difference">days between dates calculator</a>.</li>
        <li>Plan how much you need by retirement age with the <a href="/retirement">retirement calculator</a>.</li>
    </ul>
</div>
@endsection
