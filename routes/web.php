<?php

use App\Http\Controllers\Backend\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::resource('/category', \App\Http\Controllers\Backend\CategoryController::class);
Route::resource('/tag', \App\Http\Controllers\Backend\TagsController::class);

Route::get('/post/tampil_hapus', [\App\Http\Controllers\Backend\PostController::class, 'tampil_hapus'])->name('post.tampil_hapus');
Route::get('/post/restore/{id}', [\App\Http\Controllers\Backend\PostController::class, 'restore'])->name('post.restore');
Route::delete('/post/forceDelete/{id}', [\App\Http\Controllers\Backend\PostController::class, 'forceDelete'])->name('post.forceDelete');
Route::resource('/post', \App\Http\Controllers\Backend\PostController::class);
