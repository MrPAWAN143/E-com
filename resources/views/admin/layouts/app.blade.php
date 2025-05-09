<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/vendor/ckeditor5/ckeditor5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <title>{{ config('app.name' ) }}</title>


    <style>
        .main-container {
            width: 795px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex min-h-screen">
        @include('admin.sideMenu')

        <!-- Main content -->
        <div class="flex-1 px-6 overflow-y-auto bg-gray-900">
            @include('admin.dashboardHeader')
            @yield('content')
        </div>

    </div>

    @yield('registerform')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    @yield('javascript')

    <script type="module">
        $('.toggle-group').click(function() {
            let target = $(this).data('target');
            $(target).slideToggle();
            $(this).find('svg').toggleClass('rotate-180');
        });
    </script>

</body>

</html>