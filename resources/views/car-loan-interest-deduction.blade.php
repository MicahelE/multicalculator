@extends('layouts.calculator')

@section('guide')
<h2>Car Loan Interest Deduction: How It Works</h2>

<p>Starting with tax year 2025, you can deduct up to $10,000 a year of interest on a loan for a new car, SUV, pickup, van or motorcycle that had its final assembly in the United States. It's part of the One Big Beautiful Bill Act and runs through tax year 2028. You don't need to itemize to claim it.</p>

<h3>How to calculate the deduction</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Deduction = lesser of interest paid or $10,000, minus $200 for every $1,000 (or part of $1,000) of MAGI over the threshold</strong></p>
    <p class="mb-0">Thresholds: $100,000 single, $200,000 married filing jointly</p>
</div>
<p>Because the reduction is steep, the full $10,000 is gone at $150,000 of MAGI for single filers and $250,000 for joint filers. Most loans generate far less than $10,000 of interest a year, so lower deductions phase out sooner.</p>

<h3>Which vehicles qualify</h3>
<ul>
    <li><strong>New only.</strong> You must be the first owner. Used cars don't qualify.</li>
    <li><strong>Final assembly in the U.S.</strong> Check the window sticker or run the VIN through NHTSA's decoder.</li>
    <li><strong>Bought after December 31, 2024</strong> with a loan secured by the vehicle.</li>
    <li><strong>Personal use.</strong> Business vehicles and leases don't qualify.</li>
    <li>Cars, minivans, vans, SUVs, pickups and motorcycles under 14,000 lbs gross vehicle weight.</li>
</ul>
<p>You'll need to include the vehicle's VIN on your return. Your lender reports the interest you paid during the year.</p>

<h3>Example</h3>
<p>You finance $40,000 at 7% for 60 months. In the first 12 months you pay about $2,581 in interest. With MAGI of $90,000 you're under the $100,000 threshold, so you deduct the full amount and save about $568 in the 22% bracket.</p>
<p>Now suppose you paid $2,500 of interest and your MAGI is $110,500. You're $10,500 over, which counts as 11 steps of $1,000, so the deduction drops by $2,200 to $300.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Does refinancing count?</h4>
    <p>Interest on a refinanced loan can qualify if the original loan was for a qualifying new vehicle and the new loan is secured by the same car, up to the original balance.</p>

    <h4>Do I have to itemize?</h4>
    <p>No. It's an "above the line" style deduction claimed on Schedule 1-A, so you can still take the standard deduction.</p>

    <h4>Does it lower my car payment?</h4>
    <p>No. Your payment stays the same. The benefit shows up as lower federal income tax when you file.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Shopping for a car? Price the loan first with the <a href="/car-payment">car payment calculator</a>, which also shows year-one interest.</li>
        <li>Interest is highest early in the loan, so the deduction is worth the most in the first couple of years.</li>
    </ul>
</div>
@endsection
