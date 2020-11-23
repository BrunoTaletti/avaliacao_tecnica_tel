@extends('layouts.master-auth')

@section('title', 'Entrar - Awesome Customer')

@section('subtitle', 'Seus clientes estão esperando, entre e comece sua gestão.')

@section('monster')
    <img src="{{ asset('assets/img/login-monster.png') }}">
@endsection

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
            <div>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <button type="submit" class="button button-purple button-block">
                    Login
                </button>
            </div>
    </form>

        <div class="buttons">
            <h3>
                Ops,

                <a class="button-link button-link-purple" href="{{ route('password.request') }}">
                    Esqueci minha senha.
                </a>
            </h3>

            <h3>ou</h3>

            <h3>
                Ainda não tem uma conta?

                <a class="button-link button-link-purple" href="{{ route('register') }}">
                    Registre-se agora!
                </a>
            </h3>
        </div>
@endsection
