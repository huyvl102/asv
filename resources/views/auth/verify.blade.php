@extends('admin.layouts.master')

@section('content')
    <div id="forgot-password" class="p-8">

        <div class="form-wrapper md-elevation-8 p-8">

            <div class="logo bg-secondary">
                <span>A</span>
            </div>

            <div class="title mt-4 mb-8">Verify Your Email Address</div>

            @if (session('resent'))
                <div class="preview-elements">
                    <div class="alert alert-success" role="alert">
                        <p>A fresh verification link has been sent to your email address.</p>
                    </div>
                </div>
            @endif

            <div class="form-group mb-4">
                <label for="loginFormInputPassword">Before proceeding, please check your email for a verification link.</label>
            </div>

            <a href="{{ route('verification.resend') }}"
               class="submit-button btn btn-block btn-secondary mt-8 mb-4 mx-auto"
               aria-label="SEND RESET LINK">
                click here to request another
            </a>

            <div class="login row align-items-center justify-content-center mt-8 mb-6 mx-auto">
                <a class="link text-secondary" href="{{ route('login') }}">Go back to login</a>
            </div>

        </div>
    </div>
@endsection
