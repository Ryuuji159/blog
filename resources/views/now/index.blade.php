@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
    <article>
        <header>
            <h1>Now</h1>
        </header>
        {!! $parse->text($now->md) !!}
    </article>
    <hr/>
@endsection
