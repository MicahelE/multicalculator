@extends('layouts.app')

@section('content')
@include('partials.calculator-hero')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="calculator-card border-teal">
                <h2 id="cagrpage" class="text-center section-heading">CAGR Calculator</h2>

                <form>
                    <label for="cagrInputnumber1">Compound Annual Growth Rate (CAGR)</label>
                    <input type="number" class="form-control" id="cagrInputnumber1" aria-describedby="numberHelp" placeholder="Enter amount">
                    <label for="cagrInputnumber2">Number of periods</label>
                    <input type="number" class="form-control" id="cagrInputnumber2" aria-describedby="numberHelp">
                    <label for="cagrInputnumber3">Initial value</label>
                    <input type="number" class="form-control" id="cagrInputnumber3" aria-describedby="numberHelp">
                </form>

                <div class="results-section">
                    <h5>Results</h5>
                    <label for="cagrInputnumber4">Final value</label>
                    <input type="number" class="form-control" id="cagrInputnumber4" aria-describedby="numberHelp">
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.related-calculators')

<div class="container">
    <article class="calculator-guide">
        <h2>Understanding CAGR Calculator: A Comprehensive Guide</h2>

        <h3>What is CAGR?</h3>
        <p>Compound Annual Growth Rate (CAGR) is a key financial metric that measures the mean annual growth rate of an investment over a specified time period. It represents the steady rate at which an investment would have grown if it grew at a constant rate, which rarely occurs in reality.</p>

        <h3>How to Calculate CAGR</h3>
        <p>The CAGR formula is:</p>
        <div class="card bg-light p-3 mb-4">
            <p class="mb-0"><strong>CAGR = (Final Value / Initial Value)^(1/n) - 1</strong></p>
            <small>Where 'n' is the number of years</small>
        </div>

        <h3>Common Uses for CAGR Calculator</h3>
        <ul>
            <li><strong>Investment Analysis:</strong> Evaluate portfolio performance and compare different investments</li>
            <li><strong>Business Growth:</strong> Measure company revenue or profit growth over time</li>
            <li><strong>Market Analysis:</strong> Analyze market size growth and industry trends</li>
            <li><strong>Financial Planning:</strong> Project future values of investments and savings</li>
        </ul>

        <h3>When to Use CAGR</h3>
        <p>CAGR is particularly useful when:</p>
        <ul>
            <li>Comparing investments with different time periods</li>
            <li>Analyzing growth trends in business metrics</li>
            <li>Making long-term investment decisions</li>
            <li>Smoothing out volatile year-over-year growth rates</li>
        </ul>

        <h3>Advantages of Using CAGR</h3>
        <ul>
            <li>Provides a smoothed growth rate over time</li>
            <li>Easy to compare different investments</li>
            <li>Accounts for compounding effects</li>
            <li>Widely used in financial analysis</li>
        </ul>

        <div class="calculator-faq mt-4">
            <h3>Frequently Asked Questions</h3>

            <h4>What's the difference between CAGR and average return?</h4>
            <p>CAGR accounts for the compounding effect of growth over time, while average return simply takes the arithmetic mean of periodic returns. CAGR typically provides a more accurate picture of investment growth.</p>

            <h4>When should I not use CAGR?</h4>
            <p>CAGR may not be suitable for:</p>
            <ul>
                <li>Short-term analysis (less than a year)</li>
                <li>Highly volatile investments where year-by-year analysis is important</li>
                <li>Predicting future performance (CAGR is historical)</li>
            </ul>

            <h4>Can CAGR be negative?</h4>
            <p>Yes, CAGR can be negative if the final value is less than the initial value, indicating a loss over the time period.</p>
        </div>

        <div class="pro-tips mt-4">
            <h3>Pro Tips for Using Our CAGR Calculator</h3>
            <ul>
                <li>Always use consistent time periods for accurate comparisons</li>
                <li>Consider using multiple time periods to get a better picture of growth</li>
                <li>Remember that past CAGR doesn't guarantee future performance</li>
                <li>Use CAGR alongside other metrics for comprehensive analysis</li>
            </ul>
        </div>
    </article>
</div>
@endsection
