<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setup;

class SetupController extends Controller
{
    public function index()
    {
        $setups = Setup::orderBy('created_at', 'desc')->get();
        return view('setups.index', ['setups' => $setups] );
    }

    public function create()
    {
        return view('admin.setups.create');
    }

    public function save(Request $request)
    {
        if($request->action === "preview") {
           return $this->preview($request);
        }

        $setup = new Setup();
        $setup->title = $request->title;
        $setup->md = $request->md;
        $setup->save();
        
        return redirect()->route('admin.setup.index');
    }

    public function edit($id)
    {
        return view('admin.setups.edit', ['setup' => Setup::find($id)]);
    }

    public function update(Request $request, $id)
    {
        if($request->action === "preview") {
            return $this->preview($request);
        }

        $setup = Setup::find($id);
        $setup->title = $request->title;
        $setup->md = $request->md;
        $setup->save();

        return redirect()->route('admin.setup.index');
    }

    public function preview(Request $request)
    {
        return view('admin.preview', [
            'md' => $request->md, 
            'title' => $request->title
        ]);
    }

    public function delete($id)
    {
        Setup::find($id)->delete();
        return redirect()->route('admin.setup.index');
    }
}
