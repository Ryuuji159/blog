@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
        <article>
            <header>
                <h1>{{$post->title}}</h1>
            </header>
            {!! $parse->text($post->md) !!}
        </article>
        <hr/>
        <span>Para ver mas posts , ve al <a href="{{ route('blog.archive') }}">archivo</a></span>
@endsection
