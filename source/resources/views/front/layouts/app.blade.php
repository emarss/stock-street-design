<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stock Street</title>
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css" />
    @include('front.includes.head')
    @yield('styles')
</head>
<body>
    @include('front.includes.sticky-nav')
    @include('front.includes.nav')
    @include('front.includes.counters-ticker')
    @yield('content')
    @include('front.includes.scripts')
    @yield('scripts')
</body>
</html>