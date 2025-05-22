<x-users.layout>

    <x-users.panel>

        <x-users.section>
            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>


            @if (session()->has('success'))
                <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                    <p class="font-bold">Informational message</p>
                    <p class="text-sm">{{ session('success') }}</p>
                </div>
            @endif

            <main class="mb-auto pt-4">
                <section class="container mx-auto sm:px-44 my-8">
                    <h2 class="text-pretty text-center text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                        <br>
                        <span class="text-yellow-500">Registration Form</span> <br>
                    </h2>

                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-12 mt-8">
                            <!-- DATA DIRI SECTION -->
                            <div class="border-b border-gray-900/10 pb-2">
                                <h2 class="text-base/7 font-semibold text-gray-900">Data Diri</h2>

                                <div class="grid gap-4 mb-2 grid-cols-12 mt-2">
                                    <div class="col-span-12">
                                    </div>

                                    <!-- NO KTP -->
                                    <div class="col-span-12">
                                        <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">No.
                                            KTP
                                            <span class="text-red-500">*</span></label>
                                        <input type="text" name="nik" id="nik"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    </div>
                                    <!-- NAMA LENGKAP -->
                                    <div class="col-span-12">
                                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                            Lengkap
                                            <span class="text-red-500">*</span></label>
                                        <input type="text" name="nama" id="nama"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required autofocus value="{{ old('nama') }}">
                                    </div>

                                    {{-- AGAMA --}}
                                    <div class="col-span-12">
                                        <label for="agama"
                                            class="block text-sm/6 font-medium text-gray-900">Agama</label>
                                        <div class="mt-2 grid grid-cols-1">
                                            <select name="agama"
                                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                <option selected disabled>Choose</option>
                                                <option value="Islam"
                                                    {{ old('agama', $applicant->agama ?? '') == 'Islam' ? 'selected' : '' }}>
                                                    Islam</option>
                                                <option value="Kristen"
                                                    {{ old('agama', $applicant->agama ?? '') == 'Kristen' ? 'selected' : '' }}>
                                                    Kristen</option>
                                                <option value="Protestan"
                                                    {{ old('agama', $applicant->agama ?? '') == 'Protestan' ? 'selected' : '' }}>
                                                    Protestan</option>
                                                <option value="Hindu"
                                                    {{ old('agama', $applicant->agama ?? '') == 'Hindu' ? 'selected' : '' }}>
                                                    Hindu</option>
                                                <option value="Budha"
                                                    {{ old('agama', $applicant->agama ?? '') == 'Budha' ? 'selected' : '' }}>
                                                    Budha</option>
                                                <option value="Konguchu"
                                                    {{ old('agama', $applicant->agama ?? '') == 'Konguchu' ? 'selected' : '' }}>
                                                    Konguchu</option>
                                            </select>
                                            <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                                viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"
                                                data-slot="icon">
                                                <path fill-rule="evenodd"
                                                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- JENIS KELAMIN -->
                                    <div class="col-span-12">
                                        <fieldset>
                                            <legend class="text-sm/6 font-semibold text-gray-900">Jenis Kelamin
                                                <span class="text-red-500">*</span>
                                            </legend>
                                            <div class="mt-2 flex gap-x-6">
                                                <div class="flex items-center gap-x-3">
                                                    <input id="laki-laki" name="jenis_kelamin" type="radio"
                                                        value="laki-laki"
                                                        {{ old('jenis_kelamin') == 'laki-laki' ? 'checked' : '' }}
                                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                                                            not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                                                            disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                    <label for="laki-laki"
                                                        class="block text-sm/6 font-medium text-gray-900">Laki-laki</label>
                                                </div>
                                                <div class="flex items-center gap-x-3">
                                                    <input id="perempuan" name="jenis_kelamin" type="radio"
                                                        value="perempuan"
                                                        {{ old('jenis_kelamin') == 'perempuan' ? 'checked' : '' }}
                                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                                                            not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                                                            disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                    <label for="perempuan"
                                                        class="block text-sm/6 font-medium text-gray-900">Perempuan</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>


                                    <!-- NO HANDPHONE -->
                                    <div class="col-span-12">
                                        <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900">No.
                                            Handphone 1
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="nohp" id="nohp"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required autofocus value="{{ old('nohp') }}">
                                        <p class="mt-3 text-sm/6 text-gray-600 text-bold"><span
                                                class="text-extrabold">Wajib</span>
                                            aktif WhatsApp.</p>
                                    </div>

                                    <!-- EMAIL ADDRESS -->
                                    <div class="col-span-12">
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email
                                            Address
                                            <span class="text-red-500">*</span></label>
                                        <input type="email" name="email" id="email"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required autofocus value="{{ old('email') }}">
                                    </div>

                                    {{-- TEMPAT LAHIR --}}
                                    <div class="col-span-12">
                                        <label for="tempat_lahir"
                                            class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir
                                            (Sesuai KTP) <span class="text-red-500">*</span></label>
                                        <input type="text" name="tempat_lahir" id="tempat_lahir"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required autofocus value="{{ old('tempat_lahir') }}">
                                    </div>

                                    <!-- TANGGAL LAHIR -->
                                    <div class="col-span-12">
                                        <label for="tanggal_lahir"
                                            class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                                            Lahir
                                            (Sesuai KTP) <span class="text-red-500">*</span></label>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required autofocus value="{{ old('tanggal_lahir') }}">
                                    </div>


                                    <!-- ALAMAT KTP -->
                                    {{-- <div class="col-span-12">
                        <label for="alamat1" class="block text-sm/6 font-medium text-gray-900">Alamat
                            KTP
                            <span class="text-red-500">*</span></label>
                        <div class="mt-2">
                            <input type="text" name="alamat1" id="alamat1"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                autofocus value="{{ old('alamat1') }}">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="kota1" class="block text-sm/6 font-medium text-gray-900">Kota/Kabupaten
                            <span class="text-red-500">*</span></label>
                        <div class="mt-2">
                            <input type="text" name="kota1" id="kota1"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                autofocus value="{{ old('kota1') }}">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="provinsi1" class="block text-sm/6 font-medium text-gray-900">Provinsi
                            <span class="text-red-500">*</span></label>
                        <div class="mt-2">
                            <input type="text" name="provinsi1" id="provinsi1"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                autofocus value="{{ old('provinsi1') }}">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="kecamatan1" class="block text-sm/6 font-medium text-gray-900">Kecamatan
                            <span class="text-red-500">*</span></label>
                        <div class="mt-2">
                            <input type="text" name="kecamatan1" id="kecamatan1"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                autofocus value="{{ old('kecamatan1') }}">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="kelurahan1" class="block text-sm/6 font-medium text-gray-900">Kelurahan
                            <span class="text-red-500">*</span></label>
                        <div class="mt-2">
                            <input type="text" name="kelurahan1" id="kelurahan1"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                autofocus value="{{ old('kelurahan1') }}">
                        </div>
                    </div> --}}

                                    {{-- is alamat sesuai ktp --}}
                                    {{-- <div class="col-span-12">
                        <div class="flex gap-3">
                            <div class="flex h-6 shrink-0 items-center">
                                <div class="group grid size-4 grid-cols-1">
                                    <!-- Input Hidden untuk menangani nilai 0 -->
                                    <input type="hidden" name="is_domisili_sama" value="0">
                                    <!-- Checkbox dengan name dan value -->
                                    <input id="is_domisili_sama" name="is_domisili_sama" type="checkbox"
                                        value="1" {{ old('is_domisili_sama') == '1' ? 'checked' : '' }}
                                        class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                        viewBox="0 0 14 14" fill="none">
                                        <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-sm/6">
                                <label for="is_domisili_sama" class="font-medium text-gray-900">Alamat
                                    sesuai
                                    dengan
                                    KTP</label>
                            </div>
                        </div>
                    </div> --}}
                                    <!-- ALAMAT DOMISILI -->
                                    {{-- <div class="col-span-12">
                        <label for="alamat0" class="block text-sm/6 font-medium text-gray-900">Alamat
                            Domisili</label>
                        <div class="mt-2">
                            <input type="text" name="alamat0" id="alamat0"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                autofocus value="{{ old('alamat0') }}">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="kota0" class="block text-sm/6 font-medium text-gray-900">Kota/Kabupaten</label>
                        <div class="mt-2">
                            <input type="text" name="kota0" id="kota0" autocomplete="address-level2"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                autofocus value="{{ old('kota0') }}">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="provinsi0" class="block text-sm/6 font-medium text-gray-900">Provinsi</label>
                        <div class="mt-2">
                            <input type="text" name="provinsi0" id="provinsi0"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                autofocus value="{{ old('provinsi0') }}">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="kecamatan0" class="block text-sm/6 font-medium text-gray-900">Kecamatan</label>
                        <div class="mt-2">
                            <input type="text" name="kecamatan0" id="kecamatan0"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                autofocus value="{{ old('kecamatan0') }}">
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="kelurahan0" class="block text-sm/6 font-medium text-gray-900">Kelurahan</label>
                        <div class="mt-2">
                            <input type="text" name="kelurahan0" id="kelurahan0"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                autofocus value="{{ old('kelurahan0') }}">
                        </div>
                    </div> --}}

                                    <!-- STATUS MARITAL -->
                                    {{-- <div class="col-span-12">
                        <fieldset>
                            <legend class="text-sm/6 font-semibold text-gray-900">Menikah <span
                                    class="text-red-500">*</span></legend>
                            <div class="mt-2 flex gap-x-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="lajang" name="status_menikah" type="radio" value="Belum Menikah"
                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                                                        not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                                                     disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                    <label for="lajang"
                                        class="block text-sm/6 font-medium text-gray-900">Lajang</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="menikah" name="status_menikah" type="radio" value="Menikah"
                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                                                    not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                                                     disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                    <label for="menikah"
                                        class="block text-sm/6 font-medium text-gray-900">Menikah</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="cerai-duda" name="status_menikah" type="radio" value="Cerai"
                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                                                    not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                                                     disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                    <label for="cerai-duda"
                                        class="block text-sm/6 font-medium text-gray-900">Cerai</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    </div>
                    </div> --}}

                                    <!-- PENDIDIKAN SECTION -->
                                    {{-- <div class="border-b border-gray-900/10 pb-6">
                        <h2 class="text-base/7 font-semibold text-gray-900">Pendidikan</h2>
                        <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                            <div class="col-span-12">
                                <label for="last_education"
                                    class="block text-sm/6 font-medium text-gray-900">Pendidikan
                                    Terakhir</label>
                                <div class="mt-2 grid grid-cols-1">
                                    <select name="last_education"
                                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        <option selected disabled>Choose</option>
                                        <option value="SD"
                                            {{ old('last_education', $applicant->last_education ?? '') == 'Islam' ? 'selected' : '' }}>
                                            SD</option>
                                        <option value="SMP"
                                            {{ old('last_education', $applicant->last_education ?? '') == 'SD' ? 'selected' : '' }}>
                                            SMP</option>
                                        <option value="SMA"
                                            {{ old('last_education', $applicant->last_education ?? '') == 'SMA' ? 'selected' : '' }}>
                                            SMA</option>
                                        <option value="SMK"
                                            {{ old('last_education', $applicant->last_education ?? '') == 'SMK' ? 'selected' : '' }}>
                                            SMK</option>
                                        <option value="D1"
                                            {{ old('last_education', $applicant->last_education ?? '') == 'D1' ? 'selected' : '' }}>
                                            D1</option>
                                        <option value="D2"
                                            {{ old('last_education', $applicant->last_education ?? '') == 'D2' ? 'selected' : '' }}>
                                            D2</option>
                                        <option value="D3"
                                            {{ old('last_education', $applicant->last_education ?? '') == 'D3' ? 'selected' : '' }}>
                                            D3</option>
                                        <option value="S1"
                                            {{ old('last_education', $applicant->last_education ?? '') == 'S1' ? 'selected' : '' }}>
                                            S1</option>
                                        <option value="S2"
                                            {{ old('last_education', $applicant->last_education ?? '') == 'S2' ? 'selected' : '' }}>
                                            S2</option>
                                    </select>
                                </div>
                            </div> --}}
                                    <!-- INSTITUSI -->
                                    {{-- <div class="col-span-12">
                                <label for="name_school" class="block text-sm/6 font-medium text-gray-900">Nama
                                    Institusi / Universitas</label>
                                <div class="mt-2">
                                    <input type="text" name="name_school" id="name_school"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                        autofocus value="{{ old('name_school') }}" />
                                </div>
                            </div> --}}

                                    <!-- PROGRAM STUDI -->
                                    {{-- <div class="col-span-12 mt-2">
                                <label for="jurusan" class="block text-sm/6 font-medium text-gray-900">Program
                                    Studi / Jurusan</label>
                                <div class="mt-2">
                                    <input type="text" name="jurusan" id="jurusan"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                        autofocus value="{{ old('jurusan') }}" />
                                </div>
                            </div> --}}

                                    <!-- TAHUN LULUS -->
                                    {{-- <div class="col-span-12 mt-2">
                                <label for="tahun_kelulusan" class="block text-sm/6 font-medium text-gray-900">Tahun
                                    Kelulusan</label>
                                <div class="mt-2">
                                    <input type="text" name="tahun_kelulusan" id="tahun_kelulusan"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                        autofocus value="{{ old('tahun_kelulusan') }}" />
                                </div>
                            </div> --}}

                                    <!-- NILAI IPK -->
                                    {{-- <div class="col-span-12 mt-2">
                                <label for="nilai_ipk" class="block text-sm/6 font-medium text-gray-900">Nilai
                                    /
                                    IPK
                                    Akhir</label>
                                <div class="mt-2">
                                    <input type="text" name="nilai_ipk" id="nilai_ipk"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                        autofocus value="{{ old('nilai_ipk') }}" />
                                </div>
                            </div>
                        </div>
                    </div> --}}

                                    <!-- PENGALAMAN KERJA SECTION -->
                                    {{-- <div x-data="experienceForm()" class="border-b border-gray-900/10 pb-6">
                                        <h2 class="text-base/7 font-semibold text-gray-900">Pengalaman Kerja</h2> --}}

                                    {{-- <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                            <input type="hidden" name="experiences" :value="JSON.stringify(experiences)"> --}}

                                    <!-- Pilihan Ada/Tidak Ada Pengalaman -->
                                    {{-- <div class="col-span-12">
                                <fieldset>
                                    <legend class="text-sm/6 font-semibold text-gray-900">Pengalaman Kerja
                                        <span class="text-red-500">*</span>
                                    </legend>
                                    <div class="mt-2 flex gap-x-6">
                                        <div class="flex items-center gap-x-3">
                                            <input id="ada-pengalaman" name="pengalaman-kerja" type="radio"
                                                value="1" x-model="hasExperience"
                                                class="relative size-4 appearance-none rounded-full border-gray-300 bg-white checked:bg-indigo-600 focus:outline-none">
                                            <label for="ada-pengalaman"
                                                class="block text-sm/6 font-medium text-gray-900">Ya,
                                                Ada</label>
                                        </div>
                                        <div class="flex items-center gap-x-3">
                                            <input id="tidak-ada-pengalaman" name="pengalaman-kerja" type="radio"
                                                value="0" x-model="hasExperience"
                                                class="relative size-4 appearance-none rounded-full border-gray-300 bg-white checked:bg-indigo-600 focus:outline-none">
                                            <label for="tidak-ada-pengalaman"
                                                class="block text-sm/6 font-medium text-gray-900">Tidak
                                                Ada</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div> --}}

                                    <!-- Formulir Pengalaman -->
                                    {{-- <div class="col-span-12 mt-6" x-show="hasExperience == 1" x-transition>
                                <template x-for="(experience, index) in experiences" :key="index">
                                    <div class="p-4 mb-4 rounded-md  relative">
                                        <div class="grid gap-4 grid-cols-12">
                                            <div class="col-span-12">
                                                <label class="text-sm font-medium text-gray-700">Nama
                                                    Perusahaan</label>
                                                <input type="text" x-model="experience.nama_perusahaan"
                                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                            </div>
                                            <div class="col-span-12">
                                                <label class="text-sm font-medium text-gray-700">Posisi</label>
                                                <input type="text" x-model="experience.posisi"
                                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                            </div>

                                            <div class="col-span-12">
                                                <label class="text-sm font-medium text-gray-700">Jenis
                                                    Pekerjaan</label>
                                                <select x-model="experience.jenis_pekerjaan"
                                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                                    <option disabled value="">Pilih Jenis Pekerjaan
                                                    </option>
                                                    <option value="Fulltime">Fulltime</option>
                                                    <option value="Internship">Internship</option>
                                                    <option value="Shift">Shift</option>
                                                </select>
                                            </div>

                                            <div class="col-span-12">
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    <!-- Tanggal Mulai -->
                                                    <div>
                                                        <label class="text-sm font-medium text-gray-700">Tanggal
                                                            Mulai</label>
                                                        <input type="date" x-model="experience.tanggal_mulai"
                                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                                    </div> --}}

                                    <!-- Tanggal Selesai -->
                                    {{-- <div>
                                                        <label class="text-sm font-medium text-gray-700">Tanggal
                                                            Selesai</label>
                                                        <input type="date" x-model="experience.tanggal_selesai"
                                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                                    </div>
                                                </div>
                                            </div> --}}

                                    <!-- Gaji Terakhir -->
                                    {{-- <div class="col-span-12">
                                                <label class="text-sm font-medium text-gray-700">Gaji
                                                    Terakhir</label>
                                                <input type="text" x-model="experience.gaji_terakhir"
                                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                                                    placeholder="Contoh: 5000000">
                                            </div>

                                            <div class="col-span-12">
                                                <label class="text-sm font-medium text-gray-700">Deskripsi
                                                    Pekerjaan</label>
                                                <textarea x-model="experience.deskripsi_pekerjaan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                                                    rows="3" placeholder="Ceritakan tugas, tanggung jawab, dll."></textarea>
                                            </div> --}}

                                    <!-- Tambah input lain kalau mau -->
                                    {{-- </div> --}}

                                    <!-- Tombol Hapus Form -->
                                    {{-- <button type="button" @click="removeExperience(index)"
                                            class="absolute top-2 right-2 text-red-500 hover:text-red-700">
                                            <span
                                                class="flex items-center justify-center w-6 h-6 rounded-full bg-red-500 text-white text-sm hover:bg-red-600">X</span>
                                        </button>
                                    </div>
                                </template> --}}

                                    <!-- Tombol Tambah Form -->
                                    {{-- <button type="button" @click="addExperience()"
                                    class="mt-4 inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                    Tambah Pengalaman
                                </button>
                            </div>
                        </div>
                    </div> --}}

                                    <!-- Alpine.js script -->
                                    {{-- <script>
                        function experienceForm() {
                            return {
                                hasExperience: null, // 0 = tidak ada, 1 = ada
                                experiences: [],
                                addExperience() {
                                    this.experiences.push({
                                        nama_perusahaan: '',
                                        posisi: '',
                                        jenis_pekerjaan: '',
                                        tanggal_mulai: '',
                                        tanggal_selesai: '',
                                        gaji_terakhir: '',
                                    });
                                },
                                removeExperience(index) {
                                    this.experiences.splice(index, 1);
                                }
                            }
                        }
                    </script> --}}


                                    <!-- INFORMASI TAMBAHAN SECTION -->
                                    {{-- <div class="border-b border-gray-900/10 pb-6">
                        <h2 class="text-base/7 font-semibold text-gray-900">Informasi Tambahan</h2>

                        <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                            <!-- KEAHLIAN KHUSUS -->
                            <div class="col-span-12">
                                <label for="keahlian" class="block text-sm/6 font-medium text-gray-900">Keahlian
                                    Khusus</label>
                                <div class="mt-2">
                                    <textarea name="keahlian" id="keahlian" rows="3"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                                    <p class="mt-3 text-sm/6 text-gray-600">Bersifat teknis.</p>
                                </div>
                            </div> --}}

                                    <!-- RIWAYAT KESEHATAN -->
                                    {{-- <div class="col-span-12" x-data="{ adaRiwayat: '' }">
                                <fieldset>
                                    <legend class="text-sm/6 font-semibold text-gray-900">
                                        Riwayat Kesehatan <span class="text-red-500">*</span>
                                    </legend>
                                    <div class="mt-2 flex gap-x-6">
                                        <div class="flex items-center gap-x-3">
                                            <input id="riwayat-ya" name="is_ada_riwayat" type="radio"
                                                value="ya" x-model="adaRiwayat"
                                                class="size-4 rounded-full border-gray-300 bg-white checked:bg-indigo-600">
                                            <label for="riwayat-ya"
                                                class="text-sm font-medium text-gray-900">Ya</label>
                                        </div>
                                        <div class="flex items-center gap-x-3">
                                            <input id="riwayat-tidak" name="is_ada_riwayat" type="radio"
                                                value="tidak" x-model="adaRiwayat"
                                                class="size-4 rounded-full border-gray-300 bg-white checked:bg-indigo-600">
                                            <label for="riwayat-tidak"
                                                class="text-sm font-medium text-gray-900">Tidak</label>
                                        </div>
                                    </div> --}}

                                    <!-- Tampilkan textarea jika pilih "ya" -->
                                    {{-- <div class="mt-4" x-show="adaRiwayat === 'ya'" x-transition>
                                        <label for="nama_penyakit"
                                            class="block text-sm font-medium text-gray-900">Riwayat
                                            Penyakit</label>
                                        <textarea name="nama_penyakit" id="nama_penyakit" rows="3"
                                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm" placeholder="Contoh: Asma, Diabetes, dll."></textarea>
                                    </div>
                                </fieldset>
                            </div> --}}


                                    <!-- SEDIA KERJA -->
                                    {{-- <div class="col-span-12">
                                <fieldset>
                                    <legend class="text-sm/6 font-semibold text-gray-900">Ketersediaan
                                        Bekerja
                                        di
                                        Seluruh
                                        Plant PT Ewindo<span class="text-red-500">*</span></legend>
                                    <div class="mt-2 flex gap-x-6">
                                        <div class="flex items-center gap-x-3">
                                            <input id="bersedia-kerja" name="siap_ditempatkan" type="radio"
                                                value="Ya"
                                                class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                                                    not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                                                     disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                            <label for="bersedia-kerja"
                                                class="block text-sm/6 font-medium text-gray-900">Ya</label>
                                        </div>
                                        <div class="flex items-center gap-x-3">
                                            <input id="tidak-bersedia-kerja" name="siap_ditempatkan" value="Tidak"
                                                type="radio"
                                                class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                                                    not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                                                     disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                            <label for="tidak-bersedia-kerja"
                                                class="block text-sm/6 font-medium text-gray-900">Tidak</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div> --}}

                                    <!-- INFO LOWONGAN -->
                                    {{-- <div class="col-span-12">
                                <label for="referensi_kerja"
                                    class="block text-sm/6 mb-2 font-medium text-gray-900">Info
                                    Lowongan</label> --}}

                                    <!-- Checkbox Referensi Kerja -->
                                    {{-- <div class="flex gap-3">
                                    <div class="flex h-6 shrink-0 items-center">
                                        <div class="group grid size-4 grid-cols-1">
                                            <input id="website_ewindo" name="referensi_kerja[]" type="checkbox"
                                                value="Website PT Ewindo"
                                                class="col-start-1 row-start-1 appearance-none rounded-sm border-gray-300 bg-white">
                                        </div>
                                    </div>
                                    <div class="text-sm/6">
                                        <label for="website_ewindo" class="font-medium text-gray-900">Website
                                            PT Ewindo</label>
                                    </div>
                                </div>

                                <div class="flex gap-3">
                                    <div class="flex h-6 shrink-0 items-center">
                                        <div class="group grid size-4 grid-cols-1">
                                            <input id="instagram" name="referensi_kerja[]" type="checkbox"
                                                value="Instagram"
                                                class="col-start-1 row-start-1 appearance-none rounded-sm border-gray-300 bg-white">
                                        </div>
                                    </div>
                                    <div class="text-sm/6">
                                        <label for="instagram" class="font-medium text-gray-900">Instagram</label>
                                    </div>
                                </div>

                                <div class="flex gap-3">
                                    <div class="flex h-6 shrink-0 items-center">
                                        <div class="group grid size-4 grid-cols-1">
                                            <input id="kerabat" name="referensi_kerja[]" type="checkbox"
                                                value="Rekan / Kerabat"
                                                class="col-start-1 row-start-1 appearance-none rounded-sm border-gray-300 bg-white">
                                        </div>
                                    </div>
                                    <div class="text-sm/6">
                                        <label for="kerabat" class="font-medium text-gray-900">Rekan /
                                            Kerabat</label>
                                    </div>
                                </div>

                                <div class="flex gap-3">
                                    <div class="flex h-6 shrink-0 items-center">
                                        <div class="group grid size-4 grid-cols-1">
                                            <input id="lainnya" name="referensi_kerja[]" type="checkbox"
                                                value="Lainnya"
                                                class="col-start-1 row-start-1 appearance-none rounded-sm border-gray-300 bg-white">
                                        </div>
                                    </div>
                                    <div class="text-sm/6">
                                        <label for="lainnya" class="font-medium text-gray-900">Lainnya</label>
                                    </div>
                                </div>
                            </div> --}}

                                    <!-- ATTACHMENTS SECTION -->
                                    {{-- <div class="border-b border-gray-900/10 pb-6">
                                <h2 class="text-base/7 font-semibold text-gray-900">Attachments</h2>

                                <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                                    <div class="col-span-12">
                                        <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Pas
                                            Photo</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="cover-photo"
                                            class="block text-sm/6 font-medium text-gray-900">Curriculum
                                            Vitae (CV)</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="cover-photo"
                                            class="block text-sm/6 font-medium text-gray-900">Kartu
                                            Tanda
                                            Penduduk (KTP)</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="cover-photo"
                                            class="block text-sm/6 font-medium text-gray-900">Kartu
                                            Keluarga
                                            (KK)</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="cover-photo"
                                            class="block text-sm/6 font-medium text-gray-900">Ijazah
                                            Terakhir</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="cover-photo"
                                            class="block text-sm/6 font-medium text-gray-900">Sertifikasi
                                            Pendukung</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                                    <!-- BUTTON -->
                                    <div class="mt-6 flex items-center justify-end gap-x-6">
                                        <button type="submit"
                                            class="rounded-md bg-yellow-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-yellow-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Apply</button>
                                    </div>
                    </form>
                </section>
            </main>

        </x-users.section>

    </x-users.panel>

</x-users.layout>
