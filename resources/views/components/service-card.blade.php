<div
    class="relative group flex flex-col items-end shadow-xl overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl bg-gradient-to-tl from-blue-600 to-blue-300 p-6 md:p-8">
    <div class="absolute -bottom-5 -left-5  w-36 h-40 md:w-40 md:h-44 bg-cover bg-center overflow-hidden"
        style="background-image: url('{{ $image }}');"></div>
    <div class="relative z-10 text-right text-gray-800 md:p-4">
        <h3
            class="ttext-lg md:text-2xl font-bold tracking-wide group-hover:text-3xl group-hover:text-blue-950 transition-all duration-300">
            {{ $title }}
        </h3>
        <p class="mt-2 text-sm md:text-base leading-relaxed max-w-40 md:max-w-48">
            {{ $description }}
        </p>
        <a href="{{ route('servicios') }}" class="inline-block mt-4 px-4 py-2 bg-blue-700 text-white font-semibold text-xs uppercase rounded-full shadow-md hover:bg-blue-900 hover:shadow-lg transition-all duration-300 md:mt-6 md:px-6 md:py-3">
            <i class="fas fa-solid fa-arrow-up" style="color: #f1f0f4;"></i>

        </a>
        
    </div>
</div>
