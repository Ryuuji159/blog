@extends('admin.base')

@section('title')
    <h1>Edit Now</h1>
@endsection

@section('content')
    <form action="{{ route('admin.now.update', ['now' => $now->id]) }}" method="post">
        @csrf
        <div>
            <label for="md">Contenido</label>
            <textarea class="form-input" id="md" name="md">{{ old('md', $now->md) }}</textarea>
        </div>
        <input type="submit" class="form-submit" value="Actualizar"/>
    </form>
@endsection
