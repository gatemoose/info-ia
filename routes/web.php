<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\EventController;

/* Route::get('/', function () {
    return view('Home');
}); */

Route::get('/', [HomeController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/eventos', [EventController::class, 'index']);
Route::get('/livros', [BooksController::class, 'index']);