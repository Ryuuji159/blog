<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('blog.index', ['posts' => $posts] );
    }

    public function archive()
    {
        return view('blog.archive', ['posts' => Post::all()] );
    }

    public function show($id)
    {
        return view('blog.show', ['post' => Post::find($id)] );
    }
}
