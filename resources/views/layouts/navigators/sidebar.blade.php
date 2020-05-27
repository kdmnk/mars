<!-- sidebar for desktop view -->
<div class="col d-none d-lg-block fixed-top shadow h-100 p-0" style="overflow:auto; width:300px;">
    <!-- logo -->
    <div class="bg-secondary p-5" style="font-family: 'Exo 2', sans-serif;">
        <img class="float-lg-left" style="height:70px" src="{{ env('LOGO','') }}">
        <div class="py-4">
            <span id="title" class="text-white noselect">{{ config('app.name', 'Urán') }}</span>
            <sup id="version" class="text-white noselect">{{ env('APP_VERSION', '') }}</sup>
        </div>
        <div class="text-white noselect text-center">Eötvös József Collegium</div>
    </div>
    <!-- menu -->
    <ul class="nav flex-column p-3">
        @include('layouts.navigators.menu-items')
    </ul>
</div>