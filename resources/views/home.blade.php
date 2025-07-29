<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.google-analytics')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Multi-Calculator</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        <!-- Add Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
        <!-- Add custom styles -->
        <style>
            .feature-icon {
                height: 64px;
                width: 64px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                background: rgba(0,0,0,0.05);
                margin-bottom: 1rem;
            }
            
            .testimonial-section {
                position: relative;
            }
            
            .testimonial-card {
                backdrop-filter: blur(10px);
                background: rgba(255,255,255,0.9);
            }
        </style>
    </head>
    <body class="antialiased">

        {{-- <div class="container"> --}}
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">MULTICALCULATOR</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/average">Average</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/discount">Discount</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/payraise">Payraise</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/markup">Markup</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/monthly-income">Monthly-Income</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/overtime">Overtime</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/cagr">CAGR</a>
                      </li>
                  </ul>
                </div>
              </nav>
{{-- </div> --}}
<section class="hero-section py-5 bg-light">
  <div class="container">
    <div class="row py-5 align-items-center">
      <div class="col-lg-7">
        <h1 class="display-4 mb-4">Your All-in-One Financial Calculator Suite</h1>
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
        <img src="{{ asset('images/multicalculator.jpg') }}" alt="MultiCalculator Suite" class="img-fluid mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="h4 mb-3">Our Calculator Suite</h3>
            <div class="list-group">
              <a href="/monthly-income" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                Monthly Income Calculator
                <span class="badge badge-primary badge-pill">Income</span>
              </a>
              <a href="/overtime" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                Overtime Calculator
                <span class="badge badge-primary badge-pill">Salary</span>
              </a>
              <a href="/payraise" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                Pay Raise Calculator
                <span class="badge badge-success badge-pill">Careers</span>
              </a>
              <a href="/markup" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                Markup Calculator
                <span class="badge badge-info badge-pill">Business</span>
              </a>
              <a href="/discount" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                Discount Calculator
                <span class="badge badge-info badge-pill">Retail</span>
              </a>
              <a href="/cagr" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                CAGR Calculator
                <span class="badge badge-warning badge-pill">Investment</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="features-section py-5">
  <div class="container">
    <h2 class="text-center mb-5">Everything You Need in One Place</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <div class="feature-icon">
              <i class="fas fa-wallet fa-2x text-primary"></i>
            </div>
            <h3 class="h5 card-title">Income Calculations</h3>
            <p class="card-text">From basic salary calculations to complex overtime and raise computations, get accurate results instantly.</p>
            <ul class="list-unstyled">
              <li>✓ Monthly Income</li>
              <li>✓ Overtime Pay</li>
              <li>✓ Pay Raises</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <div class="feature-icon">
              <i class="fas fa-chart-line fa-2x text-info"></i>
            </div>
            <h3 class="h5 card-title">Business Tools</h3>
            <p class="card-text">Essential calculators for business owners and managers to make informed pricing and financial decisions.</p>
            <ul class="list-unstyled">
              <li>✓ Markup Calculator</li>
              <li>✓ Discount Analysis</li>
              <li>✓ Average Calculator</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <div class="feature-icon">
              <i class="fas fa-chart-pie fa-2x text-warning"></i>
            </div>
            <h3 class="h5 card-title">Investment Planning</h3>
            <p class="card-text">Make better investment decisions with our comprehensive financial planning tools.</p>
            <ul class="list-unstyled">
              <li>✓ CAGR Calculator</li>
              <li>✓ Growth Analysis</li>
              <li>✓ Return Calculations</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonial-section py-5" style="background: url({{ asset('images/testimonial-bg.jpg') }}) center center/cover;">
  <div class="container">
    <h2 class="text-center mb-5">Why Users Love MultiCalculator</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <p class="card-text">"Perfect for quick calculations at work. Saves me so much time!"</p>
            <footer class="blockquote-footer">Business Professional</footer>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <p class="card-text">"The most comprehensive calculator suite I've found online. And it's free!"</p>
            <footer class="blockquote-footer">Financial Analyst</footer>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <p class="card-text">"User-friendly interface and accurate results. Exactly what I needed."</p>
            <footer class="blockquote-footer">Small Business Owner</footer>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section py-5 text-white" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url({{ asset('images/cta-bg.jpg') }}) center center/cover;">
  <div class="container text-center">
    <h2 class="mb-4">Start Calculating Now</h2>
    <p class="lead mb-4">Choose from our suite of calculators and make informed decisions today.</p>
    <a href="/average" class="btn btn-primary btn-lg">Try Our Most Popular Calculator</a>
  </div>
</section>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- <script src="resources/js/script.js"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    </body>
</html>
