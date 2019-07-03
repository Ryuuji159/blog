@extends('admin.base')

@section('title')
    <h1>Create Project</h1>
@endsection

@section('content')
    <form action="{{ route('admin.project.save') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div>
            <label for="title">Titulo</label>
            <input type="text" class="form-input" id="title" name="title" required/>
        </div>
        <div>
            <label for="md">Descripcion</label>
            <textarea id="md" class="form-input" name="md"></textarea>
        </div>
        <div>
            <label for="photos">Fotos</label>
            <input multiple="multiple" id="photos" class="form-input" name="photos[]" type="file">
        </div>

        <input type="submit" class="form-submit" value="Crear"/>
    </form>

@endsection
