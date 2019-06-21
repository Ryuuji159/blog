<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title')
            <title>Daniel Cortés</title>
        @show
        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>
        <nav>
            <div class="container">
                <ul>
                    <li>
                        <a href="{{route('index')}}">Daniel Cortes</a>
                    </li>
                    <li>
                        <a href="{{route('blog')}}">Blog</a>
                    </li>
                    <li>
                        <a href="{{route('now')}}">Now</a>
                    </li>
                    <li>
                        <a href="{{route('projects')}}">Projects</a>
                    </li>
                    <li>
                        <a href="{{route('setup')}}">Setup</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
        <script src="js/app.js"></script>
    </body>
</html>
