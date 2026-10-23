@extends('layouts.calculator')

@section('guide')
<h2>How California Income Tax Works in 2026</h2>

<p>California has the highest top income tax rate in the country, but most people pay far less than the headline 13.3%. The state uses nine brackets from 1% to 12.3%, applied in layers like the federal system, plus a 1% Mental Health Services Tax on taxable income over $1 million. Workers also pay State Disability Insurance (SDI), which is 1.3% of all wages in 2026 with no cap.</p>

<h3>2026 California tax brackets</h3>
<table class="table table-sm mb-4">
    <thead><tr><th>Rate</th><th>Single</th><th>Married filing jointly</th></tr></thead>
    <tbody>
        <tr><td>1%</td><td>$0 &ndash; $11,456</td><td>$0 &ndash; $22,912</td></tr>
        <tr><td>2%</td><td>$11,456 &ndash; $27,157</td><td>$22,912 &ndash; $54,314</td></tr>
        <tr><td>4%</td><td>$27,157 &ndash; $42,861</td><td>$54,314 &ndash; $85,722</td></tr>
        <tr><td>6%</td><td>$42,861 &ndash; $59,498</td><td>$85,722 &ndash; $118,996</td></tr>
        <tr><td>8%</td><td>$59,498 &ndash; $75,197</td><td>$118,996 &ndash; $150,394</td></tr>
        <tr><td>9.3%</td><td>$75,197 &ndash; $384,109</td><td>$150,394 &ndash; $768,218</td></tr>
        <tr><td>10.3%</td><td>$384,109 &ndash; $460,927</td><td>$768,218 &ndash; $921,854</td></tr>
        <tr><td>11.3%</td><td>$460,927 &ndash; $768,213</td><td>$921,854 &ndash; $1,536,426</td></tr>
        <tr><td>12.3%</td><td>Over $768,213</td><td>Over $1,536,426</td></tr>
    </tbody>
</table>
<p>Source: California Franchise Tax Board, 2026 indexed amounts. The standard deduction is $5,900 single and $11,800 joint, and the personal exemption credit is $158 single and $316 joint.</p>

<h3>The formula</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>CA taxable income = Salary &minus; 401(k) contributions &minus; CA standard deduction</strong></p>
    <p class="mb-1"><strong>CA tax = Tax from the brackets &minus; Exemption credit</strong></p>
    <p class="mb-0"><strong>Take-home = Salary &minus; 401(k) &minus; Federal tax &minus; FICA &minus; CA tax &minus; SDI</strong></p>
</div>

<h3>Example</h3>
<p>A single filer earns $85,000 and puts 5% in a 401(k). California taxable income is $85,000 &minus; $4,250 &minus; $5,900 = $74,850, which lands in the 8% bracket. The tax is $3,283.12, minus the $158 credit = <strong>$3,125.12</strong>. SDI adds $1,105. With $8,935 of federal tax and $6,502.50 of Social Security and Medicare, take-home pay is $61,082.38 a year, about $5,090 a month.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What is California's income tax rate?</h4>
    <p>It ranges from 1% to 12.3%, plus 1% on taxable income over $1 million, for a top rate of 13.3%. Your effective rate is much lower because each rate only applies to the income inside its bracket. In the example above, it's about 3.7% of salary.</p>

    <h4>Does California tax 401(k) contributions?</h4>
    <p>No. Traditional 401(k) contributions reduce your California taxable income just like they reduce federal income. HSA contributions are different: California taxes them.</p>

    <h4>Does California follow no tax on tips or overtime?</h4>
    <p>Not as of 2026. California hasn't adopted the federal tips and overtime deductions, so that income is still taxed on your California return. Check the FTB for changes before you file.</p>

    <h4>What is CA SDI?</h4>
    <p>State Disability Insurance funds disability and paid family leave benefits. In 2026 it's 1.3% of every dollar of wages. There's no wage cap, so high earners pay it on their full salary.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Thinking about moving? Compare the same salary in <a href="/nevada-income-tax">Nevada</a> or <a href="/texas-income-tax">Texas</a>, which have no state income tax.</li>
        <li>See your federal bracket and effective rate with the <a href="/federal-income-tax">federal income tax calculator</a>.</li>
        <li>Want per-paycheck numbers for another state? Use the <a href="/take-home-pay">take home pay calculator</a> with your state's rate.</li>
    </ul>
</div>
@endsection
