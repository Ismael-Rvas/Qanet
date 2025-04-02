<div class="min-h-screen w-screen flex flex-col items-center justify-center ">
    <section class="flex flex-col md:flex-row items-center p-6 md:p-12 max-w-6xl w-full">
        <div class="w-full md:w-1/2 md:pr-8 text-center md:text-left">
            <h1 class="text-3xl md:text-6xl font-bold text-blue-950 leading-tight">
                Soluciones inteligentes para tu empresa
            </h1>
            <p class="mt-4 md:mt-6 text-lg md:text-xl text-blue-950 leading-relaxed">
                <b>Más de 26 años</b> creando soluciones a medida.
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

    <section class="bg-gradient-to-b from-transparent to-white w-full mt-24">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center p-16">
            <div class="grid grid-cols-2 gap-4">
                <img src="{{ asset('images/analisisDatos.jpg') }}" class="rounded-lg shadow-md"
                    alt="Equipo Qanet en acción">
                <img src="{{ asset('images/equipoQanet.jpg') }}" class="rounded-lg shadow-md md:mt-9"
                    alt="Análisis y optimización de datos">
            </div>

            <div class="space-y-6">
                <span class="text-blue-300 text-xs font-semibold">LAS MEJORES SOLUCIONES DEL MERCADO</span>
                <h2 class="text-3xl font-bold text-blue-950">Más de 26 años impulsando la transformación digital</h2>
                <p class="text-lg text-gray-500">
                    En <strong>Qanet ERP</strong>, llevamos más de veintiséis años ayudando a empresas a optimizar sus
                    procesos con soluciones tecnológicas. Nuestra misión es ofrecer herramientas que faciliten la toma
                    de decisiones y mejoren la productividad.
                </p>

                <P class="text-lg text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam
                    consectetur facilis, vel aperiam nisi alias possimus rem debitis odit non nam fugit, eligendi
                    tenetur delectus cum exercitationem asperiores veritatis commodi?</P>

                <a href="{{ route('nosotros') }}"
                    class="inline-block px-6 py-3 text-lg font-semibold text-white bg-blue-700 rounded-full shadow-md hover:bg-blue-800 transition">
                    Conócenos →
                </a>
            </div>
        </div>
    </section>

    <section class="w-full py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 pb-24">
            <span class="text-blue-300 text-xs font-semibold">EXCELENCIA Y CALIDAD EN CADA SOLUCIÓN</span>
            <h2 class="text-3xl font-bold text-blue-950 text-start mb-12">Nuestros Servicios</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-service-card title="Desarrollo Web" description="Creación de sitios y plataformas web innovadoras."
                    image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
                <x-service-card title="Desarrollo Web" description="Creación de sitios y plataformas web innovadoras."
                    image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
                <x-service-card title="Desarrollo Web" description="Creación de sitios y plataformas web innovadoras."
                    image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
                <x-service-card title="Desarrollo Web" description="Creación de sitios y plataformas web innovadoras."
                    image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
                <x-service-card title="Desarrollo Web" description="Creación de sitios y plataformas web innovadoras."
                    image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
                <x-service-card title="Desarrollo Web" description="Creación de sitios y plataformas web innovadoras."
                    image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
            </div>
        </div>
    </section>


    <section class="py-16">
        <div class="max-w-6xl mx-auto px-6">
            <span class="text-blue-300 text-xs font-semibold">OPINIONES</span>
            <h2 class="text-3xl font-bold text-blue-950 text-start mb-12">Lo que dicen de nosotros</h2>
            <x-opinion-card />
        </div>
    </section>
</div>
