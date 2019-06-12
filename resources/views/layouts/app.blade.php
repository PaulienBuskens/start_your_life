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

        <div class="sidenav" id="menuToggle">
        <input type="checkbox">

        <span></span>
        <span></span>
        <span></span>
        
        
        <ul id="menu">
            <div class="left__nav">
                <h5>Grootmoeder</h5>
                <a href="">
                    <li>Over grootmoeder</li>
                </a>
                <a href="">
                    <li>Personal assistants</li>
                </a>
            </div>
            <div class="mid__nav">
                <h5>Categorien</h5>
                <a href="/wonen">
                    <li>Wonen</li>
                </a>
                <a href="/vervoer">
                    <li>Vervoer</li>
                </a>
                <a href="/hobby">
                    <li>Hobby's</li>
                </a>
                <a href="/huishouden">
                    <li>Huishouden</li>
                </a>
                <a href="/gezondheid">
                    <li>Gezondheid</li>
                </a>
                <a href="/financien">
                    <li>Financien</li>
                </a>
                <a href="/solliciteren">
                    <li>Solliciteren</li>
                </a>
            </div>
            <div class="right__nav">
                <h5>Overige</h5>
                @guest 
                    <a href="/login">
                        <li>Login</li>
                    </a>
                    <a href="/register">
                        <li>Register</li>
                    </a>
                @else
                    <a href="/practice">
                        <li>Stel een vraag</li>
                    </a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
                @endguest
            </div>
           
        </ul>
        </div>

        <main>
            @yield('content')
        </main>
    </div>

    <footer></footer>
</body>
</html>
