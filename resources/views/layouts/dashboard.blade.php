<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title', 'Horizon Moto')</title>

    <!-- Fonts (optionnel) -->
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased min-h-screen">

<main >
    <div class="container">
        <aside class="sidebar">
            @include("components.sidebar")
        </aside>

        <!-- Contenu principal -->
        <main class="content">
            @yield('content')
        </main>
    </div>
</main>

<!-- Scripts supplémentaires -->
@stack('scripts')
</body>
</html>
