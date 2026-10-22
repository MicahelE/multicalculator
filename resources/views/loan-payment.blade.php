@extends('layouts.calculator')

@section('guide')
<h2>How Loan Payments Are Calculated</h2>

<p>Most personal loans, auto loans and mortgages are amortized: you pay the same amount every month, and each payment covers that month's interest plus some principal. Early payments are mostly interest; later ones are mostly principal.</p>

<h3>The formula</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Monthly payment = P &times; r &divide; [1 &minus; (1 + r)<sup>&minus;n</sup>]</strong></p>
    <p class="mb-0">P = loan amount, r = APR &divide; 12, n = number of monthly payments</p>
</div>

<h3>Example</h3>
<p>A $15,000 personal loan at 9% APR for 5 years costs $311.38 a month. Over 60 payments you pay $18,682.52, so the loan costs $3,682.52 in interest. Shorten it to 3 years and the payment rises to $477, but total interest drops to $2,171.86.</p>

<h3>What drives the cost of a loan</h3>
<ul>
    <li><strong>Interest rate:</strong> your credit score is the biggest factor. A few points can save hundreds or thousands.</li>
    <li><strong>Term:</strong> longer terms lower the payment but raise total interest.</li>
    <li><strong>Fees:</strong> origination fees (often 1&ndash;8% on personal loans) are part of the real cost. Compare APRs, which include them.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Can I pay off a loan early?</h4>
    <p>Usually yes, and extra payments go to principal, which cuts total interest. Check the loan agreement for prepayment penalties.</p>

    <h4>Is this a mortgage calculator?</h4>
    <p>It works for the principal and interest part of a fixed-rate mortgage. Real mortgage payments also include property tax, homeowners insurance and sometimes PMI.</p>

    <h4>What's a good personal loan rate?</h4>
    <p>It depends on your credit. Borrowers with excellent credit get the lowest rates, while fair credit can mean rates two or three times higher. Prequalify with several lenders; it doesn't hurt your score.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Paying off credit cards with a loan? Compare with the <a href="/credit-card-payoff">credit card payoff calculator</a>.</li>
        <li>Lenders will look at your <a href="/debt-to-income">debt-to-income ratio</a>; check it before you apply.</li>
    </ul>
</div>
@endsection
