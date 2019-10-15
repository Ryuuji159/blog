@extends('admin.base')

@section('title')
    <h1>Edit Post</h1>
@endsection

@section('content')
    <article>
        <form class="pure-form pure-form-stacked"  action="{{ route('admin.post.update', ['post' => $post->id]) }}" method="post">
            @csrf
            <fieldset>
                <h1>Editar Post</h1>
                <a href="{{ route('admin.post.index') }}" class="pure-button button-black-white">Back</a>

                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required/>

                <label for="md">Content</label>
                <textarea id="md" name="md">{{ old('md', $post->md) }}</textarea>

                <div class="control">
                    <button type="submit" class="pure-button button-black-white">Update</button>
                </div>
            </fieldset>
        </form>
    </article>
@endsection
