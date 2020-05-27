@extends('layouts.app')

@section('title')
    @lang('general.dashboard')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @lang('general.you_are_logged_in')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
