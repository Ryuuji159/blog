<?php

namespace App\Http\Controllers;

use App\Now;
use Illuminate\Http\Request;

class NowController extends Controller
{
    public function index()
    {
        $now = Now::orderBy('created_at', 'desc')->first();
        return view('now.index', ['now' => $now] );
    }
}
