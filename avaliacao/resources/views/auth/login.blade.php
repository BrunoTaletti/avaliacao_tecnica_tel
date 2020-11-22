<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/card-animation.js') }}"></script>
    
    <title>{{ __('MyCustomer - Login') }}</title>
</head>
<body>
    <div class="card-container">
        <div class="card-box">
            <div class="monster">
                <div class="circle"></div>
                <img src="{{ asset('assets/img/login-monster.png') }}">
            </div>
            <div class="card-content">
                <h1>Awesome Customer</h1>
                
                <h3>{{ __('Olá, faça já o seu login para acessar a melhor plataforma gerenciadora de clientes em todo o mundo.') }}</h3>
                
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
                        <button type="submit" class="button button-purple">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>

                <div class="buttons"> 
                    <h3>
                        {{ __('Ops,') }}
                        
                        <a class="button-link button-link-purple" href="{{ route('password.request') }}">
                            {{ __('Esqueci minha senha.') }}
                        </a>
                    </h3>

                    <h3>{{ __('ou') }}</h3>
                    
                    <h3>
                        {{ __('Ainda não tem uma conta?') }}
                        
                        <a class="button-link button-link-purple" href="{{ route('register') }}">
                            {{ __('Registre-se agora!') }}
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>