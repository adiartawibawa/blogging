<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Canvas\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    public function getAllPosts()
    {
        $posts = Post::published()->get();

        return Inertia::render('Blog', ['posts' => $posts]);
    }

    public function viewPost($slug)
    {
        $post = Post::whereSlug($slug)->first();

        return Inertia::render('SinglePost', ['post' => $post]);
    }
}
