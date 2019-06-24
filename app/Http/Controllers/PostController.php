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
        $post = new Post();
        $post->title = $request->title;
        $post->md = $request->md;
        $post->save();

        return redirect()->route('admin.post.index');
    }

    public function edit($id)
    {
        return view('admin.posts.edit', ['post' => Post::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->md = $request->md;
        $post->update();

        return redirect()->route('admin.post.index');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
