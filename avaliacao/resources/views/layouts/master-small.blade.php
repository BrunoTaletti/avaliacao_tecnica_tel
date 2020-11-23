<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <script src="{{ asset('js/card-animation.js') }}"></script>
    <script src="https://kit.fontawesome.com/8014fa37a7.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
</head>
<body>
    <div class="card-container">
        <div class="card-box">
            <div class="card-content">

                <nav class="nav-bar">
                    @guest
                            <h2>Bem vindo, visitante</h2>
                        @else
                            <div class="nav-bar-left">
                                <h2 class="links">Bem vindo, {{ Auth::user()->name }}</h2>
                            </div>

                            <div class="nav-bar-right">
                                <a href="javascript:history.back()" class="button-menu links">
                                    <em class="fas fa-arrow-circle-left"></em>
                                </a>
                            </div>
                    @endguest
                </nav>

                <h1>Awesome Customer</h1>

                <h3>@yield('subtitle')</h3>

                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
