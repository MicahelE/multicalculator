@extends('layouts.app')

@section('content')
@include('partials.calculator-hero')

<div class="container">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="calculator-card border-success">
                <h2 id="payraise" class="text-center section-heading">Pay Raise Calculator</h2>

                <div class="row payraise-grid">
                    <div class="col-md-4">
                        <form>
                            <h5 class="section-heading">Pay before raise</h5>
                            <label for="payInputnumber">Hours per week</label>
                            <input type="number" class="form-control" id="payInputnumber" aria-describedby="numberHelp" placeholder="Hours per week" value="40">
                            <label for="payInputnumber2">Hourly</label>
                            <input type="number" class="form-control" id="payInputnumber2" aria-describedby="numberHelp" placeholder="Hourly">
                            <label for="payInputnumber3">Weekly</label>
                            <input type="number" class="form-control" id="payInputnumber3" aria-describedby="numberHelp" placeholder="Weekly">
                            <label for="payInputnumber4">Monthly</label>
                            <input type="number" class="form-control" id="payInputnumber4" aria-describedby="numberHelp" placeholder="Monthly">
                            <label for="payInputnumber5">Annual</label>
                            <input type="number" class="form-control" id="payInputnumber5" aria-describedby="numberHelp" placeholder="Annual">
                        </form>
                    </div>

                    <div class="col-md-4">
                        <form>
                            <h5 class="section-heading">Raise</h5>
                            <label for="raisenumber">Percentage raise</label>
                            <input type="number" class="form-control" id="raisenumber" aria-describedby="numberHelp" placeholder="Percentage %">
                            <label for="raisenumber2">Hourly</label>
                            <input type="number" class="form-control" id="raisenumber2" aria-describedby="numberHelp" placeholder="Hourly">
                            <label for="raisenumber3">Weekly</label>
                            <input type="number" class="form-control" id="raisenumber3" aria-describedby="numberHelp" placeholder="Weekly">
                            <label for="raisenumber4">Monthly</label>
                            <input type="number" class="form-control" id="raisenumber4" aria-describedby="numberHelp" placeholder="Monthly">
                            <label for="raisenumber5">Annual</label>
                            <input type="number" class="form-control" id="raisenumber5" aria-describedby="numberHelp" placeholder="Annual">
                        </form>
                    </div>

                    <div class="col-md-4">
                        <div class="results-section" style="margin-top: 0;">
                            <h5>Pay after raise</h5>
                            <label for="afterraisenumber">Hourly</label>
                            <input type="number" class="form-control" id="afterraisenumber" aria-describedby="numberHelp" placeholder="Hourly">
                            <label for="afterraisenumber2">Weekly</label>
                            <input type="number" class="form-control" id="afterraisenumber2" aria-describedby="numberHelp" placeholder="Weekly">
                            <label for="afterraisenumber3">Monthly</label>
                            <input type="number" class="form-control" id="afterraisenumber3" aria-describedby="numberHelp" placeholder="Monthly">
                            <label for="afterraisenumber4">Annual</label>
                            <input type="number" class="form-control" id="afterraisenumber4" aria-describedby="numberHelp" placeholder="Annual">
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
        <h2>Pay Raise Calculator: Understand Your Salary Increase</h2>

        <h3>Understanding Pay Raises</h3>
        <p>A pay raise or salary increase represents the amount your compensation grows from its current rate. Understanding how pay raises affect your income is crucial for career planning and financial management.</p>

        <h3>How to Calculate a Pay Raise</h3>
        <div class="card bg-light p-3 mb-4">
            <h4>Basic Calculations:</h4>
            <ul class="mb-0">
                <li><strong>Raise Amount:</strong> Current Salary x Raise Percentage</li>
                <li><strong>New Salary:</strong> Current Salary + Raise Amount</li>
                <li><strong>Percentage Increase:</strong> (Raise Amount / Current Salary) x 100</li>
            </ul>
        </div>

        <h3>Types of Pay Raises</h3>
        <ul>
            <li><strong>Merit-Based:</strong> Performance-related increases</li>
            <li><strong>Cost of Living:</strong> Inflation-adjusted raises</li>
            <li><strong>Promotion:</strong> New position/responsibility increases</li>
            <li><strong>Market Adjustment:</strong> Competitive alignment raises</li>
        </ul>

        <h3>Impact of Pay Raises</h3>
        <ul>
            <li><strong>Short-Term:</strong> Immediate income increase</li>
            <li><strong>Long-Term:</strong> Compound effect on future earnings</li>
            <li><strong>Benefits:</strong> Potential impact on bonuses and benefits</li>
            <li><strong>Retirement:</strong> Effect on retirement contributions</li>
        </ul>

        <div class="calculator-faq mt-4">
            <h3>Frequently Asked Questions</h3>

            <h4>What is a typical annual raise?</h4>
            <p>Average annual raises typically range from 3-5%, though this varies by:</p>
            <ul>
                <li>Industry standards</li>
                <li>Company performance</li>
                <li>Individual performance</li>
                <li>Economic conditions</li>
            </ul>

            <h4>How do raises affect tax brackets?</h4>
            <p>A significant raise might move you into a higher tax bracket. Consider the net impact after taxes when evaluating a raise.</p>
        </div>

        <div class="pro-tips mt-4">
            <h3>Maximizing Your Pay Raise</h3>
            <ul>
                <li>Research industry salary standards</li>
                <li>Document your achievements</li>
                <li>Time your raise request strategically</li>
                <li>Consider the total compensation package</li>
            </ul>
        </div>
    </article>
</div>
@endsection
