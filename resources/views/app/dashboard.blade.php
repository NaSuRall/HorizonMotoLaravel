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

<main >

    <div class="grid grid-cols-5 min-h-screen">
        <aside class="col-span-1 bg-white shadow p-4">

        </aside>

        <!-- Contenu principal -->
        <main class="col-span-4 p-8 bg-gray-100">
            @yield('content')
        </main>
    </div>
</main>

<!-- Scripts supplémentaires -->
@stack('scripts')
</body>
</html>
