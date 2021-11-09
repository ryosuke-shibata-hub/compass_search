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
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/login', 'Auth\Login\LoginController@Login')->name('login');
Route::post('/login', 'Auth\Login\LoginController@Login');

Route::get('/register','Auth\Register\RegisterConfirmController@register');
Route::post('/register','Auth\Register\RegisterController@create');

Route::get('/added','Auth\Register\RegisterAddedController@added');
