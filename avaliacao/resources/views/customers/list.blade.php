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

                <table class="customers-table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Data de nascimento</th>
                            <th>Telefones</th>
                            <th>Local de nascimento</th>
                            <th>Cadastrado por</th>
                            <th>Cadastrado em</th>
                            <th>Editado por</th>
                            <th>Editado em</th>
                            <th>Ações</th>
                        </tr>   
                    </thead>
                    <tbody>
                        @foreach ( $customers_data as $customer )
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->cpf }}</td>
                            <td>{{ $customer->rg }}</td>
                            <td>{{ $customer->birth_date }}</td>
                            <td>{{ $customer->telephone }}</td>
                            <td>{{ $customer->birth_place }}</td>
                            <td>{{ $customer->created_by }}</td>
                            <td>{{ $customer->created_at }}</td>
                            <td>{{ $customer->updated_by }}</td>
                            <td>{{ $customer->updated_at }}</td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>