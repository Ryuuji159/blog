@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
    @foreach($projects as $project)
        <article>
            <header>
                <h1>{{ $project->title }}</h1>
            </header>

            {!! $parse->text($project->md) !!}

        </section>
    @endforeach
    <hr/>
@endsection
