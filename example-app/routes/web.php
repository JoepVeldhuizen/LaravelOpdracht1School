<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('main', function () {
    return view('main', ['name' => 'Suleyman']);
});

Route::get('hallo', function () {
    return view('hallo');
});

Route::get('contact', function () {
    return view('contact');
});
