<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daniel Cortés</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="pure-menu pure-menu-horizontal">
            <a class="pure-menu-heading pure-menu-link" id="title-link" href="{{route('admin')}}">Admin</a>
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a class="pure-menu-link" id="posts-link" href="{{ route('admin.post.index')  }}">Posts</a></li>
                <li class="pure-menu-item"><a class="pure-menu-link" id="now-link" href="{{ route('admin.now.index')  }}">Now</a></li>
                <li class="pure-menu-item"><a class="pure-menu-link" id="projects-link"href="{{ route('admin.project.index')  }}">Projects</a></li>
                <li class="pure-menu-item"><a class="pure-menu-link" id="setup-link" href="{{ route('admin.setup.index') }}">Setups</a></li>
                <li class="pure-menu-item"><a class="pure-menu-link special-link" href="{{ route('index') }}">Volver</a></li>
            </ul>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/admin.js') }}"></script>
    </body>
</html>
