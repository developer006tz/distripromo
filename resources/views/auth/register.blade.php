@include('auth_.components.header')
<h4 class="text-center mb-4">{{ __('Register') }}</h4>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
        <label class="mb-1"><strong>{{ __('Name') }}</strong></label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>{{ __('Email Address') }}</strong></label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>{{ __('Phone') }}</strong></label>
        <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>{{ __('Password') }}</strong></label>
         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>{{ __('Password Confirm') }}</strong></label>
         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary btn-block"> {{ __('Register') }}</button>
    </div>
</form>
<div class="new-account mt-3">
    <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Log in</a></p>
</div>

@extends('auth_.components.footer')
