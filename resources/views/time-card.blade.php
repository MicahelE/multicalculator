@extends('layouts.calculator')

@section('guide')
<h2>How to Use the Time Card Calculator</h2>

<p>Enter the start and end time for each day you worked, plus your unpaid break in minutes. Leave days you didn't work blank. The calculator adds up your week, splits it into regular and overtime hours, and works out your gross pay.</p>

<h3>How the hours are calculated</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Daily hours = End time &minus; Start time &minus; Break</strong></p>
    <p class="mb-1"><strong>Overtime = Weekly hours over 40</strong></p>
    <p class="mb-0"><strong>Gross pay = Rate &times; Regular hours + Rate &times; 1.5 &times; Overtime hours</strong></p>
</div>
<p>If an end time is earlier than the start time, it's treated as an overnight shift. For example, 10:00 PM to 6:30 AM is 8.5 hours.</p>

<h3>Example</h3>
<p>You work 9:00 to 5:30 Monday through Friday with a 30-minute lunch, which is 8 hours a day and 40 hours for the week. You also work 9:00 to 1:00 on Saturday, adding 4 hours. At $20 an hour, that's 40 regular hours ($800) plus 4 overtime hours at $30 ($120), for $920 gross.</p>

<h3>Converting minutes to decimal hours</h3>
<p>Payroll systems use decimal hours. Divide minutes by 60: 15 minutes is 0.25 hours, 30 minutes is 0.5, and 45 minutes is 0.75. So 7 hours 45 minutes is 7.75 hours, not 7.45.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Are lunch breaks paid?</h4>
    <p>Under federal law, meal breaks of 30 minutes or more where you're fully relieved of duty can be unpaid. Short breaks of 5 to 20 minutes must be paid. Some states have stricter rules.</p>

    <h4>Does overtime apply daily or weekly?</h4>
    <p>Federal law requires overtime after 40 hours in a workweek. A few states, including California, also require daily overtime after 8 hours. This calculator uses the weekly rule.</p>

    <h4>Can I deduct my overtime on my taxes?</h4>
    <p>For 2025 through 2028, you may be able to deduct the premium part of your overtime. Check the <a href="/no-tax-on-overtime">no tax on overtime calculator</a>.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Need a single shift? The <a href="/hours">hours calculator</a> is faster.</li>
        <li>Keep your own record of hours. It's your best evidence if your paycheck looks short.</li>
    </ul>
</div>
@endsection
