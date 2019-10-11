@extends('base')

@section('content')
    <form method="post" action="{{ route('login') }}" class="pure-form pure-form-aligned">
        @csrf
        <fieldset>
            <div class="pure-control-group">
                <label for="email" >e-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="e-mail" required autocomplete="email" autofocus>
            </div>

            <div class="pure-control-group">
                <label for="password" >pass</label>
                <input id="password" type="password" name="password" placeholder="pass" required autocomplete="current-password">
            </div>

            <div class="pure-controls">
                <button type="submit" class="pure-button button-black-white">login</button>
            </div>
        </fieldset>
    </form>
@endsection
