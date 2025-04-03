<div class="min-h-screen w-screen flex flex-col items-center justify-center">
    <!-- Encabezado de Servicios -->
    <section class="flex flex-col md:flex-row items-center p-6 md:p-12 max-w-6xl w-full md:mb-28 md:mt-16">
        <div class="w-full md:w-1/2 md:pr-8 text-center md:text-left">
            <span data-aos="fade-left" data-aos-duration="1000" class="text-blue-300 text-xs font-semibold">SERVICIOS PERSONALIZADOS</span>
            <h1 data-aos="fade-down" data-aos-duration="1000" class="text-3xl md:text-6xl font-bold text-blue-950 leading-tight">
                Descubre nuestras soluciones para tu negocio
            </h1>
            <p data-aos="slide-up" data-aos-duration="1200" class="mt-4 md:mt-6 text-lg md:text-xl text-blue-950 leading-relaxed">
                <b>Innovación y tecnología</b> para alcanzar tus objetivos.
            </p>
            <div data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-out-back" data-aos-delay="200"
                class="mt-6 md:mt-8">
                <x-button enlace="{{ route('contacto') }}" titulo="Solicita más información"
                    clases="bg-blue-700 text-white text-lg md:text-xl font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-800 transition" />
            </div>
        </div>

        <!-- Imágenes o Slider -->
        <div class="w-full md:w-1/2 flex justify-center mt-6 md:mt-0">
            <div class="swiper mySwiper w-full max-w-sm md:max-w-md rounded-lg shadow-md border-none">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/analisisDatos.jpg') }}" alt="Servicio 1" class="w-full h-full rounded-lg">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/analisisDatos.jpg') }}" alt="Servicio 2" class="w-full h-full rounded-lg">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/analisisDatos.jpg') }}" alt="Servicio 3" class="w-full h-full rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bloque Descriptivo -->
    <section class="bg-gradient-to-b from-transparent to-white w-full mt-24">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center p-16">
            <div class="grid grid-cols-2 gap-4">
                <img data-aos="fade-right" data-aos-duration="1500" src="{{ asset('images/analisisDatos.jpg') }}" class="rounded-lg shadow-md" alt="Análisis de datos">
                <img data-aos="fade-left" data-aos-duration="1500" src="{{ asset('images/equipoQanet.jpg') }}" class="rounded-lg shadow-md md:mt-9" alt="Equipo trabajando">
            </div>

            <div>
                <span data-aos="fade-down" data-aos-duration="1000" class="text-blue-300 text-xs font-semibold">CREAMOS VALOR</span>
                <h2 data-aos="fade-up" data-aos-duration="1000" class="text-3xl font-bold text-blue-950 mb-6">
                    Soluciones adaptadas a tus necesidades
                </h2>
                <div class="space-y-6">
                    <p data-aos="fade-right" data-aos-duration="1000" class="text-lg text-gray-500">
                        Descubre cómo nuestras soluciones tecnológicas pueden optimizar los procesos de tu empresa.
                        Trabajamos contigo para desarrollar herramientas eficientes y personalizadas.
                    </p>
                    <p data-aos="fade-left" data-aos-duration="1000" class="text-lg text-gray-500">
                        Con nuestra experiencia, garantizamos resultados y máxima satisfacción.
                    </p>
                    <div data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-out-back" data-aos-delay="200">
                        <x-button enlace="{{ route('nosotros') }}" titulo="Saber más →"
                            clases="inline-block px-6 py-3 text-lg font-semibold text-white bg-blue-700 rounded-full shadow-md hover:bg-blue-800 transition" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Grid de Servicios -->
    <section class="w-full py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 pb-24">
            <span data-aos="fade-down" data-aos-duration="1000" class="text-blue-300 text-xs font-semibold">CONÓCENOS</span>
            <h2 data-aos="fade-up" data-aos-duration="1000" class="text-3xl font-bold text-blue-950 mb-6">
                Servicios Destacados
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-service-card title="Consultoría Tecnológica" description="Te ayudamos a encontrar las mejores soluciones para tu empresa." image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
                <x-service-card title="Gestión ERP" description="Optimización integral para todos los procesos de tu negocio." image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
                <x-service-card title="Desarrollo Web" description="Creación de plataformas adaptadas a tus necesidades." image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
                <x-service-card title="Análisis de Datos" description="Transforma la información en decisiones estratégicas." image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
                <x-service-card title="Ciberseguridad" description="Protege tu negocio contra cualquier amenaza digital." image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
                <x-service-card title="Marketing Digital" description="Impulsa tu marca con estrategias digitales innovadoras." image="{{ asset('images/analisisDatos.jpg') }}" class="h-full" />
            </div>
        </div>
    </section>

    <!-- Opiniones o Testimonios -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-6">
            <span class="text-blue-300 text-xs font-semibold">OPINIONES</span>
            <h2 class="text-3xl font-bold text-blue-950 text-start mb-12">Lo que dicen nuestros clientes</h2>
            <x-opinion-card />
        </div>
    </section>
</div>
