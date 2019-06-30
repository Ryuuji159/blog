@extends('admin.base')

@section('title')
    <h1>Edit Post</h1>
@endsection

@section('content')
    <form action="{{ route('admin.post.update', ['post' => $post->id]) }}" method="post">
        @csrf
        <div>
            <label for="title">Titulo</label>
            <input type="text" class="form-input" id="title" name="title" value="{{ old('title', $post->title) }}" required/>
        </div>
        <div>
            <label for="md">Contenido</label>
            <textarea class="form-input" id="md" name="md">{{ old('md', $post->md) }}</textarea>
        </div>
        <input type="submit" class="form-submit" value="Actualizar"/>
    </form>
@endsection
