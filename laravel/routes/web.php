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
    return view('index');
});

Route::get('/add_customer', function () {
    return view('add_customer');
});

Route::get('/change_customer', function () {
    return view('change_customer');
});

Route::get('/help_en', function () {
    return view('help_EN');
});

Route::get('/help_nl', function () {
    return view('help_NL');
});

Route::get('/login', function () {
    return view('login');
});
    
Route::get('/finance', function () {
    return view('finance');
});

Route::get('/sales', function () {
    return view('sales');
});

Route::get('/development', function () {
    return view('development');
});

