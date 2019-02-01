@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <span>@lang('custom.createCompany')</span>
        </div>
        <div class="card-body">
            <form action="/companies" method="post" enctype="multipart/form-data">
                @csrf
                @include('companies._form')
                <button type="submit" name="submit" class="btn btn-success btn-lg">@lang('custom.create')</button>
            </form>
        </div>
    </div>
@endsection