<?php

namespace App\Http\Controllers;

use App\Now;
use Illuminate\Http\Request;

class NowController extends Controller
{
    public function index()
    {
        $now = Now::where('is_published')
            ->orderBy('created_at', 'desc')
            ->first();
        return view('now.index', ['now' => $now] );
    }

    public function create()
    {
        return view('admin.now.create');
    }

    public function save(Request $request)
    {
        if($request->action === "preview") {
           return $this->preview($request);
        }

        $now = new Now();
        $now->md = $request->md;
        $now->is_published = $request->has('published');
        $now->save();

        return redirect()->route('admin.now.index');
    }

    public function edit($id)
    {
        return view('admin.now.edit', ['now' => Now::find($id)]);
    }

    public function update(Request $request, $id)
    {
        if($request->action === "preview") {
            return $this->preview($request);
        }

        $now = Now::find($id);
        $now->md = $request->md;
        $now->is_published = $request->has('published');
        $now->update();

        return redirect()->route('admin.now.index');
    }

    public function preview(Request $request)
    {
        return view('admin.preview', [
            'md' => $request->md, 
            'title' => "Now"
        ]);
    }

    public function delete($id)
    {
        $now= Now::find($id);
        $now->delete();
        return redirect()->route('admin.now.index');
    }
}
