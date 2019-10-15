@extends('base')

@section('content')
    <article>
        <h1>Archivo</h1>
        <ul>
            @foreach($posts as $post) 
                <li>
                    <a href="{{ route('blog.show', ['post' => $post->id]) }}">{{$post->title}}</a> 
                    <time datetime="{{ $post->created_at->toDateString() }}"> {{ $post->created_at->toFormattedDateString() }} </time>
                </li>
            @endforeach
        </ul>
    </article>
@endsection
