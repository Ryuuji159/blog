@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
    <article>
        <header>
            <h1 class="post-title">Now</h1>
        </header>
        {!! $parse->text($now->md) !!}
    </article>
    <hr/>
@endsection
