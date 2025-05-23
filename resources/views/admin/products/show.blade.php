<x-admin.layout>
    <x-slot:heading>
        Product Detail
    </x-slot:heading>

    {{-- KEADAAN KETIKA PESAN BERHASIL DIKIRIM --}}
    @if (session('success'))
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-md">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:size-10">
                                    <svg class="size-6 text-green-600" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-base font-semibold text-gray-900" id="modal-title">Berhasil Dikirim
                                    </h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button onclick="document.querySelector('[aria-labelledby=modal-title]').remove()"
                                type="button"
                                class="inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-green-500 sm:ml-3 sm:w-auto">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- Breadcrumb --}}
    <nav aria-label="Breadcrumb" class="mb-5">
        <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <li>
                <div class="flex items-center">
                    <a href="/admin/products" class="mr-2 text-sm font-medium text-gray-900">Products</a>
                    <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                        class="h-5 w-4 text-gray-300">
                        <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                    </svg>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    {{-- <a href="#" class="mr-2 text-sm font-medium text-gray-900">{{ $product->type }}</a> --}}
                    <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                        class="h-5 w-4 text-gray-300">
                        <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                    </svg>
                </div>
            </li>

            <li class="text-sm">
                <a href="#" aria-current="page"
                    class="font-medium text-gray-500 hover:text-gray-600">{{ $product->type }} -
                    {{ $product->cable_type }}</a>
            </li>
        </ol>
    </nav>
    {{-- Product Description --}}
    <div class="max-w-7xl px-4 mx-auto 2xl:px-0">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
            <div class="shrink-0 max-w-md lg:max-w-lg mx-auto p-8 border-black/10">
                {{-- image section (can be swiped when more than one) --}}
                <div class="swiper swiper-products">
                    <div class="swiper-wrapper">
                        @if ($product->product_images->isNotEmpty())
                            @foreach ($product->product_images as $image)
                                <div class="swiper-slide bg-gray-100">
                                    <img class="w-[500px] h-[500px] object-contain"
                                        src="{{ asset('storage/' . $image->image_path) }}"
                                        alt="{{ $product->cable_type }}" />
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="swiper-pagination swiper-pagination-products"></div>
                    <div class="swiper-button-prev swiper-button-prev-products"></div>
                    <div class="swiper-button-next swiper-button-next-products"></div>
                </div>
            </div>

            {{-- Right side description --}}
            <div class="mt-6 sm:mt-8 lg:mt-0 relative">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">
                    {{ $product->type }} - {{ $product->cable_type }}
                </h1>
                {{-- Product Certificate --}}
                @if ($product->certificates->isNotEmpty())
                    <div class="flex space-x-4 mt-4 mb-6">
                        @foreach ($product->certificates as $certificate)
                            <img class="w-12 h-12 border-2 border-gold rounded-lg object-cover"
                                src="{{ asset('storage/' . $certificate->logo) }}" alt="{{ $certificate->name }}">
                        @endforeach
                    </div>
                @endif
                <x-forms.divider />
                <div class="h-80 overflow-y-auto pr-2">
                    {!! $product->description !!}
                </div>
                {{-- Request a quotation (for non admin auth) --}}
                @guest
                    <div class="absolute bottom-0 right-0 flex space-x-3 p-4">
                        <a href="#" class="bg-gold text-white py-2 px-4 rounded">Request A Quotation</a>
                    </div>
                @endguest
                @auth
                    <div class="absolute bottom-0 right-0 flex space-x-3 p-4">
                        <a href="/admin/products/{{ $product->slug }}/edit"
                            class="bg-blue-500 text-white py-2 px-4 rounded">Edit</a>
                        <form action="/admin/products/{{ $product->slug }}" method="POST"
                            onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Delete</button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
        {{-- Bottom description detail --}}
        <div class="mt-4 p-8">
            <div class="px-4 sm:px-0">
                <h3 class="text-base/7 font-semibold text-gray-900">Product Information</h3>
                <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Product details and application.</p>
            </div>
            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <x-description-row label="Type">
                        {{ $product->type }}
                    </x-description-row>
                    <x-description-row label="Cable Type">
                        {{ $product->cable_type }}
                    </x-description-row>
                    <x-description-row label="Size (AWG/mm<sup>2</sup>)">
                        {{ $product->size }}
                    </x-description-row>
                    <x-description-row label="Rated Voltage">
                        {{ $product->rated_voltage }}
                    </x-description-row>
                    <x-description-row label="Available Colour">
                        <div class="flex items-center space-x-2">
                            @php
                                $colors = json_decode($product->colour, true);
                            @endphp

                            @foreach ($colors as $color)
                                <span class="w-5 h-5 rounded-full border border-gray-300"
                                    style="background-color: {{ $color }};" title="{{ $color }}"></span>
                            @endforeach
                        </div>
                    </x-description-row>
                    <x-description-row label="Application To">
                        {{ $product->application }}
                    </x-description-row>
                    <x-description-row label="Product Standard">
                        {{ $product->product_standard }}
                    </x-description-row>
                    <x-description-row label="RoHS Compliance">
                        {{ $product->rohs == 1 ? 'Yes' : 'No' }}
                    </x-description-row>
                    <x-description-row label="Heat Resistance">
                        {{ $product->heat_resistance }}
                    </x-description-row>
                    <x-description-row label="Rating Voltage">
                        {{ $product->rating_voltage ?? '-' }}
                    </x-description-row>
                    <x-description-row label="Test">
                        {{ $product->test }}
                    </x-description-row>
                    <x-description-file :files="[
                        [
                            'path' => $product->data_sheet,
                            'name' => $product->type . ' ' . $product->cable_type . ' - Data Sheet',
                        ],
                    ]" />
                </dl>
            </div>
        </div>
    </div>
</x-admin.layout>
