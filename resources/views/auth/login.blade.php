@extends('layouts.app')

@section('header')
    @include('header.login')

@section('content')
<div class="navbar">
    <div class="navbar--menu-link navbar--link">
        <a href="/" class="link--home link">
            <b class="link--bold">Home</b>
        </a>
    </div>
    <div class="navbar--menu-link navbar--link">
        <a href="/dashboard" class="link--dashboard link">
            <b>Dashboard</b>
        </a>
    </div>
    <div class="navbar--menu-link navbar--link is--right is--selected">
        <a href="/profile" class="link--profile link">
            <b>
                <a href="/login" class="link--login link">{{ __('Login') }}</a>
            </b>
        </a>
    </div>
</div>
<div class="article">
    <div class="article--salutation">
        <div class="login--header">{{ __('Login') }}</div>
        <div class="form--container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="container--email">
                    <label for="email" class="container--email-label">{{ __('Email Address') }}</label>

                    <div class="email--container">
                        <input id="email" type="email" class="email--container-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="has--error invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="container--password">
                    <label for="password" class="container--password-label">{{ __('Password') }}</label>

                    <div class="password--container">
                        <input id="password" type="password" class="password--container-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="has--error invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="container--checkbox">
                    <div class="checkbox--form">
                        <input class="checkbox--form-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="checkbox--form-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="container--button">
                    <div class="button--form">
                        <button type="submit" class="button--submit">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="forgot--link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
        <div class="register--footer">{{ __('Don\'t have an account?') }}
            <a href="/register" class="register--link">{{ __('Register') }}</a>
        </div>
    </div>
</div>
@endsection
