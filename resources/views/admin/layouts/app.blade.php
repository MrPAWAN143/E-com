<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <script src="https://cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
    <style>
        .cke_notification {
            display: none !important;
        }
    </style>
    @yield('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex min-h-screen">
        @include('admin.sideMenu')

        <!-- Main content -->
        <div class="flex-1 px-6 overflow-y-auto bg-gray-900 ">
            @include('admin.dashboardHeader')
            @yield('content')
            @yield('showForm')


            <div class=" fixed z-100 top-[40%] left-[50%] hidden loaderBtn ">
                <button disabled type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center">
                    <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB" />
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor" />
                    </svg>
                    Loading...
                </button>
            </div>

            <!-- Message Modal -->
            <div id="messageModal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-[200] hidden">
                <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full text-center">
                    <h2 class="text-lg font-bold mb-2 text-gray-800" id="messageTitle">Success</h2>
                    <p class="text-gray-600 mb-4" id="messageContent">Your action was completed successfully.</p>
                    <button onclick="$('#messageModal').addClass('hidden')"
                        class="mt-2 inline-flex justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                        OK
                    </button>
                </div>
            </div>


        </div>

    </div>

    @yield('registerform')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    @yield('javascript')

    <script type="module">
        $('.toggle-group').click(function() {
            let target = $(this).data('target');
            console.log(target);
            $(target).slideToggle();
            $(this).find('svg').toggleClass('rotate-180');
        });
        $(document).ready(function() {
            $('#userDropdownBtn').on('click', function(e) {
                e.preventDefault();
                $('#userDropdownMenu').toggleClass('hidden');
                $('#dropdownArrow').toggleClass('rotate-180');
            });

            $(document).on('click', function(e) {
                if (!$(e.target).closest('#userDropdownWrapper').length) {
                    $('#userDropdownMenu').addClass('hidden');
                    $('#dropdownArrow').removeClass('rotate-180');
                }
            });
        });
    </script>

</body>

</html>