<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="autor" content="Daniel Cortés">
        @section('meta-description')
            <meta name="description" content="Hey, se un poco de programacion y queria crear una pagina :3">
        @show
        @section('title')
            <title>Daniel Cortés</title>
        @show
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="menu">
            <ul class="menu-list">
                <a class="menu-heading" href="{{route('index')}}">Daniel Cortes</a>

                <li class="menu-item">
                    <a class="menu-link" id="blog-link" href="{{route('blog.index')}}">Blog</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" id="now-link"  href="{{route('now.index')}}">Now</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" id="projects-link" href="{{route('project.index')}}">Projects</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" id="setup-link" href="{{route('setups.index')}}">Setups</a>
                </li>
                @auth
                    <li class="menu-item">
                        <a class="menu-link special-link" href="{{route('admin')}}">Admin</a>
                    </li>
                @endauth
            </ul>
        </nav>

        <div class="separator"></div>

        <div class="container">
            @yield('content')
        </div>

        <script async src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
