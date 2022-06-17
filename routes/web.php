<?php

use Illuminate\Support\Facades\Route;

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
    return view('portfolio.index');
});

Route::get('/about', function () {
    return view('portfolio.about');
});


Route::get('/our-services', function () {
    return view('portfolio.our-services');
});

Route::get('/our-vehicles', function () {
    return view('portfolio.our-vehicles');
});

Route::get('/contact-us', function () {
    return view('portfolio.contact-us');
});

