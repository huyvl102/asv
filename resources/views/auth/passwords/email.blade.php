@extends('admin.layouts.master')

@section('content')
    <div id="forgot-password" class="p-8">

        <div class="form-wrapper md-elevation-8 p-8">

            <div class="logo bg-secondary">
                <span>A</span>
            </div>

            <div class="title mt-4 mb-8">Recover your password</div>

            @if (session('status'))
                <div class="preview-elements">
                    <div class="alert alert-success" role="alert">
                        <p>{{ session('status') }}</p>
                    </div>
                </div>
            @endif

            <form name="forgotPasswordForm" method="POST" action="{{ route('password.email') }}" novalidate>
                @csrf

                <div class="form-group mb-4">
                    <input type="email" name="email"
                           class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                           id="forgotPasswordFormInputEmail"
                           aria-describedby="emailHelp" placeholder="Input password" value="{{ old('email') }}"
                           required/>
                    <label for="forgotPasswordFormInputEmail">Email address</label>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <button type="submit" class="submit-button btn btn-block btn-secondary mt-8 mb-4 mx-auto"
                        aria-label="SEND RESET LINK">
                    SEND RESET LINK
                </button>

            </form>

            <div class="login row align-items-center justify-content-center mt-8 mb-6 mx-auto">
                <a class="link text-secondary" href="pages-auth-login.html">Go back to login</a>
            </div>

        </div>
    </div>
@endsection
