@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
    <section>
        {!! $parse->text($now->md) !!}
    </section>
    <hr/>
@endsection
