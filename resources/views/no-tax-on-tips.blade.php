@extends('layouts.app')

@section('content')
@include('partials.calculator-hero')

<div class="container">
    <div class="row">
        <div class="col-md-7 col-lg-6 mx-auto">
            <form class="calculator-card border-warning" id="deductionCalc" data-type="tips" data-cap-single="25000" data-cap-joint="25000" onsubmit="return false">
                <label for="tips">Qualified tips received this year ($)</label>
                <input type="number" class="form-control" id="tips" min="0" inputmode="decimal" placeholder="e.g. 18000">

                @include('partials.deduction-fields', ['qualifiedLabel' => 'Qualified tips'])
            </form>
        </div>
    </div>
</div>

@include('partials.related-calculators')

<div class="container">
    <article class="calculator-guide">
        <h2>No Tax on Tips: How the Deduction Works</h2>

        <p>The One Big Beautiful Bill Act created a federal income tax deduction for qualified tips, covering tax years 2025 through 2028. Employees and self-employed workers in occupations that customarily receive tips can claim it on Schedule 1-A of Form 1040, with or without itemizing.</p>

        <h3>How to calculate your tips deduction</h3>
        <div class="card bg-light p-3 mb-4">
            <p class="mb-1"><strong>Deduction = lesser of qualified tips or $25,000, minus $100 for every $1,000 of MAGI over the threshold</strong></p>
            <p class="mb-0"><strong>Tax saved &asymp; Deduction &times; your tax bracket</strong></p>
        </div>

        <h3>Limits and phase-out</h3>
        <ul>
            <li><strong>Cap:</strong> $25,000 per tax return, the same for single and joint filers.</li>
            <li><strong>Phase-out:</strong> the deduction shrinks by $100 for every $1,000 of modified AGI above $150,000 ($300,000 joint).</li>
            <li><strong>Self-employed:</strong> the deduction can't be more than your net income from the business where you earned the tips.</li>
            <li><strong>Requirements:</strong> you need a valid Social Security number, and married couples must file jointly.</li>
            <li><strong>Payroll taxes:</strong> Social Security and Medicare still apply to all tip income.</li>
        </ul>

        <h3>What counts as qualified tips?</h3>
        <ul>
            <li>Cash and card tips paid voluntarily by customers, including tips shared through a tip pool.</li>
            <li>Tips must be reported to your employer or, if you're self-employed, on your return.</li>
            <li>Mandatory service charges added to a bill are not tips.</li>
            <li>The job must be on the IRS list of occupations that customarily receive tips, such as servers, bartenders, hairstylists and delivery drivers.</li>
        </ul>

        <h3>Example</h3>
        <p>A single server reports $18,000 in tips and has a MAGI of $55,000. The tips are under the $25,000 cap and income is below $150,000, so the full $18,000 is deductible. In the 12% bracket, that saves about $2,160 in federal income tax.</p>

        <div class="calculator-faq mt-4">
            <h3>Frequently Asked Questions</h3>

            <h4>Are tips completely tax-free?</h4>
            <p>No. Tips are still subject to Social Security, Medicare and usually state income tax. The deduction lowers your federal income tax when you file.</p>

            <h4>If my spouse and I both earn tips, is the cap $50,000?</h4>
            <p>No. The $25,000 limit applies per return, so a joint return can deduct up to $25,000 in total.</p>

            <h4>Do I need to itemize to claim it?</h4>
            <p>No. You can claim the tips deduction and still take the standard deduction.</p>

            <h4>How long does no tax on tips last?</h4>
            <p>It covers tax years 2025 through 2028 unless Congress extends it.</p>
        </div>

        <div class="pro-tips mt-4">
            <h3>Tips</h3>
            <ul>
                <li>Report all tips to your employer each month so they show up on your W-2.</li>
                <li>Work overtime too? You can claim the <a href="/no-tax-on-overtime">no tax on overtime deduction</a> as well.</li>
                <li>Use the <a href="/monthly-income">monthly income calculator</a> to budget around variable tip income.</li>
            </ul>
        </div>
    </article>
</div>
@endsection
