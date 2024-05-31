<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Overtime Calculator</title>

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
              </ul>
            </div>
          </nav>
        <div class="container">
            <div class="list-programs-title">
           
                <h1 id="overtimepage" class= "text-center ">Overtime Calculator <i id="favToolImg" class="hideden" style="cursor: pointer; font-size:large;" aria-hidden="true" title="make it favourite"></i></h1>
</div>
            {{-- <h1 class= "text-center ">monthly-income Calculator</h1> --}}
            <div class="row ">
 
<div class="col-4 mx-auto">

    <form class="mt-5">
        <h5>Regular work time</h5>
        <label for="overtimeInputnumber1">Regular pay</label> <div class="flex-inline"> 
        
          <input type="number" class="form-control" id="overtimeInputnumber1" aria-describedby="numberHelp" placeholder="Enter number" ><select name="time" id="time">
            <option value="1">Hour</option>
            <option value="2">Day</option>
            <option value="3">Week</option>
            <option value="4">Month</option>
          </select></div>
<br>
<label for="overtimeInputnumber1">Regular work time</label> <div class="flex-inline"> 

          <input type="number" class="form-control" id="overtimeInputnumber2" aria-describedby="numberHelp" placeholder="Enter number" value="8"><select name="time2" id="time2">
            <option value="1">Hours</option>
            <option value="2">Day</option>
            
          </select>
          <select name="time3" id="time3">
            <option value="2">Day</option>
            <option selected="selected" value="3">Week</option>
            <option value="4">Month</option>
          </select>
          </div>
          <label for="overtimeInputnumber1">Total regular pay</label>       <div class="flex-inline"> 
   
            <textarea name="" id="results" cols="42" rows="2" disabled></textarea>
            <select name="time4" id="time4">
                
                <option value="3">Week</option>
                <option value="4" selected>Month</option>
                <option value="5">Year</option>
              </select>
          </div>
           
          <input type="number" class="form-control" id="overtimeInputnumber3" aria-describedby="numberHelp" placeholder="Enter number" hidden>
         
          <input type="number" class="form-control" id="overtimeInputnumber4" aria-describedby="numberHelp" placeholder="Enter number" hidden>
         <br>
         <br>
          <h5>Overtime</h5>
          <label for="overtimeInputnumber7">Overtime pay multiplier</label>
          <input type="number" class="form-control" id="overtimeInputnumber7" aria-describedby="numberHelp" placeholder="Enter number" value="1.5">
          <label for="overtimeInputnumber8">Overtime pay</label><div class="flex-inline">  
          <input type="number" class="form-control" id="overtimeInputnumber8" aria-describedby="numberHelp" placeholder="Enter number"><select name="time5" id="time5">
            <option value="1">Hour</option>
            <option value="2">Day</option>
            <option value="3">Week</option>
            <option value="4">Month</option>
          </select> </div>
          <label for="overtimeInputnumber9">Overtime hours</label><div class="flex-inline"> 
          <input type="number" class="form-control" id="overtimeInputnumber9" aria-describedby="numberHelp" placeholder="Enter number">
          <select name="time6" id="time6">
            <option value="1">Hours</option>
            <option value="2">Day</option>
            
          </select>
          <select name="time7" id="time7">
            <option value="2">Day</option>
            <option value="3">Week</option>
            <option value="4">Month</option>
          </select></div>
          
          <label for="overtimeInputnumber10">Total overtime pay</label><div class="flex-inline"> 
          <input type="number" class="form-control" id="overtimeInputnumber10" aria-describedby="numberHelp" placeholder="Enter number">
          <select name="time9" id="time9">
                
            <option value="3">Week</option>
            <option value="4">Month</option>
            <option value="5">Year</option>
          </select> 
        </div>
          <h5>In total</h5>
        <label for="overtimeInputnumber11">Total  pay</label>  <div class="flex-inline">   
          <input type="number" class="form-control" id="overtimeInputnumber11" aria-describedby="numberHelp" placeholder="Enter number">
          <select name="time8" id="time8">
                
            <option value="3">Week</option>
            <option value="4">Month</option>
            <option value="5">Year</option>
          </select> </div>
          <input type="hidden" class="form-control" id="overtimeInputnumber5" aria-describedby="numberHelp" placeholder="Enter number" value="40">
          <input type="hidden" class="form-control" id="overtimeInputnumber6" aria-describedby="numberHelp" placeholder="Enter number" value="5">
          <br>
      </form>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- <script src="resources/js/script.js"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    </body>
</html>
