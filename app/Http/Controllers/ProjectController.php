<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('projects.index', ['projects' => $projects] );
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function save(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->md = $request->md;
        $project->save();
        
        return redirect()->route('admin.project.index');
    }

    public function edit($id)
    {
        return view('admin.projects.edit', ['project' => Project::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->title = $request->title;
        $project->md = $request->md;
        $project->save();

        return redirect()->route('admin.project.index');
    }

    public function delete($id)
    {
        Project::find($id)->delete();
        return redirect()->route('admin.project.index');
    }
}
