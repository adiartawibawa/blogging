<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/blog', function () {
    return Inertia::render('Blog');
});

Route::get('/single-post', function () {
    return Inertia::render('SinglePost');
});
