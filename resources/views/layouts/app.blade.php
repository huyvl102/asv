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

</body>
</html>
