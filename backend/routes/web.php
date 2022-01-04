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

Route::middleware(['guest'])->group(function () {

    Route::namespace('Auth')->group(function() {
        Route::namespace('Login')->group(function() {
            Route::get('/','LoginController@index')
            ->name('loginForm');
            Route::post('/','LoginController@login')
            ->name('login');
        });
        Route::namespace('Register')->group(function() {
            Route::get('/register','RegisterController@index')
            ->name('RegisterForm');
            Route::post('/register','RegisterController@register')
            ->name('register');
            Route::get('/registerAdded','RegisterController@added')
            ->name('registerAdded');
        });
    });
});
