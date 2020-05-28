<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ env('LOGO','') }}">
    <title>{{ config('app.name', 'Urán') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&display=swap" rel="stylesheet">

</head>

<body style="overflow-x: hidden">
    <div class="row">
        <div style="padding:0; width:100%">
            <header>
                <nav class="navbar navbar-expand bg-secondary justify-content-end">
                    <ul class="navbar-nav w-100 justify-content-end d-flex">
                        @auth
                            <li class="nav-item mx-3"><a class="nav-link text-white" href="{{ url('/home') }}">@lang('general.login')</a></li>
                        @else
                        @if (Route::has('register'))
                            <li class="nav-item mx-3"><a class="nav-link text-white" href="{{ route('register') }}">@lang('general.register')</a></li>
                        @endif
                        <li class="nav-item ml-auto mx-3"><a class="nav-link text-white" href="{{ route('login') }}">@lang('general.login')</a></li>
                        @endauth
                    </ul>
                </nav>
            </header>
            <div style="min-height:80%;min-height:80vh;display:flex;align-items:center;">
                <main class="container">
                    <div class="row text-center">
                        <div class="col-md text-md-right">
                            <img class="noselect" style="height:130px" src="{{ env('LOGO','') }}">
                        </div>
                        <div class="col-md text-md-left" style="font-family: 'Exo 2', sans-serif;">
                            <div class="py-4">
                                <span class="noselect text-muted" style="font-size: 80px;letter-spacing: 3px;">{{ config('app.name', 'Urán') }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" >
                        <a href="#" class="col-lg-2 btn btn-dark">
                        @lang('main.better')</a>
                        <a href="#" class="col-lg-2 btn btn-dark">
                        @lang('main.faster')</a>
                        <a href="#" class="col-lg-2 btn btn-dark">
                        @lang('main.brilliant')</a>
                        <a href="#" class="col-lg-2 btn btn-dark">
                        @lang('main.essential')</a>
                        <a href="#" class="col-lg-2 btn btn-dark">
                        @lang('main.modern')</a>
                        <a href="https://github.com/luksan47/mars" class="col-lg-2 btn btn-dark">
                        @lang('main.open')</a>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>