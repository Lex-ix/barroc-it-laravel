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

route::get('/', function () {
    return view('auth/login');
});

route::get('/help_en' , function(){
    return view('help_EN');
});

route::get('/help_nl' , function(){
    return view('help_NL');
});

route::get('/invoice/create/{id}', 'invoicesController@createInvoice')->name('createInvoice');

Route::resource('appointments', 'appointmentsController');
Route::resource('company', 'companiesController');
Route::resource('invoice', 'invoicesController');
Route::resource('projects', 'projectsController');
Route::resource('user', 'usersController');

Route::resource('sales', 'salesController');
Route::resource('finance', 'financeController');
Route::resource('development', 'developmentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
