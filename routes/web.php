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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::apiResource('customers', 'CustomerController');

Route::middleware('auth')->group(function () {
    Route::get('/customers', 'CustomerController@index');
    Route::get('/customers/create', 'CustomerController@create')->name('customers.create');
    Route::post('/customers', 'CustomerController@store')->name('customers.store');
    Route::get('/customers/{customer}', 'CustomerController@show')->name('customers.show');
    Route::get('/customers/{customer}/edit', 'CustomerController@edit')->name('customers.edit');
    Route::patch('/customers/{customer}', 'CustomerController@update')->name('customers.update');
    Route::delete('/customers/{customer}', 'CustomerController@destroy')->name('customers.destroy');
});