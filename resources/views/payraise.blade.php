<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="antialiased">

        <div class="container">
            <div class="list-programs-title">
           
                <h1 id="payraise" class= "text-center ">Pay Raise Calculator <i id="favToolImg" class="hideden" style="cursor: pointer; font-size:large;" aria-hidden="true" title="make it favourite"></i></h1>
</div>
            {{-- <h1 class= "text-center ">Average Calculator</h1> --}}
            <div class="row ">
 
<div class="col-4">

    <form class="mt-5">
        
          <input type="number" class="form-control" id="payInputnumber1" aria-describedby="numberHelp" placeholder="Enter number" >
          <input type="number" class="form-control" id="payInputnumber2" aria-describedby="numberHelp" placeholder="Enter number">
          <input type="number" class="form-control" id="payInputnumber3" aria-describedby="numberHelp" placeholder="Enter number">
          <input type="number" class="form-control" id="payInputnumber4" aria-describedby="numberHelp" placeholder="Enter number">
          <input type="number" class="form-control" id="payInputnumber5" aria-describedby="numberHelp" placeholder="Enter number">
        <h5 class="">Results:</h5>
        <br>
          <textarea name="" id="" cols="42" rows="3" disabled></textarea>
        
      </form>

</div>
<div class="col-4">

    <form class="mt-5">
        
          <input type="number" class="form-control" id="payInputnumber1" aria-describedby="numberHelp" placeholder="Enter number" >
          <input type="number" class="form-control" id="payInputnumber2" aria-describedby="numberHelp" placeholder="Enter number">
          <input type="number" class="form-control" id="payInputnumber3" aria-describedby="numberHelp" placeholder="Enter number">
          <input type="number" class="form-control" id="payInputnumber4" aria-describedby="numberHelp" placeholder="Enter number">
          <input type="number" class="form-control" id="payInputnumber5" aria-describedby="numberHelp" placeholder="Enter number">
        <h5 class="">Results:</h5>
        <br>
          <textarea name="" id="" cols="42" rows="3" disabled></textarea>
        
      </form>

</div>
<div class="col-4">

    <form class="mt-5">
        
          <input type="number" class="form-control" id="payInputnumber1" aria-describedby="numberHelp" placeholder="Enter number" >
          <input type="number" class="form-control" id="payInputnumber2" aria-describedby="numberHelp" placeholder="Enter number">
          <input type="number" class="form-control" id="payInputnumber3" aria-describedby="numberHelp" placeholder="Enter number">
          <input type="number" class="form-control" id="payInputnumber4" aria-describedby="numberHelp" placeholder="Enter number">
          <input type="number" class="form-control" id="payInputnumber5" aria-describedby="numberHelp" placeholder="Enter number">
        <h5 class="">Results:</h5>
        <br>
          <textarea name="" id="" cols="42" rows="3" disabled></textarea>
        
      </form>

</div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- <script src="resources/js/script.js"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    </body>
</html>
