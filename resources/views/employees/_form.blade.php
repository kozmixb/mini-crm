<div class="form-group">
    <label for="company_id">@lang('custom.companies')</label>
    <select class="form-control" name="company_id" id="company_id">
    @foreach ($companies as $company)
        <option value="{{$company->id}}" {{ $employee->company_id === $company->id? 'selected':''}}>{{ $company->name }}</option>                        
    @endforeach
    </select>
</div>
<div class="form-group">
    <label for="first_name">@lang('custom.first_name')</label>
    <input class="form-control" type="text" name="first_name" id="first_name" value="{{ old('first_name',$employee->first_name) }}">
    @if ($errors->has('first_name'))
        <small class="d-block form-text invalid-feedback">{{ $errors->first('first_name')}}</small>
    @endif
</div>
<div class="form-group">
    <label for="last_name">@lang('custom.last_name')</label>
    <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name',$employee->last_name) }}">
    @if ($errors->has('last_name'))
        <small class="d-block form-text invalid-feedback">{{ $errors->first('last_name')}}</small>
    @endif
</div>
<div class="form-group">
    <label for="email">@lang('custom.email')</label>
    <input class="form-control" type="text" name="email" id="email" value="{{ old('email',$employee->email) }}">
    @if ($errors->has('email'))
        <small class="d-block form-text invalid-feedback">{{ $errors->first('email')}}</small>
    @endif
</div>
<div class="form-group">
    <label for="phone">@lang('custom.phone')</label>
    <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone',$employee->phone) }}">
    @if ($errors->has('phone'))
        <small class="d-block form-text invalid-feedback">{{ $errors->first('phone')}}</small>
    @endif
</div>