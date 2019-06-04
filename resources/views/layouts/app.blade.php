<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Start Your Life</title>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <nav>
            
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer></footer>
</body>
</html>
