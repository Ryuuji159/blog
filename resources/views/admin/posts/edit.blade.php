@extends('admin.base')

@section('title')
    <h1>Edit Post</h1>
@endsection

@section('content')
    <form class="pure-form pure-form-stacked"  action="{{ route('admin.post.update', ['post' => $post->id]) }}" method="post">
        @csrf
        <fieldset>
            <label for="title">Titulo</label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required/>
            <label for="md">Contenido</label>
            <textarea id="md" name="md">{{ old('md', $post->md) }}</textarea>
            <div class="control">
                <button type="submit" class="pure-button button-black-white">Actualizar</button>
            </div>
            </div>
        </fieldset>
    </form>
@endsection
