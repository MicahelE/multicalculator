<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('average', function () {
    return view('average');
});

Route::get('payraise', function () {
    return view('payraise');
});

Route::get('discount', function () {
    return view('discount');
});

Route::get('markup', function () {
    return view('markup');
});

Route::get('monthly-income', function () {
    return view('monthly-income');
});

Route::get('overtime', function () {
    return view('overtime');
});

Route::get('commission', function () {
    return view('commission');
});