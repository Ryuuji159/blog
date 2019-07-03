@extends('base')

@php
    $parse = new Parsedown();
@endphp

@section('content')
    @foreach($projects as $project)
        <section>
            <h1>{{ $project->title }}</h1>

            {!! $parse->text($project->md) !!}

            <div class="image-container">
                @foreach($project->photos as $photo)
                    <img src="{{ Storage::url($photo->filename) }}"/>
                @endforeach
            </div>
        </section>
    @endforeach
    <hr/>
@endsection
