@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <span>Create New Company</span>
        </div>
        <div class="card-body">
            <form action="/employees" method="post">
                @csrf
                @if (count($companies)>0)
                    @include('employees._form')
                   <button type="submit" name="submit" class="btn btn-success btn-lg">Create</button>
                @else
                    <h1>No company Available</h1>
                    <h2>Create a company before you create an employee</h2>
                @endif
                
            </form>
        </div>
    </div>
@endsection