@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <span>Edit Company</span>
        </div>
        <div class="card-body">
            <form action="/companies/{{$company->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('companies._form')
                <button type="submit" name="submit" class="btn btn-success btn-lg">Update</button>
            </form>
        </div>
    </div>
@endsection