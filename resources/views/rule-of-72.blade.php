@extends('layouts.calculator')

@section('guide')
<h2>The Rule of 72</h2>

<p>The rule of 72 is a mental shortcut for compound growth: divide 72 by the annual rate of return to get the number of years it takes to double your money.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Years to double &asymp; 72 &divide; Interest rate</strong></p>
    <p class="mb-0"><strong>Exact: Years = ln(2) &divide; ln(1 + rate)</strong></p>
</div>

<h3>Examples</h3>
<ul>
    <li><strong>8% return:</strong> 72 &divide; 8 = 9 years (exact: 9.01).</li>
    <li><strong>6% return:</strong> 12 years.</li>
    <li><strong>4% savings account:</strong> 18 years.</li>
    <li><strong>24% credit card:</strong> an unpaid balance doubles in about 3 years.</li>
    <li><strong>3% inflation:</strong> prices double, and your cash loses half its buying power, in about 24 years.</li>
</ul>

<h3>How accurate is it?</h3>
<p>Very close for rates between about 6% and 10%. At low rates, 69 or 70 is slightly more accurate; at high rates, 72 starts to underestimate. The calculator shows both the shortcut and the exact answer.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Why 72?</h4>
    <p>The exact math uses the natural log of 2 (about 0.693, or 69.3 when working in percent). 72 is close and divides evenly by 2, 3, 4, 6, 8, 9 and 12, which makes mental math easy.</p>

    <h4>Is there a rule for tripling?</h4>
    <p>Yes, roughly the rule of 114: divide 114 by the rate. The calculator shows the exact tripling time too.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>For exact balances with contributions, use the <a href="/compound-interest">compound interest calculator</a>.</li>
        <li>Measure an investment's actual growth rate with the <a href="/cagr">CAGR calculator</a>.</li>
    </ul>
</div>
@endsection
