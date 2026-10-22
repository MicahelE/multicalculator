@extends('layouts.calculator')

@section('guide')
<h2>How Bonuses Are Taxed</h2>

<p>The IRS treats bonuses as "supplemental wages." Most employers withhold federal income tax on them at a flat 22%, instead of running them through your normal paycheck withholding. On the part of your supplemental wages above $1 million in a year, the rate is a mandatory 37%.</p>

<h3>What gets withheld from a bonus</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Federal:</strong> 22% (37% over $1 million)</p>
    <p class="mb-1"><strong>Social Security and Medicare:</strong> 7.65%</p>
    <p class="mb-0"><strong>State:</strong> depends on your state; some states have their own supplemental rate</p>
</div>

<h3>Example</h3>
<p>On a $5,000 bonus with a 5% state rate, withholding is $1,100 federal, $382.50 Social Security and Medicare, and $250 state. You take home $3,267.50.</p>

<h3>Withholding isn't your final tax</h3>
<p>The 22% is just what's withheld. Your bonus is taxed as ordinary income when you file. If your actual bracket is 12%, you'll get some of the withholding back as a refund. If you're in the 32% bracket or higher, 22% isn't enough and you may owe more in April.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Why does my bonus look so heavily taxed?</h4>
    <p>Some employers add the bonus to your regular paycheck and withhold as if you earned that much every pay period (the "aggregate method"). That can push withholding well above 22%. It evens out when you file.</p>

    <h4>Can I lower the tax on my bonus?</h4>
    <p>Yes. Ask whether you can direct part of it into your 401(k). Traditional contributions aren't subject to federal income tax withholding.</p>

    <h4>Is a commission a bonus?</h4>
    <p>For withholding, commissions paid separately from regular wages are also supplemental wages. See the <a href="/commission">commission calculator</a>.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Check your yearly bracket with the <a href="/federal-income-tax">federal income tax calculator</a> to see whether you'll owe or get money back.</li>
        <li>Compare with your regular net pay using the <a href="/take-home-pay">take home pay calculator</a>.</li>
    </ul>
</div>
@endsection
