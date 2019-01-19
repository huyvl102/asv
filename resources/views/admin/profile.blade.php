@extends('admin.layouts.master')
@section('content')
    <div id="profile" class="page-layout simple tabbed">

        <!-- HEADER -->
        <div class="page-header light-fg d-flex flex-column justify-content-center justify-content-lg-end p-6">

            <div
                class="flex-column row flex-lg-row align-items-center align-items-lg-end no-gutters justify-content-between">

                <div class="user-info flex-column row flex-lg-row no-gutters align-items-center">

                    <img class="profile-image avatar huge mr-6" src="{{ asset('assets/images/patterns/drop.png') }}">

                    <div class="name h2 my-6">{{ Auth::user()->name }}</div>

                </div>

            </div>
        </div>
        <!-- / HEADER -->

        <!-- CONTENT -->
        <div class="page-content">

            <div class="tab-pane" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab">

                <div class="row">

                    <div class="about col-12 col-md-12 col-xl-12">

                        <div class="profile-box info-box general card mb-4">

                            <header class="h6 bg-secondary text-auto p-4">
                                <div class="title">General Information</div>
                            </header>
                            {!! Form::model(Auth::user(), ['method' => 'PATCH','route' => array('admin.profile.update', Auth::user()->id)]) !!}
                            <div class="content p-4">
                                <div class="info-line mb-6">
                                    <div class="title font-weight-bold mb-1">Name</div>
                                    <input name="name" type="text" disabled=""
                                           class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           placeholder=" " required
                                           value="{{old('name',isset(Auth::user()->name) ? Auth::user()->name:'')}}">
                                    @if ($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="info-line mb-6">
                                    <div class="title font-weight-bold mb-1">Email</div>
                                    <input name="email" type="text" disabled=""
                                           class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           placeholder=" " required
                                           value="{{ old('email', isset(Auth::user()->email) ? Auth::user()->email:'' ) }}">
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="info-line mb-6">
                                    <div class="title font-weight-bold mb-1">Old Password</div>
                                    <input name="old_password" type="password"
                                           class="form-control {{ $errors->has('old_password') ? ' is-invalid' : '' }}"
                                           placeholder=" ">
                                    @if ($errors->has('old_password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('old_password') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="info-line mb-6">
                                    <div class="title font-weight-bold mb-1">New Password</div>
                                    <input name="new_password" type="password"
                                           class="form-control {{ $errors->has('new_password') ? ' is-invalid' : '' }}"
                                           placeholder=" ">
                                    @if ($errors->has('new_password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('new_password') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="info-line mb-6">
                                    <div class="title font-weight-bold mb-1">Password (Confirm)</div>
                                    <input name="password_confirmation" type="password"
                                           class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                           placeholder=" ">
                                    @if ($errors->has('password_confirmation'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password_confirmation') }}
                                        </div>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-secondary fuse-ripple-ready">
                                    UPDATE MY ACCOUNT
                                </button>

                                <a href="{{ route('admin.home') }}" class="btn btn-light fuse-ripple-ready">
                                    CANCEL
                                </a>
                            </div>
                            {!! Form::close() !!}
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- / CONTENT -->
    </div>
@endsection
