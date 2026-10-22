@extends('layouts.calculator')

@section('guide')
<h2>2027 Social Security COLA: 3.6%</h2>

<p>The Social Security Administration announced on October 14, 2026 that benefits will rise 3.6% for 2027. It's the largest increase since 2023. The new amounts start with benefits paid in January 2027, and SSI payments go up starting December 31, 2026.</p>

<h3>How much more will I get?</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>New benefit = Current benefit &times; 1.036</strong></p>
    <p class="mb-0">SSA rounds the result down to the nearest dollar.</p>
</div>
<p>The average retired worker gets about $75 more a month. A $2,095 benefit becomes about $2,170, or roughly $905 more over the year.</p>

<h3>Recent COLAs</h3>
<ul>
    <li><strong>2027:</strong> 3.6%</li>
    <li><strong>2026:</strong> 2.8%</li>
    <li><strong>2025:</strong> 2.5%</li>
    <li><strong>2024:</strong> 3.2%</li>
    <li><strong>2023:</strong> 8.7%</li>
</ul>

<h3>How the COLA is set</h3>
<p>The COLA is tied to inflation as measured by the CPI-W (the Consumer Price Index for Urban Wage Earners and Clerical Workers). SSA compares the average for July, August and September with the same three months a year earlier. Higher energy prices drove much of the 2027 increase.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Will Medicare premiums take part of my raise?</h4>
    <p>Possibly. Medicare Part B premiums are deducted from most Social Security checks and usually rise each year. The 2027 premium is set separately by Medicare, so your net increase may be smaller than the COLA alone.</p>

    <h4>When will I see the new amount?</h4>
    <p>In your January 2027 payment. SSA mails COLA notices in early December, and you can see yours online in your my Social Security account.</p>

    <h4>Do federal retirees get the same increase?</h4>
    <p>CSRS retirees get the full COLA. Under FERS rules, when the COLA is above 3%, the increase is 1 percentage point less, so FERS retirees get 2.6% for 2027.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>65 or older? The new <a href="/senior-deduction">$6,000 senior deduction</a> can offset tax on your benefits.</li>
        <li>Compare your raise with prices using the <a href="/inflation">inflation calculator</a>.</li>
    </ul>
</div>
@endsection
