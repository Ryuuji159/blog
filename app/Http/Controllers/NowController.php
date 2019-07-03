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

    public function create()
    {
        return view('admin.now.create');
    }

    public function save(Request $request)
    {
        $now = new Now();
        $now->md = $request->md;
        $now->save();

        return redirect()->route('admin.now.index');
    }

    public function edit($id)
    {
        return view('admin.now.edit', ['now' => Now::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $now = Now::find($id);

        $now->md = $request->md;
        $now->update();

        return redirect()->route('admin.now.index');
    }

    public function delete($id)
    {
        $now= Now::find($id);
        $now->delete();
        return redirect()->route('admin.now.index');
    }
}
