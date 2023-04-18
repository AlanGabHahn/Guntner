<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="">
    <main class="overflow-hidden">
        @yield('content')
        <div class="row position-absolute start-50 d-sm-none d-sm-none d-lg-block d-xl-block d-xxl-block" style="bottom:20px !important" >
            <img src="http://localhost/images/grupo_44.svg" alt="">
        </div>
    </main>
</body>
</html>
