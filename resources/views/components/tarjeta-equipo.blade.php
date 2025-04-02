@props(['imagen', 'nombre', 'cargo', 'color' => 'text-blue-950'])

<div>
    <div class="bg-cover bg-center rounded-lg shadow-md h-72 w-full"
        style="background-image: url({{ asset($imagen) }});">
    </div>
    <h3 class="mt-4 text-lg font-semibold text-center">{{ $nombre }}</h3>
    <p class="{{ $color }} italic text-center">{{ $cargo }}</p>
</div>
