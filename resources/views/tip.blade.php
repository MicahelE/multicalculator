@extends('layouts.calculator')

@section('guide')
<h2>How to Calculate a Tip and Split the Bill</h2>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Tip = Bill &times; Tip %</strong></p>
    <p class="mb-0"><strong>Each person pays = (Bill + Tip) &divide; Number of people</strong></p>
</div>

<h3>Example</h3>
<p>Three friends have an $85 dinner bill and want to leave 18%. The tip is $15.30, the total is $100.30, and each person pays $33.43.</p>

<h3>Quick mental math</h3>
<ul>
    <li><strong>10%:</strong> move the decimal one place left. $85 &rarr; $8.50.</li>
    <li><strong>20%:</strong> double the 10% amount. $8.50 &times; 2 = $17.</li>
    <li><strong>15%:</strong> 10% plus half of 10%. $8.50 + $4.25 = $12.75.</li>
    <li><strong>18%:</strong> 20% minus 2% (one-fifth of 10%). $17 &minus; $1.70 = $15.30.</li>
</ul>

<h3>How much to tip in the U.S.</h3>
<ul>
    <li><strong>Sit-down restaurant:</strong> 15&ndash;20%, more for great service.</li>
    <li><strong>Bartender:</strong> $1&ndash;$2 per drink or 15&ndash;20% of the tab.</li>
    <li><strong>Food delivery:</strong> 15&ndash;20%, with a few dollars minimum.</li>
    <li><strong>Hair stylist or barber:</strong> 15&ndash;20%.</li>
    <li><strong>Rideshare and taxi:</strong> 10&ndash;20%.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Should I tip on the total before or after tax?</h4>
    <p>Etiquette guides usually say before tax, but many people tip on the total. The difference on an $85 bill is about a dollar.</p>

    <h4>Is a service charge the same as a tip?</h4>
    <p>No. A mandatory service charge goes to the business, which may or may not pass it to staff. Ask if you're unsure.</p>

    <h4>Are tips taxed?</h4>
    <p>Yes, for the worker. But for 2025 through 2028, tipped workers may deduct up to $25,000 of tips. See the <a href="/no-tax-on-tips">no tax on tips calculator</a>.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Need the sales tax on your receipt? Use the <a href="/sales-tax">sales tax calculator</a>.</li>
        <li>For any other percentage, try the <a href="/percentage">percentage calculator</a>.</li>
    </ul>
</div>
@endsection
