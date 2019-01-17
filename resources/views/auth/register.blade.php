@extends('admin.layouts.master')

@section('content')
    <div id="register" class="p-8">

        <div class="form-wrapper md-elevation-8 p-8">

            <div class="logo bg-secondary">
                <span>A</span>
            </div>

            <div class="title mt-4 mb-8">Create an account</div>

            <form name="registerForm" method="POST" action="{{ route('register') }}" novalidate>
                @csrf
                <div class="form-group mb-4">
                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                           id="registerFormInputName" value="{{ old('name') }}" aria-describedby="nameHelp"/>
                    <label for="registerFormInputName">Name</label>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>

                <div class="form-group mb-4">
                    <input type="email" name="email"
                           class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                           id="registerFormInputEmail" aria-describedby="emailHelp" value="{{ old('email') }}"/>
                    <label for="registerFormInputEmail">Email address</label>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="form-group mb-4">
                    <input type="password" name="password"
                           class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                           id="registerFormInputPassword"/>
                    <label for="registerFormInputPassword">Password</label>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <div class="form-group mb-4">
                    <input type="password" name="password_confirmation"
                           class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                           id="registerFormInputPasswordConfirm"/>
                    <label for="registerFormInputPasswordConfirm">Password (Confirm)</label>
                </div>

                <div class="terms-conditions row align-items-center justify-content-center pt-4 mb-8">
                    <div class="form-check mr-1 mb-1">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" aria-label="Remember Me"/>
                            <span class="checkbox-icon"></span>
                            <span>I read and accept</span>
                        </label>
                    </div>
                    <a href="#" class="text-secondary mb-1">terms and conditions</a>
                </div>

                <button type="submit" class="submit-button btn btn-block btn-secondary my-4 mx-auto"
                        aria-label="LOG IN">
                    CREATE MY ACCOUNT
                </button>

            </form>

            <div
                class="login d-flex flex-column flex-sm-row align-items-center justify-content-center mt-8 mb-6 mx-auto">
                <span class="text mr-sm-2">Already have an account?</span>
                <a class="link text-secondary" href="pages-auth-login.html">Log in</a>
            </div>

        </div>
    </div>
@endsection
