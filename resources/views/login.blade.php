@extends('base')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email" >e-mail</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>

        <div>
            <label for="password" >pass</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
        </div>

        <button type="submit">login</button>
    </form>
@endsection
