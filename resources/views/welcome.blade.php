<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SBR</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #98dbfc;
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            a:link, a:visited {
                text-decoration: none;
                color: #000000;
            }

            a:hover {
                text-decoration: underline; 
                color: black
                }
                
            a:active {
               text-decoration: none;
               color: #000000;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <span class="login100-form-logo">
                        <img src="{{ asset('Login_v3/images/Logo_SBR_ROXO.png') }}" width="150px" height="150px" alt="Logomarca">
                    </span>
                </div>

                <div class="links">
                    <p>SBR Frescores da Vida</p>
                    <a href="https://www.oggisorvetes.com.br" target="_blank">Oggi Sorvetes</a>
                    <a href="https://www.ifood.com.br/delivery/sao-paulo-sp/oggi-sorvetes-santana-santana/f43996aa-2c82-4ce0-b007-7e06b01d6c6f" target="_blank">Ifood</a>
                    <a href="https://www.ubereats.com/br/sao-paulo/food-delivery/oggi-sorvetes-santana/tmhjZvI_Tx-OLFIwcL4FLA" target="_blank">UberEats</a>
                    <p><a href="https://www.google.com/maps/place/R.+Francisca+J%C3%BAlia,+43+-+Santana,+S%C3%A3o+Paulo+-+SP,+02403-010/@-23.4945711,-46.6284891,17z/data=!3m1!4b1!4m5!3m4!1s0x94cef6316ef737d9:0xb53eeacd3397849e!8m2!3d-23.4945711!4d-46.6263004" >Rua Francisca Julia, 43, Santana - São Paulo - SP </a></p>
                    <p>CEP: 02403-010</p>
                    <p>Tel / Whatts: +55 (11) 2959-9722 </p>
                </div>
            </div>
        </div>
    </body>
</html>
