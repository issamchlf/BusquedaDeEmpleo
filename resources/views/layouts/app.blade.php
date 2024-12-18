<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mi Aplicacion')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <script src="{{ asset('js/app.js')}}"></script>
</head>
<body>
    <x-header></x-header>
    <main>
         @yield('content')
    </main>
    <x-footer></x-footer>
   
</body>
</html>