<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ env('LOGO','') }}">
    <title>{{ config('app.name', 'Urán') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-formhelpers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabulator_bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cookieconsent.min.css') }}" >
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200&display=swap" rel="stylesheet">
</head>

<body style="overflow-x: hidden">
    <div class="row">
        <div id="sidebar" class="col d-none d-lg-block fixed-top shadow">
            <div id="logo" class="bg-secondary white-text">
                <img class="float-lg-left" style="height:70px" src="{{ env('LOGO','') }}">
                <div id="logotext">
                    <span id="title" class="text-white">{{ config('app.name', 'Urán') }}</span>
                    <sup id="version" class="text-white noselect">{{ env('APP_VERSION', '') }}</sup>
                </div>
                <div class="text-white noselect text-center">Eötvös József Collegium</div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Disabled</a>
                </li>
            </ul>
        </div>
        <div id="content" class="" style="padding:0; width:100%">@include('layouts.navbar')
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script>
        var cookieMessages = {
            'dismiss' : "@lang('cookie.dismiss')",
            'allow' : "@lang('cookie.allow')",
            'deny' : "@lang('cookie.deny')",
            'link' : "@lang('cookie.link')",
            'cookie' : "@lang('cookie.message')",
            'header' : "@lang('cookie.header')",
        };
    </script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-formhelpers.min.js') }}"></script>
    <script src="{{ asset('js/tabulator.min.js') }}" defer></script>
    <script src="{{ asset('js/site.js') }}" defer></script>
    <script src="{{ asset('js/cookieconsent.min.js') }}" defer></script>
    <script src="{{ asset('js/cookieconsent-initialize.js') }}" defer></script>
    <script type="text/javascript">
        $(document).ready(function() {$.ajaxSetup({
                    headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"}
                }),
                $('body').bootstrapMaterialDesign();
            });
    </script>
</body>

</html>