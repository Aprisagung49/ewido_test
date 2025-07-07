<x-users.layout>
    {{-- PRODUCT INFO --}}
    <x-users.panel>
        <x-users.section-product>





            <x-users.heading>Products</x-users.heading>
            <p class="mt-6 text-sm lg:text-base text-gray-700 leading-7 mx-5 lg:mx-0  text-justify lg:text-center">
                PT EWINDO offers a diverse range of products, including bare
                conductors such as Enameled Round Copper Wires, Annealed and
                Tin-Annealed Copper Wires, Electric Cables, Automotive Cables, Power
                Supply Cords and Cord sets, Telecommunication Cables (Coaxial),
                Audio Cables, and Wiring Harnesses. Our products meet various
                industry standards and certifications, including SII/LMK/SPLN, UL,
                ULC/UL, CSA, DENTORI, -F- Mark, CEE, and AS Approved.
            </p>
            <p class="mt-4 text-sm lg:text-base text-gray-700 leading-7 mx-5  text-justify lg:text-center">
                We are committed to the principles of customer satisfaction and
                quality excellence, continuously enhancing our quality management
                system. Our commitment is reflected in our certifications, which
                include ISO 9001, ISO 14001, ISO 45001, CE, and UL.
            </p>

            <x-users.heading-small>Featured Categories</x-users.heading-small>

            {{-- <form method="GET" action="{{ route('products.index') }}"
                class="flex rounded-full border-2 border-gold outline-none overflow-hidden max-w-lg mx-auto mt-10">
                @if (request()->routeIs('products.category'))
                    <input type="hidden" name="group" value="{{ request()->route('name') }}">
                @endif
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Search Products..."
                    class="w-full outline-none bg-white text-sm px-5 py-3" />
                <button type="submit" class="flex items-center justify-center bg-gold hover:bg-yellow-400 px-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="18px"
                        class="fill-white">
                        <path
                            d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                        </path>
                    </svg>
                </button>
            </form> --}}




            @php
                // Mapping nama kategori ke gambar
                $categoryImages = [
                    'Cables' => 'storage/images/cable.jpg',
                    'Enamelled Wire' => 'storage/images/wire.jpg',
                    'Power Supply Cord and Cord Set' => 'storage/images/power.jpg',
                    // Default jika nama tidak cocok
                    // 'default' => 'storage/images/default.jpg',
                ];
            @endphp

            <section class="text-center my-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 justify-items-center">
                    @foreach ($parentGroups as $parent)
                        @php
                            $imagePath = $categoryImages[$parent->name] ?? $categoryImages['default'];
                        @endphp

                        <a href="{{ route('products.category', $parent->name) }}"
                            class="relative w-88 h-45 md:w-70 rounded-lg overflow-hidden shadow-lg group">
                            <div class="mx-5 aspect-3/2 absolute inset-0 bg-cover bg-center transform transition-transform duration-1800 ease-in-out group-hover:scale-140"
                                style="background-image: url('{{ asset($imagePath) }}');">
                            </div>
                            <div class="absolute inset-0  bg-opacity-10 flex flex-col justify-between p-4">
                                <h3 class="text-white hover:text-gold text-xl md:text-md font-semibold">
                                    {{ $parent->name }}</h3>
                                <span
                                    class="inline-block mt-4  self-start px-3 py-1 text-sm font-medium text-white border border-white rounded-md hover:bg-gold hover:text-white transition">
                                    Explore All
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>

            <script>
                const swiperBanner = new Swiper(".mySwiperBanner", {
                    loop: true,
                    spaceBetween: 0,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>


        </x-users.section-product>
    </x-users.panel>
</x-users.layout>
