@extends('layouts.login-master')

@section('title', 'Recuperar conta - Awesome Customer')

@section('subtitle', 'Recupere sua conta de forma rápida e intuitiva.')

@section('monster')
    <img src="{{ asset('assets/img/recover-password-monster.png') }}">
@endsection

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
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
                <button type="submit" class="button button-purple">
                    Enviar email de recuperação
                </button>
            </div>
    </form>

    <div class="buttons"> 
        <h3>
            <a class="button-link button-link-purple" href="{{ route('login') }}">
                Voltar para o login
            </a>
        </h3>
    </div>
@endsection