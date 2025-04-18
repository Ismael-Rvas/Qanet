<div class="min-h-screen w-screen flex flex-col items-center justify-center ">
    <section class="flex flex-col md:flex-row items-center p-6 md:p-12 max-w-6xl w-full md:mb-28 md:mt-16">
        <div class="w-full md:w-1/2 md:pr-8 text-center md:text-left">
            <span data-aos="fade-left" data-aos-duration="1000" class="text-blue-300 text-xs font-semibold">ERP, SERVICIOS
                ...</span>
            <h1 data-aos="fade-down" data-aos-duration="1000"
                class="text-3xl md:text-6xl font-bold text-blue-950 leading-tight">
                Soluciones inteligentes para tu empresa
            </h1>
            <p data-aos="slide-up" data-aos-duration="1200"
                class="mt-4 md:mt-6 text-lg md:text-xl text-blue-950 leading-relaxed">
                <b>Más de 26 años</b> creando soluciones a medida.
            </p>
            <div data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-out-back" data-aos-delay="200"
                class="mt-6 md:mt-8">
                <x-button enlace="{{ route('contacto') }}" titulo="¡Cuéntanos tu caso!"
                    clases="bg-blue-700 text-white text-lg md:text-xl font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-800 transition" />
            </div>
        </div>


        <div class="w-full md:w-1/2 flex justify-center mt-6 md:mt-0">
            <div class="swiper mySwiper w-full max-w-sm md:max-w-md rounded-lg shadow-md border-none">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/tiendaQanet.jpg') }}" alt="Imagen 1"
                            class="w-full h-full rounded-lg">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/ERP.jpg') }}" alt="Imagen 2" class="w-full h-full rounded-lg">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/tiendaQanet.jpg') }}" alt="Imagen 3"
                            class="w-full h-full rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-transparent to-white w-full mt-24">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 p-16">
            <div class="flex flex-col justify-center items-start space-y-4">
                <span data-aos="fade-down" data-aos-duration="1000" class="text-blue-300 text-xs font-semibold">
                    LAS MEJORES SOLUCIONES DEL MERCADO
                </span>
                <h2 data-aos="fade-up" data-aos-duration="1000" class="text-3xl font-bold text-blue-950">
                    Más de 26 años impulsando la transformación digital
                </h2>
                <p data-aos="fade-right" data-aos-duration="1000" class="text-lg text-gray-500">
                    En <strong>Qanet ERP</strong>, llevamos más de veintiséis años ayudando a empresas a optimizar sus
                    procesos con soluciones tecnológicas.
                    Nuestra misión es ofrecer herramientas que faciliten la toma de decisiones y mejoren la
                    productividad.
                </p>
                <x-button enlace="{{ route('nosotros') }}" titulo="Conócenos →"
                    clases="bg-blue-700 text-white text-lg font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-blue-800 transition" />
            </div>

            <div class="flex justify-center">
                <img data-aos="fade-left" data-aos-duration="1500" src="{{ asset('images/equipoQanet.jpg') }}"
                    class="rounded-lg shadow-md w-full md:max-w-lg" alt="Análisis y optimización de datos">
            </div>

            <div class="flex justify-center">
                <img data-aos="fade-right" data-aos-duration="1500" src="{{ asset('images/analisisDatos.jpg') }}"
                    class="rounded-lg shadow-md w-full md:max-w-lg" alt="Equipo Qanet en acción">
            </div>

            <div class="flex flex-col justify-center items-start space-y-4">
                <span data-aos="fade-down" data-aos-duration="1000" class="text-blue-300 text-xs font-semibold">
                    LAS MEJORES SOLUCIONES DEL MERCADO
                </span>
                <h2 data-aos="fade-up" data-aos-duration="1000" class="text-2xl font-bold text-blue-950">
                    Transformamos tus procesos
                </h2>
                <p data-aos="fade-left" data-aos-duration="1000" class="text-lg text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam consectetur facilis, vel aperiam nisi
                    alias possimus rem debitis odit non nam fugit, eligendi tenetur delectus cum exercitationem
                    asperiores veritatis commodi.
                </p>
            </div>
        </div>
    </section>


    <section class="w-full py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 pb-24">
            <span data-aos="fade-down" data-aos-duration="1000" class="text-blue-300 text-xs font-semibold">EXCELENCIA Y
                CALIDAD EN CADA SOLUCIÓN</span>
            <h2 data-aos="fade-up" data-aos-duration="1000" class="text-3xl font-bold text-blue-950 mb-6">
                Nuestros Servicios</h2>

            <p data-aos="fade-right" data-aos-duration="1000" class="text-lg text-gray-500 mb-10">
                En <strong>Qanet ERP</strong>, diseñamos soluciones tecnológicas que conectan cada área de tu negocio,
                impulsando
                la eficiencia y la innovación. Nuestro objetivo es ofrecer herramientas personalizadas que simplifiquen
                procesos,
                maximicen la productividad y transformen los datos en decisiones estratégicas que impulsen tu éxito.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-9">
                <x-service-card title="Gestión ERP"
                    description="Optimización integral para todos los procesos de tu negocio."
                    image="{{ asset('images/erp.png') }}" />
                <x-service-card title="Desarrollo Web"
                    description="Creación de plataformas adaptadas a tus necesidades."
                    image="{{ asset('images/desarrolloWep.png') }}" />
                <x-service-card title="Análisis de Datos"
                    description="Transforma la información en decisiones estratégicas."
                    image="{{ asset('images/analisisDatos.png') }}" />
                <x-service-card title="Ciberseguridad"
                    description="Protege tu negocio contra cualquier amenaza digital."
                    image="{{ asset('images/ciberseguridad.png') }}" />
                
            </div>
            <x-button enlace="{{ route('servicios') }}" titulo="Ver mas →"
                clases="bg-blue-700 text-white text-lg font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-blue-800 transition" />
        </div>

    </section>

    <section class="w-full py-16 bg-blue-50">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center p-16">
            <div class="grid grid-cols-2 gap-4">
                <img data-aos="fade-right" data-aos-duration="1500" src="{{ asset('images/analisisDatos.jpg') }}"
                    class="rounded-lg shadow-md" alt="Equipo Qanet en acción">
                <img data-aos="fade-left" data-aos-duration="1500" src="{{ asset('images/equipoQanet.jpg') }}"
                    class="rounded-lg shadow-md md:mt-9" alt="Análisis y optimización de datos">
                <img data-aos="fade-right" data-aos-duration="1500" src="{{ asset('images/analisisDatos.jpg') }}"
                    class="rounded-lg shadow-md" alt="Equipo Qanet en acción">
                <img data-aos="fade-left" data-aos-duration="1500" src="{{ asset('images/equipoQanet.jpg') }}"
                    class="rounded-lg shadow-md md:mt-9" alt="Análisis y optimización de datos">
            </div>

            <div>
                <span data-aos="fade-down" data-aos-duration="1000" class="text-blue-300 text-xs font-semibold">LA
                    DIFERENCIA ESTÁ EN EL DETALLE</span>
                <h2 data-aos="fade-up" data-aos-duration="1000" class="text-3xl font-bold text-blue-950 mb-6">
                    Partners acreditados</h2>

                <p data-aos="fade-left" data-aos-duration="1000" class="text-lg text-gray-500">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo nihil veniam doloremque autem
                    quae. Sint debitis autem aliquam possimus aut officiis saepe exercitationem commodi, minima vero
                    deserunt magni laudantium quos.
                </p>
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
