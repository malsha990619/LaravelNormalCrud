<?php

use App\Http\Controllers\postController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Class_;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/post/store',[postController::class,('store')])->name('posts.store');
Route::get('/',[welcomeController::class,('index')])->name('welcome');
Route::get('/post/{postId}/show',[postController::class,('show')])->name('posts.show');

Route::get('/post/all',[postController::class,('allPosts')])->name('posts.all');
Route::get('/post/{postId}/edit',[postController::class,('edit')])->name('posts.edit');

Route::post('/post/{postId}/update',[postController::class,('update')])->name('posts.update');

Route::get('/post/{postId}/delete',[postController::class,('delete')])->name('posts.delete');




