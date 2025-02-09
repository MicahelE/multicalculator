<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.google-analytics')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pay Raise Calculator </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">MULTICALCULATOR</a>
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
                    <a class="nav-link" href="/commission">Commission</a>
                  </li>
              </ul>
            </div>
          </nav>
        <div class="container">
            <div class="list-programs-title">
           
                <h1 id="payraise" class= "text-center ">Pay Raise Calculator <i id="favToolImg" class="hideden" style="cursor: pointer; font-size:large;" aria-hidden="true" title="make it favourite"></i></h1>
</div>
            {{-- <h1 class= "text-center ">Average Calculator</h1> --}}
            <div class="row ">
 
<div class="col-4">

    <form class="mt-5">
        <h5>Pay before raise</h5>
        <label for="payInputnumber">Hours per week</label>
          <input type="number" class="form-control" id="payInputnumber" aria-describedby="numberHelp" placeholder="Hours per week" value="40" >
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
<div class="col-4">

    <form class="mt-5">
        <h5>Raise</h5>
        <label for="raisenumber">Percentage raise</label>
          <input type="number" class="form-control" id="raisenumber" aria-describedby="numberHelp" placeholder="Percentage %" >
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
<div class="col-4">

    <form class="mt-5">
        <h5>Pay after raise</h5>
        <label for="afterraisenumber2">Hourly</label>  
        <input type="number" class="form-control" id="afterraisenumber" aria-describedby="numberHelp" placeholder="Hourly" >
          <label for="afterraisenumber3">Weekly</label>
          <input type="number" class="form-control" id="afterraisenumber2" aria-describedby="numberHelp" placeholder="Weekly">
          <label for="afterraisenumber4">Monthly</label>
          <input type="number" class="form-control" id="afterraisenumber3" aria-describedby="numberHelp" placeholder="Monthly">
          <label for="afterraisenumber5">Annual</label>
          <input type="number" class="form-control" id="afterraisenumber4" aria-describedby="numberHelp" placeholder="Annual">
        
        
      </form>

</div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- <script src="resources/js/script.js"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Add SEO-friendly content section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <article class="calculator-guide">
                    <h2>Pay Raise Calculator: Understand Your Salary Increase</h2>
                    
                    <h3>Understanding Pay Raises</h3>
                    <p>A pay raise or salary increase represents the amount your compensation grows from its current rate. Understanding how pay raises affect your income is crucial for career planning and financial management.</p>

                    <h3>How to Calculate a Pay Raise</h3>
                    <div class="card bg-light p-3 mb-4">
                        <h4>Basic Calculations:</h4>
                        <ul class="mb-0">
                            <li><strong>Raise Amount:</strong> Current Salary × Raise Percentage</li>
                            <li><strong>New Salary:</strong> Current Salary + Raise Amount</li>
                            <li><strong>Percentage Increase:</strong> (Raise Amount ÷ Current Salary) × 100</li>
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
        </div>
    </div>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    </body>
</html>
