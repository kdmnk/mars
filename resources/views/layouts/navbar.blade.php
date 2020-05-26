<nav class="navbar navbar-expand-lg bg-secondary justify-content-between align-items-start">
    <div class="row px-3">
        <button class="navbar-toggler text-white align-bottom" type="button" data-toggle="collapse"
            data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="material-icons">menu</i>
        </button>
        <div class="col pr-0 text-white d-none d-lg-block mt-2"><i class="material-icons" style="font-size: 1.5rem">keyboard_arrow_right</i></div>
        <div class="col p-0 text-white mt-2">Hello</div>
    </div>
    <ul id="user" class="navbar-nav d-flex justify-content-end">
        @guest
        <li class="nav-item mx-3">
            <a class="nav-link text-white" href="{{ route('login') }}">@lang('general.login')</a>
        </li>
        <div class="nav-item mx-3">
            <a class="nav-link text-white" href="{{ route('register') }}">@lang('general.register')</a>
        </li>
        @else
        <li class="nav-item dropdown mx-3">
            <a class="nav-link text-white dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    @lang('general.logout')
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              <a class="dropdown-item" href="#">Settings (Soon...)</a>
            </div>
          </li>
        @endguest
    </ul>
    <div class="collapse navbar-collapse" id="navbarMobile">
        <ul class="navbar-nav d-lg-none">
            @include('layouts.navigators.main')
            <a class="navbar-brand text-white mx-auto" href="#">
                <img src="{{ env('LOGO','') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                {{ config('app.name', 'Urán') }}
            </a>
        </ul>
    </div>
</nav>