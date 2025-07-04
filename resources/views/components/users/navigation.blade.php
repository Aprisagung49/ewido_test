{{-- <nav x-data="{ open: false }" class="mx-auto max-w-full p-4 lg:px-8 bg-white shadow">
    <div class="flex items-center justify-between"> --}}
<!-- Logo -->

{{-- <nav class="mx-auto flex max-w-full items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
        <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">Ps </span>
            <img class="h-8 w-auto" src="{{ asset('storage/logos/ewindo.png') }}" alt="PT Ewindo Logo">
        </a>
    </div> --}}

<!-- Mobile Toggle -->
{{-- <div class="lg:hidden">
            <button @click="open = !open" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div> --}}

<!-- Desktop Menu -->
{{-- <div class="flex lg:hidden">
        <button type="button" class="inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true" data-slot="icon">

                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-x-8">
        {{ $slot }}
    </div> --}}


<!-- Mobile Menu -->
{{-- <div x-show="open" x-transition class="lg:hidden mt-4 space-y-2 bg-white-500 rounded-lg p-4 shadow-inner">
        <a href="/company" class="block px-4 py-2  font-semibold text-gray-500 hover:text-gold rounded">Company</a>
        <a href="/products" class="block px-4 py-2 font-semibold text-gray-500 hover:text-gold rounded">Products</a>
        <a href="/newsroom" class="block px-4 py-2 font-semibold text-gray-500 hover:text-gold rounded">Newsroom</a>
        <a href="/contact" class="block px-4 py-2 font-semibold text-gray-500 hover:text-gold rounded">Contacts
            Us</a>
        <a href="/careers" class="block px-4 py-2 text-gray-500 hover:text-gold font-semibold rounded">Careers</a>
    </div> --}}
{{-- </nav> --}}

<nav x-data="{ open: false }" class="relative mx-auto max-w-full p-6 lg:px-8" aria-label="Global">
    <div class="flex items-center justify-between ">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <img class="h-8 w-auto" src="{{ asset('storage/logos/ewindo.png') }}" alt="PT Ewindo Logo">
            </a>
        </div>

        <!-- Hamburger Button with animation -->
        <div class="lg:hidden">
            <button @click="open = !open" type="button" class="relative w-8 h-8 focus:outline-none">
                <span class="sr-only">Toggle menu</span>
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center space-y-1 transition-all duration-300">
                    <!-- Line 1 -->
                    <span :class="open ? 'rotate-45 translate-y-1.5' : ''"
                        class="block h-0.5 w-6 bg-gray-800 transform transition duration-300 ease-in-out origin-center"></span>
                    <!-- Line 2 -->
                    <span :class="open ? 'opacity-0' : ''"
                        class="block h-0.5 w-6 bg-gray-800 transform transition duration-300 ease-in-out"></span>
                    <!-- Line 3 -->
                    <span :class="open ? '-rotate-45 -translate-y-1.5' : ''"
                        class="block h-0.5 w-6 bg-gray-800 transform transition duration-300 ease-in-out origin-center"></span>
                </div>
            </button>
        </div>

        <!-- Desktop menu -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-x-8">
            {{ $slot }}
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" x-transition
        class="mt-4 space-y-4 lg:hidden p-6 rounded absolute w-full left-0 z-50 bg-white/90 backdrop-blur-md shadow-md transition duration-300"
        @click.outside="open = false">
        <!-- Menu items -->
        <a href="/company"
            class="block text-gold font-medium  border-gold hover:transition duration-200 hover:text-xl">Company</a>
        <a href="/products"
            class="block text-gold font-medium  border-gold hover:transition duration-200 hover:text-xl">Products</a>
        <a href="/newsroom"
            class="block text-gold font-medium  border-gold hover:transition duration-200 hover:text-xl">Newsroom</a>
        <a href="/contact"
            class="block text-gold font-medium  border-gold hover:transition duration-200 hover:text-xl">Contact</a>
        <a href="/careers"
            class="block text-gold font-medium  border-gold hover:transition duration-200 hover:text-xl">Careers</a>
    </div>
</nav>
