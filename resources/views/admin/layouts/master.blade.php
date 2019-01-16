<!DOCTYPE html>
<html lang="en-us">
@include('admin.layouts.header')
<body class="layout layout-vertical layout-left-navigation layout-below-toolbar layout-below-footer">
<main>
    <div id="wrapper">
        @include('admin.layouts.left')
        <div class="content-wrapper">
            @include('admin.layouts.toolbar')
            <div class="content custom-scrollbar">
                @yield('content')

                @yield('script')
            </div>
        </div>
    </div>
</main>
</body>
</html>
