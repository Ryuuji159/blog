<?php

namespace App\Http\Controllers;

use App\Post;
use App\Now;
use App\Project;
use App\Setup;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function posts() 
    {
        return view('admin.posts.index', ['posts' => Post::orderBy('created_at', 'desc')->get()]);
    }

    public function now() 
    {
        return view('admin.now.index', ['nows' => Now::orderBy('created_at', 'desc')->get()]);
    }

    public function projects() 
    {
        return view('admin.projects.index', ['projects' => Project::orderBy('created_at', 'desc')->get()]);
    }

    public function setups() 
    {
        return view('admin.setups.index', ['setups' => Setup::orderBy('created_at', 'desc')->get()]);
    }
}
