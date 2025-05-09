<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController; 
use App\Http\Controllers\BlogsController; 

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TaskController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/blog', [BlogController::class, 'show']); 
Route::get('/blogs',[BlogsController::class,'index'])->name('blogs.index');
Route::get('/blogs/create',[BlogsController::class,'create'])->name('blogs.create');
// web.php
Route::get('/items/{id}/edit', [blogsController::class, 'edit'])->name('items.edit');

Route::post('/blogs/store',[BlogsController::class,'store'])->name('blogs.store');
// Homepage - Show all posts
Route::get('/', [PostController::class, 'index'])->name('posts.index');

// Post Routes (using resource controller)
Route::resource('posts', PostController::class)->except(['index']); // 'index' is already defined above

// Comment Routes
// Store a new comment for a specific post
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
// Show edit form for a specific comment
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
// Update a specific comment
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
// Delete a specific comment
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::resource('tasks', TaskController::class); 