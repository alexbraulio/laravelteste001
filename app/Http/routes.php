<?php
Route::get('/', function () {
    return view('home');
});

Route::get('/ola', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

