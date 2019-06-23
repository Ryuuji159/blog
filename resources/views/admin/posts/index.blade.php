@extends('admin.base')

@section('title')
    <h1>Posts</h1>
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Fecha</th>
                <th class="controls"><a href="{{ route('admin.post.create') }}">create</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at->format('Y-m-d')}}</td>
                    <td class="controls">
                        <a href="#">edit</a>
                        <a href="#">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
