<x-users.layout>
    {{-- PRODUCT INFO --}}
    <x-users.panel>
        <x-users.section-product>
            <x-users.heading>Products</x-users.heading>
            <p class="mt-6 text-base text-gray-700 leading-7 text-center">
                PT EWINDO offers a diverse range of products, including bare
                conductors such as Enameled Round Copper Wires, Annealed and
                Tin-Annealed Copper Wires, Electric Cables, Automotive Cables, Power
                Supply Cords and Cord sets, Telecommunication Cables (Coaxial),
                Audio Cables, and Wiring Harnesses. Our products meet various
                industry standards and certifications, including SII/LMK/SPLN, UL,
                ULC/UL, CSA, DENTORI, -F- Mark, CEE, and AS Approved.
            </p>
            <p class="mt-4 text-base text-gray-700 leading-7 text-center">
                We are committed to the principles of customer satisfaction and
                quality excellence, continuously enhancing our quality management
                system. Our commitment is reflected in our certifications, which
                include ISO 9001, ISO 14001, ISO 45001, CE, and UL.
            </p>

            <form method="GET" action="{{ route('products.index') }}"
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
            </form>

            <section class="text-center my-8">
                <div class="flex justify-center space-x-4">
                    @foreach ($parentGroups as $parent)
                        <a class="text-sm text-gold hover:text-yellow-400"
                            href="{{ route('products.category', $parent->name) }}">{{ $parent->name }}</a>
                    @endforeach

                </div>
                <hr class="mt-4 border-gray-300" />
            </section>
        </x-users.section-product>
    </x-users.panel>

    <x-users.panel>
        <section class="container max-w-7xl mx-auto">
            <x-users.heading>
                @if (isset($group))
                    <p class="text-lg mt-1 sm:text-base md:text-lg lg:text-xl text-gold">
                        Results for {{ $group->name }}
                    </p>
                @endif
            </x-users.heading>
            @if ($products->count() > 0)
                <div class="grid grid-cols-2 gap-4 pr-4 pl-3 sm:grid-cols-2 lg:grid-cols-4 lg:gap-8 mt-1 lg:p-14">
                    @foreach ($products as $product)
                        <div class="relative rounded-lg overflow-hidden shadow-lg border border-gold flex flex-col">
                            <a href="/products/{{ $product->slug }}">
                                <div class="w-full aspect-square overflow-hidden">
                                    <img alt="Product image of {{ $product->type }}"
                                        src="{{ asset('storage/' . $product->product_images->first()->image_path) }}"
                                        class="w-full h-full object-cover" />
                                </div>
                            </a>

                            {{-- Product Certificates --}}
                            @if ($product->certificates->isNotEmpty())
                                <div class="absolute top-2 right-2 flex flex-col space-y-1">
                                    @foreach ($product->certificates as $certificate)
                                        <img class="w-10 h-10 border-2 border-gray-200 rounded-lg shadow-md object-contain bg-gray-100"
                                            src="{{ asset('storage/' . $certificate->logo) }}"
                                            alt="{{ $certificate->name }}">
                                    @endforeach
                                </div>
                            @endif
                            <div class="p-4 border-t border-gold flex flex-col flex-grow justify-between">
                                <div class="flex-grow">

                                    <p class="font-semibold text-sm lg:text-1xl">{{ $product->type }}</p>
                                    <p
                                        class="text-gray-600 mb-6 text-left text-xs lg:text-justify lg:text-sm leading-relaxed">
                                        {{ $product->cable_type }}</p>
                                </div>
                                <div class="flex justify-end">
                                    <h2
                                        class="inline-block rounded-full bg-yellow-500 px-3 py-1.5  text-white hover:bg-yellow-400 cursor-pointer font-bold mt-2 text-[10px] lg:text-xs ">
                                        {{ Str::limit($product->product_group->name, 10) }}
                                    </h2>
                                </div>
                                <div class="mt-auto">
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- PAGINATION --}}

                </div>
                <div class="mt-10">
                    {{ $products->links() }}
                </div>

                {{-- Pengecualian --}}
            @else
                {{-- Pesan jika tidak ada produk --}}
                <div class="text-center py-10 text-gray-600">
                    <h2 class="font-bold text-3xl mb-10 text-gold">Produk tidak ditemukan.</h2>
                </div>
            @endif
        </section>


    </x-users.panel>
</x-users.layout>
