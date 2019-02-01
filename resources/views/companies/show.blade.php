@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h2>{{ $company->name }}</h2>
            <a href="/companies" class="btn btn-secondary ml-auto">@lang('custom.backToCompanies')</a>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <tr>
                    <th colspan="2">@lang('custom.companyDetails')</th>
                </tr>
                <tr>
                    <td>@lang('custom.address'):</td>
                    <td>{{ $company->address }}</td>
                </tr>
                <tr>
                    <td>@lang('custom.email'):</td>
                    <td>{{ $company->email }}</td>
                </tr>
                <tr>
                    <td>@lang('custom.website'):</td>
                    <td>{{ $company->website }}</td>
                </tr>
                <tr>
                    <td>@lang('custom.numberOfEmployees'):</td>
                    <td>{{ $company->employees_number }}</td>
                </tr>
            </table>
            @if ($company->employees_number > 0)
                <h5>@lang('custom.employees')</h5>
                <div class="list-group">
                    @foreach($company->employees as $employee)
                    <a class="list-group-item-info list-group-item list-group-item-action" href="/employees/{{$employee->id}}">{{ $employee->full_name }}</a>
                    @endforeach
                </div>
            @else
                <h5>@lang('custom.noEmployees')</h5>
            @endif
        </div>
    </div>
@endsection