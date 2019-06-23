@extends('base')

@section('content')
    <div class="container">
        <h1>Archive</h1>
        <ul>
        @foreach($posts as $post) 
            <li>
                <a href="{{ route('blog.show', $post->id) }}">{{$post->title}}</a> <span>({{$post->created_at->format('Y-m-d')}})</span>
            </li>
        @endforeach
        </ul>
    </div>
@endsection
