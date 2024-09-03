<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(Post $post)
    {
        $data = $post->orderBy('created_at', 'desc')->get();
        return view('blog', compact('data'));
    }

    public function single_post($slug)
    {
        $data = Post::where('slug', $slug)->get();
        return view('pages.blog.single_post', compact('data'));
    }
}
