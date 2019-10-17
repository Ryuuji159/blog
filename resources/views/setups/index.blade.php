@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('meta-description')
    <meta name="description" content="Los setups que he ido utilizando en linux">
@endsection

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
