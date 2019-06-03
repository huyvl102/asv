<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.metadata')

<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')

<!--Menu on mobile-->

@include('layouts.nav')

<!--Link js-->

@include('layouts.script')

<script type="text/javascript">
    $(document).ready(function(){
        $(".product-item .pro-abs").click(function(){
            var url = $(this).find('a').attr('href');
            window.location.replace(url);
        });
    });
</script>
</body>
</html>
