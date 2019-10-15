@extends('admin.base')

@section('title')
    <h1>Create Post</h1>
@endsection

@section('content')
    <article>
        <form class="pure-form pure-form-stacked" action="{{ route('admin.post.save') }}" method="post">
            @csrf
            <fieldset>
                <h1>Create Post</h1>
                <a class="pure-button button-black-white" href="{{ route('admin.post.index') }}">Back</a>

                <label for="title">Title</label>
                <input type="text" id="title" name="title" required/>

                <label for="md">Content</label>
                <textarea id="md" name="md"></textarea>

                <div class="control">
                    <button class="pure-button button-black-white" type="submit">Create</button>
                </div>
            </fieldset>
        </form>
    </article>
@endsection