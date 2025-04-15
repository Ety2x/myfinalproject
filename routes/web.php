<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController; 
use App\Http\Controllers\BlogsController; 
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
Route::post('/blogs/store',[BlogsController::class,'store'])->name('blogs.store');