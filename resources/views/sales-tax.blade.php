@extends('layouts.calculator')

@section('guide')
<h2>How to Calculate Sales Tax</h2>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Add tax: Total = Price &times; (1 + Tax rate)</strong></p>
    <p class="mb-0"><strong>Remove tax: Price before tax = Total &divide; (1 + Tax rate)</strong></p>
</div>

<h3>Examples</h3>
<p><strong>Adding tax:</strong> a $100 item at 7.25% sales tax costs $107.25, with $7.25 in tax.</p>
<p><strong>Removing tax:</strong> a receipt total of $107.25 at 7.25% means the price before tax was $107.25 &divide; 1.0725 = $100. Note that you can't just subtract 7.25% of the total; that would give $99.47.</p>

<h3>Sales tax in the U.S.</h3>
<ul>
    <li>45 states and Washington, D.C. have a statewide sales tax.</li>
    <li>Alaska, Delaware, Montana, New Hampshire and Oregon have no statewide sales tax, though some Alaska cities add a local one.</li>
    <li>Your total rate is usually the state rate plus county and city rates. California's 7.25% statewide rate is the highest base rate, and local add-ons push some areas above 10%.</li>
    <li>Many states exempt or reduce tax on groceries and prescription drugs.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>How do I find my exact sales tax rate?</h4>
    <p>Look up your ZIP code on your state's Department of Revenue site. Rates can differ even within one city.</p>

    <h4>Is sales tax deductible?</h4>
    <p>If you itemize, you can deduct state and local sales tax instead of state income tax, within the SALT cap. See the <a href="/salt-deduction">SALT cap calculator</a>.</p>

    <h4>Do I pay sales tax on online orders?</h4>
    <p>Usually yes. Since 2018, states can require online sellers to collect sales tax based on where the item is shipped.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Apply a coupon first with the <a href="/discount">discount calculator</a>; tax is normally charged on the discounted price.</li>
        <li>Eating out? Add the tip with the <a href="/tip">tip calculator</a>.</li>
    </ul>
</div>
@endsection
