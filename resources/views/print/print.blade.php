<div class="note">
    @lang('print.pdf_description')
    @lang("print.pdf_maxsize", ['maxsize' => config('print.pdf_size_limit')/1000/1000])
    @lang('print.costs',['one_sided'=>App\PrintAccount::$COST['one_sided'], "two_sided" =>
    env('PRINT_COST_TWOSIDED')])
</div>
<div class="note">
    @lang('print.available_money'): {{ Auth::user()->printAccount->balance }} HUF
</div>
<form class="form-horizontal" role="form" method="POST" action="{{ route('print.print') }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-8 form-group">
            <label for="file_to_upload">@lang('print.select_document')</label>
            <input type="file" class="form-control" name="file_to_upload" id="file_to_upload" required>
        </div>
        <div class="col-lg-4 form-group">
            <label for="number_of_copies">@lang('print.number_of_copies')</label>
            <input id="number_of_copies" class="form-control" name="number_of_copies" type="number" min="1"
                value="1" required>
        </div>
        <div class="col-lg-4">
            <label for="inlineFormInput">@lang('print.use_free_pages')</label>
            <input type="checkbox" name="use_free_pages" id="use_free_pages" checked />
        </div>
        <div class="col-lg-4">
            <label for="inlineFormInput">@lang('print.twosided')</label>
            <input type="checkbox" name="two_sided" id="two_sided" checked />
        </div>
        <div class="col-lg-4">
            <input type="submit" class="btn btn-primary btn-block btn-lg" value="@lang('print.print')" />
        </div>
    </div>
</form>
@if ($errors->any())
<div class="note error">
    @foreach ($errors->all() as $error)
    <i class="material-icons mr-3">error_outline</i>{{ $error }}<br>
    @endforeach
</div>
@endif
@if (session('print.status'))
<div class="alert alert-success alert-dismissible">
    {{ session('print.status') }}Sikeres nyomtatas
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif