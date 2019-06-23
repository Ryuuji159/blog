@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
    <div class="container">
        @foreach($posts as $post) 
            <section class="post">
                <h1 class="post-title">{{$post->title}}</h1>
                {!! $parse->text($post->md) !!}
            </section>
            <hr/>
        @endforeach
        <span>Mas posts en el <a href="{{ route('blog.archive') }}">archivo</a></span>
    </div>
@endsection
