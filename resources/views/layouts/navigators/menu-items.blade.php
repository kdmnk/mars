@auth
    @if (Auth::user()->verified)
        <!-- print -->
        @can('print.print')
        <li class="nav-item"><a class="nav-link menu-item" href="{{ route('print') }}"><i class="material-icons ml-1 mr-3">local_printshop</i>@lang('print.print')</a></li>
        @endif
        <!-- internet -->
        @can('internet.internet')
        <li class="nav-item"><a class="nav-link menu-item" href="{{ route('internet') }}"><i class="material-icons ml-1 mr-3">wifi</i>@lang('internet.internet')</a></li>
        @endif
        <!-- faults --> <!-- TODO: make a faults policy -->
        <li class="nav-item"><a class="nav-link menu-item" href="{{ route('faults') }}"><i class="material-icons ml-1 mr-3">build</i>@lang('faults.faults')</a></li>
        <!-- admin -->
        @can('print.modify') <!-- TODO: make a general admin policy-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle menu-item" href="#" id="adminDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons ml-1 mr-3">settings</i>Admin</a>
            <div class="dropdown-menu" aria-labelledby="adminDropdown">
                <a class="dropdown-item" href="{{ route('admin.registrations') }}">@lang('admin.handle_registrations')</a>
                {{--<a class="dropdown-item" href="{{ route('print.admin') }}">@lang('print.print')</a>--}}
                <a class="dropdown-item" href="{{ route('internet.admin') }}">@lang('internet.internet')</a>
            </div>
        </li>
        @endif
    @endif
@endauth
<!-- language selector -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle menu-item" href="#" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="material-icons ml-1 mr-3">language</i>Language<span class="caret"></span></a>
    <div class="dropdown-menu" aria-labelledby="languageDropdown">
        @foreach (config('app.locales') as $code => $name) 
            @if ($code != App::getLocale())
                <a class="dropdown-item" href="{{ route('setlocale', $code) }}">{{ $name }}</a>
            @endif
        @endforeach
    </div>
</li>
