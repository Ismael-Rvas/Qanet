<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qanet - Solución personalizada para el sector de la distribucion</title>
    <link rel="icon" href="{{ asset('images/QanetLogoSimbolo.PNG') }}" type="image/x-icon">
    @include('components.layouts.partials.styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">

    @include('components.layouts.partials.navbar')

    <main class="container mx-auto py-10">
        @yield('content')
    </main>

    @include('components.layouts.partials.footer')
    @include('components.layouts.partials.scripts')

</body>

</html>
