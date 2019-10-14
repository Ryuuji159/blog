@extends('admin.base')

@section('title')
    <h1>Create Project</h1>
@endsection

@section('content')
    <form action="{{ route('admin.project.save') }}" enctype="multipart/form-data" class="pure-form pure-form-stacked" method="post">
        @csrf
        <fieldset>
            <h1>Add Project</h1>
            <a class="pure-button button-black-white" href="{{ route('admin.project.index') }}">Volver</a>

            <label for="title">Titulo</label>
            <input type="text" id="title" name="title" required/>

            <label for="md">Descripcion</label>
            <textarea id="md" name="md"></textarea>

            <label for="photos">Fotos</label>
            <input multiple="multiple" id="photos" name="photos[]" type="file">

            <div class="control">
                <button class="pure-button button-black-white" type="submit">Crear</button>
            </div>
        </fieldset>
    </form>

@endsection
