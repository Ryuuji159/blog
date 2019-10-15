@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
    <article>
        <header>
            <h1 class="post-title">Now</h1>
            <time datetime="{{ $now->created_at->toDateString() }}"> {{ $now->created_at->toFormattedDateString() }} </time>
        </header>
        {!! $parse->text($now->md) !!}
    </article>
@endsection
