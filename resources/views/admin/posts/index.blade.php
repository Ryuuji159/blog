@extends('admin.base')

@section('content')

    <div class="table-heading">
        <h1>Posts</h1>
        <a class="pure-button button-black-white" href="{{ route('admin.post.create') }}">Create Post</a>
    </div>

    <table class="pure-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Fecha</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at->format('Y-m-d')}}</td>
                    <td class="controls">
                        <a href="{{ route('admin.post.edit', ['post' => $post->id]) }}">Edit</a>
                        <form action={{ route('admin.post.delete', ['post' => $post->id]) }} method="post">
                            @csrf
                            <button type="submit" class="link" onclick="return confirm('Estas seguro?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
