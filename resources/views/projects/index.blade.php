@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
    @foreach($projects as $project)
        <article>
            <header>
                <h1 class="post-title">{{ $project->title }}</h1>
            </header>

            {!! $parse->text($project->md) !!}
        </article>
    @endforeach
    <hr/>
@endsection
