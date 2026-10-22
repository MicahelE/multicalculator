@extends('layouts.calculator')

@section('guide')
<h2>How Much Should I Charge as a Freelancer?</h2>

<p>The most common freelancing mistake is taking your old salary, dividing by 2,080 hours, and charging that. Freelancers pay their own taxes, cover their own expenses, take unpaid time off, and can't bill every hour they work. Your rate has to cover all of it.</p>

<h3>The formula</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Revenue needed = Income goal &divide; (1 &minus; Tax rate) + Expenses</strong></p>
    <p class="mb-0"><strong>Hourly rate = Revenue needed &divide; (Billable hours per week &times; Working weeks)</strong></p>
</div>

<h3>Example</h3>
<p>You want to take home $80,000 a year, spend $10,000 on software, equipment and insurance, and expect about 30% of profit to go to taxes. You need $124,286 in revenue. Billing 25 hours a week for 46 weeks (1,150 hours), you should charge about $108 an hour, or $865 a day.</p>

<h3>Choosing realistic inputs</h3>
<ul>
    <li><strong>Billable hours:</strong> 20&ndash;30 a week is typical. Sales, admin and invoicing eat the rest.</li>
    <li><strong>Working weeks:</strong> leave room for vacation, holidays, sick days and gaps between clients. 44&ndash;48 is common.</li>
    <li><strong>Tax rate:</strong> include income tax and the 15.3% self-employment tax. 25&ndash;35% total is a reasonable starting point.</li>
    <li><strong>Expenses:</strong> health insurance, retirement contributions, software, hardware, coworking, accounting.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Should I charge hourly or by project?</h4>
    <p>Hourly is simplest when scope is unclear. Project pricing rewards you for working efficiently. Either way, know your hourly floor so you can check whether a project price is worth it.</p>

    <h4>How do I raise my rates?</h4>
    <p>Raise rates for new clients first, then give existing clients notice. Many freelancers raise rates once a year to keep up with inflation and experience.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Estimate your tax bill with the <a href="/self-employment-tax">self-employment tax calculator</a>.</li>
        <li>Compare with a salaried offer using the <a href="/salary-to-hourly">salary to hourly calculator</a>.</li>
    </ul>
</div>
@endsection
