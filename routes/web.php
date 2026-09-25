<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes — Pearlcon Rail Services Ltd (pearlconrail.co.uk)
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/why-us', [PageController::class, 'whyUs'])->name('why-us');
Route::get('/clients', [PageController::class, 'clients'])->name('clients');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

/* SEO & AI Crawler Routes */
Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'), ['Content-Type' => 'text/xml']);
});

Route::get('/robots.txt', function () {
    return response()->file(public_path('robots.txt'), ['Content-Type' => 'text/plain']);
});

Route::get('/llms.txt', function () {
    return response()->file(public_path('llms.txt'), ['Content-Type' => 'text/plain']);
});
