@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <span>@lang('custom.companies')</span>
        </div>
        <div class="card-body">
            @auth
                <a href="/companies/create" class="btn btn-success">@lang('custom.createCompany')</a>
            @endauth
            <div class="card mt-3">
                <div class="card-header">@lang('custom.companiesList')</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>@lang('custom.name')</th>
                                <th>@lang('custom.address')</th>
                                <th>@lang('custom.website')</th>
                                <th>@lang('custom.email')</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($companies)<1)
                                <tr>
                                    <td colspan="5">@lang('custom.noCompanyAvailable')</td>
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
                                                <form action="/companies/{{$company->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="btn-group">
                                                        <a href="/companies/{{$company->id}}/edit" class="btn btn-outline-secondary btn-sm">@lang('custom.edit')</a>
                                                        <button type="submit" class="btn btn-danger btn-sm">@lang('custom.delete')</button>
                                                    </div>
                                                </form>
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