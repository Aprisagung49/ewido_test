<nav x-data="{ open: false }" class="mx-auto max-w-full p-4 lg:px-8 bg-white shadow">
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">PT Ewindo</span>
                <img class="h-8 w-auto" src="{{ asset('storage/logos/ewindo.png') }}" alt="PT Ewindo Logo">
            </a>
        </div>

        <!-- Mobile Toggle -->
        <div class="lg:hidden">
            <button @click="open = !open" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-x-8">
            {{ $slot }}
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition class="lg:hidden mt-4 space-y-2 bg-gray-50 rounded-lg p-4 shadow-inner">
        <a href="/company" class="block px-4 py-2  font-semibold text-gold hover:bg-gray-100 rounded">Company</a>
        <a href="/products" class="block px-4 py-2 font-semibold text-gold hover:bg-gray-100 rounded">Products</a>
        <a href="/newsroom" class="block px-4 py-2 font-semibold text-gold hover:bg-gray-100 rounded">Newsroom</a>
        <a href="/contact" class="block px-4 py-2 font-semibold text-gold hover:bg-gray-100 rounded">Contacts Us</a>
        <a href="/careers" class="block px-4 py-2 text-gold hover:bg-indigo-50 font-semibold rounded">Careers</a>
    </div>
</nav>
