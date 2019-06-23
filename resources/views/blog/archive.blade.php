@extends('base')

@section('content')
    <div class="container">
        <ul>
        @foreach($posts as $post) 
            <li class="post-title">
                <a href="{{ route('blog.show', $post->id) }}">{{$post->title}}</a> <span>{{$post->created_at->diffForHumans()}}</span>
            </li>
        @endforeach
        </ul>
    </div>
@endsection
