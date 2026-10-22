@extends('layouts.calculator')

@section('guide')
<h2>How to Calculate the Cost of Running an Appliance</h2>

<p>Electricity is billed by the kilowatt-hour (kWh): using 1,000 watts for one hour. Multiply an appliance's power by how long it runs, convert to kWh, and multiply by your rate.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>kWh per day = Watts &times; Hours per day &divide; 1,000</strong></p>
    <p class="mb-0"><strong>Cost = kWh &times; Rate per kWh</strong></p>
</div>

<h3>Example</h3>
<p>A 1,500-watt space heater running 5 hours a day uses 7.5 kWh. At $0.18 per kWh, that's $1.35 a day, $41.06 a month, or $492.75 a year.</p>

<h3>Typical power use</h3>
<div class="table-responsive mb-3">
    <table class="table table-sm table-bordered bg-white">
        <thead><tr><th>Appliance</th><th>Typical watts</th></tr></thead>
        <tbody>
            <tr><td>LED light bulb</td><td>8&ndash;12</td></tr>
            <tr><td>Laptop</td><td>30&ndash;70</td></tr>
            <tr><td>TV</td><td>60&ndash;150</td></tr>
            <tr><td>Desktop gaming PC</td><td>300&ndash;600</td></tr>
            <tr><td>Window air conditioner</td><td>500&ndash;1,500</td></tr>
            <tr><td>Space heater</td><td>1,500</td></tr>
            <tr><td>Level 2 EV charger</td><td>7,000&ndash;11,500</td></tr>
        </tbody>
    </table>
</div>
<p>Find exact wattage on the label or in the manual. If it lists amps, multiply amps by 120 volts for most U.S. outlets.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What's my electricity rate?</h4>
    <p>Divide the total on your bill by the kWh you used. U.S. residential rates average somewhere around 17&ndash;18 cents per kWh, but vary widely by state, from around 11 cents to over 40 cents in Hawaii.</p>

    <h4>What about refrigerators and AC that cycle on and off?</h4>
    <p>They don't run at full power all day. Use the yearly kWh on the EnergyGuide label, or estimate hours of actual running time.</p>

    <h4>How much does it cost to charge an EV?</h4>
    <p>Multiply the kWh you add by your rate. Adding 60 kWh at $0.18 costs about $10.80.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Comparing an EV with gas? Use the <a href="/gas-cost">gas cost calculator</a> for the same trip.</li>
        <li>Budgeting utilities with rent? See the <a href="/rent-affordability">rent affordability calculator</a>.</li>
    </ul>
</div>
@endsection
