<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $admin = User::where('level', 1)->count();
        $members = User::where('level', 0)->count();
        $news = Post::all()->count();
        $categories = Category::all()->count();

        return view('home', compact('admin', 'members', 'news', 'categories'));
    }
}
