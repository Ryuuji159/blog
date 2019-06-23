<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function posts() 
    {
        return view('admin.posts.index', ['posts' => Post::all()]);
    }
}
