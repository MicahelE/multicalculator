@extends('layouts.app')

@section('content')
<section class="home-hero">
    <div class="container">
        <div class="row py-4 align-items-center">
            <div class="col-lg-7">
                <h1 class="mb-4">Your All-in-One Financial Calculator Suite</h1>
                <p class="lead mb-4">Simplify your financial decisions with MultiCalculator - your trusted companion for all calculations that matter. Whether you're calculating salaries, pricing products, or planning investments, we provide accurate, instant results to help you make informed decisions.</p>

                <h2 class="h3 mb-3">Why Choose MultiCalculator?</h2>
                <ul class="list-unstyled">
                    <li class="mb-2 d-flex align-items-center">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        Free, instant calculations for business and personal use
                    </li>
                    <li class="mb-2 d-flex align-items-center">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        User-friendly interface with clear results
                    </li>
                    <li class="mb-2 d-flex align-items-center">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        Comprehensive suite of financial tools
                    </li>
                    <li class="mb-2 d-flex align-items-center">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        Accurate results you can trust
                    </li>
                </ul>
            </div>
            <div class="col-lg-5">
                <img src="{{ asset('images/multicalculator.jpg') }}" alt="MultiCalculator Suite" class="img-fluid mb-4 rounded" style="box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4" style="font-weight: 700;">Our Calculator Suite</h2>
        <div class="row">
            @foreach(config('seo.calculators') as $key => $calc)
            <div class="col-md-3 col-sm-6 mb-4">
                <a href="{{ $calc['url'] }}" class="calculator-grid-card">
                    <div class="card-icon" style="background: {{ $calc['color'] }};">
                        <i class="{{ $calc['icon'] }}"></i>
                    </div>
                    <h3>{{ $calc['name'] }}</h3>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="features-section py-5" style="background: #fff;">
    <div class="container">
        <h2 class="text-center mb-5" style="font-weight: 700;">Everything You Need in One Place</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100" style="border-radius: var(--radius); box-shadow: var(--shadow-sm);">
                    <div class="card-body text-center">
                        <div class="feature-icon">
                            <i class="fas fa-wallet fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 card-title">Income Calculations</h3>
                        <p class="card-text">From basic salary calculations to complex overtime and raise computations, get accurate results instantly.</p>
                        <ul class="list-unstyled">
                            <li>&#10003; Monthly Income</li>
                            <li>&#10003; Overtime Pay</li>
                            <li>&#10003; Pay Raises</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100" style="border-radius: var(--radius); box-shadow: var(--shadow-sm);">
                    <div class="card-body text-center">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line fa-2x" style="color: var(--secondary);"></i>
                        </div>
                        <h3 class="h5 card-title">Business Tools</h3>
                        <p class="card-text">Essential calculators for business owners and managers to make informed pricing and financial decisions.</p>
                        <ul class="list-unstyled">
                            <li>&#10003; Markup Calculator</li>
                            <li>&#10003; Discount Analysis</li>
                            <li>&#10003; Average Calculator</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100" style="border-radius: var(--radius); box-shadow: var(--shadow-sm);">
                    <div class="card-body text-center">
                        <div class="feature-icon" style="background: #FEF3C7;">
                            <i class="fas fa-chart-pie fa-2x" style="color: var(--warning);"></i>
                        </div>
                        <h3 class="h5 card-title">Investment Planning</h3>
                        <p class="card-text">Make better investment decisions with our comprehensive financial planning tools.</p>
                        <ul class="list-unstyled">
                            <li>&#10003; CAGR Calculator</li>
                            <li>&#10003; Growth Analysis</li>
                            <li>&#10003; Return Calculations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-section py-5" style="background: linear-gradient(rgba(0,0,0,0.05), rgba(0,0,0,0.05));">
    <div class="container">
        <h2 class="text-center mb-5" style="font-weight: 700;">Why Users Love MultiCalculator</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 testimonial-card" style="border-radius: var(--radius);">
                    <div class="card-body">
                        <div class="mb-3" style="color: var(--warning);">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="card-text">"Perfect for quick calculations at work. Saves me so much time!"</p>
                        <footer class="blockquote-footer mt-2">Business Professional</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 testimonial-card" style="border-radius: var(--radius);">
                    <div class="card-body">
                        <div class="mb-3" style="color: var(--warning);">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="card-text">"The most comprehensive calculator suite I've found online. And it's free!"</p>
                        <footer class="blockquote-footer mt-2">Financial Analyst</footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 testimonial-card" style="border-radius: var(--radius);">
                    <div class="card-body">
                        <div class="mb-3" style="color: var(--warning);">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="card-text">"User-friendly interface and accurate results. Exactly what I needed."</p>
                        <footer class="blockquote-footer mt-2">Small Business Owner</footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 text-white" style="background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);">
    <div class="container text-center">
        <h2 class="mb-4" style="font-weight: 700;">Start Calculating Now</h2>
        <p class="lead mb-4">Choose from our suite of calculators and make informed decisions today.</p>
        <a href="/average" class="btn btn-light btn-lg" style="font-weight: 600; border-radius: var(--radius-sm);">Try Our Most Popular Calculator</a>
    </div>
</section>
@endsection
