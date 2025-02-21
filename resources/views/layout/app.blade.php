<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class=" h-screen bg-[#F8F5E9]">
        @yield('content')
    </div>
</body>
@livewireScripts
</html>