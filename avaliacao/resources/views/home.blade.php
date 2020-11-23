@extends('layouts.app')

@section('title', 'Home - Awesome Customer')

@section('subtitle', 'Vamos começar!')

@section('content')
    <a class="button-card" href="{{ url('customers') }}">
        <div class="section">
            <em class="fas fa-user-circle"></em>
            <h2>Clientes</h2>
            <h3>Faça a gestão dos seus clientes aqui</h3>
        </div>
    </a>

    <a class="button-card" href="#">
        <div class="section">
            <em class="fas fa-rocket"></em>
            <h2>App [Em breve]</h2>
            <h3>Altere as configurações da aplicação, deixe tudo do seu gosto</h3>
        </div>
    </a>
@endsection
