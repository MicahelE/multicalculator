<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;

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

Route::get('/', fn() => view('home', ['seoPage' => 'home']));

Route::get('average', fn() => view('average', ['seoPage' => 'average']));

Route::get('payraise', fn() => view('payraise', ['seoPage' => 'payraise']));

Route::get('discount', fn() => view('discount', ['seoPage' => 'discount']));

Route::get('markup', fn() => view('markup', ['seoPage' => 'markup']));

Route::get('monthly-income', fn() => view('monthly-income', ['seoPage' => 'monthly-income']));

Route::get('overtime', fn() => view('overtime', ['seoPage' => 'overtime']));

Route::get('commission', fn() => view('commission', ['seoPage' => 'commission']));

Route::get('cagr', fn() => view('cagr', ['seoPage' => 'cagr']));

// Sitemap (exclude cookie/session middleware for Google Search Console compatibility)
Route::get('sitemap.xml', [SitemapController::class, 'index'])
    ->withoutMiddleware([
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\VerifyCsrfToken::class,
    ]);
