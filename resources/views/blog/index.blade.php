@extends('base')

@section('meta-description')
    <meta name="description" content="Mi pequeño blog en el que pienso postear principalmente snipets de codigo, o si me emociono, alguna cosa buena">
@endsection

@section('title')
    <title>Blog - Daniel Cortes</title>
@endsection

@php
    $parse = new Parsedown();
@endphp

@section('content')
    @foreach($posts as $post) 
        <article>
            <header>
                <h1><a class="post-title" href="{{ route('blog.show', ['post' => $post->id])}}">{{$post->title}}</a></h1>
                <time datetime="{{ $post->created_at->toDateString() }}"> {{ $post->created_at->toFormattedDateString() }} </time>
            </header>
            {!! $parse->text($post->md) !!}
        </article>
    @endforeach
    <span>Para ver mas posts, ve al <a href="{{ route('blog.archive') }}">archivo</a></span>
@endsection
