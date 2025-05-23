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

<body class="bg-cover bg-center bg-fixed bg-no-repeat text-gray-900"
    style="background-image: url('{{ asset('images/fondoWeb.jpg') }}');">

    <div id="loader" class="fixed inset-0 flex items-center justify-center bg-white z-50">
    </div>

    @include('components.layouts.partials.navbar')

    <main data-scroll-container class="overflow-x-hidden pt-28 md:pt-44">
        @yield('content')
    <x-bar-progress />
    </main>

    @include('components.layouts.partials.footer')
    @include('components.layouts.partials.scripts')

</body>

</html>
