<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('pages.post.index', compact('posts'));
    }

    public function create()
    {
        $tags = Tags::all();
        $category = Category::all();
        return view('pages.post.create', compact('category', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'contents' => 'required',
            'image' => 'required',
        ]);

        $image = $request->image;
        $newImage = time().$image->getClientOriginalName();

        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id,
            'contents' => $request->contents,
            'image' => 'uploads/posts/'.$newImage,
        ]);

        // Simpan multiple
        $post->tags()->attach($request->tags);

        // Pindahkan gambar
        $image->move('uploads/posts/', $newImage);

        return redirect()->route('post.index')->with('success', 'Postingan berhasil dibuat!');
    }

    public function edit(string $id)
    {
        $category = Category::all();
        $tags = Tags::all();
        $post = Post::findOrFail($id);
        return view('pages.post.edit', compact('post', 'tags', 'category'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'contents' => 'required',
        ]);

        $post = Post::findOrFail($id);

        if ($request->has('image')) {
            $image = $request->image;
            $newImage = time().$image->getClientOriginalName();
            $image->move('uploads/posts/', $newImage);

            $post_data = [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'category_id' => $request->category_id,
                'contents' => $request->contents,
                'image' => 'uploads/posts/'.$newImage,
            ];
        } else {
            $post_data = [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'category_id' => $request->category_id,
                'contents' => $request->contents,
            ];
        }

        // Simpan multiple
        $post->tags()->sync($request->tags);
        $post->update($post_data);

        return redirect()->route('post.index')->with('success', 'Postingan berhasil diubah!');
    }

    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('post.index')->with('success', 'Postingan telah dihapus, cek menu RESTORE!');
    }

    public function tampil_hapus()
    {
        $posts = Post::onlyTrashed()->paginate(5);
        return view('pages.post.hapus', compact('posts'));

    }

    public function restore($id)
    {
        $posts = Post::withTrashed()->where('id', $id)->first();
        $posts->restore();

        return redirect()->route('post.tampil_hapus')->with('success', 'Postingan berhasil di RESTORE, cek menu POSTINGAN!');
    }

    public function forceDelete($id)
    {
        $posts = Post::withTrashed()->where('id', $id)->first();
        $posts->forceDelete();

        return redirect()->route('post.tampil_hapus')->with('success', 'Postingan telah di HAPUS PERMANEN!');
    }
}
