@extends('admin.layouts.master')

@section('content')
    <div id="login" class="p-8">
        <div class="form-wrapper md-elevation-8 p-8">
            <div class="logo bg-secondary">
                <span>A</span>
            </div>
            <div class="title mt-4 mb-8">Log in to your account</div>
            <form name="loginForm" novalidate method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-4">
                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                           id="loginFormInputEmail" aria-describedby="emailHelp" placeholder="Input Email"
                           value="{{ old('email') }}" required/>
                    <label for="loginFormInputEmail">Email address</label>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-4">
                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                           id="loginFormInputPassword" placeholder="Input Password" required/>
                    <label for="loginFormInputPassword">Password</label>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
                <div class="remember-forgot-password row no-gutters align-items-center justify-content-between pt-4">
                    <div class="form-check remember-me mb-4">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" aria-label="Remember Me" name="remember"/>
                            <span class="checkbox-icon"></span>
                            <span class="form-check-description">Remember Me</span>
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-password text-secondary mb-4">
                            Forgot Password?</a>
                    @endif
                </div>
                <button type="submit" class="submit-button btn btn-block btn-secondary my-4 mx-auto"
                        aria-label="LOG IN">
                    LOG IN
                </button>
            </form>
        </div>
    </div>
@endsection
