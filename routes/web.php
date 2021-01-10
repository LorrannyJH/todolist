<?php

use Illuminate\Support\Facades\Route;

//apenas usuários não autenticados
Route::middleware('guest')->group(function() {
    //login
    Route::get('/login', 'Auth\LoginController@index')->name('auth.login.index');
    Route::post('/login', 'Auth\LoginController@login')->name('auth.login.login');

    //register
    Route::get('/register', 'Auth\RegisterController@index')->name('auth.register.index');
    Route::post('/register', 'Auth\RegisterController@store')->name('auth.register.store');
});

//logout
Route::get('/logout', 'Auth\LoginController@logout')->name('auth.login.logout');

//apenas usuários autenticados
Route::namespace('Admin')->name('admin.')->middleware('auth')->group(function() {
    //tasks
    Route::resource('tasks', 'TaskController');
});
