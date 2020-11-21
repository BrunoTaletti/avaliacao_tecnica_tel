<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/card-animation.js') }}"></script>
    
    <title>{{ __('MyCustomer - Recuperar conta') }}</title>
</head>
<body>
    <div class="card-container">
        <div class="card-box">
            <div class="monster">
                <div class="circle"></div>
                <img src="{{ asset('assets/img/recover-password-monster.png') }}">
            </div>
            <div class="card-content">
                <h1>{{ __('MyCustomer') }}</h1>
                
                <h3>{{ __('Recupere sua conta de forma rápida e prática, não deixe seus clientes na mão!') }}</h3>
                
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
                            {{ __('Enviar email de reset') }}
                        </button>
                    </div>
                </form>

                <div class="buttons"> 
                    <h3>
                        <a class="button-link button-link-purple" href="{{ route('login') }}">
                            {{ __('Voltar para o login') }}
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>