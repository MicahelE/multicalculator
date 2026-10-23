@extends('layouts.calculator')

@section('guide')
<h2>What Is a Cap Rate?</h2>

<p>The capitalization rate (cap rate) is the yearly return a rental property would earn if you bought it with cash. It ignores the mortgage, so you can compare properties on their own merits, whatever their size or price.</p>

<h3>The formula</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>NOI = Gross rent &times; (1 &minus; vacancy rate) &minus; Operating expenses</strong></p>
    <p class="mb-1"><strong>Cap rate = NOI &divide; Property value</strong></p>
    <p class="mb-0"><strong>Gross rent multiplier = Property value &divide; Gross annual rent</strong></p>
</div>
<p>Operating expenses include property tax, insurance, repairs, property management, HOA fees and utilities you pay. They do not include mortgage payments, depreciation or big one-off improvements.</p>

<h3>Example</h3>
<p>A $400,000 duplex rents for $3,000 a month, or $36,000 a year. Allowing 5% for vacancy leaves $34,200. Subtract $12,000 of operating expenses and the net operating income is $22,200. The cap rate is $22,200 &divide; $400,000 = <strong>5.55%</strong>. The gross rent multiplier is 11.11.</p>

<h3>What's a good cap rate?</h3>
<p>It depends on the market and the risk. Prime properties in expensive cities often trade at 4&ndash;5%. Smaller markets and older buildings might be 7&ndash;10%. A higher cap rate means more income per dollar but usually more risk, more work or less growth. Compare a property with similar ones nearby, not with a single rule.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Does the cap rate include my mortgage?</h4>
    <p>No. The cap rate is measured as if you paid cash. To see the return on the cash you actually put in after financing, look at cash-on-cash return.</p>

    <h4>Should I use the purchase price or the current value?</h4>
    <p>Use the price when you're deciding whether to buy. Use the current market value to judge how an existing property is performing.</p>

    <h4>What vacancy rate should I assume?</h4>
    <p>5% to 8% is a common starting point for long-term rentals. Use local data if you have it. Short-term rentals often need much more.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Work out the total return, including appreciation, with the <a href="/roi">ROI calculator</a>.</li>
        <li>Thinking about what tenants can pay? See the <a href="/rent-affordability">rent affordability calculator</a>.</li>
    </ul>
</div>
@endsection
