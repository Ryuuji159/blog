<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('admin.posts.create');
    }

    public function save(Request $request)
    {
        if($request->action === "preview") {
           return $this->preview($request);
        }

        $post = new Post();
        $post->title = $request->title;
        $post->md = $request->md;
        $post->is_published = $request->has('published');
        $post->save();

        return redirect()->route('admin.post.index');
    }

    public function edit($id)
    {
        return view('admin.posts.edit', ['post' => Post::find($id)]);
    }

    public function update(Request $request, $id)
    {
        if($request->action === "preview") {
            return $this->preview($request);
        }

        $post = Post::find($id);

        $post->title = $request->title;
        $post->md = $request->md;
        $post->is_published = $request->has('published');
        $post->update();

        return redirect()->route('admin.post.index');
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
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
