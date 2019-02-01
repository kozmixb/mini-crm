@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <span>@lang('custom.createEmployee')</span>
        </div>
        <div class="card-body">
            <form action="/employees" method="post">
                @csrf
                @if (count($companies)>0)
                    @include('employees._form')
                   <button type="submit" name="submit" class="btn btn-success btn-lg">@lang('custom.create')</button>
                @else
                    <h1>@lang('custom.noCompanyAvailable')!!!</h1>
                    <a class="btn btn-primary btn-bg" href='/companies/create'>@lang('custom.createCompany')</a>
                @endif
                
            </form>
        </div>
    </div>
@endsection