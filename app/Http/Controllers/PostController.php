<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;  // Importando o modelo Post

class PostController extends Controller
{
    public function index() {
        $posts = Post::where('visible', true)->orderBy('created_at', 'desc')->get();
        
        return view('posts.index', compact('posts'));
    }
}
