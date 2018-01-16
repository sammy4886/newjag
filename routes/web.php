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
Route::get('/', 'FrontEndController@home');
Route::get('/home', 'FrontEndController@home');
Route::get('/contact', 'FrontEndController@contact');
Route::get('/team', 'FrontEndController@team');
Route::get('/about', 'FrontEndController@about');
Route::get('/two_wheeler', 'FrontEndController@two_wheeler');
Route::get('/gallery', 'FrontEndController@gallery');
