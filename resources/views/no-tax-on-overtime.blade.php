@extends('layouts.app')

@section('content')
@include('partials.calculator-hero')

<div class="container">
    <div class="row">
        <div class="col-md-7 col-lg-6 mx-auto">
            <form class="calculator-card border-purple" id="deductionCalc" data-type="overtime" data-cap-single="12500" data-cap-joint="25000" onsubmit="return false">
                <label for="otRate">Regular hourly rate ($)</label>
                <input type="number" class="form-control" id="otRate" min="0" step="0.01" inputmode="decimal" placeholder="e.g. 25">

                <div class="form-row">
                    <div class="col">
                        <label for="otHours">Overtime hours / week</label>
                        <input type="number" class="form-control" id="otHours" min="0" inputmode="decimal" placeholder="e.g. 5">
                    </div>
                    <div class="col">
                        <label for="otWeeks">Weeks with overtime</label>
                        <input type="number" class="form-control" id="otWeeks" min="0" max="52" inputmode="numeric" value="52">
                    </div>
                </div>

                <label for="w2Amount">Or: qualified overtime from your W-2 (Box 12, code TT)</label>
                <input type="number" class="form-control" id="w2Amount" min="0" inputmode="decimal" placeholder="Optional, overrides the estimate above">

                @include('partials.deduction-fields', ['qualifiedLabel' => 'Qualified overtime (premium portion)'])
            </form>
        </div>
    </div>
</div>

@include('partials.related-calculators')

<div class="container">
    <article class="calculator-guide">
        <h2>No Tax on Overtime: How the Deduction Works</h2>

        <p>The One Big Beautiful Bill Act, signed in July 2025, created a federal income tax deduction for qualified overtime pay. It applies to tax years 2025 through 2028. You claim it on Schedule 1-A of Form 1040, and you can take it whether you itemize or use the standard deduction.</p>

        <h3>What counts as qualified overtime?</h3>
        <p>Only the <strong>premium portion</strong> of overtime that the Fair Labor Standards Act (FLSA) requires counts. That's the "half" in time-and-a-half. If you earn $25 an hour, overtime pays $37.50, and $12.50 of each overtime hour qualifies.</p>
        <ul>
            <li>Hours over 40 in a workweek required by the FLSA qualify.</li>
            <li>Daily overtime required only by state law, double time beyond the FLSA premium, and overtime paid voluntarily under a contract usually do not.</li>
            <li>Exempt (salaried) employees who aren't entitled to FLSA overtime don't qualify.</li>
        </ul>

        <h3>How to calculate your overtime deduction</h3>
        <div class="card bg-light p-3 mb-4">
            <p class="mb-1"><strong>Qualified overtime = Hourly rate &times; 0.5 &times; Overtime hours</strong></p>
            <p class="mb-1"><strong>Deduction = lesser of qualified overtime or the cap, minus $100 for every $1,000 of MAGI over the threshold</strong></p>
            <p class="mb-0"><strong>Tax saved &asymp; Deduction &times; your tax bracket</strong></p>
        </div>

        <h3>Limits and phase-out</h3>
        <ul>
            <li><strong>Cap:</strong> $12,500 per year ($25,000 for married filing jointly).</li>
            <li><strong>Phase-out:</strong> the deduction shrinks by $100 for every $1,000 of modified AGI above $150,000 ($300,000 joint).</li>
            <li><strong>Married filing separately:</strong> not eligible.</li>
            <li><strong>Payroll taxes:</strong> Social Security and Medicare are still withheld on all overtime.</li>
        </ul>

        <h3>Example</h3>
        <p>A single filer earns $25 an hour and works 5 overtime hours a week for 52 weeks, with a MAGI of $70,000. Qualified overtime is $25 &times; 0.5 &times; 5 &times; 52 = $3,250. That's under the cap and below the phase-out, so the full $3,250 is deductible. In the 22% bracket, that saves about $715 in federal income tax.</p>

        <div class="calculator-faq mt-4">
            <h3>Frequently Asked Questions</h3>

            <h4>Is overtime tax-free now?</h4>
            <p>Not completely. Overtime is still taxed and withheld from your paycheck as usual. The benefit comes as a deduction when you file your return, which lowers your federal income tax and may increase your refund.</p>

            <h4>Where do I find my qualified overtime amount?</h4>
            <p>For 2026 and later, employers report qualified overtime on your W-2 in Box 12 with code TT. For 2025, many employers did not separate it, so you may need your pay stubs. The IRS allows a shortcut: if you were paid time-and-a-half, the qualified amount is one-third of your total overtime pay.</p>

            <h4>Does double time qualify?</h4>
            <p>Only the FLSA-required premium qualifies, which is half your regular rate per overtime hour. The extra amount from double time is generally not included.</p>

            <h4>Does this affect state taxes?</h4>
            <p>The deduction is federal. Some states follow federal rules and some don't, so check your state's guidance.</p>

            <h4>How long does no tax on overtime last?</h4>
            <p>It covers tax years 2025, 2026, 2027 and 2028 unless Congress extends it.</p>
        </div>

        <div class="pro-tips mt-4">
            <h3>Tips</h3>
            <ul>
                <li>Keep your pay stubs. They're the easiest record of overtime hours and rates.</li>
                <li>Use our <a href="/overtime">overtime pay calculator</a> to see your total overtime earnings first.</li>
                <li>Earn tips too? Try the <a href="/no-tax-on-tips">no tax on tips calculator</a>. You can claim both deductions.</li>
            </ul>
        </div>
    </article>
</div>
@endsection
