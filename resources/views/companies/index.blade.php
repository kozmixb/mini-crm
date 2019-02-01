@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <span>Companies</span>
        </div>
        <div class="card-body">
            @auth
                <a href="/companies/create" class="btn btn-success">Create new company</a>
            @endauth
            <div class="card mt-3">
                <div class="card-header">Companies list</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Website</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($companies)<1)
                                <tr>
                                    <td colspan="5">No companies available</td>
                                </tr>
                            @else
                                @foreach ($companies as $company)
                                    <tr>
                                        <td><a href="/companies/{{$company->id}}" class="link">{{$company->name}}</a></td>
                                        <td>{{$company->address}}</td>
                                        <td>{{$company->website}}</td>
                                        <td>{{$company->email}}</td>
                                        <td>
                                            @auth
                                            <div class="btn-group">
                                                <a href="/companies/{{$company->id}}/edit" class="btn btn-outline-secondary btn-sm">Edit</a>
                                                <form action="/companies/{{$company->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="ml-1 btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                            @endauth
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                    {{ $companies->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection