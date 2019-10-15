@extends('admin.base')

@section('title')
    <h1>Edit Project</h1>
@endsection

@section('content')
    <form class="pure-form pure-form-stacked" action="{{ route('admin.project.update', ['project' => $project->id]) }}" method="post">
        @csrf
        <fieldset>
            <h1>Edit Project</h1>
            <a href="{{ route('admin.project.index') }}" class="pure-button button-black-white">Back</a>

            <label for="title">Title</label>
            <input type="text" class="form-input" id="title" name="title" value="{{ old('title', $project->title) }}" required/>

            <label for="md">Description</label>
            <textarea class="form-input" id="md" name="md">{{ old('md', $project->md) }}</textarea>

            <div class="control">
                <button type="submit" class="pure-button button-black-white">Back</button>
            </div>
        </fieldset>
    </form>
@endsection
