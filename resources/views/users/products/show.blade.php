<x-users.layout>
    <x-slot:heading>
        Product Detail
    </x-slot:heading>

    <x-users.section>

        {{-- KEADAAN KETIKA BERHASIL MENAMBAHKAN SEBUAH PRODUK --}}


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
                                        <h3 class="text-base font-semibold text-gray-900" id="modal-title">Sukses !!!
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
                        <a href="/products" class="mr-2 text-sm font-medium text-gray-900">Products</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                            class="h-5 w-4 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <a href="#" class="mr-2 text-sm font-medium text-gray-900">{{ $product->type }}</a>
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
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto border-black/10">
                    {{-- image section (can be swiped when more than one) --}}
                    <div class="swiper swiper-products">
                        <div class="swiper-wrapper">
                            @if ($product->product_images->isNotEmpty())
                                @foreach ($product->product_images as $image)
                                    <div class="swiper-slide">
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
                <div class="mt-6 mb-10 sm:mt-8 lg:mt-0 relative">
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
                        <div x-data="{ open: false }">
                            <div class="mt-4 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                                <button @click="open = true"
                                    class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700">
                                    <svg class="w-5 h-5 -ms-2 me-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                    </svg>
                                    Request A Quotation
                                </button>
                            </div>

                            {{-- Modal --}}
                            <div x-show="open" x-cloak x-transition
                                class="fixed inset-0 z-50 w-screen overflow-y-auto backdrop-blur-sm bg-black/30"
                                @click.self="open = false">
                                <div
                                    class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                    <div
                                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl">
                                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                <h3 class="text-base font-semibold text-gray-900" id="modal-title">Request A
                                                    Quotation</h3>
                                                <div class="mt-2">
                                                    <x-forms.form method="POST"
                                                        action="/products/{{ $product->product_group_id }}/request-a-quotation">
                                                        @csrf
                                                        <div class="grid gap-4 mb-4 grid-cols-10 mt-10">
                                                            <div class="col-span-2">
                                                                <x-forms.select label="Title" name="title">
                                                                    <option value="Mr">Mr.</option>
                                                                    <option value="Mrs">Mrs.</option>
                                                                    <option value="Miss">Miss.</option>
                                                                    <option value="Ms">Ms.</option>
                                                                </x-forms.select>
                                                            </div>
                                                            <div class="col-span-4">
                                                                <x-forms.input label="First Name" name="first_name" />
                                                            </div>
                                                            <div class="col-span-4">
                                                                <x-forms.input label="Last Name" name="last_name" />
                                                            </div>
                                                            <div class="col-span-10">
                                                                <x-forms.input label="Email" name="email"
                                                                    type="email" />
                                                            </div>
                                                            <div class="col-span-10">
                                                                <x-forms.input label="Company Name" name="company_name" />
                                                            </div>
                                                            <div class="col-span-5">
                                                                <x-forms.input label="Phone Number" name="phone" />
                                                            </div>
                                                            <div class="col-span-5">
                                                                <x-forms.input label="Country" name="country" />
                                                            </div>
                                                            <div class="col-span-5">
                                                                <x-forms.input label="Subject" name="subject"
                                                                    value="Request A Quotation" readonly />
                                                            </div>
                                                            <div class="col-span-5">
                                                                <x-forms.input label="Product" name="product"
                                                                    value="{{ $product->type }} - {{ $product->cable_type }}"
                                                                    readonly>
                                                                </x-forms.input>
                                                            </div>

                                                            <div class="col-span-10">
                                                                <x-forms.textarea label="Message" name="message" />
                                                            </div>
                                                        </div>
                                                        <x-forms.divider />
                                                        <div class="px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                            <button
                                                                class="inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 sm:ml-3 sm:w-auto">Send
                                                                Request</button>
                                                            <button @click="open = false" type="button"
                                                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                                                        </div>
                                                    </x-forms.form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endguest

                </div>

                {{-- Bottom description detail --}}
            </div>
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
                                        style="background-color: {{ $color }};"
                                        title="{{ $color }}"></span>
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
    </x-users.section>

</x-users.layout>
