<nav class="bg-white fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4 gap">
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
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('home') }}"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ Route::currentRouteName() === 'home' ? 'text-blue-950 font-bold' : '' }}">
                        INICIO
                    </a>
                </li>
                <li>
                    <a href="{{ route('nosotros') }}"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ Route::currentRouteName() === 'nosotros' ? 'text-blue-950 font-bold' : '' }}">
                        NOSOTROS
                    </a>
                </li>
                <li>
                    <a href="{{ route('servicios') }}"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ Route::currentRouteName() === 'servicios' ? 'text-blue-950 font-bold' : '' }}">
                        SERVICIOS
                    </a>
                </li>
                <li>
                    <a href="{{ route('clientes') }}"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ Route::currentRouteName() === 'clientes' ? 'text-blue-950 font-bold' : '' }}">
                        CLIENTES
                    </a>
                </li>

                <li>
                    <a href="{{ route('contacto') }}"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ Route::currentRouteName() === 'contacto' ? 'text-blue-950 font-bold' : '' }}">
                        CONTACTO
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
