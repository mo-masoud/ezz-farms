<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/products', function () {
    return Inertia::render('Products');
})->name('products');

Route::get('/products/show', function () {
    return Inertia::render('ShowProduct');
})->name('products.show');

Route::get('/galleries', function () {
    return Inertia::render('Galleries');
})->name('galleries');

Route::get('/contact-us', function () {
    return Inertia::render('ContactUs');
})->name('contact-us');
