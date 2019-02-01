@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <span>Employees</span>
        </div>
        <div class="card-body">
            @auth
                <a href="/employees/create" class="btn btn-success">Create new employee</a>
            @endauth
            <div class="card mt-3">
                <div class="card-header">Employees list</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
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
                                        <div class="btn-group">
                                        <a class="btn btn-outline-secondary btn-sm" href="/employees/{{ $employee->id }}/edit">Edit</a>
                                        <form action="/employees/{{ $employee->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-1 btn btn-sm btn-danger">Delete</button>
                                        </form>
                                        </div>
                                        @endauth
                                    </td>
                                </tr>
                                    
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">There are no employees</td>
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