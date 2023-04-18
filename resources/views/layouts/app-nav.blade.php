<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app-nav.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container" style="margin: 0;
background-color: #fff;
max-width: 100%;
padding-left: 8%;">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="float-start p-1" href="{{config('app.url')}}">
                        <img src="{{config('app.url')}}/images/guntner_logo_rgb.png" alt="">
                    </a>
                </div>
                <div class="col-8 text-start">
                    MATERIAIS ÚTEIS
                </div>
            </div>
        </header>
    </div>
    <main class="overflow-hidden">
        @yield('content')
    </main>
</body>
</html>
