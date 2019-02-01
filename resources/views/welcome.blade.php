@extends('layouts.app')

@section('content')
<div class="content text-center">
    <h1>
        @lang('custom.welcome')
    </h1>
    <h2>@lang('custom.chooseLanguage')</h2>
    <div class="btn-group">
        <a class="btn btn-success btn-lg" href="lang/hu">@lang('custom.hungarian')</a>
        <a class="btn btn-primary btn-lg" href="lang/en">@lang('custom.english')</a>
    </div>
</div>
@endsection