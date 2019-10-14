@extends('admin.base')

@section('title')
    <h1>Create Post</h1>
@endsection

@section('content')
    <form class="pure-form pure-form-stacked" action="{{ route('admin.post.save') }}" method="post">
        @csrf
        <fieldset>
            <h1>Create post</h1>
            <a class="pure-button button-black-white" href="{{ route('admin.post.index') }}">Volver</a>

            <label for="title">Titulo</label>
            <input type="text" id="title" name="title" required/>

            <label for="md">Contenido</label>
            <textarea id="md" name="md"></textarea>

            <div class="control">
                <button class="pure-button button-black-white" type="submit">Crear</button>
            </div>
        </fieldset>
    </form>
@endsection
