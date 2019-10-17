@extends('admin.base')

@section('content')
    <article> 
        <h1>Posts</h1>
        <a class="pure-button button-black-white" href="{{ route('admin.post.create') }}">Create Post</a>

        <table class="pure-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Published</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{ Str::limit($post->title, 30, "...") }}</td>
                        <td>{{$post->is_published ? "Yes" : "No"}}</td>
                        <td>{{$post->created_at->format('Y-m-d')}}</td>
                        <td class="controls">
                            <a href="{{ route('admin.post.edit', ['post' => $post->id]) }}" class="pure-button button-black-white">Edit</a>
                            <form action={{ route('admin.post.delete', ['post' => $post->id]) }} method="post">
                                @csrf
                                <button type="submit" class="pure-button button-black-white" onclick="return confirm('Estas seguro?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </article>
@endsection
