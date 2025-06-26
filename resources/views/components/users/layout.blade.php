<x-layout>
    <div class="flex flex-col min-h-screen">
        <header class="fixed z-20 inset-x-0 top-0 bg-white/70 backdrop-blur-md shadow-md transition duration-300">
            <x-users.navigation>
                <x-users.nav-links href="/company" :active="request()->is('company')">Company</x-users.nav-links>
                <x-users.nav-links href="/products" :active="request()->is('products')">Products</x-users.nav-links>
                <x-users.nav-links href="/newsroom" :active="request()->is('newsroom')">Newsroom</x-users.nav-links>
                <x-users.nav-links href="/contact" :active="request()->is('contact')">Contact</x-users.nav-links>
                <x-users.nav-links href="/careers" :active="request()->is('careers')">Careers</x-users.nav-links>
            </x-users.navigation>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <x-users.nav-mobile />
        </header>
        <main class="flex-grow">
            <div class="mx-auto mt-16">
                {{ $slot }}
            </div>
        </main>
        <x-users.footer />
    </div>
</x-layout>
