<?php

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
    return view('frontend.partials.home');
});
Route::get('/contact', function () {
    return view('frontend.partials.contact');
});
Route::get('/team', function () {
    return view('frontend.partials.team');
});
Route::get('/about', function () {
    return view('frontend.partials.about');
});
Route::get('/two_wheeler', function () {
    return view('frontend.partials.two_wheeler');
});
