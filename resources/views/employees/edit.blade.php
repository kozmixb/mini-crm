@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <span>Create New Company</span>
        </div>
        <div class="card-body">
            <form action="/employees/{{$employee->id}}" method="post">
                @csrf       
                @method('PUT')
                @include('employees._form')      
                <button type="submit" name="submit" class="btn btn-success btn-lg">Update</button>
            </form>
        </div>
    </div>
@endsection