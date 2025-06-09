<x-users.layout>

    <x-users.panel>

        <x-users.section>
            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
            <div class="container">


                @if (session('success'))
                    <div style="color: green;">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div style="color: red;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <main class="mb-auto pt-20">
                    <section class="container mx-auto sm:px-44 my-32">
                        <h2
                            class="text-pretty text-center text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                            <span class="text-yellow-500">{{ $job->job_name }}</span> <br> Registration Form
                        </h2>
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="space-y-12 mt-8">
                                <!-- DATA DIRI SECTION -->
                                <div class="border-b border-gray-900/10 pb-6">
                                    <h2 class="text-base/7 font-semibold text-gray-900">Data Diri</h2>

                                    <div class="grid gap-4 mb-4 grid-cols-12 mt-10">

                                        <div class="col-span-12">
                                            {{-- <label for="first-name"
                                                class="block mb-2 text-sm font-medium text-gray-900">ID
                                                JOB
                                                <span class="text-red-500">*</span></label> --}}
                                            <input type="hidden" name="job_id" id="job_id"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                value="{{ $job->id }}">
                                        </div>
                                        <!-- NO KTP -->
                                        <div class="col-span-12">
                                            <label for="nik"
                                                class="block mb-2 text-sm font-medium text-gray-900">No. KTP <span
                                                    class="text-red-500">*</span></label>
                                            <input type="text" name="nik" id="nik" maxlength="16"
                                                pattern="[0-9]*"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                required>
                                        </div>
                                        <!-- NAMA LENGKAP -->
                                        <div class="col-span-12">
                                            <label for="nama_lengkap"
                                                class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap <span
                                                    class="text-red-500">*</span></label>
                                            <input type="text" name="nama_lengkap" id="nama_lengkap"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                required>
                                        </div>
                                        <!-- JENIS KELAMIN -->
                                        <div class="col-span-12">
                                            <fieldset>
                                                <legend class="text-sm/6 font-semibold text-gray-900">Jenis Kelamin
                                                    <span class="text-red-500">*</span>
                                                </legend>
                                                <div class="mt-2 flex gap-x-6">
                                                    <div class="flex items-center gap-x-3">
                                                        <input id="Laki-laki" name="jenis_kelamin" type="radio"
                                                            value="Laki-laki"
                                                            class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                        <label for="Laki-laki"
                                                            class="block text-sm/6 font-medium text-gray-900">Laki-laki</label>
                                                    </div>
                                                    <div class="flex items-center gap-x-3">
                                                        <input id="Perempuan" name="jenis_kelamin" type="radio"
                                                            value="Perempuan"
                                                            class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                        <label for="Perempuan"
                                                            class="block text-sm/6 font-medium text-gray-900">Perempuan</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <!-- NO HANDPHONE -->
                                        <div class="col-span-12">
                                            <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900">
                                                No. Handphone 1 <span class="text-red-500">*</span>
                                            </label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-100 text-gray-600 text-sm">
                                                    +62
                                                </span>
                                                <input type="text" name="nohp" id="nohp" maxlength="12"
                                                    pattern="[0-9]*"
                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                    required>
                                            </div>
                                            <span class="text-red-500 text-xs">*Wajib Terhubung Ke Dalam Whatsapp</span>
                                        </div>
                                        <!-- EMAIL ADDRESS -->
                                        <div class="col-span-12">
                                            <label for="email"
                                                class="block mb-2 text-sm font-medium text-gray-900">Email Address <span
                                                    class="text-red-500">*</span></label>
                                            <input type="email" name="email" id="email"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                required>
                                        </div>
                                        {{-- TEMPAT LAHIR --}}
                                        <div class="col-span-12">
                                            <label for="tempat_lahir"
                                                class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir
                                                (Sesuai KTP) <span class="text-red-500">*</span></label>
                                            <input type="text" name="tempat_lahir" id="tempat_lahir"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                required>
                                        </div>
                                        <!-- TANGGAL LAHIR -->
                                        <div class="col-span-12">
                                            <label for="tanggal_lahir"
                                                class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir
                                                (Sesuai KTP) <span class="text-red-500">*</span></label>
                                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                required>
                                        </div>
                                        {{-- UMUR --}}
                                        <input type="hidden" id="umur" name="umur"
                                            class="block w-full rounded-md bg-gray-100 px-3 py-1.5 text-base text-gray-900 outline-1 outline-gray-300 sm:text-sm/6"
                                            readonly>

                                        <!-- ALAMAT KTP -->
                                        <div class="col-span-12">
                                            <label for="ktp_alamat"
                                                class="block text-sm/6 font-medium text-gray-900">Alamat KTP<span
                                                    class="text-red-500">*</span></label>
                                            <div class="mt-2">
                                                <input type="text" id="ktp_alamat" name="alamat_ktp[alamat1]"
                                                    placeholder="Alamat Lengkap" autocomplete="ktp_alamat"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <div class="col-span-3">
                                            <label for="ktp_kota"
                                                class="block text-sm/6 font-medium text-gray-900">Kota/Kabupaten <span
                                                    class="text-red-500">*</span></label>
                                            <div class="mt-2">
                                                <input type="text" id="ktp_kota" name="alamat_ktp[kota1]"
                                                    placeholder="Kota" autocomplete="ktp_kota"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <div class="col-span-3">
                                            <label for="ktp_provinsi"
                                                class="block text-sm/6 font-medium text-gray-900">Provinsi <span
                                                    class="text-red-500">*</span></label>
                                            <div class="mt-2">
                                                <input type="text" id="ktp_provinsi" name="alamat_ktp[provinsi1]"
                                                    placeholder="Provinsi" required autocomplete="ktp_provinsi"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <div class="col-span-3">
                                            <label for="ktp_kecamatan"
                                                class="block text-sm/6 font-medium text-gray-900">Kecamatan <span
                                                    class="text-red-500">*</span></label>
                                            <div class="mt-2">
                                                <input type="text" id="ktp_kecamatan"
                                                    name="alamat_ktp[kecamatan1]" placeholder="Kecamatan" required
                                                    autocomplete="ktp_kecamatan"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <div class="col-span-3">
                                            <label for="ktp_kelurahan"
                                                class="block text-sm/6 font-medium text-gray-900">Kelurahan <span
                                                    class="text-red-500">*</span></label>
                                            <div class="mt-2">
                                                <input type="text" id="ktp_kelurahan"
                                                    name="alamat_ktp[kelurahan1]" placeholder="Kelurahan" required
                                                    autocomplete="ktp_kelurahan"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <div class="col-span-12">
                                            <div class="flex gap-3">
                                                <div class="flex h-6 shrink-0 items-center">
                                                    <div class="group grid size-4 grid-cols-1">
                                                        <input id="copyAlamat" name="copyAlamat" type="checkbox"
                                                            class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                                        <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                                            viewBox="0 0 14 14" fill="none">
                                                            <path class="opacity-0 group-has-checked:opacity-100"
                                                                d="M3 8L6 11L11 3.5" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path class="opacity-0 group-has-indeterminate:opacity-100"
                                                                d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="text-sm/6">
                                                    <label for="copyAlamat" class="font-medium text-gray-900">Alamat
                                                        sesuai dengan KTP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ALAMAT DOMISILI -->
                                        <div class="col-span-12">
                                            <label for="domisili_alamat"
                                                class="block text-sm/6 font-medium text-gray-900">Alamat
                                                Domisili</label>
                                            <div class="mt-2">
                                                <input type="text" id="domisili_alamat"
                                                    name="alamat_domisili[alamat0]" placeholder="Alamat Domisili"
                                                    autocomplete="domisili_alamat"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <div class="col-span-3">
                                            <label for="domisili_kota"
                                                class="block text-sm/6 font-medium text-gray-900">Kota/Kabupaten</label>
                                            <div class="mt-2">
                                                <input type="text" id="domisili_kota"
                                                    name="alamat_domisili[kota0]" placeholder="Kota Domisili"
                                                    autocomplete="domisili_kota"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <div class="col-span-3">
                                            <label for="domisili_provinsi"
                                                class="block text-sm/6 font-medium text-gray-900">Provinsi</label>
                                            <div class="mt-2">
                                                <input type="text" id="domisili_provinsi"
                                                    name="alamat_domisili[provinsi0]" placeholder="Provinsi" required
                                                    autocomplete="domisili_provinsi"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <div class="col-span-3">
                                            <label for="domisili_kecamatan"
                                                class="block text-sm/6 font-medium text-gray-900">Kecamatan</label>
                                            <div class="mt-2">
                                                <input type="text" id="domisili_kecamatan"
                                                    name="alamat_domisili[kecamatan0]" placeholder="Kecamatan"
                                                    required autocomplete="domisili_kecamatan"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <div class="col-span-3">
                                            <label for="domisili_kelurahan"
                                                class="block text-sm/6 font-medium text-gray-900">Kelurahan</label>
                                            <div class="mt-2">
                                                <input type="text" id="domisili_kelurahan"
                                                    name="alamat_domisili[kelurahan0]" placeholder="Kelurahan"
                                                    required autocomplete="domisili_kelurahan"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <!-- AGAMA -->
                                        <div class="col-span-12">
                                            <label for="agama"
                                                class="block text-sm/6 font-medium text-gray-900">Agama</label>
                                            <div class="mt-2 grid grid-cols-1">
                                                <select name="agama" id="agama" required
                                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    <option value="">Pilih Agama</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Protestan">Protestan</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konguchu">Konguchu</option>
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
                                        <!-- STATUS MARITAL -->
                                        <div class="col-span-12">
                                            <fieldset>
                                                <legend class="text-sm/6 font-semibold text-gray-900">Status Menikah
                                                    <span class="text-red-500">*</span>
                                                </legend>
                                                <div class="mt-2 flex gap-x-6">
                                                    <div class="flex items-center gap-x-3">
                                                        <input id="Lajang" name="status_menikah" type="radio"
                                                            value="Lajang"
                                                            class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                        <label for="Lajang"
                                                            class="block text-sm/6 font-medium text-gray-900">Lajang</label>
                                                    </div>
                                                    <div class="flex items-center gap-x-3">
                                                        <input id="menikah" name="status_menikah" type="radio"
                                                            value="Menikah"
                                                            class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                        <label for="menikah"
                                                            class="block text-sm/6 font-medium text-gray-900">Menikah</label>
                                                    </div>
                                                    <div class="flex items-center gap-x-3">
                                                        <input id="Cerai" name="status_menikah" type="radio"
                                                            value="Cerai"
                                                            class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                        <label for="Cerai"
                                                            class="block text-sm/6 font-medium text-gray-900">Cerai</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <!-- PENDIDIKAN SECTION -->
                                <div class="border-b border-gray-900/10 pb-6">
                                    <h2 class="text-base/7 font-semibold text-gray-900">Pendidikan</h2>

                                    <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                                        <!-- PENDIDIKAN TERAKHIR -->
                                        <div class="col-span-12">
                                            <label for="last_education"
                                                class="block text-sm/6 font-medium text-gray-900">Pendidikan
                                                Terakhir</label>
                                            <div class="mt-2 grid grid-cols-1">
                                                <select name="education[last_education]" id="last_education" required
                                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    <option value="">-- Select Pendidikan --</option>
                                                    <option value="SMA/SMK">SMA/SMK</option>
                                                    <option value="D3">D3</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- INSTITUSI -->
                                        <div class="col-span-12">
                                            <label for="name_school"
                                                class="block text-sm/6 font-medium text-gray-900">Nama Institusi /
                                                Universitas</label>
                                            <div class="mt-2">
                                                <input type="text" name="education[name_school]" id="name_school"
                                                    required autocomplete="name_school"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                            </div>
                                        </div>
                                        <!-- PROGRAM STUDI -->
                                        <div class="col-span-12 mt-2">
                                            <label for="jurusan"
                                                class="block text-sm/6 font-medium text-gray-900">Program Studi /
                                                Jurusan</label>
                                            <div class="mt-2">
                                                <input type="text" name="education[jurusan]" id="jurusan"
                                                    autocomplete="jurusan"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                            </div>
                                        </div>
                                        <!-- TAHUN KELULUSAN -->
                                        <div class="col-span-12 mt-2">
                                            <label for="tahun_kelulusan"
                                                class="block text-sm/6 font-medium text-gray-900">Tahun
                                                Kelulusan</label>
                                            <div class="mt-2">
                                                <input type="number" name="education[tahun_kelulusan]"
                                                    id="tahun_kelulusan" autocomplete="tahun_kelulusan"
                                                    min="1900" max="{{ date('Y') }}" required
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                            </div>
                                        </div>
                                        <!-- IPK -->
                                        <div class="col-span-12 mt-2">
                                            <label for="nilai_ipk"
                                                class="block text-sm/6 font-medium text-gray-900">Nilai / IPK
                                                Akhir</label>
                                            <div class="mt-2">
                                                <input type="text" name="education[nilai_ipk]" id="nilai_ipk"
                                                    autocomplete="nilai_ipk" required
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PENGALAMAN KERJA SECTION -->
                                <div class="mt-4">
                                    <label class="block text-sm font-medium text-gray-700">Apakah punya pengalaman
                                        kerja?</label>
                                    <div class="mt-2 flex items-center gap-4">
                                        <label>
                                            <input type="radio" name="is_ada_pengalaman" id="checkPengalaman"
                                                value="ya"> Ya
                                        </label>
                                        <label>
                                            <input type="radio" name="is_ada_pengalaman" id="tidakPengalaman"
                                                value="tidak"> Tidak
                                        </label>
                                    </div>
                                </div>

                                <!-- WRAPPER FORM PENGALAMAN -->
                                <div id="experience-wrapper" style="display: none;" class="col-span-12 mt-4">
                                    <!-- Button Tambah -->
                                    <div class="mb-4">
                                        <button type="button" id="add-experience"
                                            class="inline-flex items-center rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700 focus:outline-none">
                                            Tambah Pengalaman
                                        </button>
                                    </div>
                                    <!-- NAMA PERUSAHAAN -->
                                    <div id="experience-wrapper" style="display: none;" class="col-span-12 mt-2">
                                        <div class="experience-group">
                                            <label for="nama_perusahaan"
                                                class="block text-sm/6 font-medium text-gray-900">Nama Instansi
                                                /
                                                Perusahaan</label>
                                            <div class="mt-2">
                                                <input type="text" name="experience[0][nama_perusahaan]"
                                                    id="nama_perusahaan" autocomplete="nama_perusahaan"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <!-- POSISI PERUSAHAAN -->
                                        <div class="col-span-12 mt-2">
                                            <label for="jabatan"
                                                class="block text-sm/6 font-medium text-gray-900">Posisi /
                                                Jabatan</label>
                                            <div class="mt-2">
                                                <input type="text" name="experience[0][jabatan]" id="jabatan"
                                                    autocomplete="jabatan"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                        <!-- JENIS PEKERJAAN -->
                                        <div class="col-span-12">
                                            <label for="jenis_pekerjaan"
                                                class="block text-sm/6 font-medium text-gray-900">Jenis
                                                Pekerjaan</label>
                                            <div class="mt-2 grid grid-cols-1">
                                                <select id="jenis_pekerjaan" name="experience[0][jenis_pekerjaan]"
                                                    autocomplete="jenis_pekerjaan"
                                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    <option selected disabled>Pilih</option>
                                                    <option value="Part Time">Part Time</option>
                                                    <option value="Internship">Magang / Intership</option>
                                                    <option value="Full Time">Full Time</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-span-3">
                                            <label for="tanggal_mulai"
                                                class="block text-sm/6 font-medium text-gray-900">Awal
                                                Bekerja</label>
                                            <div class="mt-2 grid grid-cols-1">
                                                <select id="tanggal_mulai" name="experience[0][tanggal_mulai]"
                                                    autocomplete="tanggal_mulai"
                                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    <option selected disabled>Pilih</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-span-3 -ml-2">
                                            <label for="tanggal_selesai"
                                                class="block text-sm/6 font-medium text-gray-900">Akhir
                                                Bekerja</label>
                                            <div class="mt-2 grid grid-cols-1">
                                                <select id="tanggal_selesai" name="experience[0][tanggal_selesai]"
                                                    autocomplete="tanggal_selesai"
                                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    <option selected disabled>Pilih</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                </select>
                                            </div>
                                        </div>


                                        <!-- GAJI -->
                                        <div class="col-span-12 mt-2">
                                            <label for="gaji_terakhir"
                                                class="block text-sm/6 font-medium text-gray-900">Gaji
                                                Terakhir</label>
                                            <div class="mt-2">
                                                <input type="text" name="experience[0][gaji_terakhir]"
                                                    id="gaji_terakhir"
                                                    class="format-rupiah block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex gap-2">

                                    </div>
                                </div>

                                <!-- INFORMASI TAMBAHAN SECTION -->
                                <div class="border-b border-gray-900/10 pb-6">
                                    <label for="keahlian" class="block text-sm/6 font-medium text-gray-900">Sebutkan
                                        Keahlian Anda</label>
                                    @if (old('keahlian'))
                                        @foreach (old('keahlian') as $index => $keahlian)
                                            <div id="keahlian-container" class="grid gap-4 mb-4 grid-cols-12 mt-10">
                                                <!-- KEAHLIAN KHUSUS -->
                                                <div class="col-span-12">

                                                    <div class="mt-2">
                                                        <textarea name="keahlian[]" id="keahlian" value="{{ $keahlian }}" rows="3"
                                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                            placeholder="Contoh: Buta Warna, Bronkitis, Hepatitis, HIV/AIDS">{{ old('nama_penyakit') }}</textarea>
                                                        <p class="mt-3 text-sm/6 text-gray-600">Bersifat
                                                            teknis.</p>
                                                    </div>
                                                </div>
                                        @endforeach
                                    @else
                                        <div class="col-span-12">
                                            <label for="keahlian"
                                                class="block text-sm/6 font-medium text-gray-900"></label>
                                            <div class="mt-2">
                                                <textarea name="keahlian[]" rows="3"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                    placeholder="Pisahkan Dengan Koma Contoh: Laravel, Rancang Bangun Jaringan, Desain, Rakit Komputer">{{ old('nama_penyakit') }}</textarea>
                                                <p class="mt-3 text-sm/6 text-gray-600">Bersifat
                                                    teknis.</p>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <!-- RIWAYAT KESEHATAN -->
                                <div class="col-span-12">
                                    <fieldset>
                                        <legend class="text-sm/6 font-semibold text-gray-900">Riwayat
                                            Kesehatan<span class="text-red-500">*</span></legend>
                                        <div class="mt-2 flex gap-x-6">
                                            <div class="flex items-center gap-x-3">
                                                <input type="hidden" name="ada_riwayat_penyakit" value="0">
                                                <input id="checkPenyakit" name="ada_riwayat_penyakit" type="radio"
                                                    value="1" {{ old('ada_riwayat_penyakit') ? 'checked' : '' }}
                                                    class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                <label for="checkPenyakit"
                                                    class="block text-sm/6 font-medium text-gray-900">Ada</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input id="tidakPenyakit" name="ada_riwayat_penyakit" value="0"
                                                    type="radio"
                                                    class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                <label for="tidakPenyakit"
                                                    class="block text-sm/6 font-medium text-gray-900">Tidak
                                                    Ada</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- RIWAYAT KESEHATAN TEXTBOX -->
                                <div id="penyakitField" style="display: none;" class="col-span-12">
                                    <label for="nama_penyakit"
                                        class="block text-sm/6 font-medium text-gray-900">Riwayat
                                        Kesehatan</label>
                                    <div class="mt-2">
                                        <textarea name="nama_penyakit" id="nama_penyakit" rows="3"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            placeholder="Contoh: Buta Warna, Bronkitis, Hepatitis, HIV/AIDS">{{ old('nama_penyakit') }}</textarea>
                                        <p class="mt-3 text-sm/6 text-gray-600">Penyakit Bawaan.</p>
                                    </div>
                                </div>
                                <!-- SEDIA KERJA -->
                                <div class="col-span-12">
                                    <fieldset>
                                        <legend class="text-sm/6 font-semibold text-gray-900">
                                            Ketersediaan
                                            Bekerja di Seluruh Plant PT Ewindo<span class="text-red-500">*</span>
                                        </legend>
                                        <div class="mt-2 flex gap-x-6">
                                            <div class="flex items-center gap-x-3">
                                                <input id="siap_ditempatkan" name="siap_ditempatkan" type="radio"
                                                    value="Ya" {{-- {{ old('siap_ditempatkan') == 'Ya' ? 'checked' : '' }} --}}
                                                    class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                <label for="siap_ditempatkan"
                                                    class="block text-sm/6 font-medium text-gray-900">Ya</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input id="tidak-bersedia-kerja" name="siap_ditempatkan"
                                                    type="radio" value="Tidak" {{-- {{ old('siap_ditempatkan', 'Tidak') == 'Tidak' ? 'checked' : '' }} --}}
                                                    class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                <label for="tidak-bersedia-kerja"
                                                    class="block text-sm/6 font-medium text-gray-900">Tidak</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- INFO LOWONGAN -->
                                <div class="col-span-12">
                                    <label label label label for="about"
                                        class="block text-sm/6 mb-2 font-medium text-gray-900">Info
                                        Lowongan</label>
                                    <div class="flex gap-3">
                                        <div class="flex h-6 shrink-0 items-center">
                                            <div class="group grid size-4 grid-cols-1">
                                                <input name="referensi_kerja[]" id="website" type="checkbox"
                                                    value="Website Ewindo"
                                                    {{ is_array(old('referensi_kerja')) && in_array('Website Ewindo', old('referensi_kerja')) ? 'checked' : '' }}
                                                    class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                                <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                                    viewBox="0 0 14 14" fill="none">
                                                    <path class="opacity-0 group-has-checked:opacity-100"
                                                        d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path class="opacity-0 group-has-indeterminate:opacity-100"
                                                        d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="text-sm/6">
                                            <label for="website" class="font-medium text-gray-900">Website
                                                PT Ewindo</label>
                                        </div>
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="flex h-6 shrink-0 items-center">
                                            <div class="group grid size-4 grid-cols-1">
                                                <input name="referensi_kerja[]" id="instagram" type="checkbox"
                                                    value="Instagram"
                                                    {{ is_array(old('referensi_kerja')) && in_array('Instagram', old('referensi_kerja')) ? 'checked' : '' }}
                                                    class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                                <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                                    viewBox="0 0 14 14" fill="none">
                                                    <path class="opacity-0 group-has-checked:opacity-100"
                                                        d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path class="opacity-0 group-has-indeterminate:opacity-100"
                                                        d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="text-sm/6">
                                            <label for="instagram" class="font-medium text-gray-900">Instagram</label>
                                        </div>
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="flex h-6 shrink-0 items-center">
                                            <div class="group grid size-4 grid-cols-1">
                                                <input id="checkbox-rekan" name="referensi_kerja[]" type="checkbox"
                                                    value="Rekan/Sahabat"
                                                    {{ is_array(old('referensi_kerja')) && in_array('Rekan/Sahabat', old('referensi_kerja')) ? 'checked' : '' }}
                                                    class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                                <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                                    viewBox="0 0 14 14" fill="none">
                                                    <path class="opacity-0 group-has-checked:opacity-100"
                                                        d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path class="opacity-0 group-has-indeterminate:opacity-100"
                                                        d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="text-sm/6">
                                            <label for="checkbox-rekan" class="font-medium text-gray-900">Rekan /
                                                Kerabat</label>
                                        </div>
                                    </div>
                                    <label for="kenalan">Apakah Anda memiliki kenalan di perusahaan ini?
                                        Jika ya,
                                        sebutkan:</label>
                                    <div id="field-kenalan" class="mt-2" style="display: none;">
                                        <input type="text" name="kenalan" id="kenalan"
                                            value="{{ old('kenalan') }}"
                                            class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    </div>
                                </div>


                                <!-- ATTACHMENTS SECTION -->
                                <div class="border-b border-gray-900/10 pb-6">
                                    <h2 class="text-base/7 font-semibold text-gray-900">Attachments</h2>

                                    <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                                        <div class="col-span-12">
                                            <label for="pas_foto_upload"
                                                class="block text-sm/6 font-medium text-gray-900">Pas
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
                                                        <label for="pas_foto_upload"
                                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input name="pas_foto_upload" id="pas_foto_upload"
                                                                type="file" class="sr-only"
                                                                accept=".pdf,.png,.jpeg,.jpg">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up
                                                        to 2
                                                        MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12">
                                            <label for="cv_upload"
                                                class="block text-sm/6 font-medium text-gray-900">Curriculum
                                                Vitae
                                                (CV)</label>
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
                                                        <label for="cv_upload"
                                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input name="cv_upload" id="cv_upload" type="file"
                                                                class="sr-only" accept=".pdf,.doc,.docx">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs/5 text-gray-600">Doc, Docx, PDF Up to
                                                        2
                                                        MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12">
                                            <label for="ktp_upload"
                                                class="block text-sm/6 font-medium text-gray-900">Kartu Tanda
                                                Penduduk
                                                (KTP)</label>
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
                                                        <label for="ktp_upload"
                                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input name="ktp_upload" id="ktp_upload" type="file"
                                                                class="sr-only" accept=".pdf,.png,.jpeg,.jpg">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF
                                                        Up to 2
                                                        MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12">
                                            <label for="kk_upload"
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
                                                        <label for="kk_upload"
                                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input name="kk_upload" id="kk_upload" type="file"
                                                                class="sr-only" accept=".pdf,.png,.jpeg,.jpg">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up
                                                        to 2
                                                        MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12">
                                            <label for="ijazah_upload"
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
                                                        <label for="ijazah_upload"
                                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input name="ijazah_upload" id="ijazah_upload"
                                                                type="file" class="sr-only"
                                                                accept=".pdf,.png,.jpeg,.jpg">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up
                                                        to 2
                                                        MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12">
                                            <label for="sertifikasi_lainnya_upload"
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
                                                        <label for="sertifikasi_lainnya_upload"
                                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input name="sertifikasi_lainnya_upload"
                                                                id="sertifikasi_lainnya_upload" type="file"
                                                                class="sr-only" accept=".pdf,.png,.jpeg,.jpg">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up
                                                        to 2
                                                        MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BUTTON -->
                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <button type="submit"
                                    class="rounded-md bg-yellow-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-yellow-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Apply</button>
                            </div>
                        </form>
                    </section>
                </main>

                <!-- JavaScript -->


                {{-- PERHITUNGAN UMUR --}}


                <script>
                    document.getElementById('tanggal_lahir').addEventListener('change', function() {
                        const tanggalLahir = new Date(this.value);
                        const hariIni = new Date();
                        let umur = hariIni.getFullYear() - tanggalLahir.getFullYear();
                        const bulan = hariIni.getMonth() - tanggalLahir.getMonth();
                        const tanggal = hariIni.getDate() - tanggalLahir.getDate();

                        // Kurangi umur 1 tahun jika ulang tahun belum lewat di tahun ini
                        if (bulan < 0 || (bulan === 0 && tanggal < 0)) {
                            umur--;
                        }

                        document.getElementById('umur').value = umur;
                    });
                </script>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const checkboxRekan = document.getElementById('checkbox-rekan');
                        const fieldKenalan = document.getElementById('field-kenalan');

                        function toggleKenalan() {
                            if (checkboxRekan.checked) {
                                fieldKenalan.style.display = 'block';
                            } else {
                                fieldKenalan.style.display = 'none';
                                document.getElementById('kenalan').value = ''; // bersihkan input jika disembunyikan
                            }
                        }

                        // Jalankan saat halaman dimuat
                        toggleKenalan();

                        // Jalankan saat checkbox berubah
                        checkboxRekan.addEventListener('change', toggleKenalan);
                    });
                </script>


                <script>
                    document.getElementById('checkPenyakit').addEventListener('change', function() {
                        document.getElementById('penyakitField').style.display = this.checked ? 'block' : 'none';
                    });

                    document.getElementById('tidakPenyakit').addEventListener('change', function() {
                        document.getElementById('penyakitField').style.display = 'none';
                    });

                    // document.addEventListener('DOMContentLoaded', function() {
                    //     const checkbox = document.getElementById('riwayatCheckbox');
                    //     const field = document.getElementById('penyakitField');


                    //     function toggleField() {
                    //         field.style.display = checkbox.checked ? 'block' : 'none';
                    //     }

                    //     checkbox.addEventListener('change', toggleField);
                    //     toggleField(); // run once on page load
                    // });
                </script>

                @push('scripts')
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const container = document.getElementById('keahlian-container');
                            const addBtn = document.getElementById('add-keahlian');

                            addBtn.addEventListener('click', function() {
                                const inputGroup = document.createElement('div');
                                inputGroup.className = 'input-group mb-2';
                                inputGroup.innerHTML = `
<input type="text" name="keahlian[]" class="form-control" placeholder="Contoh: JavaScript" >
<button type="button" class="btn btn-danger remove-keahlian">✖</button>
`;
                                container.appendChild(inputGroup);
                            });

                            container.addEventListener('click', function(e) {
                                if (e.target && e.target.classList.contains('remove-keahlian')) {
                                    e.target.closest('.input-group').remove();
                                }
                            });
                        });
                    </script>
                @endpush


                <script>
                    let experienceIndex = 0;

                    document.getElementById('checkPengalaman').addEventListener('change', function() {
                        document.getElementById('experience-wrapper').style.display = this.checked ? 'block' : 'none';
                    });

                    document.getElementById('tidakPengalaman').addEventListener('change', function() {
                        document.getElementById('experience-wrapper').style.display = 'none';
                        document.getElementById('experience-wrapper').innerHTML = `
                            <div class="mb-4">
                                <button type="button" id="add-experience"
                                    class="inline-flex items-center rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700 focus:outline-none">
                                    Tambah Pengalaman
                                </button>
                            </div>
                        `;
                        experienceIndex = 0;
                        attachAddExperienceHandler(); // attach kembali handler tombol tambah
                    });

                    function attachAddExperienceHandler() {
                        document.getElementById('add-experience').addEventListener('click', function() {
                            const wrapper = document.getElementById('experience-wrapper');
                            const newGroup = document.createElement('div');
                            newGroup.classList.add('experience-group', 'border', 'border-gray-300', 'p-4', 'rounded', 'mb-4');
                            newGroup.innerHTML = `
                               
                                <div class="col-span-12 mt-2">
                                    <label class="block text-sm/6 font-medium text-gray-900">Nama Instansi / Perusahaan</label>
                                    <input type="text" name="experience[${experienceIndex}][nama_perusahaan]"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 mt-1 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                                <div class="col-span-12 mt-2">
                                    <label class="block text-sm/6 font-medium text-gray-900">Jabatan</label>
                                    <input type="text" name="experience[${experienceIndex}][jabatan]"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 mt-1 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                                <div class="col-span-12 mt-2">
                                    <label for="jenis_pekerjaan"
                                                class="block text-sm/6 font-medium text-gray-900">Jenis
                                                Pekerjaan</label>
                                            <div class="mt-2 grid grid-cols-1">
                                                <select id="jenis_pekerjaan" name="experience[${experienceIndex}][jenis_pekerjaan]"
                                                    autocomplete="jenis_pekerjaan"
                                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    <option selected disabled>Pilih</option>
                                                    <option value="Part Time">Part Time</option>
                                                    <option value="Internship">Magang / Intership</option>
                                                    <option value="Full Time">Full Time</option>
                                                </select>
                                            </div>
                                </div>
                                <div class="col-span-12 mt-2">
                                    <label class="block text-sm/6 font-medium text-gray-900">Tahun Mulai</label>
                                    <select id="tanggal_mulai" name="experience[${experienceIndex}][tanggal_mulai]"
                                                    autocomplete="tanggal_mulai"
                                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    <option selected disabled>Pilih</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                </select>
                                </div>
                                <div class="col-span-12 mt-2">
                                    <label class="block text-sm/6 font-medium text-gray-900">Tahun Selesai</label>
                                   <select id="tanggal_selesai" name="experience[${experienceIndex}][tanggal_selesai]"
                                                    autocomplete="tanggal_selesai"
                                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    <option selected disabled>Pilih</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                </select>
                                </div>
                                <div class="col-span-12 mt-2">
                                    <label class="block text-sm/6 font-medium text-gray-900">Gaji Terakhir</label>
                                    <input type="text" name="experience[${experienceIndex}][gaji_terakhir]"
                                        class="format-rupiah block w-full rounded-md bg-white px-3 py-1.5 mt-1 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                               
                                
                
                                <button type="button"
                                    class="remove-experience mt-3 inline-flex items-center rounded-lg bg-red-600 px-3 py-1 text-sm font-semibold text-white hover:bg-red-700 focus:outline-none">
                                    Hapus
                                </button>
                            `;
                            wrapper.appendChild(newGroup);
                            experienceIndex++;
                        });
                    }

                    // Inisialisasi awal
                    attachAddExperienceHandler();

                    // Delegasi event hapus
                    document.addEventListener('click', function(e) {
                        if (e.target.classList.contains('remove-experience')) {
                            e.target.closest('.experience-group').remove();
                        }
                    });
                </script>

                <script>
                    document.querySelector('.format-rupiah').addEventListener('input', function(e) {
                        let value = e.target.value.replace(/\D/g, '');
                        let formatted = new Intl.NumberFormat('id-ID').format(value);
                        e.target.value = formatted;
                    });
                </script>

                <script>
                    document.getElementById('copyAlamat').addEventListener('change', function() {
                        const isChecked = this.checked;

                        const fields = ['alamat', 'kota', 'kecamatan', 'kelurahan', 'provinsi'];

                        fields.forEach(field => {
                            const from = document.getElementById('ktp_' + field);
                            const to = document.getElementById('domisili_' + field);

                            if (isChecked) {
                                to.value = from.value;
                                to.readOnly = true;
                            } else {
                                to.value = '';
                                to.readOnly = false;
                            }
                        });
                    });
                </script>

        </x-users.section>

    </x-users.panel>

</x-users.layout>
