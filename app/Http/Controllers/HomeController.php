<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Books;
use App\Models\Event;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::where('visible', true)->latest()->take(6)->get();
        $events = Event::latest()->take(2)->get();
        $books = Books::latest()->take(2)->get();

        return view('Home', compact('posts', 'events', 'books'));
    }
}