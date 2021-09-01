<!doctype html>
<html lang="en">
<head>
   @include('layouts.meta')
    @yield('style')
</head>
<body>
@include('layouts.navbar')

    @yield('content')






    @include('layouts.footer')

    @include('layouts.script')
@yield('script')

</body>
</html>
