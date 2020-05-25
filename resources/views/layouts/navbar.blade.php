<nav class="navbar navbar-expand-lg navbar-light bg-secondary justify-content-between">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand d-lg-none" href="#">
        <img src="{{ env('LOGO','') }}" width="30" height="30" class="d-inline-block align-top" alt="">
        {{ config('app.name', 'Urán') }}
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white" href="#">Home</a>
        </li>
    </ul>
    <ul class="navbar-nav">
        @include('layouts.navigators.user')
    </ul>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav d-lg-none">
            @include('layouts.navigators.main')
        </ul>
    </div>
</nav>