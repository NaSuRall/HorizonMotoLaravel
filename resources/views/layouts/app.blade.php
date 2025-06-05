<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title', 'Horizon Moto')</title>

    <!-- Fonts (optionnel) -->
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased min-h-screen">

<!-- Navbar (facultatif) -->

<!-- Contenu -->
<main class="py-10 px-4 sm:px-6 lg:px-8">
    @yield('content')
</main>

<!-- Scripts supplémentaires -->
@stack('scripts')
</body>
</html>
