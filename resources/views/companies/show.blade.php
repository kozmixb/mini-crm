@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h2>{{ $company->name }}</h2>
            <a href="/companies" class="btn btn-secondary ml-auto">Back to Companies</a>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <tr>
                    <th colspan="2">Company Details</th>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td>{{ $company->address }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $company->email }}</td>
                </tr>
                <tr>
                    <td>Website:</td>
                    <td>{{ $company->website }}</td>
                </tr>
                <tr>
                    <td>Number of employees:</td>
                    <td>{{ $company->employees_number }}</td>
                </tr>
            </table>
            @if ($company->employees_number > 0)
                <h5>Employees</h5>
                <div class="list-group">
                    @foreach($company->employees as $employee)
                    <a class="list-group-item-info list-group-item list-group-item-action" href="/employees/{{$employee->id}}">{{ $employee->full_name }}</a>
                    @endforeach
                </div>
            @else
                <h5>There are no employees</h5>
            @endif
        </div>
    </div>
@endsection