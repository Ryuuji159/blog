@extends('admin.base')

@section('title')
    <h1>Edit Project</h1>
@endsection

@section('content')
    <form class="pure-form pure-form-stacked" action="{{ route('admin.project.update', ['project' => $project->id]) }}" method="post">
        @csrf
        <fieldset>
            <h1>Edit Project</h1>
            <a href="{{ route('admin.project.index') }}" class="pure-button button-black-white">Volver</a>

            <label for="title">Titulo</label>
            <input type="text" class="form-input" id="title" name="title" value="{{ old('title', $project->title) }}" required/>

            <label for="md">Descripcion</label>
            <textarea class="form-input" id="md" name="md">{{ old('md', $project->md) }}</textarea>

            <div class="control">
                <button type="submit" class="pure-button button-black-white">Actualizar</button>
            </div>
        </fieldset>
    </form>
@endsection
