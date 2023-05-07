@include('auth.components.header')
<h4 class="text-center mb-4">Sign in your account</h4>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label class="mb-1"><strong>Email</strong></label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
         @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>Password</strong></label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-row d-flex justify-content-between mt-4 mb-2">
        <div class="form-group">
            <div class="custom-control custom-checkbox ml-1">
                <input class="custom-control-input"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
            </div>
        </div>
        @if (Route::has('password.request'))
        <div class="form-group">
            <a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a>
        </div>
        @endif
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
    </div>
</form>
<div class="new-account mt-3">
    <p>{{ __('Don\'t have an account?') }} <a class="text-primary" href="{{ route('register') }}">Sign up</a></p>
</div>

@extends('auth.components.footer')

