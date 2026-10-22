@extends('layouts.calculator')

@section('guide')
<h2>The $6,000 Senior Deduction, Explained</h2>

<p>The One Big Beautiful Bill Act added a new "bonus" deduction for older taxpayers. If you're 65 or older, you can deduct an extra $6,000 for tax years 2025 through 2028. A married couple where both spouses are 65 or older can deduct up to $12,000. It's on top of the standard deduction and the existing extra standard deduction for age 65+, and you can claim it whether you itemize or not.</p>

<h3>How the senior deduction is calculated</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Per person = $6,000 &minus; 6% &times; (MAGI &minus; $75,000)</strong> &nbsp;($150,000 for joint filers)</p>
    <p class="mb-0"><strong>Tax saved &asymp; Deduction &times; your tax bracket</strong></p>
</div>
<p>Each eligible person's $6,000 shrinks by 6 cents for every dollar of modified adjusted gross income (MAGI) above the threshold. For a single filer, the deduction is gone at $175,000 of MAGI. For a couple where both are 65+, it's gone at $250,000.</p>

<h3>Who qualifies</h3>
<ul>
    <li>You must be 65 or older by the end of the tax year.</li>
    <li>You need a valid Social Security number.</li>
    <li>Married couples must file jointly. Married filing separately is not eligible.</li>
    <li>You don't need to be receiving Social Security to claim it.</li>
</ul>

<h3>Example</h3>
<p>A married couple, both 66, has MAGI of $180,000. That's $30,000 over the $150,000 threshold, so each $6,000 deduction drops by 6% &times; $30,000 = $1,800, leaving $4,200 each. Together they deduct $8,400. In the 22% bracket, that saves about $1,848 in federal income tax.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Does this mean Social Security is no longer taxed?</h4>
    <p>No. Social Security benefits are still taxable under the usual rules. The senior deduction lowers your taxable income, which for many retirees offsets some or all of the tax on their benefits.</p>

    <h4>Can I take the senior deduction and the standard deduction?</h4>
    <p>Yes. It's a separate deduction claimed on Schedule 1-A, so you get it on top of the standard deduction and the regular additional amount for being 65 or older.</p>

    <h4>What if only one spouse is 65?</h4>
    <p>Then only one $6,000 deduction applies, phased out using the joint $150,000 threshold. Choose "1" in the calculator.</p>

    <h4>How long does it last?</h4>
    <p>Tax years 2025, 2026, 2027 and 2028, unless Congress extends it.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Your Social Security check is going up in January. See the <a href="/social-security-cola">2027 COLA calculator</a>.</li>
        <li>If your MAGI is near the phase-out, a Roth conversion or IRA withdrawal can shrink this deduction, so plan the timing.</li>
        <li>Run your whole return through the <a href="/federal-income-tax">federal income tax calculator</a> to see your bracket.</li>
    </ul>
</div>
@endsection
