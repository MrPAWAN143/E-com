<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- Slick Slider CSS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="{{asset('assets/css/global.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('css')
</head>

<body>
    <header class="bg-contrast shadow-lg sticky top-0 z-[9999]">
        @include('layouts.header')
    </header>

    @yield('banner')
    @yield('trust benifit section')
    @yield('trending product')
    @yield('shop by categories')
    @yield('ad banner')
    @yield('feature product')
    @yield('content')
    @yield('userDashboard')

    <footer class="bg-[#14243A] px-5">
        @include('layouts.footer')
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('assets/js/global.js') }}"></script>
    @yield('trending-slider-js')
    @yield('javascript')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
    </script>
</body>
</html>
