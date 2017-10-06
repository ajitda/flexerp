<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <!-- Styles -->
        <style>
            html, body {
                height: 100vh;
                background: url(img/flexerp_back.jpg)repeat scroll 0 0;
  
            }
            .full-height {
                height: 100vh;
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
                color: #fff;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <i class="fa fa-lock"></i> FLEX<span>ERP</span>
                    
                </div>

                <div class="links">
                    Designed & Developed By <a href="https://flexibleit.net/"><img src="{{asset('img/logo-blue.png')}}" alt=""></a>
                    <div class="footer-social">
                        <a href="https://github.com/ajitda/"><i class="fa fa-github"></i></a>
                        <a href="https://laracasts.com"><i class="fa fa-facebook"></i></a>
                        <a href="https://laracasts.com"><i class="fa fa-twitter"></i></a>
                        <a href="https://laracasts.com"><i class="fa fa-linkedin"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
