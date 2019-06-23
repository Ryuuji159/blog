@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
    @foreach($posts as $post) 
        <section>
            <h1>{{$post->title}}</h1>
            {!! $parse->text($post->md) !!}
        </section>
        <hr/>
    @endforeach
    <span>Mas posts en el <a href="{{ route('blog.archive') }}">archivo</a></span>
@endsection
