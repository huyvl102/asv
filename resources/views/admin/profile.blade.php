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

                            <div class="content p-4">

                                <div class="info-line mb-6">
                                    <div class="title font-weight-bold mb-1">Gender</div>
                                    <div class="info">
                                        <input name="name" type="text" class="form-control" aria-describedby="name">
                                    </div>
                                </div>

                                <div class="info-line mb-6">
                                    <div class="title font-weight-bold mb-1">Email</div>
                                    <div class="info">
                                        <input name="email" type="email" class="form-control" aria-describedby="email">
                                    </div>
                                </div>

                                <div class="info-line mb-6">
                                    <div class="title font-weight-bold mb-1">Password</div>
                                    <div class="info">
                                        <input name="password" type="password" class="form-control"
                                               aria-describedby="password">
                                    </div>
                                </div>

                                <div class="info-line mb-6">
                                    <div class="title font-weight-bold mb-1">Password (Confirm)</div>
                                    <div class="info">
                                        <input name="password_confirmation" type="password" class="form-control"
                                               aria-describedby="password_confirmation">
                                    </div>
                                </div>

                                <button type="button" class="btn btn-secondary fuse-ripple-ready">
                                    UPDATE MY ACCOUNT
                                </button>

                                <a href="{{ route('admin.home') }}" class="btn btn-light fuse-ripple-ready">
                                    CANCEL
                                </a>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- / CONTENT -->
    </div>
@endsection
