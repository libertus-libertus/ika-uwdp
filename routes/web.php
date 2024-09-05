<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [\App\Http\Controllers\Backend\BlogController::class, 'index'])->name('blog');
Route::get('/single-post/{slug}', [\App\Http\Controllers\Backend\BlogController::class, 'single_post'])->name('post.single.page');
Route::get('/list-post', [\App\Http\Controllers\Backend\BlogController::class, 'list_post'])->name('post.list.page');
Route::get('/category/{id}', [\App\Http\Controllers\Backend\BlogController::class, 'postsByCategory'])->name('posts.by.category');

Route::group(['middleware' => 'auth'], function() {
    // Dashboard
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('/category', \App\Http\Controllers\Backend\CategoryController::class);
    Route::resource('/tag', \App\Http\Controllers\Backend\TagsController::class);

    // Post
    Route::get('/post/tampil_hapus', [\App\Http\Controllers\Backend\PostController::class, 'tampil_hapus'])->name('post.tampil_hapus');
    Route::get('/post/restore/{id}', [\App\Http\Controllers\Backend\PostController::class, 'restore'])->name('post.restore');
    Route::delete('/post/forceDelete/{id}', [\App\Http\Controllers\Backend\PostController::class, 'forceDelete'])->name('post.forceDelete');
    Route::resource('/post', \App\Http\Controllers\Backend\PostController::class);

    // anggota
    Route::resource('/user', \App\Http\Controllers\Backend\UserController::class);
});
