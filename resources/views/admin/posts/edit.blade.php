@extends('admin.base')

@section('title')
    <h1>Edit Post</h1>
@endsection

@section('content')
    <form class="pure-form pure-form-stacked"  action="{{ route('admin.post.update', ['post' => $post->id]) }}" method="post">
        @csrf
        <fieldset>
        <div class="pure-g">
            <div class="pure-u-1">
                <label for="title">Titulo</label>
                <input type="text" class="pure-u-23-24" id="title" name="title" value="{{ old('title', $post->title) }}" required/>
            </div>
            <div class="pure-u-1">
                <label for="md">Contenido</label>
                <textarea class="pure-u-23-24" id="md" name="md">{{ old('md', $post->md) }}</textarea>
            </div>
        </div>
        <button type="submit" class="pure-button">Actualizar</button>
    </form>
@endsection
