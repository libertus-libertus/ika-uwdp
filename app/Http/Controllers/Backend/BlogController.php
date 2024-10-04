<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(Post $post)
    {
        $widget = $post->orderBy('title', 'asc')->first()->take(1)->get();
        $posts = $post->latest()->take(3)->get();
        $datas = Post::all();

        $categories = Category::all();
        return view('blog', compact('posts', 'widget', 'datas', 'categories'));
    }

    public function single_post(Post $post, $slug)
    {
        $datas = Post::all();
        $widget = $post->orderBy('title', 'asc')->first()->take(1)->get();
        $posts = $post->latest()->take(3)->get();
        $data = Post::where('slug', $slug)->get();

        $categories = Category::all();
        return view('pages.blog.single_post', compact('data', 'posts', 'datas', 'widget', 'categories'));
    }

    public function list_post(Post $post)
    {
        $data_post = $post->paginate(5);
        $categories = Category::all();
        return view('pages.blog.list_post', compact('categories', 'data_post'));
    }

    public function postsByCategory($id)
    {
        // Mengambil kategori berdasarkan ID
        $category = Category::findOrFail($id);

        // Mengambil postingan yang terkait dengan kategori tersebut
        $posts = $category->posts()->latest()->paginate(5);

        // Mengambil kategori untuk menu dropdown
        $categories = Category::all();

        // Mengembalikan tampilan dengan data yang diperlukan
        return view('pages.blog.posts_by_category', compact('posts', 'categories', 'category'));
    }
}
