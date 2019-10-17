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
        $projects = Project::where('is_published')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('projects.index', ['projects' => $projects] );
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function save(Request $request)
    {
        if($request->action === "preview") {
           return $this->preview($request);
        }

        $project = new Project();
        $project->title = $request->title;
        $project->md = $request->md;
        $project->is_published = $request->has('published');
        $project->save();
        
        return redirect()->route('admin.project.index');
    }

    public function edit($id)
    {
        return view('admin.projects.edit', ['project' => Project::find($id)]);
    }

    public function update(Request $request, $id)
    {
        if($request->action === "preview") {
            return $this->preview($request);
        }

        $project = Project::find($id);
        $project->title = $request->title;
        $project->md = $request->md;
        $project->is_published = $request->has('published');
        $project->save();

        return redirect()->route('admin.project.index');
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
        Project::find($id)->delete();
        return redirect()->route('admin.project.index');
    }
}
