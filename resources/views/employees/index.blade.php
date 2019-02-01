@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <span>@lang('custom.employees')</span>
        </div>
        <div class="card-body">
            @auth
                <a href="/employees/create" class="btn btn-success">@lang('custom.createEmployee')</a>
            @endauth
            <div class="card mt-3">
                <div class="card-header">@lang('custom.employeesList')</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>@lang('custom.first_name')</th>
                                <th>@lang('custom.last_name')</th>
                                <th>@lang('custom.company')</th>
                                <th>@lang('custom.email')</th>
                                <th>@lang('custom.phone')</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($employees)>0)
                                @foreach ($employees as $employee)
                                <tr>
                                    <td><a href="/employees/{{$employee->id}}">{{$employee->first_name}}</td>
                                    <td>{{$employee->last_name}}</td>
                                    <td>{{$employee->company->name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->phone}}</td>
                                    <td>
                                        @auth
                                        <form action="/employees/{{ $employee->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="btn-group">
                                                <a class="btn btn-outline-secondary btn-sm" href="/employees/{{ $employee->id }}/edit">@lang('custom.edit')</a>
                                                <button type="submit" class="btn btn-sm btn-danger">@lang('custom.delete')</button>
                                            </div>
                                        </form>
                                        @endauth
                                    </td>
                                </tr>
                                    
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">@lang('custom.noEmployees')</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection