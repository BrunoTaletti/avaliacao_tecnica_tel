<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MyCustomer - Customers</title>
    
    <script src="{{ asset('js/card-animation.js') }}"></script>

    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
</head>
<body>
    <div class="card-app-container">
        <div class="card-app-box">
            <div class="card-content">
                <nav>
                    @guest
                            <h2>Bem vindo, visitante</h2>
                        @else
                            <h2>Bem vindo, {{ Auth::user()->name }}</h2>
                            
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    @endguest
                </nav>
                
                <h1>Awesome Customer</h1>
                
                <h3>Gerencie seus clientes</h3>
            </div>
        </div>
    </div>
</body>
</html>