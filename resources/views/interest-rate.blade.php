@extends('layouts.calculator')

@section('guide')
<h2>How to Find the Interest Rate on a Loan</h2>

<p>Lenders and car dealers often quote a monthly payment instead of a rate. If you know how much you're borrowing, the payment and the number of payments, you can work backward to the real annual percentage rate (APR). That makes very different offers easy to compare.</p>

<h3>The formula</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Payment = P &times; r &divide; [1 &minus; (1 + r)<sup>&minus;n</sup>]</strong></p>
    <p class="mb-0">P = loan amount, r = APR &divide; 12, n = number of payments</p>
</div>
<p>There's no way to rearrange this formula to solve for the rate directly, so the calculator searches for it: it tries rates until the payment matches yours to the cent. Spreadsheets do the same with the <code>RATE()</code> function.</p>

<h3>Example</h3>
<p>You borrow $25,000 and pay $500 a month for 60 months. You pay back $30,000 in total, so the loan costs $5,000 in interest. The rate that produces a $500 payment is <strong>7.42% APR</strong>.</p>

<h3>Why the rate matters more than the payment</h3>
<ul>
    <li>A lower payment can hide a higher rate if the term is stretched from 60 to 84 months.</li>
    <li>The "total interest" figure is the real cost of borrowing. Compare it across offers.</li>
    <li>Fees rolled into the loan raise the effective rate. Enter only the cash you actually receive as the loan amount to see the true rate.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Is this APR or the interest rate?</h4>
    <p>It's the annual rate implied by the payments, compounded monthly. If the loan amount you enter is the money you actually received after fees, the result is effectively the APR.</p>

    <h4>Can I use it for a mortgage?</h4>
    <p>Yes, for the principal and interest part. Leave out escrow for property tax and insurance, since that isn't interest.</p>

    <h4>What if it says no rate fits?</h4>
    <p>The payments add up to less than you borrowed, so there's no positive interest rate. Double-check the amount, payment and number of payments.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Know the rate and want the payment? Use the <a href="/loan-payment">loan payment calculator</a>.</li>
        <li>Buying a car? The <a href="/car-payment">car payment calculator</a> adds sales tax and trade-in.</li>
        <li>Comparing a loan with paying down a card? See the <a href="/credit-card-payoff">credit card payoff calculator</a>.</li>
    </ul>
</div>
@endsection
