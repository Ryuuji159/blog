@extends('admin.base')

@section('title')
    <h1>Edit Now</h1>
@endsection

@section('content')
    <form class="pure-form pure-form-stacked" action="{{ route('admin.now.update', ['now' => $now->id]) }}" method="post">
        @csrf
        <fieldset>
            <h1>Editar Now</h1>
            <a href="{{ route('admin.now.index') }}" class="pure-button button-black-white">Volver</a>
            
            <label for="md">Contenido</label>
            <textarea id="md" name="md">{{ old('md', $now->md) }}</textarea>

            <div class="control">
                <button type="submit" class="pure-button button-black-white">Actualizar</button>
            </div>
        </fieldset>
    </form>
@endsection
