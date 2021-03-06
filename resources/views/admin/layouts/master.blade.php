<!DOCTYPE html>
<html lang="en-us">
@include('admin.layouts.header')
<body class="layout layout-vertical layout-left-navigation layout-below-toolbar layout-below-footer">
<main>
    @include('admin.layouts.alert')
    <div id="wrapper">
        @auth()
            @include('admin.layouts.left')
        @endauth
        <div class="content-wrapper">
            @auth
                @include('admin.layouts.toolbar')
            @endauth
            <div class="content custom-scrollbar">
                @yield('style')

                @yield('content')

                @yield('script')
            </div>
        </div>
    </div>
</main>
</body>
</html>
