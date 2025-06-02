<x-users.layout>

    <x-users.panel>

        <x-users.section>
            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
            <div class="container">
                <h2>Form Pendaftaran Pelamar</h2>

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

                <main class="mb-auto pt-4">
                    <section class="container mx-auto sm:px-44 my-8">
                        <h2
                            class="text-pretty text-center text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                            <br>
                            <span class="text-yellow-500">Registration Form</span> <br>
                        </h2>

                        <form method="POST" enctype="multipart/form-data">
                            @csrf
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
                                        <input type="text" name="nik" id="nik" required
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    </div>


                                    {{-- NAMA --}}
                                    <div class="col-span-12">
                                        <label for="nama_lengkap"
                                            class="block mb-2 text-sm font-medium text-gray-900">Nama
                                            Lengkap
                                            <span class="text-red-500">*</span></label>
                                        <input type="text" name="nama_lengkap" id="nama_lengkap"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required>
                                    </div>

                                    {{-- JENIS KELAMIN --}}

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

                                    {{-- NO HP --}}

                                    <div class="col-span-12">
                                        <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900">No.
                                            Handphone
                                            <span class="text-red-500">*</span></label>
                                        <input type="text" name="nohp" id="nohp"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required>
                                        <p class="mt-3 text-sm/6 text-gray-600 text-bold"><span
                                                class="text-extrabold">Wajib</span>
                                            aktif WhatsApp.</p>

                                    </div>

                                    {{-- EMAIL --}}

                                    <div class="col-span-12">
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                                            Email
                                            <span class="text-red-500">*</span></label>
                                        <input type="text" name="email" id="email"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required>
                                    </div>

                                    {{-- TEMPAT LAHIR --}}

                                    <div class="col-span-12">
                                        <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900">
                                            Tempat Lahir
                                            <span class="text-red-500">*</span></label>
                                        <input type="text" name="tempat_lahir" id="tempat_lahir"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required>
                                    </div>

                                    {{-- TANGGAL LAHIR --}}

                                    <div class="col-span-12">
                                        <label for="tanggal_lahir"
                                            class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                                            Lahir
                                            (Sesuai KTP) <span class="text-red-500">*</span></label>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required>
                                    </div>

                                    {{-- AGAMA --}}

                                    <div class="col-span-12">
                                        <label for="agama"
                                            class="block text-sm/6 font-medium text-gray-900">Agama</label>
                                        <div class="mt-2 grid grid-cols-1">
                                            <select name="agama" required
                                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                <option value="">Pilih Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
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

                                    {{-- STATUS MENIKAH --}}

                                    <div class="col-span-12">
                                        <label for="status_menikah"
                                            class="block text-sm/6 font-medium text-gray-900">Status Menikah</label>
                                        <div class="mt-2 grid grid-cols-1">
                                            <select name="status_menikah" required
                                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                <option value="">Status Menikah</option>
                                                <option value="Belum Menikah">Belum Menikah</option>
                                                <option value="Menikah">Menikah</option>
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

                                    {{-- PEMBATAS =================== --}}
                                    <h2 class="text-base/7 font-semibold text-gray-900">Data Alamat Domisili</h2>
                                    {{-- ALAMAT KTP --}}

                                    <div class="col-span-12">
                                        <label for="ktp_alamat"
                                            class="block text-sm/6 font-medium text-gray-900">Alamat Lengkap
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <select id="provinsi"
                                                class="border p-2  block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                <option selected disabled>Pilih Provinsi</option>
                                            </select>


                                        </div>
                                    </div>

                                    {{-- KOTA KTP --}}
                                    <div class="col-span-12">
                                        <label for="ktp_kota"
                                            class="block text-sm/6 font-medium text-gray-900">Kota/Kabupaten
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" id="ktp_kota" name="alamat_ktp[kota1]"
                                                placeholder="Kota"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    {{-- KECAMATAN KTP --}}
                                    <div class="col-span-12">
                                        <label for="ktp_kecamatan"
                                            class="block text-sm/6 font-medium text-gray-900">Kecamatan
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" id="ktp_kecamatan" name="alamat_ktp[kecamatan1]"
                                                placeholder="Kecamatan" required
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    {{-- KELURAHAN KTP --}}
                                    <div class="col-span-12">
                                        <label for="ktp_kelurahan"
                                            class="block text-sm/6 font-medium text-gray-900">Kelurahan
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" id="ktp_kelurahan" name="alamat_ktp[kelurahan1]"
                                                placeholder="Kelurahan" required
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    {{-- PROVINSI KTP --}}
                                    <div class="col-span-12">
                                        <label for="ktp_provinsi"
                                            class="block text-sm/6 font-medium text-gray-900">Provinsi
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" id="ktp_provinsi" name="alamat_ktp[provinsi1]"
                                                placeholder="Provinsi" required
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    {{-- CHECKBOX SAMA ATAU TIDAK ALAMAT KTP DAN DOMISILI --}}

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
                                                <label for="is_domisili_sama" class="font-medium text-gray-900">Alamat
                                                    sesuai
                                                    dengan
                                                    KTP</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- PEMBATAS =================== --}}
                                    <h2 class="text-base/7 font-semibold text-gray-900">Data Alamat Domisili</h2>
                                    {{-- ALAMAT DOMISILI --}}

                                    <div class="col-span-12">
                                        <label for="domisili_alamat"
                                            class="block text-sm/6 font-medium text-gray-900">Alamat Lengkap
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" id="domisili_alamat"
                                                name="alamat_domisili[alamat0]" placeholder="Alamat Domisili"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    {{-- KOTA DOMISILI --}}
                                    <div class="col-span-12">
                                        <label for="domisili_kota"
                                            class="block text-sm/6 font-medium text-gray-900">Kota/Kabupaten
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" id="domisili_kota" name="alamat_domisili[kota0]"
                                                placeholder="Kota Domisili"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    {{-- KECAMATAN DOMISILI --}}
                                    <div class="col-span-12">
                                        <label for="domisili_kecamatan"
                                            class="block text-sm/6 font-medium text-gray-900">Kecamatan
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" id="domisili_kecamatan"
                                                name="alamat_domisili[kecamatan0]" placeholder="Kecamatan" required
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    {{-- KELURAHAN DOMISILI --}}
                                    <div class="col-span-12">
                                        <label for="domisili_kelurahan"
                                            class="block text-sm/6 font-medium text-gray-900">Kelurahan
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" id="domisili_kelurahan"
                                                name="alamat_domisili[kelurahan0]" placeholder="Kelurahan" required
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    {{-- PROVINSI DOMISILI --}}
                                    <div class="col-span-12">
                                        <label for="domisili_provinsi"
                                            class="block text-sm/6 font-medium text-gray-900">Provinsi
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" id="domisili_provinsi"
                                                name="alamat_domisili[provinsi0]" placeholder="Provinsi" required
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    {{-- PENDIDIKAN --}}
                                    <div class="border-b border-gray-900/10 pb-6">
                                        <h2 class="text-base/7 font-semibold text-gray-900">Pendidikan</h2>
                                        <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                                            <div class="col-span-12">
                                                <label for="last_education"
                                                    class="block text-sm/6 font-medium text-gray-900">Pendidikan
                                                    Terakhir</label>
                                                <div class="mt-2 grid grid-cols-1">
                                                    <select name="education[last_education]" required
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

                                            {{-- NAMA SEKOLAH --}}

                                            <div class="col-span-12">
                                                <label for="name_school"
                                                    class="block text-sm/6 font-medium text-gray-900">Nama
                                                    Institusi / Universitas</label>
                                                <div class="mt-2">
                                                    <input type="text" name="education[name_school]" required
                                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                </div>
                                            </div>











                                            <div>
                                                <label>Nama Sekolah / Universitas</label>
                                                <input type="text" name="education[name_school]" required>
                                            </div>

                                            <div>
                                                <label>Jurusan</label>
                                                <input type="text" name="education[jurusan]" required>
                                            </div>

                                            <div>
                                                <label>Tahun Kelulusan</label>
                                                <input type="number" name="education[tahun_kelulusan]"
                                                    min="1900" max="{{ date('Y') }}" required>
                                            </div>

                                            <div>
                                                <label>IPK / Nilai</label>
                                                <input type="text" name="education[nilai_ipk]" required>
                                            </div>

                                            <!-- Checkbox Pengalaman -->
                                            <label>
                                                <input type="hidden" name="is_ada_pengalaman" value="0">
                                                <input type="checkbox" name="is_ada_pengalaman" id="checkPengalaman"
                                                    value="1" {{ old('is_ada_pengalaman') ? 'checked' : '' }}>

                                                Saya punya pengalaman kerja
                                            </label>

                                            <!-- Wrapper Pengalaman Kerja -->
                                            <div id="experience-wrapper" style="display: none; margin-top: 1rem;">
                                                <h4>Pengalaman Kerja</h4>

                                                <div class="experience-group">
                                                    <input type="text" name="experience[0][nama_perusahaan]"
                                                        placeholder="Nama Perusahaan">
                                                    <input type="text" name="experience[0][jabatan]"
                                                        placeholder="Jabatan">
                                                    <input type="text" name="experience[0][jenis_pekerjaan]"
                                                        placeholder="Jenis Pekerjaan">
                                                    <textarea name="experience[0][deskripsi_pekerjaan]" placeholder="Deskripsi"></textarea>
                                                    <input type="date" name="experience[0][tanggal_mulai]">
                                                    <input type="date" name="experience[0][tanggal_selesai]">
                                                    <input type="text" name="experience[0][gaji_terakhir]"
                                                        placeholder="Gaji Terakhir">
                                                    <button type="button" class="remove-experience">Hapus</button>
                                                </div>

                                                <button type="button" id="add-experience">Tambah Pengalaman</button>
                                            </div>

                                            <div id="keahlian-container">
                                                <label>Keahlian:</label>

                                                @if (old('keahlian'))
                                                    @foreach (old('keahlian') as $index => $keahlian)
                                                        <div class="input-group mb-2">
                                                            <input type="text" name="keahlian[]"
                                                                value="{{ $keahlian }}" class="form-control">
                                                            <button type="button"
                                                                class="btn btn-danger remove-keahlian">✖</button>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="input-group mb-2">
                                                        <input type="text" name="keahlian[]" class="form-control"
                                                            placeholder="Contoh: Laravel">
                                                        <button type="button"
                                                            class="btn btn-danger remove-keahlian">✖</button>
                                                    </div>
                                                @endif



                                                {{-- Riwayat Kesehatan --}}

                                                <input type="hidden" name="ada_riwayat_penyakit" value="0">
                                                <label>
                                                    <input type="checkbox" name="ada_riwayat_penyakit" value="1"
                                                        id="riwayatCheckbox"
                                                        {{ old('ada_riwayat_penyakit') ? 'checked' : '' }}>
                                                    Saya memiliki riwayat penyakit
                                                </label>

                                                <div id="penyakitField" style="display: none;">
                                                    <label for="nama_penyakit">Sebutkan riwayat penyakit:</label>
                                                    <textarea name="nama_penyakit" id="nama_penyakit">{{ old('nama_penyakit') }}</textarea>
                                                </div>
                                                <br>
                                                <label>Dari mana Anda mengetahui lowongan ini? (Boleh pilih lebih dari
                                                    satu)</label><br>

                                                <label><input type="checkbox" name="referensi_kerja[]"
                                                        value="Website Ewindo"
                                                        {{ is_array(old('referensi_kerja')) && in_array('Website Ewindo', old('referensi_kerja')) ? 'checked' : '' }}>
                                                    Website Ewindo</label><br>

                                                <label><input type="checkbox" name="referensi_kerja[]"
                                                        value="Instagram"
                                                        {{ is_array(old('referensi_kerja')) && in_array('Instagram', old('referensi_kerja')) ? 'checked' : '' }}>
                                                    Instagram</label><br>

                                                <label><input type="checkbox" name="referensi_kerja[]"
                                                        value="Facebook"
                                                        {{ is_array(old('referensi_kerja')) && in_array('Facebook', old('referensi_kerja')) ? 'checked' : '' }}>
                                                    Facebook</label><br>

                                                <label><input type="checkbox" name="referensi_kerja[]"
                                                        value="Rekan/Sahabat"
                                                        {{ is_array(old('referensi_kerja')) && in_array('Rekan/Sahabat', old('referensi_kerja')) ? 'checked' : '' }}>
                                                    Rekan/Sahabat</label><br>

                                                <!-- Kenalan -->
                                                <label for="kenalan">Apakah Anda memiliki kenalan di perusahaan ini?
                                                    Jika ya,
                                                    sebutkan:</label>
                                                <input type="text" name="kenalan" id="kenalan"
                                                    value="{{ old('kenalan') }}">
                                                <br>
                                                <!-- Siap ditempatkan di seluruh cabang -->
                                                <label>Apakah Anda bersedia ditempatkan di seluruh cabang?</label><br>
                                                <label><input type="radio" name="siap_ditempatkan" value="Ya"
                                                        {{ old('siap_ditempatkan') == 'Ya' ? 'checked' : '' }}>
                                                    Ya</label>
                                                <label><input type="radio" name="siap_ditempatkan" value="Tidak"
                                                        {{ old('siap_ditempatkan', 'Tidak') == 'Tidak' ? 'checked' : '' }}>
                                                    Tidak</label>

                                                <div class="form-group">
                                                    <label for="ktp_upload">Upload KTP</label>
                                                    <input type="file" name="ktp_upload" id="ktp_upload"
                                                        class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="pas_foto_upload">Upload Pas Foto</label>
                                                    <input type="file" name="pas_foto_upload" id="pas_foto_upload"
                                                        class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="kk_upload">Upload KK</label>
                                                    <input type="file" name="kk_upload" id="kk_upload"
                                                        class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="cv_upload">Upload CV (Pdf)</label>
                                                    <input type="file" name="cv_upload" id="cv_upload"
                                                        class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="ijazah_upload">Upload Ijazah</label>
                                                    <input type="file" name="ijazah_upload" id="ijazah_upload"
                                                        class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="sertifikasi_lainnya_upload">Upload Sertifikasi
                                                        Lainnya</label>
                                                    <input type="file" name="sertifikasi_lainnya_upload"
                                                        id="sertifikasi_lainnya_upload" class="form-control">
                                                </div>

                                            </div>
                                            <button type="submit">Simpan</button>
                        </form>
            </div>


            <!-- JavaScript -->

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const checkbox = document.getElementById('riwayatCheckbox');
                    const field = document.getElementById('penyakitField');

                    function toggleField() {
                        field.style.display = checkbox.checked ? 'block' : 'none';
                    }

                    checkbox.addEventListener('change', toggleField);
                    toggleField(); // run once on page load
                });
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
                let experienceIndex = 1;

                document.getElementById('checkPengalaman').addEventListener('change', function() {
                    document.getElementById('experience-wrapper').style.display = this.checked ? 'block' : 'none';
                });

                document.getElementById('add-experience').addEventListener('click', function() {
                    const wrapper = document.getElementById('experience-wrapper');
                    const newGroup = document.createElement('div');
                    newGroup.classList.add('experience-group');
                    newGroup.innerHTML = `
            <input type="text" name="experience[${experienceIndex}][nama_perusahaan]" placeholder="Nama Perusahaan" >
            <input type="text" name="experience[${experienceIndex}][jabatan]" placeholder="Jabatan" >
            <input type="text" name="experience[${experienceIndex}][jenis_pekerjaan]" placeholder="Jenis Pekerjaan" >
            <textarea name="experience[${experienceIndex}][deskripsi_pekerjaan]" placeholder="Deskripsi"></textarea>
            <input type="date" name="experience[${experienceIndex}][tanggal_mulai]" >
            <input type="date" name="experience[${experienceIndex}][tanggal_selesai]">
            <input type="text" name="experience[${experienceIndex}][gaji_terakhir]" placeholder="Gaji Terakhir" >
            <button type="button" class="remove-experience">Hapus</button>
            // Lanjutkan SELASA
        `;
                    wrapper.appendChild(newGroup);
                    experienceIndex++;
                });

                document.addEventListener('click', function(e) {
                    if (e.target.classList.contains('remove-experience')) {
                        e.target.closest('.experience-group').remove();
                    }
                });
            </script>

            <script>
                document.getElementById('copyAlamat').addEventListener('change', function() {
                    const isChecked = this.checked;

                    const fields = ['alamat', 'kota', 'kecamatan', 'kelurahan', 'provinsi'];

                    fields.forEach(field => {
                        const from = document.getElementById('domisili_' + field);
                        const to = document.getElementById('ktp_' + field);

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
