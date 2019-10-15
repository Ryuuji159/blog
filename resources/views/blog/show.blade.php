@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
        <article>
            <header>
                <h1 class="post-title">{{$post->title}}</h1>
                <time datetime="{{ $post->created_at->toDateString() }}"> {{ $post->created_at->toFormattedDateString() }} </time>
            </header>
            {!! $parse->text($post->md) !!}
        </article>
        <span>Para ver mas posts , ve al <a href="{{ route('blog.archive') }}">archivo</a></span>
@endsection
