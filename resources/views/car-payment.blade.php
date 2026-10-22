@extends('layouts.calculator')

@section('guide')
<h2>How to Estimate Your Car Payment</h2>

<p>Your car payment depends on how much you finance, the interest rate, and the loan term. The amount financed is the price plus sales tax, minus your down payment and trade-in.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Amount financed = Price + Sales tax &minus; Down payment &minus; Trade-in</strong></p>
    <p class="mb-0"><strong>Monthly payment = Amount &times; r &divide; [1 &minus; (1 + r)<sup>&minus;n</sup>]</strong> &nbsp;(r = APR &divide; 12, n = months)</p>
</div>
<p>Most states charge sales tax on the price after subtracting your trade-in, which this calculator assumes.</p>

<h3>Example</h3>
<p>A $35,000 car with 6% sales tax and $5,000 down means financing $32,100. At 6.5% APR for 60 months, the payment is $628.07 and you pay $5,584 in interest. About $1,921 of that is in the first year.</p>

<h3>Loan term vs. total cost</h3>
<div class="table-responsive mb-3">
    <table class="table table-sm table-bordered bg-white">
        <thead><tr><th>Term</th><th>Monthly payment</th><th>Total interest</th></tr></thead>
        <tbody>
            <tr><td>36 months</td><td>$983.83</td><td>$3,318</td></tr>
            <tr><td>60 months</td><td>$628.07</td><td>$5,584</td></tr>
            <tr><td>72 months</td><td>$539.60</td><td>$6,751</td></tr>
            <tr><td>84 months</td><td>$476.67</td><td>$7,940</td></tr>
        </tbody>
    </table>
</div>
<p>Stretching to 84 months saves $151 a month versus 60 months but costs about $2,356 more in interest, and you're more likely to owe more than the car is worth.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Is car loan interest tax-deductible?</h4>
    <p>For 2025 through 2028, interest on a loan for a new, U.S.-assembled vehicle can be deducted, up to $10,000 a year, with income limits. See the <a href="/car-loan-interest-deduction">car loan interest deduction calculator</a>.</p>

    <h4>How much car can I afford?</h4>
    <p>A common guideline is to keep total car costs (payment, insurance, fuel) under 10&ndash;15% of your take-home pay.</p>

    <h4>Should I get financing from the dealer?</h4>
    <p>Get a preapproval from a bank or credit union first. Then you can compare it with the dealer's offer, including any manufacturer promotional rates.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Negotiate the price of the car, not the monthly payment.</li>
        <li>Plan your road-trip budget with the <a href="/gas-cost">gas cost calculator</a>.</li>
    </ul>
</div>
@endsection
