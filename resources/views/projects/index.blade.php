@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('meta-description')
    <meta name="description" content="Todos mis projectos personales que quiero compartir">
@endsection

@section('content')
    @foreach($projects as $project)
        <article>
            <header>
                <h1 class="post-title">{{ $project->title }}</h1>
            </header>

            {!! $parse->text($project->md) !!}
        </article>
    @endforeach
@endsection
