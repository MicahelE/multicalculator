@extends('layouts.calculator')

@section('guide')
<h2>The New SALT Cap: $40,000 for 2025, $40,400 for 2026</h2>

<p>The state and local tax (SALT) deduction lets itemizers deduct state and local income taxes (or sales taxes instead) plus property taxes. From 2018 to 2024 it was capped at $10,000. The One Big Beautiful Bill Act raised the cap to $40,000 for 2025 and $40,400 for 2026, rising 1% a year through 2029 before dropping back to $10,000 in 2030.</p>

<h3>How the SALT cap is calculated</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Your cap = $40,400 &minus; 30% &times; (MAGI &minus; $505,000)</strong>, but never below $10,000</p>
    <p class="mb-1"><strong>Deduction = lesser of SALT paid or your cap</strong></p>
    <p class="mb-0">For 2025: $40,000 cap and $500,000 threshold. Married filing separately: both are halved.</p>
</div>

<h3>Who benefits</h3>
<p>The higher cap matters most for homeowners in high-tax states like California, New York, New Jersey and Illinois with income under the phase-out. If your MAGI is above roughly $606,000 in 2026, the phase-out takes you all the way back to $10,000.</p>
<p>It only helps if you itemize. Your total itemized deductions (SALT, mortgage interest, charitable gifts and so on) need to beat the standard deduction: $16,100 for single filers and $32,200 for joint filers in 2026.</p>

<h3>Examples</h3>
<p>A couple pays $18,000 in state income tax and $12,000 in property tax, with MAGI of $250,000. Their $30,000 is under the $40,400 cap, so all of it is deductible. Under the old $10,000 cap they would have lost $20,000 of deductions.</p>
<p>A couple paying $50,000 in SALT with MAGI of $555,000 is $50,000 over the threshold. Their cap drops by 30% of that, or $15,000, to $25,400. They deduct $25,400.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What counts as SALT?</h4>
    <p>State and local income taxes (or general sales taxes if you choose that instead), real estate taxes, and personal property taxes such as an annual car tax based on value.</p>

    <h4>Should I itemize now?</h4>
    <p>Add up SALT (up to your cap), mortgage interest and charitable donations. If the total beats your standard deduction, itemizing saves you money.</p>

    <h4>Does the cap apply per person?</h4>
    <p>No, it's per return. Married couples filing jointly share one cap.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>See how your deductions change your bill with the <a href="/federal-income-tax">federal income tax calculator</a>; enter your itemized total.</li>
        <li>Near the phase-out? Pre-tax 401(k) contributions lower MAGI and can restore part of your cap.</li>
    </ul>
</div>
@endsection
