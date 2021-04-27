<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Banco Chapin -BAC-</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {                
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url(https://republica.gt/wp-content/uploads/2018/08/SIB-e1553724232186.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-color: #FFF;
                color: rgb(231, 191, 12)
            }
            .button {
                background-color: #4F4F4F;
                border: none;
                color: white;
                padding: 15px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 50%;
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
                font-family: Arial Black;
                font-size: 25px;
            }

            .content {
                text-align: center;
                font-size: 26px;
                font-family: arial black;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #f30000;
                padding: 0 25px;
                font-size: 22px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }        
            .btn{
                opacity: 0.8;
            }  
            .parrafo{
                width: 1000px;
                color: #020202fa;
                text-align: center;
                align-items: center;
                align-items: center;   
                font-size: 20px;             
            }  
            .parrafo1{
                background-color: gainsboro;
                opacity: 0.8;
            }  
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links btn btn-info btn btn-outline-primary" id="inicio">
                    @auth
                        <a href="{{ url('cuentas') }}">Cuentas</a>
                    @else
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Banco Chapin -BAC-
                </div>         
                <div class="parrafo">
                    <br>
                    <p class="parrafo1">
                        Parte de nuestro propósito en el Banco Chapin
                        es promover el desarrollo económico sostenible para lograr el bienestar de todos.
                        Respondemos a una agenda global que está basada en los 17 Objetivos de Desarrollo 
                        Sostenible de Naciones Unidas, que nos une con otros actores de la sociedad para emprender 
                        acciones de impacto.
                    </p>
                </div>       
            </div>            
        </div>
    </body>
</html>
