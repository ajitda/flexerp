<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    @yield('css-plugins')
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app1">
        @include('partials.navbar')
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                     @if (Auth::guest())
                     <div class="col-sm-2"></div>
                     @else
                    @include('partials.sidebar')
                    @endif
                    <div class="col-sm-10">
                        <div class="content">
                            @yield('content')
                        </div>
                    </div>    
                </div>
            </div>
            
            

        </div>
        
    </div>

    <!-- Scripts -->
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/angular.min.js') }}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>
