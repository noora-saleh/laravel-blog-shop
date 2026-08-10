<?php

namespace App\Http\Controllers;
use App\Models\Post; // لاستدعاء موديل المقالات
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    
}
