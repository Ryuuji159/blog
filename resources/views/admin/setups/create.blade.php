@extends('admin.base')

@section('title')
    <h1>Add Setup</h1>
@endsection

@section('content')
    <article>
        <form class="pure-form pure-form-stacked" action="{{ route('admin.setup.save') }}" method="post">
            @csrf
            <fieldset>
                <h1>Add Setup</h1>
                <a class="pure-button button-black-white" href="{{ route('admin.setup.index') }}">Back</a>

                <label for="title">Title</label>
                <input type="text" id="title" name="title" required/>

                <label for="md">Content</label>
                <textarea id="md" name="md"></textarea>

                <label for="published">
                    <input type="checkbox" id="published" name="published">
                    Published
                </label>

                <div class="control">
                    <button class="pure-button button-black-white" name="action" id="preview" type="submit" value="preview">Preview</button>
                    <button class="pure-button button-black-white" name="action" id="main" type="submit" value="create">Create</button>
                </div>
            </fieldset>
        </form>
    </article>
@endsection
