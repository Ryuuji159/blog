@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
        <article>
            <header>
                <h1>{{$setup->title}}</h1>
            </header>
            {!! $parse->text($setup->md) !!}
        </article>
        <hr/>
@endsection
