<nav class="bg-white fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 gap">
        <div class="flex items-center space-x-0">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/QanetLogoSimbolo.png') }}" alt="Logo"
                    class="h-10 w-20 sm:h-16 sm:w-24 lg:h-19 lg:w-28">
            </a>
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/QanetLogoLetras.png') }}" alt="Logo"
                    class="h-10 w-20 sm:h-12 sm:w-24 lg:h-19 lg:w-28">
            </a>
        </div>
        <div class="flex md:order-2 space-x-2 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Contactanos</button>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('home') }}"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ Route::currentRouteName() === 'home' ? 'text-blue-700' : '' }}">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ route('nosotros') }}"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ Route::currentRouteName() === 'nosotros' ? 'text-blue-700' : '' }}">
                        Nosotros
                    </a>
                </li>
                <li>
                    <button id="dropdownServiciosLink" data-dropdown-toggle="dropdownServicios"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0">
                        <a href="{{ route('servicios') }}" class="{{ Route::currentRouteName() === 'servicios' ? 'text-blue-700' : '' }}">
                            Servicios
                        </a>
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownServicios" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownServiciosLink">
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Servicio1</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Servicio2</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Servicio3</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Servicio4</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('contacto') }}"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ Route::currentRouteName() === 'contacto' ? 'text-blue-700' : '' }}">
                        Contacto
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
