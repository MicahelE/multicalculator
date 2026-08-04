@extends('layouts.app')

@section('content')
@include('partials.calculator-hero')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="calculator-card border-pink">
                <h2 id="commissionpage" class="text-center section-heading">Commission Calculator</h2>

                <form>
                    <label for="commissionInputnumber1">Sale Price</label>
                    <input type="number" class="form-control" id="commissionInputnumber1" aria-describedby="numberHelp" placeholder="Enter amount">
                    <label for="commissionInputnumber2">Commission</label>
                    <input type="number" class="form-control" id="commissionInputnumber2" aria-describedby="numberHelp" placeholder="in percentage %">
                </form>

                <div class="results-section">
                    <h5>Results</h5>
                    <label for="commissionInputnumber3">Commission amount</label>
                    <input type="number" class="form-control" id="commissionInputnumber3" aria-describedby="numberHelp" placeholder="">
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.related-calculators')

<div class="container">
    <article class="calculator-guide">
        <h2>Sales Commission Calculator: Earnings, Compensation & Bonus Structures</h2>

        <h3>What is Sales Commission?</h3>
        <p>Sales commission is a form of compensation paid to salespeople based on the amount of sales they generate. It's typically calculated as a percentage of the sale price and serves as an incentive to drive revenue. Commission is usually one part of a broader sales compensation plan that may also include a base salary, bonuses, and other incentives.</p>

        <h3>How to Calculate Commission</h3>
        <div class="card bg-light p-3 mb-4">
            <p class="mb-0"><strong>Commission = Sale Price x Commission Rate (%)</strong></p>
        </div>
        <p><strong>Example:</strong> A salesperson closes a $10,000 deal with a 5% commission rate. Commission = $10,000 x 0.05 = <strong>$500</strong>.</p>

        <h3>Tiered Commission Calculator: How Tiered Rates Work</h3>
        <p>A tiered commission structure pays a higher rate as a salesperson hits higher sales volumes, rewarding top performers with an increasing rate rather than a flat one.</p>
        <div class="table-responsive mb-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sales Volume (Monthly)</th>
                        <th>Commission Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>$0 - $10,000</td><td>3%</td></tr>
                    <tr><td>$10,001 - $25,000</td><td>5%</td></tr>
                    <tr><td>$25,001+</td><td>8%</td></tr>
                </tbody>
            </table>
        </div>
        <p><strong>Worked example:</strong> A rep sells $30,000 in a month under the tiers above. The first $10,000 earns 3% ($300), the next $15,000 earns 5% ($750), and the remaining $5,000 earns 8% ($400). Total commission = $300 + $750 + $400 = <strong>$1,450</strong>.</p>

        <h3>Types of Commission Structures</h3>
        <ul>
            <li><strong>Flat Rate:</strong> Fixed percentage on all sales</li>
            <li><strong>Tiered:</strong> Higher percentages for higher sales volumes (see above)</li>
            <li><strong>Draw Against Commission:</strong> Guaranteed base with commission on top, reconciled later</li>
            <li><strong>Residual:</strong> Ongoing commission from recurring sales, common in SaaS and insurance</li>
            <li><strong>Gross Margin Commission:</strong> Based on profit margin rather than total sale price</li>
        </ul>

        <h3>Commission vs. Bonus: What's the Difference?</h3>
        <p>Both are variable pay, but they work differently:</p>
        <ul>
            <li><strong>Commission</strong> is tied directly to individual sales and is typically ongoing and uncapped — the more you sell, the more you earn.</li>
            <li><strong>Bonus</strong> is usually a one-time or periodic payment for hitting a specific goal or milestone (a quarterly quota, a team target), often a fixed amount rather than a percentage of sales.</li>
            <li>Many sales compensation plans combine both: a base salary, ongoing commission, and a bonus for exceeding quota.</li>
        </ul>

        <h3>Sales Compensation Calculator: Commission Rates by Industry</h3>
        <div class="table-responsive mb-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Industry</th>
                        <th>Typical Commission Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Real Estate</td><td>5-6% of sale price</td></tr>
                    <tr><td>Retail</td><td>1-10% depending on product</td></tr>
                    <tr><td>Insurance</td><td>5-15% of premium</td></tr>
                    <tr><td>SaaS / Software</td><td>8-15% of contract value</td></tr>
                    <tr><td>Automotive</td><td>20-30% of dealer profit (not sale price)</td></tr>
                    <tr><td>Financial Services</td><td>1-2% of assets or transaction value</td></tr>
                </tbody>
            </table>
        </div>

        <div class="calculator-faq mt-4">
            <h3>Frequently Asked Questions</h3>

            <h4>What is a good commission rate?</h4>
            <p>Commission rates vary widely by industry. A "good" rate depends on the product, sales cycle length, and base salary provided — a role with no base salary typically pays a higher commission rate than one with a strong base.</p>

            <h4>How are commissions taxed?</h4>
            <p>Commissions are taxed as regular income. Your employer may withhold at a supplemental rate, but the final tax is calculated at your marginal rate.</p>

            <h4>What is the difference between commission and bonus?</h4>
            <p>Commission is tied directly to sales performance and is typically ongoing and uncapped, while bonuses are usually one-time or periodic payments for achieving specific goals or milestones.</p>

            <h4>How does a tiered commission structure work?</h4>
            <p>A tiered structure pays increasing commission rates as sales volume crosses set thresholds. Sales in each tier are typically commissioned at that tier's rate, so a single deal can span multiple rates.</p>

            <h4>What is a sales compensation plan?</h4>
            <p>A sales compensation plan is the full pay structure for a sales role — usually a combination of base salary, commission, and bonuses — designed to align rep pay with company revenue goals.</p>
        </div>

        <div class="pro-tips mt-4">
            <h3>Tips for Maximizing Commission Earnings</h3>
            <ul>
                <li>Understand your commission structure thoroughly, including tier thresholds and caps</li>
                <li>Track all sales and projected earnings</li>
                <li>Focus on high-value accounts and products</li>
                <li>Negotiate your commission rate based on performance</li>
            </ul>
        </div>
    </article>
</div>

@push('faq-schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is a good commission rate?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Commission rates vary widely by industry. A \"good\" rate depends on the product, sales cycle length, and base salary provided — a role with no base salary typically pays a higher commission rate than one with a strong base."
            }
        },
        {
            "@type": "Question",
            "name": "How are commissions taxed?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Commissions are taxed as regular income. Your employer may withhold at a supplemental rate, but the final tax is calculated at your marginal rate."
            }
        },
        {
            "@type": "Question",
            "name": "What is the difference between commission and bonus?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Commission is tied directly to sales performance and is typically ongoing and uncapped, while bonuses are usually one-time or periodic payments for achieving specific goals or milestones."
            }
        },
        {
            "@type": "Question",
            "name": "How does a tiered commission structure work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A tiered structure pays increasing commission rates as sales volume crosses set thresholds. Sales in each tier are typically commissioned at that tier's rate, so a single deal can span multiple rates."
            }
        },
        {
            "@type": "Question",
            "name": "What is a sales compensation plan?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A sales compensation plan is the full pay structure for a sales role — usually a combination of base salary, commission, and bonuses — designed to align rep pay with company revenue goals."
            }
        }
    ]
}
</script>
@endpush
@endsection
