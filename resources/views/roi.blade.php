@extends('layouts.calculator')

@section('guide')
<h2>How to Calculate ROI</h2>

<p>Return on investment (ROI) measures how much you gained relative to what you put in. It works for stocks, real estate, equipment, marketing campaigns, or any decision where you spend money to make money.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>ROI = (Final value &minus; Amount invested) &divide; Amount invested</strong></p>
    <p class="mb-0"><strong>Annualized ROI = (Final value &divide; Amount invested)<sup>1 &divide; years</sup> &minus; 1</strong></p>
</div>

<h3>Example</h3>
<p>You invest $10,000 and five years later it's worth $15,000. Your gain is $5,000, a 50% ROI. Spread over five years with compounding, that's an annualized return of 8.45% a year.</p>

<h3>Why annualized ROI matters</h3>
<p>A 50% return sounds better than a 30% return, but not if the first took 10 years and the second took 2. Annualizing puts investments of different lengths on the same footing. It's the same idea as <a href="/cagr">CAGR</a>.</p>

<h3>ROI for marketing</h3>
<p>For a campaign, use the profit it generated, not just revenue. If $2,000 of ads produced $10,000 of sales at a 40% margin, the profit is $4,000, so ROI is ($4,000 &minus; $2,000) &divide; $2,000 = 100%.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What's a good ROI?</h4>
    <p>Compare it with what else you could do with the money. U.S. stocks have historically returned about 10% a year before inflation, so an annualized ROI below that may not be worth the risk.</p>

    <h4>Should I include dividends and fees?</h4>
    <p>Yes. Add dividends or rental income to the final value and include fees, commissions and maintenance in the amount invested.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Selling at a gain? Estimate the tax with the <a href="/capital-gains-tax">capital gains tax calculator</a>.</li>
        <li>Project future growth with the <a href="/compound-interest">compound interest calculator</a>.</li>
    </ul>
</div>
@endsection
