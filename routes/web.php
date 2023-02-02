<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/beranda', function () {
    return Inertia::render('Beranda');
});

Route::get('/blog', function () {
    return Inertia::render('Blog');
});

Route::get('/single-post', function () {
    return Inertia::render('SinglePost');
});
