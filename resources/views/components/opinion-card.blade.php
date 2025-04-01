<div class="flex flex-col items-start shadow-lg rounded-2xl p-10 transition-transform transform hover:scale-105"
    style="background-image: url('{{ $image }}'); background-size: cover; background-position: center;">
    <div class="h-full w-full bg-opacity-75 p-6 rounded-lg backdrop-blur-none hover:backdrop-blur-md cursor-pointer">
        <a href="{{ route('servicios') }}"
            class="block h-full w-full hover:text-blue-950 hover:opacity-100 opacity-0 transition-opacity duration-300">
            <h3 class="text-2xl font-extrabold ">{{ $title }}</h3>
            <p class="text-lg mt-3 text-white">{{ $description }}</p>
        </a>
    </div>
</div>
