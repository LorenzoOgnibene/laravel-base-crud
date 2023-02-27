<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Library')</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        @yield('alert')
        <!-- Usando Vite -->
        @vite(['resources/js/app.js'])
    </head>
    <body class="bg-light">
        <div id="app">
            @include('layouts.partials.header')
            <main class="my-4">
                @yield('content')
            </main>
        </div>
        @yield('scripts')
    </body>

</html>
