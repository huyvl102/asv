@extends('admin.layouts.master')

@section('content')
    <div id="reset-password" class="p-8">

        <div class="form-wrapper md-elevation-8 p-8">

            <div class="logo bg-secondary">
                <span>A</span>
            </div>

            <div class="title mt-4 mb-8">Reset your password</div>

            <form name="resetPasswordForm" method="POST" action="{{ route('password.update') }}" novalidate>
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group mb-4">
                    <input type="email" name="email"
                           class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                           id="resetPasswordFormInputEmail"
                           aria-describedby="emailHelp" placeholder=" " value="{{ $email ?? old('email') }}" required/>
                    <label for="resetPasswordFormInputEmail">Email address</label>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="form-group mb-4">
                    <input type="password" name="password"
                           class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                           id="registerFormInputPassword" required/>
                    <label for="registerFormInputPassword">Password</label>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <div class="form-group mb-4">
                    <input type="password" name="password_confirmation" class="form-control"
                           id="registerFormInputPasswordConfirm" required/>
                    <label for="registerFormInputPasswordConfirm">Password (Confirm)</label>
                </div>

                <button type="submit" class="submit-button btn btn-block btn-secondary mt-8 mb-4 mx-auto"
                        aria-label="RESET MY PASSWORD">
                    RESET MY PASSWORD
                </button>

            </form>
        </div>
    </div>
@endsection
