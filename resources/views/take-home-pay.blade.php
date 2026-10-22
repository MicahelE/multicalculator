@extends('layouts.calculator')

@section('guide')
<h2>Take-Home Pay: From Salary to Paycheck</h2>

<p>Your take-home pay (net pay) is what's left of your salary after taxes and pre-tax deductions. This calculator uses the 2026 federal tax brackets and standard deduction, Social Security and Medicare, a flat state rate, and your 401(k) contribution.</p>

<h3>What comes out of your paycheck</h3>
<ul>
    <li><strong>Federal income tax:</strong> based on 2026 brackets after the standard deduction ($16,100 single, $32,200 married filing jointly).</li>
    <li><strong>Social Security:</strong> 6.2% of wages up to $184,500 in 2026.</li>
    <li><strong>Medicare:</strong> 1.45% of all wages, plus 0.9% on wages over $200,000 ($250,000 for joint filers).</li>
    <li><strong>State income tax:</strong> varies from 0% to over 13%. Alaska, Florida, Nevada, New Hampshire, South Dakota, Tennessee, Texas, Washington and Wyoming don't tax wages.</li>
    <li><strong>401(k):</strong> traditional contributions come out before income tax but still count for Social Security and Medicare.</li>
</ul>

<h3>How it's calculated</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Net pay = Salary &minus; 401(k) &minus; Federal tax &minus; FICA &minus; State tax</strong></p>
    <p class="mb-0"><strong>Per paycheck = Net pay &divide; pay periods</strong> (52 weekly, 26 biweekly, 24 semi-monthly, 12 monthly)</p>
</div>

<h3>Example</h3>
<p>A single filer earns $65,000, is paid every two weeks, puts 5% in a 401(k) and pays a 4% state tax. The 401(k) takes $3,250. Federal income tax on $45,650 of taxable income is $5,230. Social Security and Medicare are $4,972.50, and state tax is $2,470. Take-home pay is $49,077.50 a year, or $1,887.60 per paycheck.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Why is my real paycheck different?</h4>
    <p>Withholding depends on your W-4, health insurance premiums, HSA contributions, local taxes and your state's actual brackets. Use this as an estimate and check your pay stub.</p>

    <h4>Does a bigger 401(k) contribution cost me the full amount?</h4>
    <p>No. Each $100 you contribute lowers your income tax, so your paycheck drops by less than $100. In the 22% bracket it drops by about $78 before state tax.</p>

    <h4>Do overtime and tips change this?</h4>
    <p>They're withheld like regular pay, but you may get some of it back at tax time. See the <a href="/no-tax-on-overtime">no tax on overtime</a> and <a href="/no-tax-on-tips">no tax on tips</a> calculators.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Getting a bonus? It's withheld differently. Try the <a href="/bonus-tax">bonus tax calculator</a>.</li>
        <li>Paid hourly? Convert first with the <a href="/hourly-to-salary">hourly to salary calculator</a>.</li>
    </ul>
</div>
@endsection
