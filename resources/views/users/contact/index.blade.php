<x-users.layout>
    <x-users.panel>
        <x-users.section-product>
            <x-users.heading>Contact Us</x-users.heading>
            <div class="w-full rounded-xl overflow-hidden shadow-lg">
                <div class="w-full min-h-[120px] min-w-[50px] lg:min-h-[400px] bg-center bg-cover relative flex items-end p-6"
                    style="background-image: url('{{ asset('/storage/images/hero/1.png') }}')">
                    <div class="flex items-start justify-items-start w-full h-full py-6">
                        <div class="text-left">
                            <div class="container mx-auto">
                                <div class="max-w-4xl mx-auto text-left">
                                    <h2 class="text-4xl font-extrabold tracking-wide text-yellow-500 sm:text-4xl uppercase px-4 py-2 rounded-lg shadow-text"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 1);">
                                        Contact Us
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-users.section-product>
    </x-users.panel>
    {{-- Contact Form --}}

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



    {{-- KEADAAN KETIKA PESAN GAGAL DIKIRIM --}}



    <x-users.panel color="gray">
        <x-users.section>
            <h2 class="font-semibold text-gray-900 text-3xl">Leave A Message</h2>
            <p class="mt-1 text-sm/6 text-gray-600">For a more accurate and tailored quotation, kindly provide your
                detailed requirements when contacting us.</p>
            <x-forms.form method="POST" action="{{ route('kirim.email') }}">
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
                        <x-forms.input label="Email" name="email" type="email" />
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
                    <div class="col-span-10">
                        <div id="subject-wrapper" class="flex gap-4">
                            {{-- SUBJECT --}}
                            <div id="subject-select" class="w-full transition-all">
                                <x-forms.select label="Subject" name="subject"
                                    onchange="toggleProductDropdown(this.value)">
                                    <option disabled selected>Subject</option>
                                    <option value="Contact">Contact</option>
                                    <option value="Distributor">Distributor</option>
                                    <option value="Supplier">Supplier</option>
                                    <option value="Request A Quotation">Request A Quotation</option>
                                    <option value="Feedback">Feedback</option>
                                    <option value="Other">Other</option>
                                </x-forms.select>
                            </div>

                            {{-- PRODUCT --}}
                            <div id="product-container" class="w-1/2 hidden transition-all">
                                <x-forms.select label="Product" name="product">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->type }}">{{ $product->type }}</option>
                                    @endforeach
                                </x-forms.select>
                            </div>
                        </div>
                    </div>


                    <script>
                        function toggleProductDropdown(value) {
                            const productDropdown = document.getElementById('product-container');
                            const subjectSelect = document.getElementById('subject-select');

                            if (value === 'Request A Quotation') {
                                productDropdown.classList.remove('hidden');
                                subjectSelect.classList.remove('w-full');
                                subjectSelect.classList.add('w-1/2');
                            } else {
                                productDropdown.classList.add('hidden');
                                subjectSelect.classList.remove('w-1/2');
                                subjectSelect.classList.add('w-full');

                                const productSelect = document.getElementById('product');
                                if (productSelect) {
                                    productSelect.value = ''; // kosongkan
                                }
                            }
                        }
                    </script>


                    <div class="col-span-10">
                        <x-forms.textarea label="Message" name="message" />
                    </div>
                </div>
                <x-forms.divider />
                <div class="text-center">
                    <x-forms.button>Request</x-forms.button>
                </div>
            </x-forms.form>
        </x-users.section>
    </x-users.panel>

    <x-users.panel>
        <x-users.section>
            <x-users.heading>Our Locations</x-users.heading>
            <div class="max-w-full rounded overflow-hidden shadow-lg mb-8">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126749.6605787355!2d107.4980086972656!3d-6.899346999999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7e3329fd20d%3A0x9b4d627819303906!2sPT%20Ewindo!5e0!3m2!1sid!2sid!4v1736908737367!5m2!1sid!2sid"
                    width="100%" height="400" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="flex flex-col md:flex-row bg-gray-100 p-6 rounded-b">
                    <!-- Left Side: Map Icon -->
                    <div class="w-full sm:w-1/4 flex items-center justify-center p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-12">
                            <path fill-rule="evenodd"
                                d="M8.161 2.58a1.875 1.875 0 0 1 1.678 0l4.993 2.498c.106.052.23.052.336 0l3.869-1.935A1.875 1.875 0 0 1 21.75 4.82v12.485c0 .71-.401 1.36-1.037 1.677l-4.875 2.437a1.875 1.875 0 0 1-1.676 0l-4.994-2.497a.375.375 0 0 0-.336 0l-3.868 1.935A1.875 1.875 0 0 1 2.25 19.18V6.695c0-.71.401-1.36 1.036-1.677l4.875-2.437ZM9 6a.75.75 0 0 1 .75.75V15a.75.75 0 0 1-1.5 0V6.75A.75.75 0 0 1 9 6Zm6.75 3a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0V9Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>

                    <!-- Right Side: Full Address -->
                    <div class="w-full md:w-3/4 text-gray-700 text-md p-4 font-semibold">
                        <h3 class="font-bold text-xl text-amber-500">Plant 1 - Wire & Cable</h3>
                        <p>Jl. Cimuncang No. 68, Bandung, Jawa Barat, Indonesia</p>
                        <p>T +62 22 720 8008</p>
                        <p>F +62 22 720 7132, 720 8263</p>
                    </div>
                </div>
            </div>
            <div class="max-w-full rounded overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126734.57124324786!2d107.64736409726561!3d-6.955490500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c4fa06ad4a47%3A0x53f1a4efa49afef!2sPT.%20Ewindo!5e0!3m2!1sid!2sid!4v1736908908414!5m2!1sid!2sid"
                    width="100%" height="400" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="flex flex-col md:flex-row bg-gray-100 p-6 rounded-b">
                    <!-- Left Side: Map Icon -->
                    <div class="w-full sm:w-1/4 flex items-center justify-center p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-12">
                            <path fill-rule="evenodd"
                                d="M8.161 2.58a1.875 1.875 0 0 1 1.678 0l4.993 2.498c.106.052.23.052.336 0l3.869-1.935A1.875 1.875 0 0 1 21.75 4.82v12.485c0 .71-.401 1.36-1.037 1.677l-4.875 2.437a1.875 1.875 0 0 1-1.676 0l-4.994-2.497a.375.375 0 0 0-.336 0l-3.868 1.935A1.875 1.875 0 0 1 2.25 19.18V6.695c0-.71.401-1.36 1.036-1.677l4.875-2.437ZM9 6a.75.75 0 0 1 .75.75V15a.75.75 0 0 1-1.5 0V6.75A.75.75 0 0 1 9 6Zm6.75 3a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0V9Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>

                    <!-- Right Side: Full Address -->
                    <div class="w-full md:w-3/4 text-gray-700 text-md p-4 font-semibold">
                        <h3 class="font-bold text-xl text-amber-500">Plant 2 - Power Supply Cord & Wiring Harness </h3>
                        <p>Kawasan Industri Rancaekek Kav. A.8,</p>
                        <p>Jalan Raya Rancaekek KM 24.5 Sumedang, 45364, Jawa Barat, Indonesia.</p>
                        <p>T +62 22 778 0008</p>
                        <p>F +62 22 778 0001</p>
                    </div>
                </div>
            </div>


        </x-users.section>
    </x-users.panel>
</x-users.layout>
