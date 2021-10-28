@extends('layouts.app')

@section('content')
<section class="position-relative pb-0">
        <div class="gen-login-page-background" style="background-image: url('images/background/asset-54.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <form name="pms_login" id="pms_login" action="{{ route('login') }}" method="post">
                            @csrf
                            <h4>{{ __('Login') }}</h4>
                            <p class="login-username">
                                <label for="user_login">{{ __('E-Mail Address') }}</label>
                                <input type="email" name="email" required autocomplete="email" autofocus id="user_login" class="input" value="{{ old('email') }}" size="20">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </p>
                            <p class="login-password">
                                <label for="user_pass">{{ __('Password') }}</label>
                                <input type="password" name="password" required autocomplete="current-password" id="user_pass" class="input" value="" size="20">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </p>
                            <p class="login-remember">
                                <label>
                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"> {{ __('Remember Me') }}</label>
                            </p>
                            <p class="login-submit">
                              
                                <button type="submit" name="wp-submit" id="wp-submit" class="button button-primary">
                                    {{ __('Login') }}
                                </button>
                            </p>
                            @if (Route::has('register'))
                            <a class="btn btn-link" href="{{ route('register') }}">
                            Don't have an account? {{ __('Register') }}
                            </a>
                        @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
