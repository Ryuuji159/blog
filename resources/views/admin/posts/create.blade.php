@extends('admin.base')

@section('title')
    <h1>Create Post</h1>
@endsection

@section('content')
    <form action="{{ route('admin.post.save') }}" method="post">
        @csrf
        <div>
            <label for="title">Titulo</label>
            <input type="text" class="form-input" id="title" name="title" required/>
        </div>
        <div>
            <label for="md">Contenido</label>
            <textarea id="md" class="form-input" name="md"></textarea>
        </div>
        <input type="submit" class="form-submit" value="Crear"/>
    </form>

@endsection
