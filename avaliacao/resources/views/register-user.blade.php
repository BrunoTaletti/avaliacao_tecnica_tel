<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/card-animation.js') }}"></script>

    <title>{{ __('MyCustomer - Register') }}</title>
</head>
<body>
    <div class="card-container">
        <div class="card-box">
            <div class="monster">
                <div class="circle"></div>
                <img src="{{ asset('assets/img/register-monster.png') }}">
            </div>
            <div class="card-content">
                <h1>{{ __('MyCustomer') }}</h1>
                
                <h3>{{ __('Crie sua conta agora mesmo, e faça parte da malhor plataforma para cuidar dos seus clientes.') }}</h3>
                
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
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>

                <div class="buttons"> 
                    <h3>
                        {{ __('Ja tem uma conta?') }}
                        
                        <a class="button-link button-link-purple" href="{{ route('login') }}">
                            {{ __('Entre agora mesmo') }}
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>