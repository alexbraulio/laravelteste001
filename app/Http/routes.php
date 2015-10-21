<?php
Route::get('/', function () {
    return view('welcome');
});

<?php
Route::get('/ola', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

