<div id="sidebar" class="col d-none d-lg-block fixed-top shadow" style="overflow: auto;">
    <div id="logo" class="bg-secondary white-text">
        <img class="float-lg-left" style="height:70px" src="{{ env('LOGO','') }}">
        <div id="logotext">
            <span id="title" class="text-white">{{ config('app.name', 'Urán') }}</span>
            <sup id="version" class="text-white noselect">{{ env('APP_VERSION', '') }}</sup>
        </div>
        <div class="text-white noselect text-center">Eötvös József Collegium</div>
    </div>
    <ul class="nav flex-column p-3">
        @include('layouts.navigators.main')
    </ul>
</div>