<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [ 'title' => 'Giphy App' ]);
});

Route::get('/login', function () {
    return view('login', [ 'title' => 'Login' ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [ 'title' => 'Dashboard' ]);
});

Route::get('/logout', function () {
    // TODO: Implement logout functionality
});
