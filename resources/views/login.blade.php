@extends('base')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email" >e-mail</label>
            <input class="form-input" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>

        <div>
            <label for="password" >pass</label>
            <input class="form-input" id="password" type="password" name="password" required autocomplete="current-password">
        </div>

        <input class="form-submit" type="submit" value="login"/>
    </form>
@endsection
