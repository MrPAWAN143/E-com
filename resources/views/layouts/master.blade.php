<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/css/global.css">
    @vite('resources/css/app.css')
    @yield('css')
</head>

<body>
    <head class="bg-gray-100">
        @include('layouts.header')
    </head>

    @yield('banner')
    @yield('content')

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    @yield('javascript')
</body>
</html>
