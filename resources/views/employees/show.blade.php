@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h2>{{ $employee->full_name }}</h2>
            <a href="/employees" class="btn btn-secondary ml-auto">@lang('custom.backToEmployees')</a>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <tr>
                    <th colspan="2">@lang('custom.employeeDetails')</th>
                </tr>
                <tr>
                    <td>@lang('custom.first_name'):</td>
                    <td>{{ $employee->first_name }}</td>
                </tr>
                <tr>
                    <td>@lang('custom.last_name'):</td>
                    <td>{{ $employee->last_name }}</td>
                </tr>
                <tr>
                    <td>@lang('custom.email'):</td>
                    <td>{{ $employee->email }}</td>
                </tr>
                <tr>
                    <td>@lang('custom.phone'):</td>
                    <td>{{ $employee->phone }}</td>
                </tr>
                <tr>
                    <td>@lang('custom.company'):</td>
                    <td><a href="/companies/{{$employee->company->id}}">{{ $employee->company->name }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection