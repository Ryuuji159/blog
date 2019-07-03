<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title')
            <title>Daniel Cortés</title>
        @show
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar">
            <ul class="navbar-items">
                <li class="navbar-item">
                    <a class="navbar-item-head" href="{{route('index')}}">Daniel Cortes</a>
                </li>
                <li class="navbar-item">
                    <a class="navbar-item-link" href="{{route('blog.index')}}">Blog</a>
                </li>
                <li class="navbar-item">
                    <a class="navbar-item-link" href="{{route('now.index')}}">Now</a>
                </li>
                <li class="navbar-item">
                    <a class="navbar-item-link" href="{{route('project.index')}}">Proyectos</a>
                </li>
                <li class="navbar-item">
                    <a class="navbar-item-link" href="{{route('setup')}}">Setup</a>
                </li>
                @auth
                    <li class="navbar-item">
                        <a class="navbar-item-link" href="{{route('admin')}}">ADMIN</a>
                    </li>
                @endauth
            </ul>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
