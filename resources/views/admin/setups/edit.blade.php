@extends('admin.base')

@section('title')
    <h1>Edit Setup</h1>
@endsection

@section('content')
    <form class="pure-form pure-form-stacked"  action="{{ route('admin.setup.update', ['setup' => $setup->id]) }}" method="post">
        @csrf
        <fieldset>
            <h1>Edit Setup</h1>
            <a href="{{ route('admin.setup.index') }}" class="pure-button button-black-white">Back</a>

            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $setup->title) }}" required/>

            <label for="md">Content</label>
            <textarea id="md" name="md">{{ old('md', $setup->md) }}</textarea>

            <div class="control">
                <button type="submit" class="pure-button button-black-white">Update</button>
            </div>
        </fieldset>
    </form>
@endsection
