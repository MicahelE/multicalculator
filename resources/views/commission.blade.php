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
        <h2>Sales Commission Calculator: Calculate Your Earnings</h2>

        <h3>What is Sales Commission?</h3>
        <p>Sales commission is a form of compensation paid to salespeople based on the amount of sales they generate. It's typically calculated as a percentage of the sale price and serves as an incentive to drive revenue.</p>

        <h3>How to Calculate Commission</h3>
        <div class="card bg-light p-3 mb-4">
            <p class="mb-0"><strong>Commission = Sale Price x Commission Rate (%)</strong></p>
        </div>

        <h3>Types of Commission Structures</h3>
        <ul>
            <li><strong>Flat Rate:</strong> Fixed percentage on all sales</li>
            <li><strong>Tiered:</strong> Higher percentages for higher sales volumes</li>
            <li><strong>Draw Against Commission:</strong> Guaranteed base with commission on top</li>
            <li><strong>Residual:</strong> Ongoing commission from recurring sales</li>
        </ul>

        <h3>Common Commission Rates by Industry</h3>
        <ul>
            <li><strong>Real Estate:</strong> 5-6% of sale price</li>
            <li><strong>Retail:</strong> 1-10% depending on product</li>
            <li><strong>Insurance:</strong> 5-15% of premium</li>
            <li><strong>SaaS/Software:</strong> 8-15% of contract value</li>
        </ul>

        <div class="calculator-faq mt-4">
            <h3>Frequently Asked Questions</h3>

            <h4>What is a good commission rate?</h4>
            <p>Commission rates vary widely by industry. A "good" rate depends on the product, sales cycle length, and base salary provided.</p>

            <h4>How are commissions taxed?</h4>
            <p>Commissions are taxed as regular income. Your employer may withhold at a supplemental rate, but the final tax is calculated at your marginal rate.</p>

            <h4>What is the difference between commission and bonus?</h4>
            <p>Commission is tied directly to sales performance and is typically ongoing, while bonuses are usually one-time payments for achieving specific goals or milestones.</p>
        </div>

        <div class="pro-tips mt-4">
            <h3>Tips for Maximizing Commission Earnings</h3>
            <ul>
                <li>Understand your commission structure thoroughly</li>
                <li>Track all sales and projected earnings</li>
                <li>Focus on high-value accounts and products</li>
                <li>Negotiate your commission rate based on performance</li>
            </ul>
        </div>
    </article>
</div>
@endsection
