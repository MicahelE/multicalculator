@extends('layouts.app')

@section('content')
@include('partials.calculator-hero')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="calculator-card border-secondary">
                <h2 id="monthly-incomepage" class="text-center section-heading">Monthly Income Calculator</h2>

                <form>
                    <label for="monthlyInputnumber1">Hourly</label>
                    <input type="number" class="form-control" id="monthlyInputnumber1" aria-describedby="numberHelp" placeholder="Enter number">
                    <label for="monthlyInputnumber2">Daily</label>
                    <input type="number" class="form-control" id="monthlyInputnumber2" aria-describedby="numberHelp" placeholder="Enter number">
                    <label for="monthlyInputnumber3">Weekly</label>
                    <input type="number" class="form-control" id="monthlyInputnumber3" aria-describedby="numberHelp" placeholder="Enter number">
                    <label for="monthlyInputnumber4">Yearly</label>
                    <input type="number" class="form-control" id="monthlyInputnumber4" aria-describedby="numberHelp" placeholder="Enter number">

                    <div class="results-section">
                        <h5>Results</h5>
                        <label for="results">Monthly Income</label>
                        <textarea name="" id="results" cols="42" rows="3" disabled></textarea>
                    </div>

                    <div class="mt-3">
                        <input type="checkbox" id="adjust" name="scales" /> <label for="adjust" style="display: inline; margin-top: 0;">Total overtime pay</label>
                        <label id="label5" for="monthlyInputnumber5">Hours Per Week</label>
                        <input type="number" class="form-control" id="monthlyInputnumber5" aria-describedby="numberHelp" placeholder="Enter number" value="40">
                        <label id="label6" for="monthlyInputnumber6">Days Per Week</label>
                        <input type="number" class="form-control" id="monthlyInputnumber6" aria-describedby="numberHelp" placeholder="Enter number" value="5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('partials.related-calculators')

<div class="container">
    <article class="calculator-guide">
        <h2>Monthly Income Calculator: Master Your Salary Calculations</h2>

        <h3>Understanding Monthly Income Calculations</h3>
        <p>Converting different pay periods to monthly income is essential for budgeting and financial planning. Whether you're paid hourly, daily, weekly, or annually, our calculator helps you determine your monthly earnings accurately.</p>

        <h3>How to Calculate Monthly Income</h3>
        <div class="card bg-light p-3 mb-4">
            <h4>Common Conversions:</h4>
            <ul class="mb-0">
                <li><strong>Hourly to Monthly:</strong> Hourly Rate x Hours per Week x 52 weeks / 12 months</li>
                <li><strong>Daily to Monthly:</strong> Daily Rate x Working Days per Month</li>
                <li><strong>Weekly to Monthly:</strong> Weekly Rate x 52 weeks / 12 months</li>
                <li><strong>Annual to Monthly:</strong> Yearly Salary / 12 months</li>
            </ul>
        </div>

        <h3>Key Features of Our Calculator</h3>
        <ul>
            <li><strong>Multiple Pay Period Options:</strong> Convert from any pay frequency</li>
            <li><strong>Overtime Adjustments:</strong> Account for extra hours</li>
            <li><strong>Flexible Hours:</strong> Customize your work schedule</li>
            <li><strong>Accurate Results:</strong> Precise calculations for better planning</li>
        </ul>

        <h3>Common Uses</h3>
        <ul>
            <li><strong>Budgeting:</strong> Plan monthly expenses accurately</li>
            <li><strong>Job Comparison:</strong> Compare different job offers</li>
            <li><strong>Financial Planning:</strong> Set savings goals</li>
            <li><strong>Loan Applications:</strong> Verify monthly income</li>
        </ul>

        <div class="calculator-faq mt-4">
            <h3>Frequently Asked Questions</h3>

            <h4>How do holidays affect monthly income?</h4>
            <p>Paid holidays are typically included in your monthly income. For hourly workers, holiday pay policies vary by employer.</p>

            <h4>What about variable income?</h4>
            <p>For irregular income:</p>
            <ul>
                <li>Calculate average monthly income over 3-6 months</li>
                <li>Consider seasonal variations</li>
                <li>Include all income sources</li>
            </ul>

            <h4>Should I include bonuses in monthly calculations?</h4>
            <p>While bonuses can be included, it's often better to calculate base monthly income separately for more accurate regular budgeting.</p>
        </div>

        <div class="pro-tips mt-4">
            <h3>Tips for Income Management</h3>
            <ul>
                <li>Track your income sources regularly</li>
                <li>Consider tax implications</li>
                <li>Plan for income fluctuations</li>
                <li>Keep detailed income records</li>
            </ul>
        </div>
    </article>
</div>
@endsection
