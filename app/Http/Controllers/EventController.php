<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        // $posts = Post::where('visible', true)->orderBy('created_at', 'desc')->get();
        $events = Event::orderBy('created_at', 'desc')->get();

        return view('events/index', compact('events'));
    }
}
