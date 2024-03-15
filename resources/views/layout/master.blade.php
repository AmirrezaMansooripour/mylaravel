<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
    <title>@yield('title')</title>
    @yield('style')
</head>
<body dir="rtl">
    @include('layout.nav')

    @yield('body')

    @include('layout.footer')

    @yield('end')
</body>
</html>
