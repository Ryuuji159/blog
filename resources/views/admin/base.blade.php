<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daniel Cortés</title>
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="sidebar">
            <div class="items">
                <div class="head"><h1>Admin</h1></div>
                <div class="item"><a href="{{ route('admin.post.index') }}">Posts</a></div>
                <div class="item"><a href="#">Now</a></div>
                <div class="item"><a href="#">Setup</a></div>
                <div class="item"><a href="#">Projects</a></div>
                <div class="end"><a href="{{ route('index') }}">Volver</a></div>
            </div>
        </div>

        <div class="container">
            @yield('title')
            <hr/>
            @yield('content')
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
