<div class="min-h-screen w-screen flex flex-col items-center justify-center ">
    <section class="flex flex-col md:flex-row items-center p-6 md:p-12 max-w-6xl w-full">
        <div class="w-full md:w-1/2 md:pr-8 text-center md:text-left">
            <h1 class="text-3xl md:text-6xl font-bold text-blue-950 leading-tight">
                Nuestro equipo
            </h1>
            <p class="mt-4 md:mt-6 text-lg md:text-xl text-blue-950 leading-relaxed">
                En Qanet, hemos estado trabajando durante más de 26 años para brindar soluciones tecnológicas a las
                empresas.
                Nuestra misión es ofrecer herramientas innovadoras y de alta calidad para que las empresas puedan
                alcanzar sus objetivos.
            </p>
        </div>

        <div class="w-full md:w-1/2 flex justify-center mt-6 md:mt-0">
            <img src="{{ asset('images/equipoQanet.jpg') }}" alt="Imagen de nosotros"
                class="w-full h-auto rounded-lg shadow-md">
        </div>
    </section>

    <section class="w-full py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 pb-24">
            <div class="flex flex-col items-center md:my-10">
                <span class="text-blue-300 text-xs font-semibold">CONOCE A CADA UNO DE NOSOTROS</span>
                <h2 class="text-3xl font-bold text-blue-950 text-center mb-12">SOMOS QANET</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl px-6 pb-12">

                <x-tarjeta-equipo imagen="images/LogoQanet.png" nombre="Antonio Manuel López"
                    cargo="Director Técnico CEO" />
                <x-tarjeta-equipo imagen="images/LogoQanet.png" nombre="Jose Manuel Pozo"
                    cargo="Director de Operaciones CEO" />
                <x-tarjeta-equipo imagen="images/LogoQanet.png" nombre="MaKa "
                    cargo="Atención al Cliente y Administración" />
                <x-tarjeta-equipo imagen="images/LogoQanet.png" nombre="Pepi"
                    cargo="Atención al Cliente y Administración" />
                <x-tarjeta-equipo imagen="images/LogoQanet.png" nombre="Sergio Urbano"
                    cargo="Técnico de Sistemas (Ciberseguridad)" />
                <x-tarjeta-equipo imagen="images/LogoQanet.png" nombre="Javier Reina"
                    cargo="Programación Web y Servicios Móviles" />
                <x-tarjeta-equipo imagen="images/LogoQanet.png" nombre="Rafa Berral" cargo="Programación Móvil" />
                <x-tarjeta-equipo imagen="images/LogoQanet.png" nombre="Roberto Gallardo" cargo="Técnico de Soporte" />
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
