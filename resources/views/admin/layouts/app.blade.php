<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name' ) }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="flex gap-0">
        @include('admin.sideMenu')
        <div class="w-full">
            @include('admin.dashboardHeader')
            @yield('content')
        </div>
    </div>


    @yield('registerform')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    @yield('javascript')

</body>

</html>