@extends('admin.base')

@section('title')
    <h1>Edit Now</h1>
@endsection

@section('content')
    <form class="pure-form pure-form-stacked" action="{{ route('admin.now.update', ['now' => $now->id]) }}" method="post">
        @csrf
        <fieldset>
            <h1>Edit Now</h1>
            <a href="{{ route('admin.now.index') }}" class="pure-button button-black-white">Back</a>
            
            <label for="md">Content</label>
            <textarea id="md" name="md">{{ old('md', $now->md) }}</textarea>

            <div class="control">
                <button class="pure-button button-black-white" name="action" id="preview" type="submit" value="preview">Preview</button>
                <button class="pure-button button-black-white" name="action" id="main" type="submit" value="update">Update</button>
            </div>
        </fieldset>
    </form>
@endsection
