<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Discount Calculator</title>

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
           
                <h1 id="discountpage" class= "text-center ">Discount Calculator <i id="favToolImg" class="hideden" style="cursor: pointer; font-size:large;" aria-hidden="true" title="make it favourite"></i></h1>
</div>
            {{-- <h1 class= "text-center ">discount Calculator</h1> --}}
            
 <div id="count1">
  <div class="row ">
<div class="col ">

    <form class="mt-5">
        <label for="discountpay">What type of discount?</label>  <select name="discountpay" id="discountpay">
                
            <option value="1">% off</option>
            <option value="2">% off on 2nd product</option>
            <option value="3">% off on 3rd product</option>
            <option value="4">fixed amount off</option>
            <option value="5">2 for 1</option>
            <option value="6">3 for 2</option>
            <option value="7">4 for 3</option>
            <option value="8">double discount</option>
            <option value="9">triple discount</option>
            <option value="10">discount on multiple units</option>
          </select>
          <br>
         Original Price <input type="number" class="form-control" id="discountInputnumber1" aria-describedby="numberHelp" placeholder="Enter amount" >
          Discount <input type="number" class="form-control" id="discountInputnumber2" aria-describedby="numberHelp" placeholder="%">
        
        
      </form>

</div>

<div class="col ">
    <h5 class="">Results</h5>
        
    <form class="mt-5">
    You Pay <input type="number" class="form-control" id="discountInputnumber3" aria-describedby="numberHelp" placeholder="" >
   You're saving <input type="number" class="form-control" id="discountInputnumber4" aria-describedby="numberHelp" placeholder="">
</form>
</div>

</div>

</div>
{{-- count --}}
<div id="count2">
  <div class="row">
  <div class="col ">
  
      <form class="mt-5">
          <label for="discountpay">What type of discount?</label>  <select name="discountpay" id="discountpay">
                  
              <option value="1">% off</option>
              <option value="2">% off on 2nd product</option>
              <option value="3">% off on 3rd product</option>
              <option value="4">fixed amount off</option>
              <option value="5">2 for 1</option>
              <option value="6">3 for 2</option>
              <option value="7">4 for 3</option>
              <option value="8">double discount</option>
              <option value="9">triple discount</option>
              <option value="10">discount on multiple units</option>
            </select>
            <br>
           Discount <input type="number" class="form-control" id="discountInputnumber1" aria-describedby="numberHelp" placeholder="%" >
            Product 1 <input type="number" class="form-control" id="discountInputnumber2" aria-describedby="numberHelp" placeholder="Product 1">
            Product 2 <input type="number" class="form-control" id="discountInputnumber2" aria-describedby="numberHelp" placeholder="Product 2">
          
          
        </form>
  
  </div>
  
  <div class="col ">
      <h5 class="">Results</h5>
          
      <form class="mt-5">
      You Pay <input type="number" class="form-control" id="discountInputnumber3" aria-describedby="numberHelp" placeholder="" >
      One item costs on average <input type="number" class="form-control" id="discountInputnumber3" aria-describedby="numberHelp" placeholder="" >
     You're saving <input type="number" class="form-control" id="discountInputnumber4" aria-describedby="numberHelp" placeholder="">
  </form>
  </div>
  
  </div> 
</div>

        </div>


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- <script src="resources/js/script.js"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    </body>
</html>
