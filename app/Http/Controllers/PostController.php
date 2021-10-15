<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Load ALL the fields?
        $posts = Post::with('user')->get();

        // Should be:
        // $posts = Post::select('title', 'user_id')->with('user:id,name,email')->get();

        return view('posts.index', compact('posts'));
    }
}
