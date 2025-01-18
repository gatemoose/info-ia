<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    public function index() {
        // $posts = Post::where('visible', true)->orderBy('created_at', 'desc')->get();
        $books = Books::orderBy('created_at', 'desc')->get();

        return view('books/index', compact('books'));
    }
}
