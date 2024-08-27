<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tags::paginate(5);
        return view('pages.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('pages.tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $tag = Tags::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('tag.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $tag = Tags::findOrFail($id);
        return view('pages.tags.edit', compact('tag'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $tag = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ];

        Tags::whereId($id)->update($tag);

        return redirect()->route('tag.index')->with('success', 'Tag berhasil diubah!');
    }

    public function destroy(string $id)
    {
        $tag = Tags::findOrFail($id);
        $tag->delete();

        return redirect()->route('tag.index')->with('success', 'Tag berhasil dihapus!');
    }
}
