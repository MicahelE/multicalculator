@extends('layouts.calculator')

@section('guide')
<h2>How to Count the Days Between Two Dates</h2>

<p>Pick a start date and an end date to see the number of days, weeks, months and business days between them. Use it for deadlines, countdowns, notice periods, project schedules or how long until a trip.</p>

<h3>Should I include the end date?</h3>
<p>By default, the count is the number of days from the start date up to, but not including, the end date, the same way you'd count nights at a hotel. Turn on "Include the end date" if you're counting both days, for example the length of an event that runs from the 1st through the 5th (5 days).</p>

<h3>Example</h3>
<p>From January 1 to December 31, 2026 is 364 days. Including December 31 makes it 365 days, a full year. That year has 261 business days (Monday to Friday).</p>

<h3>Business days</h3>
<p>Business days count Monday through Friday only. Public holidays aren't removed, so subtract them yourself. The U.S. has 11 federal holidays a year, including New Year's Day, Memorial Day, Independence Day, Labor Day, Thanksgiving and Christmas.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>How many days are in a year?</h4>
    <p>365, or 366 in a leap year. 2028 is the next leap year.</p>

    <h4>How do I count 30 or 90 days from a date?</h4>
    <p>Adjust the end date until the calculator shows the number of days you need. Contracts often specify whether "days" means calendar days or business days, so check which one applies.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Find someone's exact age with the <a href="/age">age calculator</a>.</li>
        <li>Tracking hours instead of days? Use the <a href="/time-card">time card calculator</a>.</li>
    </ul>
</div>
@endsection
