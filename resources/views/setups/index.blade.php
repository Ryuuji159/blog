@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
    @foreach($setups as $setup) 
        <article>
            <header>
                <h1 class="post-title">{{$setup->title}}</h1>
            </header>
            {!! $parse->text($setup->md) !!}
        </article>
    @endforeach
@endsection
