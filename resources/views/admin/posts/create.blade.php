@extends('admin.base')

@section('title')
    <h1>Create Post</h1>
@endsection

@section('content')
    <form class="pure-form pure-form-stacked" action="{{ route('admin.post.save') }}" method="post">
        @csrf
        <fieldset>
            <div class="pure-g">
                <div class="pure-u-1">
                    <label for="title">Titulo</label>
                    <input type="text" class="pure-u-23-24" id="title" name="title" required/>
                </div>

                <div class="pure-u-1">
                    <label for="md">Contenido</label>
                    <textarea id="md" class="pure-u-23-24" name="md"></textarea>
                </div>
            </div>
            <button class="pure-button" type="submit" class="form-submit">Crear</button>
        </fieldset>
    </form>

@endsection
