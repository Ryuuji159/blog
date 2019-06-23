@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
        <section>
            <h1>{{$post->title}}</h1>
            {!! $parse->text($post->md) !!}
        </section>
        <hr/>
        <span>Para posts antiguos, ve al <a href="{{ route('blog.archive') }}">archivo</a></span>
@endsection
