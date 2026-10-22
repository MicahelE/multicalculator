@extends('layouts.calculator')

@section('guide')
<h2>Self-Employment Tax for Freelancers and 1099 Workers</h2>

<p>When you work for an employer, they pay half of your Social Security and Medicare taxes. When you're self-employed, you pay both halves. That's the self-employment (SE) tax: 15.3% on most of your net profit, on top of regular income tax.</p>

<h3>How SE tax is calculated</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Net earnings = Net profit &times; 92.35%</strong></p>
    <p class="mb-1"><strong>Social Security = 12.4% of net earnings</strong>, up to $184,500 for 2026 (minus any W-2 wages)</p>
    <p class="mb-0"><strong>Medicare = 2.9% of all net earnings</strong></p>
</div>
<p>The 92.35% step gives you credit for the "employer half," the same way an employer's share isn't counted as your wages. You owe no SE tax if net earnings are under $400.</p>

<h3>Example</h3>
<p>A freelancer with $60,000 of net profit has $55,410 of net earnings. Social Security is $6,870.84 and Medicare is $1,606.89, for $8,477.73 of SE tax. Half of that, $4,238.87, is deductible from income on Schedule 1.</p>

<h3>Quarterly estimated taxes</h3>
<p>No one withholds tax from 1099 income, so you pay during the year through estimated payments, usually due April 15, June 15, September 15 and January 15. Your quarterly payment should cover both SE tax and income tax.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Do I pay SE tax and income tax?</h4>
    <p>Yes. SE tax replaces payroll taxes; income tax is separate. Deducting half the SE tax lowers your income tax.</p>

    <h4>I also have a W-2 job. Does that change anything?</h4>
    <p>Your W-2 wages count toward the $184,500 Social Security limit first. If they're high, your SE income may owe little or no Social Security tax. Enter your wages in the calculator.</p>

    <h4>How can I lower my SE tax?</h4>
    <p>Track every business expense, since SE tax is based on profit. Some owners elect S-corp status and pay themselves a salary, though that adds payroll costs and paperwork.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Price your work to cover this tax with the <a href="/freelance-rate">freelance rate calculator</a>.</li>
        <li>Set aside 25&ndash;30% of each payment in a separate account for taxes.</li>
    </ul>
</div>
@endsection
