<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/global.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('css')
</head>

<body>
    <header class="bg-primary px-5 shadow-lg sticky top-0 z-60">
        @include('layouts.header')
    </header>

    @yield('banner')
    @yield('content')

    <footer class="bg-contrast px-5">
        @include('layouts.footer')
    </footer>
    <script src="{{ asset("assets/js/global.js") }}"></script>
    @yield('javascript')
</body>
</html>
