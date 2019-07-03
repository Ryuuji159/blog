@extends('admin.base')

@section('title')
    <h1>Edit Post</h1>
@endsection

@section('content')
    <form action="{{ route('admin.project.update', ['project' => $project->id]) }}" enctype="multipart/form-data" method="post">
        @csrf
        <div>
            <label for="title">Titulo</label>
            <input type="text" class="form-input" id="title" name="title" value="{{ old('title', $project->title) }}" required/>
        </div>
        <div>
            <label for="md">Descripcion</label>
            <textarea class="form-input" id="md" name="md">{{ old('md', $project->md) }}</textarea>
        </div>
        <div>
            <label for="photos">Fotos</label>
            <input multiple="multiple" id="photos" class="form-input" name="photos[]" type="file">
        </div>
        <input type="submit" class="form-submit" value="Actualizar"/>
    </form>
@endsection
