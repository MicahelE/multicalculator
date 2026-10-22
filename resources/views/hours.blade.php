@extends('layouts.calculator')

@section('guide')
<h2>How to Calculate Hours Between Two Times</h2>

<p>Subtract the start time from the end time, then subtract any unpaid break. Converting to minutes first makes the math easy and avoids mistakes around noon and midnight.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Minutes worked = (End &minus; Start) in minutes &minus; Break</strong></p>
    <p class="mb-0"><strong>Decimal hours = Minutes worked &divide; 60</strong></p>
</div>

<h3>Examples</h3>
<p><strong>Day shift:</strong> 8:45 AM to 5:15 PM is 8 hours 30 minutes. Subtract a 30-minute lunch and you worked 8 hours, or 8.00 decimal hours.</p>
<p><strong>Overnight shift:</strong> 10:00 PM to 6:30 AM crosses midnight. That's 2 hours before midnight and 6.5 hours after, 8.5 hours in total. Minus a 30-minute break, it's 8 hours.</p>

<h3>Minutes to decimal hours</h3>
<div class="table-responsive mb-3">
    <table class="table table-sm table-bordered bg-white">
        <thead><tr><th>Minutes</th><th>Decimal</th><th>Minutes</th><th>Decimal</th></tr></thead>
        <tbody>
            <tr><td>6</td><td>0.10</td><td>36</td><td>0.60</td></tr>
            <tr><td>12</td><td>0.20</td><td>42</td><td>0.70</td></tr>
            <tr><td>15</td><td>0.25</td><td>45</td><td>0.75</td></tr>
            <tr><td>20</td><td>0.33</td><td>48</td><td>0.80</td></tr>
            <tr><td>30</td><td>0.50</td><td>54</td><td>0.90</td></tr>
        </tbody>
    </table>
</div>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Why does my paycheck show 7.75 hours instead of 7:45?</h4>
    <p>Payroll uses decimal hours. 7 hours 45 minutes is 7.75 decimal hours because 45 &divide; 60 = 0.75.</p>

    <h4>Does the calculator handle shifts past midnight?</h4>
    <p>Yes. If the end time is earlier than the start time, it assumes the shift ended the next day.</p>

    <h4>How do I add up a whole week?</h4>
    <p>Use the <a href="/time-card">time card calculator</a>, which totals each day and splits out overtime.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Multiply decimal hours by your hourly rate to get your pay for the shift.</li>
        <li>Turn your hourly rate into a yearly figure with the <a href="/hourly-to-salary">hourly to salary calculator</a>.</li>
    </ul>
</div>
@endsection
