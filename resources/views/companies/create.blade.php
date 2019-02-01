@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <span>Create New Company</span>
        </div>
        <div class="card-body">
            <form action="/companies" method="post" enctype="multipart/form-data">
                @csrf
                @include('companies._form')
                <button type="submit" name="submit" class="btn btn-success btn-lg">Create</button>
            </form>
        </div>
    </div>
@endsection