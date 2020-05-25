@guest
    <li class="nav-item"><a class="nav-link text-white" href="{{ route('login') }}">@lang('general.login')</a></li>
    <li class="nav-item"><a class="nav-link text-white" href="{{ route('register') }}">@lang('general.register')</a></li>
@else
    <li class="nav-item"><a class="nav-link text-white" href="{{--{{ route('user') }}--}}">{{ Auth::user()->name }}</a></li>
@endguest