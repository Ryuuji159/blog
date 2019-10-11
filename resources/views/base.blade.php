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
        <nav class="pure-menu pure-menu-horizontal">
            <a class="pure-menu-heading pure-menu-link" href="{{route('index')}}">Daniel Cortes</a>
            <ul class="pure-menu-list">
                <li class="pure-menu-item">
                    <a class="pure-menu-link" href="{{route('blog.index')}}">Blog</a>
                </li>
                <li class="pure-menu-item">
                    <a class="pure-menu-link" href="{{route('now.index')}}">Now</a>
                </li>
                <li class="pure-menu-item">
                    <a class="pure-menu-link" href="{{route('project.index')}}">Proyectos</a>
                </li>
                <li class="pure-menu-item">
                    <a class="pure-menu-link" href="{{route('setup')}}">Setup</a>
                </li>
                @auth
                    <li class="pure-menu-item">
                        <a class="pure-menu-link admin-link" href="{{route('admin')}}">Admin</a>
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
