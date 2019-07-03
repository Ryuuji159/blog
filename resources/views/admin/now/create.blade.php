@extends('admin.base')

@section('title')
    <h1>Create Now</h1>
@endsection

@section('content')
    <form action="{{ route('admin.now.save') }}" method="post">
        @csrf
        <div>
            <label for="md">Contenido</label>
            <textarea id="md" class="form-input" name="md"></textarea>
        </div>
        <input type="submit" class="form-submit" value="Crear"/>
    </form>

@endsection
