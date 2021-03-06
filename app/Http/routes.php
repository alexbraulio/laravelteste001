<?php
Route::get('/', function () {
    return view('home');
});
Route::get('/dentro', function () {
    return view('dentro');
});

Route::get('/ola', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');