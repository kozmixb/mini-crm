@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <span>@lang('custom.editEmployee')</span>
        </div>
        <div class="card-body">
            <form action="/employees/{{$employee->id}}" method="post">
                @csrf       
                @method('PUT')
                @include('employees._form')      
                <button type="submit" name="submit" class="btn btn-success btn-lg">@lang('custom.update')</button>
            </form>
        </div>
    </div>
@endsection