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
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
    return view('master');
	});
    Route::get('/test', function () {
    return view('test');
	});
	Route::get('/accueil', function () {
    return view('accueil');
	});
});
Route::get('/home', 'HomeController@index')->name('home');

