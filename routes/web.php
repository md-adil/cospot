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
    return redirect('radius/users');
});

Auth::routes();

Route::middleware('auth')->prefix('radius')->as('radius.')->group(function() {
    Route::resource('/users', 'Radius\UserController');
});

Route::get('/home', 'HomeController@index')->name('home');
