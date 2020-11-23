<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/global.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/card-animation.js') }}"></script>

    <title>{{ __('MyCustomer - Bem-vindo!') }}</title>
</head>
<body>
    <div class="card-container">
        <div class="card-box">
            <div class="monster">
                <div class="circle"></div>
                <img src="{{ asset('assets/img/welcome-monster.png') }}">
            </div>
            <div class="card-content">
                <h1>Awesome Customer</h1>

                <h3>
                    {{ __('Ainda não conhece a gente? aqui vai uma breve introdução, somos simplesmente
                    a maior plataforma de gestão de clientes em toda a America Latina, já são mais de 5
                    anos no mercado e 8 mil clientes sastisfeitos com nosso serviço. Temos como missão
                    oferecer soluções de ponta, com qualidade e agilidade na gestão dos seus clientes.
                    E ai? ta esperando o que? comece agora mesmo!') }}
                </h3>

                <a class="button-link" href="{{ route('login') }}">
                    <button class="button button-purple button-block">
                        Começar
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
