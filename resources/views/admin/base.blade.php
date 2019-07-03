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
            <div class="sidebar-items">
                <div class="sidebar-head"><span>Admin</span></div>
                <div class="sidebar-item"><a href="{{ route('admin.post.index')  }}" class="sidebar-link">Posts</a></div>
                <div class="sidebar-item"><a href="{{ route('admin.now.index')  }}" class="sidebar-link">Now</a></div>
                <div class="sidebar-item"><a href="#" class="sidebar-link">Setup</a></div>
                <div class="sidebar-item"><a href="{{ route('admin.project.index')  }}" class="sidebar-link">Projects</a></div>
                <div class="sidebar-end"><a href="{{ route('index') }}" class="sidebar-link">Volver</a></div>
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
