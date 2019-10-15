@extends('admin.base')

@section('title')
    <h1>Create Now</h1>
@endsection

@section('content')
    <form class="pure-form pure-form-stacked" action="{{ route('admin.now.save') }}" method="post">
        @csrf
        <fieldset>
            <h1>Create Now</h1>
            <a class="pure-button button-black-white" href="{{ route('admin.now.index') }}">Back</a>

            <label for="md">Content</label>
            <textarea id="md" name="md"></textarea>

            <div class="control">
                <button type="submit" class="pure-button button-black-white">Create</button>
            </div>
        </fieldset>
    </form>

@endsection
