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
    <header class="bg-primary px-5 shadow">
        @include('layouts.header')
    </header>

    @yield('banner')
    @yield('content')

    <footer>
        @include('layouts.footer')
    </footer>

    @yield('javascript')
</body>
</html>
