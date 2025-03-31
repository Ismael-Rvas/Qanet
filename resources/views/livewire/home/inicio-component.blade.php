<div class="h-screen w-screen flex items-center justify-center px-6 md:px-12">
    <section class="flex flex-col md:flex-row items-center p-6 md:p-12 max-w-6xl w-full">
        <div class="w-full md:w-1/2 md:pr-8 text-center md:text-left">
            <h1 class="text-3xl md:text-6xl font-bold text-blue-950 leading-tight">
                Soluciones inteligentes para tu empresa
            </h1>
            <p class="mt-4 md:mt-6 text-lg md:text-xl text-blue-950 leading-relaxed">
                <b>Más de 15 años</b> creando soluciones a medida.
            </p>
            <div class="mt-6 md:mt-8">
                <a href="{{ route('contacto') }}"
                    class="bg-blue-700 text-white text-lg md:text-xl font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-800 transition">
                    ¡Cuéntanos tu caso!
                </a>
            </div>
        </div>
        

        <div class="w-full md:w-1/2 flex justify-center mt-6 md:mt-0">
            <div class="swiper mySwiper w-full max-w-sm md:max-w-md rounded-lg shadow-md">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/tiendaQanet.jpg') }}" alt="Imagen 1"
                            class="w-full h-auto rounded-lg">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/ERP.jpg') }}" alt="Imagen 2" class="w-full h-auto rounded-lg">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/tiendaQanet.jpg') }}" alt="Imagen 3"
                            class="w-full h-auto rounded-lg">
                    </div>
                </div>
                <div class="swiper-button-next hidden md:block"></div>
                <div class="swiper-button-prev hidden md:block"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</div>
