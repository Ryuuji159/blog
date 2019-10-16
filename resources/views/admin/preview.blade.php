@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
        <article>
            <header>
                <h1 class="post-title">{{$title}}</h1>
            </header>
            {!! $parse->text($md) !!}
        </article>
@endsection
