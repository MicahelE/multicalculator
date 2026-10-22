@extends('layouts.calculator')

@section('guide')
<h2>What Is a Debt-to-Income Ratio?</h2>

<p>Your debt-to-income ratio (DTI) is the share of your gross monthly income that goes to debt payments. Lenders use it to judge whether you can take on a new loan, especially a mortgage.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>DTI (back-end) = (Housing payment + Other debt payments) &divide; Gross monthly income</strong></p>
    <p class="mb-0"><strong>Housing ratio (front-end) = Housing payment &divide; Gross monthly income</strong></p>
</div>

<h3>What counts as debt</h3>
<ul>
    <li><strong>Counts:</strong> rent or mortgage (with property tax, insurance and HOA), car loans, student loans, personal loans, minimum credit card payments, child support or alimony.</li>
    <li><strong>Doesn't count:</strong> utilities, groceries, phone, insurance premiums (other than in the mortgage), or subscriptions.</li>
</ul>

<h3>Example</h3>
<p>You earn $6,000 a month before tax. Rent is $1,600 and a car payment plus credit cards add $500. Your DTI is $2,100 &divide; $6,000 = 35%, and your housing ratio is 26.7%.</p>

<h3>What's a good DTI?</h3>
<ul>
    <li><strong>36% or less:</strong> comfortable for most lenders. The classic "28/36 rule" keeps housing under 28% and total debt under 36%.</li>
    <li><strong>37&ndash;43%:</strong> many mortgages are still possible, often with stricter terms.</li>
    <li><strong>Above 43%:</strong> harder to qualify. Some government-backed loans allow more with strong credit or savings.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Is DTI based on gross or net income?</h4>
    <p>Gross income, before taxes and deductions.</p>

    <h4>How can I lower my DTI?</h4>
    <p>Pay down balances with high monthly payments, avoid new debt before applying, or increase your income. Paying off a card entirely removes its minimum payment from the calculation.</p>

    <h4>Does DTI affect my credit score?</h4>
    <p>No. Credit scores don't include income. But lenders look at both.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Renting? See what fits your budget with the <a href="/rent-affordability">rent affordability calculator</a>.</li>
        <li>Plan a faster payoff with the <a href="/credit-card-payoff">credit card payoff calculator</a>.</li>
    </ul>
</div>
@endsection
