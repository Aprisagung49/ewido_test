<x-users.section>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>

    <main class="mb-auto pt-4">
        <section class="container mx-auto sm:px-44 my-8">
            <h2 class="text-pretty text-center text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                <br>
                <span class="text-yellow-500">Registration Form</span> <br>
            </h2>

            <form method="POST" action="{{ route('form.submit') }}" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12 mt-8">
                    <!-- DATA DIRI SECTION -->
                    <div class="border-b border-gray-900/10 pb-2">
                        <h2 class="text-base/7 font-semibold text-gray-900">Data Diri</h2>

                        <div class="grid gap-4 mb-2 grid-cols-12 mt-2">

                            <!-- NIK -->
                            <div class="col-span-12">
                                <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">No. KTP
                                    <span class="text-red-500">*</span></label>
                                <input type="text" name="nik" id="nik" required
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                    autofocus value="{{ old('nik') }}">
                                @error('nik')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Nama -->
                            <div class="col-span-12">
                                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap
                                    <span class="text-red-500">*</span></label>
                                <input type="text" name="nama" id="nama" required
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                    value="{{ old('nama') }}">
                            </div>

                            <!-- Agama -->
                            <div class="col-span-12">
                                <label for="agama" class="block text-sm/6 font-medium text-gray-900">Agama <span
                                        class="text-red-500">*</span></label>
                                <div class="mt-2 grid grid-cols-1">
                                    <select name="agama" required
                                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        <option selected disabled>Choose</option>
                                        <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam
                                        </option>
                                        <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>
                                            Kristen</option>
                                        <option value="Protestan" {{ old('agama') == 'Protestan' ? 'selected' : '' }}>
                                            Protestan</option>
                                        <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu
                                        </option>
                                        <option value="Budha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha
                                        </option>
                                        <option value="Konguchu" {{ old('agama') == 'Konguchu' ? 'selected' : '' }}>
                                            Konguchu</option>
                                    </select>
                                    <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                        viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="col-span-12">
                                <fieldset>
                                    <legend class="text-sm/6 font-semibold text-gray-900">Jenis Kelamin <span
                                            class="text-red-500">*</span></legend>
                                    <div class="mt-2 flex gap-x-6">
                                        <div class="flex items-center gap-x-3">
                                            <input id="laki-laki" name="jenis_kelamin" type="radio" value="laki-laki"
                                                required {{ old('jenis_kelamin') == 'laki-laki' ? 'checked' : '' }}
                                                class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none">
                                            <label for="laki-laki"
                                                class="block text-sm/6 font-medium text-gray-900">Laki-laki</label>
                                        </div>
                                        <div class="flex items-center gap-x-3">
                                            <input id="perempuan" name="jenis_kelamin" type="radio" value="perempuan"
                                                required {{ old('jenis_kelamin') == 'perempuan' ? 'checked' : '' }}
                                                class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none">
                                            <label for="perempuan"
                                                class="block text-sm/6 font-medium text-gray-900">Perempuan</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- No HP -->
                            <div class="col-span-12">
                                <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900">No. Handphone
                                    1 <span class="text-red-500">*</span></label>
                                <input type="tel" name="nohp" id="nohp" required pattern="08[0-9]{8,11}"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-gray-300 focus:outline-2 focus:outline-indigo-600 sm:text-sm/6"
                                    value="{{ old('nohp') }}">
                                <p class="mt-3 text-sm text-gray-600 font-semibold">Wajib aktif WhatsApp.</p>
                            </div>

                            <!-- Email -->
                            <div class="col-span-12">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email Address
                                    <span class="text-red-500">*</span></label>
                                <input type="email" name="email" id="email" required
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-gray-300 focus:outline-2 focus:outline-indigo-600 sm:text-sm/6"
                                    value="{{ old('email') }}">
                            </div>

                            <!-- Tempat Lahir -->
                            <div class="col-span-12">
                                <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tempat
                                    Lahir (Sesuai KTP) <span class="text-red-500">*</span></label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" required
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-gray-300 focus:outline-2 focus:outline-indigo-600 sm:text-sm/6"
                                    value="{{ old('tempat_lahir') }}">
                            </div>

                            <!-- Tanggal Lahir -->
                            <div class="col-span-12">
                                <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                                    Lahir (Sesuai KTP) <span class="text-red-500">*</span></label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" required
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-gray-300 focus:outline-2 focus:outline-indigo-600 sm:text-sm/6"
                                    value="{{ old('tanggal_lahir') }}">
                            </div>

                            <!-- Tombol Submit -->
                            <div class="col-span-12 mt-6 flex items-center justify-end gap-x-6">
                                <button type="submit"
                                    class="rounded-md bg-yellow-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-yellow-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">
                                    Apply
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
</x-users.section>
