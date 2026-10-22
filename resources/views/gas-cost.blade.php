@extends('layouts.calculator')

@section('guide')
<h2>How to Calculate Gas Cost for a Trip</h2>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Gallons = Miles &divide; MPG</strong></p>
    <p class="mb-1"><strong>Fuel cost = Gallons &times; Price per gallon</strong></p>
    <p class="mb-0"><strong>Cost per person = Fuel cost &divide; People</strong></p>
</div>

<h3>Example</h3>
<p>A 300-mile drive each way is a 600-mile round trip. In a car that gets 28 MPG, that's 21.43 gallons. At $3.20 a gallon, the trip costs $68.57 in gas, or $34.29 each for two people. That's about 11 cents a mile.</p>

<h3>Getting accurate inputs</h3>
<ul>
    <li><strong>Distance:</strong> use your map app's route distance, not a straight line.</li>
    <li><strong>MPG:</strong> highway MPG for road trips, city MPG for errands. Check fueleconomy.gov or your car's trip computer. Real-world mileage is often a bit below the sticker.</li>
    <li><strong>Gas price:</strong> prices vary by state and station, so use a price near your route.</li>
</ul>

<h3>Ways to save on gas</h3>
<ul>
    <li>Keep tires properly inflated.</li>
    <li>Drive at steady speeds; fuel economy usually drops noticeably above about 50 mph.</li>
    <li>Remove roof racks and extra weight when you're not using them.</li>
    <li>Use a gas price app or warehouse club station.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>How should friends split gas money?</h4>
    <p>Splitting fuel cost evenly is most common. Some groups also add a few cents a mile for wear and tear on the driver's car.</p>

    <h4>What's the IRS mileage rate?</h4>
    <p>The IRS sets a standard mileage rate each year for business driving. It covers fuel plus wear, insurance and depreciation, so it's much higher than fuel cost alone.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Thinking about an EV? Estimate charging cost with the <a href="/electricity-cost">electricity cost calculator</a>.</li>
        <li>Shopping for a car? See the payment with the <a href="/car-payment">car payment calculator</a>.</li>
    </ul>
</div>
@endsection
