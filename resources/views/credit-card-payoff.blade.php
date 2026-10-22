@extends('layouts.calculator')

@section('guide')
<h2>How Long Will It Take to Pay Off My Credit Card?</h2>

<p>Credit cards charge interest monthly on whatever you haven't paid off. With rates often above 20%, a small payment can go almost entirely to interest. This calculator assumes you stop using the card and pay a fixed amount each month.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Each month: Interest = Balance &times; APR &divide; 12</strong></p>
    <p class="mb-0"><strong>New balance = Balance + Interest &minus; Payment</strong>, repeated until it reaches zero</p>
</div>

<h3>Example</h3>
<p>A $6,000 balance at 22.99% APR:</p>
<div class="table-responsive mb-3">
    <table class="table table-sm table-bordered bg-white">
        <thead><tr><th>Monthly payment</th><th>Time to pay off</th><th>Total interest</th></tr></thead>
        <tbody>
            <tr><td>$150</td><td>6 years, 5 months</td><td>$5,492</td></tr>
            <tr><td>$250</td><td>2 years, 9 months</td><td>$2,113</td></tr>
            <tr><td>$400</td><td>1 year, 6 months</td><td>$1,142</td></tr>
        </tbody>
    </table>
</div>
<p>Paying $250 instead of $150 saves over $3,300 and nearly four years. If your payment doesn't cover the monthly interest ($114.95 on this balance), the balance never shrinks.</p>

<h3>Ways to pay it off faster</h3>
<ul>
    <li><strong>Avalanche method:</strong> pay minimums on everything and put extra money toward the highest-rate card first. It saves the most interest.</li>
    <li><strong>Snowball method:</strong> pay off the smallest balance first for quick wins, then roll that payment into the next card.</li>
    <li><strong>Balance transfer:</strong> a 0% intro APR card can stop interest for 12&ndash;21 months, usually for a 3&ndash;5% fee.</li>
    <li><strong>Consolidation loan:</strong> a personal loan at a lower fixed rate with a set payoff date.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Why does paying the minimum take so long?</h4>
    <p>Minimum payments are often just interest plus about 1% of the balance, so the principal barely moves. Your statement shows how long minimum payments would take.</p>

    <h4>Does paying off my card help my credit score?</h4>
    <p>Yes. Lower balances reduce your credit utilization, a major part of your score. Keeping utilization under 30% (ideally under 10%) helps most.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Compare a consolidation loan with the <a href="/loan-payment">loan payment calculator</a>.</li>
        <li>Once it's paid off, redirect the same payment into savings with the <a href="/savings-goal">savings goal calculator</a>.</li>
    </ul>
</div>
@endsection
