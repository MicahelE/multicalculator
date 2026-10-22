@extends('layouts.calculator')

@section('guide')
<h2>How Much Rent Can I Afford?</h2>

<p>Two rules of thumb answer most of this question. The 30% rule is about your budget. The 40x rule is what many landlords use to approve applications.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>30% rule: Rent &le; Gross monthly income &times; 30%</strong></p>
    <p class="mb-1"><strong>40x rule: Annual income &ge; Monthly rent &times; 40</strong>, so Rent &le; Annual income &divide; 40</p>
    <p class="mb-0">For full-time hourly pay, 30% of income works out to your hourly wage &times; 52.</p>
</div>

<h3>Example</h3>
<p>At $20 an hour full-time, you earn $41,600 a year, or $3,467 a month. The 30% rule gives a rent budget of $1,040, and landlords using the 40x rule would approve up to $1,040. If you also pay $300 a month on debts, keeping total debt under 36% of income leaves $948 for rent.</p>

<h3>Rent by hourly wage (30% rule)</h3>
<div class="table-responsive mb-3">
    <table class="table table-sm table-bordered bg-white">
        <thead><tr><th>Hourly wage</th><th>Annual income</th><th>Max rent</th></tr></thead>
        <tbody>
            <tr><td>$15</td><td>$31,200</td><td>$780</td></tr>
            <tr><td>$18</td><td>$37,440</td><td>$936</td></tr>
            <tr><td>$20</td><td>$41,600</td><td>$1,040</td></tr>
            <tr><td>$22</td><td>$45,760</td><td>$1,144</td></tr>
            <tr><td>$25</td><td>$52,000</td><td>$1,300</td></tr>
            <tr><td>$30</td><td>$62,400</td><td>$1,560</td></tr>
        </tbody>
    </table>
</div>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What if rent in my city is more than 30%?</h4>
    <p>In expensive cities, many renters pay 35&ndash;40%. If you do, cut elsewhere, consider a roommate, or look for landlords who accept a guarantor or extra deposit.</p>

    <h4>Do landlords use gross or net income?</h4>
    <p>Gross income, before taxes. Some also check credit score and debt.</p>

    <h4>Should I include utilities?</h4>
    <p>If utilities aren't included, budget for them. Electricity, gas, water and internet can add $150&ndash;$300 a month.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Estimate an appliance's share of your power bill with the <a href="/electricity-cost">electricity cost calculator</a>.</li>
        <li>Saving for a deposit and moving costs? Use the <a href="/savings-goal">savings goal calculator</a>.</li>
    </ul>
</div>
@endsection
