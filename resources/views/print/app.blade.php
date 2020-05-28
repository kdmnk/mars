@extends('layouts.app')

@section('title')
@lang('print.print')
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card my-3">
            <div class="card-body">
                <h2 class="card-title">@lang('print.print_document')</h2>
                @include("print.print")
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                @include("print.free")
                @include("print.modify")
                @include("print.free-admin")
                @include("print.send")
                @include("print.history")
            </div>
        </div>
    </div>
</div>


<!-- Datepicker script -->
<script type="text/javascript">
    $(function(){
		$('.date').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
			clearBtn: true,
			weekStart: 1,
			startView: "century"
		})
	});
</script>

@endsection