<div class="min-h-screen w-screen flex flex-col items-center justify-center ">
    <section class="flex flex-col md:flex-row items-center p-6 md:p-12 max-w-6xl w-full">
        <div class="w-full md:w-1/2 md:pr-8">
            <x-api-mapa />
        </div>
    </section>

    <section class="w-full h-full md:py-36 py-20 bg-white">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 px-6">


            <div>
                <span data-aos="fade-LEFT" data-aos-duration="1000"
                    class="text-blue-300 text-xs font-semibold">CONTÁCTANOS, EL CAMBIO EMPIEZA HOY</span>
                <h2 data-aos="fade-down" data-aos-duration="1000" class="text-5xl font-bold text-blue-950 mb-4">
                    Evolucionando <br> Contigo</h2>
                <p data-aos="fade-left" data-aos-duration="1000" class="text-blue-950 mb-6">
                    Nuestra misión es ayudarte a optimizar tus procesos empresariales y mejorar la toma de decisiones
                    con tecnología de vanguardia.
                </p>
                <p data-aos="fade-left" data-aos-duration="1000"class="text-blue-950 mb-6">
                    Ponte en contacto con nosotros para descubrir cómo podemos potenciar tu empresa con nuestras
                    soluciones personalizadas.
                </p>

                <div class="space-y-4" data-aos="fade-right" data-aos-duration="2000">
                    <div class="flex items-center space-x-3">
                        <span class="text-blue-800"><i class="fas fa-map-marker-alt"></i></span>
                        <p class="text-blue-950">Av. de la Estación, 25, Bajo, 14500 Puente Genil, Córdoba</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-blue-800"><i class="fas fa-clock"></i></span>
                        <p class="text-blue-950">
                            <strong>Horario:</strong>
                            <br>Lunes a Viernes: 9:00–14:00, 16:00–19:00
                            <br>Sábado y Domingo: Cerrado
                        </p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-blue-800"><i class="fas fa-envelope"></i></span>
                        <a href="mailto:contacto@tuempresa.com"
                            class="text-blue-800 hover:underline">email@gmail.com</a>
                    </div>

                </div>
                <div class="mt-10 md:ml-32" data-aos="zoom-in-up" data-aos-duration="2000">
                    <button 
                        class="bg-blue-600 text-white font-semibold px-4 py-2 rounded flex items-center hover:bg-blue-700">
                        <i class="fas fa-phone-alt mr-2"></i> 957 60 04 34
                    </button>
                </div>
            </div>

            <div class="bg-white p-6 shadow-md rounded-lg border border-blue-800" data-aos="fade-down" data-aos-duration="1000">
                <h3 class="text-2xl font-semibold text-blue-950 mb-4">Envíanos un Mensaje</h3>
                <form action="#" class="space-y-4">
                    <div class="space-y-4">
                        <input type="text" placeholder="Nombre (*)"
                            class="border border-blue-800 p-2 rounded w-full text-blue-950">
                        <input type="email" placeholder="Email (*)"
                            class="border border-blue-800 p-2 rounded w-full text-blue-950">
                        <input type="text" placeholder="Teléfono (*)"
                            class="border border-blue-800 p-2 rounded w-full text-blue-950">
                    </div>
                    <input type="text" placeholder="Asunto (*)"
                        class="border border-blue-800 p-2 rounded w-full text-blue-950">
                    <textarea placeholder="Mensaje (*)" class="border border-blue-800 p-2 rounded w-full h-32 text-blue-950"></textarea>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="privacy" class="w-4 h-4">
                        <label for="privacy" class="text-blue-950 text-sm">
                            He leído y acepto la <a href="#" class="text-blue-800 underline">Política de
                                Privacidad</a>.
                        </label>
                    </div>

                    <x-button enlace="#" titulo="ENVIAR"
                        clases="bg-blue-600 text-white font-semibold px-6 py-2 rounded hover:bg-blue-700 w-full block text-center" />

                </form>
            </div>
        </div>
    </section>
</div>
