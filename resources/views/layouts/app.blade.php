<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @routes
</head>

<body class="">
    <div class="h-2 w-full fixed top-0" style="background: #F04E23"></div>
    <div class="flex min-h-screen">
        <div class="w-60 shadow-lg bg-white flex flex-col items-center">
            <div class="my-10">
                <a href="{{ route('parcelmachines.index') }}">
                    <img class="w-28" src="{{ asset('img/omniva-logo.png') }}" alt="logo">
                </a>
            </div>
            <ul class="relative">
                <li class="relative">
                    <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out"
                        href="#!" data-mdb-ripple="true" data-mdb-ripple-color="dark">Sidenav link 1</a>
                </li>
                <li class="relative">
                    <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out"
                        href="#!" data-mdb-ripple="true" data-mdb-ripple-color="dark">Sidenav link 2</a>
                </li>
                <li class="relative">
                    <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out"
                        href="#!" data-mdb-ripple="true" data-mdb-ripple-color="dark">Sidenav link 2</a>
                </li>
            </ul>
        </div>
        <div class="w-full shadow-2xl">
            @yield('content')
        </div>
    </div>
    <div class="h-2 w-full fixed bottom-0" style="background: #F04E23"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @stack('scripts')
</body>

</html>
