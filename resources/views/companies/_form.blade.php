<div class="form-group">
    <label for="name">@lang('custom.name')</label>
    <input type="text" name="name" id="name" value="{{ old('name',$company->name)}}" class="form-control {{$errors->has('name')? 'is-invalid' : ''}}">
    @if($errors->has('name'))
        <small class="d-block form-text invalid-feedback">{{$errors->first('name')}}</small>
    @endif
</div>
<div class="form-group">
    <label for="address">@lang('custom.address')</label>
    <input type="text" name="address" id="address" value="{{ old('address',$company->address)}}" class="form-control {{$errors->has('address')? 'is-invalid' : ''}}">
    @if($errors->has('address'))
        <small class="d-block form-text invalid-feedback">{{$errors->first('address')}}</small>
    @endif
</div>
<div class="form-group">
    <label for="email">@lang('custom.email')</label>
    <input type="text" name="email" id="email"  value="{{ old('email',$company->email)}}"class="form-control {{$errors->has('email')? 'is-invalid' : ''}}">
    @if($errors->has('email'))
        <small class="d-block form-text invalid-feedback">{{$errors->first('email')}}</small>
    @endif
</div>
<div class="form-group">
    <label for="website">@lang('custom.website')</label>
    <input type="text" name="website" id="website" value="{{ old('website',$company->website)}}" class="form-control {{$errors->has('website')? 'is-invalid' : ''}}">
    @if($errors->has('website'))
        <small class="d-block form-text invalid-feedback">{{$errors->first('website')}}</small>
    @endif
</div>
<div class="form-group row">
    <div class="col-4">
        <img class="img-fluid" src="/storage/logos/default.jpg" alt="logo">
    </div>
    <div class="col-8">
        <label for="logo">Logo (min: 100x100)</label>
        <input type="file" name="logo" id="logo" class="form-control-file {{$errors->has('logo')? 'is-invalid' : ''}}">
        @if($errors->has('logo'))
            <small class="d-block form-text invalid-feedback">{{$errors->first('logo')}}</small>
        @endif
    </div>
</div>