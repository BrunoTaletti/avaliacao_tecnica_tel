@extends('layouts.login-master')

@section('title', 'Registrar - Awesome Customer')

@section('subtitle', 'Crie sua conta agora mesmo, e faça parte da malhor plataforma para cuidar dos seus clientes.')

@section('monster')
    <img src="{{ asset('assets/img/register-monster.png') }}">
@endsection

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf     
            <div>
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nome" required autocomplete="name" autofocus>
        
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Repita sua senha" required autocomplete="new-password">
            </div>
                    
            <div>
                <button type="submit" class="button button-purple">
                    Login
                </button>
            </div>
    </form>

    <div class="buttons"> 
        <h3>
            Já tem uma conta?
                        
            <a class="button-link button-link-purple" href="{{ route('login') }}">
                Entre agora mesmo!
            </a>
        </h3>
    </div>
@endsection