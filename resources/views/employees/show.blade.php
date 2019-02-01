@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h2>{{ $employee->full_name }}</h2>
            <a href="/employees" class="btn btn-secondary ml-auto">Back to Employees</a>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <tr>
                    <th colspan="2">Employee Details</th>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td>{{ $employee->first_name }}</td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td>{{ $employee->last_name }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $employee->email }}</td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td>{{ $employee->phone }}</td>
                </tr>
                <tr>
                    <td>Company:</td>
                    <td><a href="/companies/{{$employee->company->id}}">{{ $employee->company->name }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection