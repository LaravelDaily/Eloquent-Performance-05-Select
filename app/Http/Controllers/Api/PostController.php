<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Load ALL the fields?
        return Post::with('user')->take(100)->get();

        // Should be:
//        return Post::select('user_id', 'title')->with('user:id,name,email')
//            ->take(100)
//            ->get();
    }
}
