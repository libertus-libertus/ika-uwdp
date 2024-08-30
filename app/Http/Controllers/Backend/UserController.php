<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('pages.user.index', compact('users'));
    }

    public function create()
    {
        return view('pages.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'level' => 'required',
        ]);

        if ($request->input('password')) {
            $password = bcrypt($request->password);
        } else {
            $password = bcrypt('123');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
            'password' => $password,
        ]);

        return redirect()->route('user.index')->with('success', 'Anggota baru berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('pages.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:5',
            'level' => 'required',
        ]);

        $user = [
            'name' => $request->name,
            'level' => $request->level,
        ];

        User::whereId($id)->update($user);

        return redirect()->route('user.index')->with('success', 'Data anggota berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Data telah dihapus!');
    }
}
