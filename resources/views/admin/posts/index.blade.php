@extends('admin.base')

@section('content')
    <div class="pure-g">
        <div class="pure-u-1-5">
            <h1>Posts</h1>
        </div>
        <div class="pure-u-4-5">
            <a class="pure-button u-align-right" href="{{ route('admin.post.create') }}">Create</a>
        </div>
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
                    <td>
                        <a class="pure-button" href="{{ route('admin.post.edit', ['post' => $post->id]) }}">Edit</a>
                    </td>
                    <td>
                        <form action={{ route('admin.post.delete', ['post' => $post->id]) }} method="post">
                            @csrf
                            <button type="submit" class="pure-button">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
