@auth
    @if (Auth::user()->verified)
        @can('print.print')
        <button type="button" class="btn btn-light text-dark"><i class="material-icons left">local_printshop</i>Light</button>
        <li class="nav-item"><a class="nav-link" href="{{ route('print') }}"><i class="material-icons left">local_printshop</i>@lang('print.print')</a></li>
        @endif
        @can('internet.internet')
        <li class="nav-item"><a class="nav-link" href="{{ route('internet') }}"><i class="material-icons left">wifi</i>@lang('internet.internet')</a></li>
        @endif
         <!-- TODO: make a faults policy -->
        <li class="nav-item"><a class="nav-link" href="{{ route('faults') }}"><i class="material-icons left">build</i>@lang('faults.faults')</a></li>
        @can('print.modify') <!-- TODO: make a general admin policy-->
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.registrations') }}"> @lang('admin.handle_registrations')</a></li>
            {{--<li class="nav-item"><a class="nav-link" href="{{ route('print.admin') }}">@lang('print.print')</a></li>--}}
            <li class="nav-item"><a class="nav-link" href="{{ route('internet.admin') }}">@lang('internet.internet')</a></li>
        @endif

    @endif
@endauth 