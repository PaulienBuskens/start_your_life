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
            <div class="profile">
                <a href="/profile">
                    <img src="{{ asset('images/rebrand/profile.png')}}" alt="profiel">
                </a>
            </div>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <footer></footer>
</body>
</html>
