@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
    <div class="container">
        <section class="post">
            <h1 class="post-title">{{$post->title}}</h1>
            {!! $parse->text($post->md) !!}
        </section>
        <span>Para posts antiguos, ve al <a href="{{ route('blog.archive') }}">archivo</a></span>
    </div>
@endsection
