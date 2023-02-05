<?php

use App\Http\Controllers\Blog\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/blog', [PostController::class, 'getAllPosts'])->name('blog.post.all');

Route::get('/blog/view/{slug}', [PostController::class, 'viewPost'])->name('blog.post.single-view');
