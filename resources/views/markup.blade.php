@extends('layouts.app')

@section('content')
@include('partials.calculator-hero')

<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="calculator-card border-danger">
                <h2 id="markuppage" class="text-center section-heading">Markup Calculator</h2>

                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <label for="markupInputnumber1">Cost</label>
                            <input type="number" class="form-control" id="markupInputnumber1" aria-describedby="numberHelp" placeholder="Enter amount">
                            <label for="markupInputnumber2">Markup</label>
                            <input type="number" class="form-control" id="markupInputnumber2" aria-describedby="numberHelp" placeholder="in percentage %">
                        </form>
                    </div>

                    <div class="col-md-6">
                        <div class="results-section" style="margin-top: 0;">
                            <h5>Results</h5>
                            <label for="markupInputnumber3">Revenue</label>
                            <input type="number" class="form-control" id="markupInputnumber3" aria-describedby="numberHelp" placeholder="">
                            <label for="markupInputnumber4">Profit</label>
                            <input type="number" class="form-control" id="markupInputnumber4" aria-describedby="numberHelp" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.related-calculators')

<div class="container">
    <article class="calculator-guide">
        <h2>Markup Calculator: Essential Tool for Business Pricing</h2>

        <h3>What is Markup?</h3>
        <p>Markup is the difference between a product's selling price and its cost, expressed as a percentage of the cost. It's a crucial metric for businesses to ensure profitability while remaining competitive in the market.</p>

        <h3>How to Calculate Markup</h3>
        <p>The markup calculation involves these steps:</p>
        <div class="card bg-light p-3 mb-4">
            <p class="mb-0"><strong>Markup Percentage = ((Selling Price - Cost) / Cost) x 100</strong></p>
            <p class="mb-0"><strong>Selling Price = Cost + (Cost x Markup Percentage)</strong></p>
        </div>

        <h3>Why Use a Markup Calculator?</h3>
        <ul>
            <li><strong>Accurate Pricing:</strong> Set prices that cover costs and generate desired profit</li>
            <li><strong>Quick Decisions:</strong> Make rapid pricing adjustments for different scenarios</li>
            <li><strong>Competitive Analysis:</strong> Compare different markup strategies</li>
            <li><strong>Profit Planning:</strong> Project revenue and profit margins</li>
        </ul>

        <h3>Industry-Specific Markup Guidelines</h3>
        <ul>
            <li><strong>Retail:</strong> Typically 30-50% for general merchandise</li>
            <li><strong>Restaurants:</strong> Food items often marked up 200-300%</li>
            <li><strong>Electronics:</strong> Usually 20-40% markup</li>
            <li><strong>Luxury Goods:</strong> Can exceed 100% markup</li>
        </ul>

        <h3>Factors Affecting Markup Decisions</h3>
        <ul>
            <li>Operating costs and overhead</li>
            <li>Market competition</li>
            <li>Product uniqueness</li>
            <li>Target customer base</li>
            <li>Industry standards</li>
        </ul>

        <div class="calculator-faq mt-4">
            <h3>Frequently Asked Questions</h3>

            <h4>What's the difference between markup and margin?</h4>
            <p>While both relate to profit, markup is calculated as a percentage of cost, while margin is calculated as a percentage of selling price. A 50% markup equals a 33.33% margin.</p>

            <h4>How do I determine the right markup percentage?</h4>
            <p>Consider these factors:</p>
            <ul>
                <li>Total business costs and overhead</li>
                <li>Competitor pricing</li>
                <li>Customer price sensitivity</li>
                <li>Industry standard markups</li>
            </ul>

            <h4>Should markup be consistent across all products?</h4>
            <p>Not necessarily. Different products may require different markups based on:</p>
            <ul>
                <li>Product category and type</li>
                <li>Sales volume</li>
                <li>Storage and handling costs</li>
                <li>Market positioning</li>
            </ul>
        </div>

        <div class="pro-tips mt-4">
            <h3>Pro Tips for Pricing Strategy</h3>
            <ul>
                <li>Consider seasonal pricing adjustments</li>
                <li>Monitor competitor pricing regularly</li>
                <li>Track price elasticity of your products</li>
                <li>Review and adjust markups periodically</li>
                <li>Account for all costs in your pricing strategy</li>
            </ul>
        </div>

        <div class="best-practices mt-4">
            <h3>Best Practices for Using Markup Calculator</h3>
            <ul>
                <li>Include all costs in your base price calculation</li>
                <li>Consider volume discounts in your pricing strategy</li>
                <li>Test different markup scenarios</li>
                <li>Document your pricing decisions</li>
            </ul>
        </div>
    </article>
</div>
@endsection
