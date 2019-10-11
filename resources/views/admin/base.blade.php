<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daniel Cortés</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
            <div class="pure-menu pure-menu-horizontal">
                <span class="pure-menu-heading">Admin</span>
                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a class="pure-menu-link" href="{{ route('admin.post.index')  }}">Posts</a></li>
                    <li class="pure-menu-item"><a class="pure-menu-link" href="{{ route('admin.now.index')  }}">Now</a></li>
                    <li class="pure-menu-item"><a class="pure-menu-link" href="#">Setup</a></li>
                    <li class="pure-menu-item"><a class="pure-menu-link" href="{{ route('admin.project.index')  }}">Projects</a></li>
                    <li class="pure-menu-item"><a class="pure-menu-link" href="{{ route('index') }}">Volver</a></li>
                </ul>
            </div>

            <div class="container">
                @yield('content')
            </div>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
