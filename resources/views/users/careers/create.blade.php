<x-users.layout>
    <x-users.panel>
        <x-users.section>
            <h2 class="text-pretty text-center text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                <span class="text-gold">Job Title</span><br> Registration Form
            </h2>
        </x-users.section>
    </x-users.panel>

    <x-users.section>
        <x-forms.form method="POST" action="/careers">
            <div class="space-y-12 mt-8">
                {{-- DATA DIRI --}}
                <h2 class="text-base/7 font-semibold text-gray-900">Data Diri</h2>
                <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                    <div class="col-span-12">
                        <x-forms.input label="No KTP" name="no-ktp" />
                    </div>
                    <div class="col-span-12">
                        <x-forms.input label="Nama Lengkap" name="nama-lengkap" />
                    </div>
                    <div class="col-span-12">
                        <x-forms.fieldset>
                            Jenis Kelamin
                            <div class="mt-2 flex gap-x-6">
                                <x-forms.radio label="Pria" id="pria" name="gender" />
                                <x-forms.radio label="Wanita" id="wanita" name="gender" />
                            </div>
                        </x-forms.fieldset>
                    </div>
                    <div class="col-span-12">
                        <x-forms.input label="No. Handphone" name="handphone" />
                        <x-forms.info>Wajib Aktif WhatsApp.</x-forms.info>
                    </div>
                    <div class="col-span-12">
                        <x-forms.input label="Email Address" name="email" type="email" />
                    </div>
                    <div class="col-span-12">
                        <x-forms.input label="Tanggal Lahir (Sesuai KTP)" name="birth_date" type="date" />
                    </div>
                    <div class="col-span-12">
                        <x-forms.input label="Alamat KTP" name="alamat_ktp" />
                    </div>
                    <div class="col-span-3">
                        <x-forms.input label="Kelurahan" name="ktp_kelurahan" />
                    </div>
                    <div class="col-span-3">
                        <x-forms.input label="Kecamatan" name="ktp_kecamatan" />
                    </div>
                    <div class="col-span-3">
                        <x-forms.input label="Kota / Kabupaten" name="ktp_kota" />
                    </div>
                    <div class="col-span-3">
                        <x-forms.input label="Provinsi" name="ktp_provinsi" />
                    </div>
                    <div class="col-span-12">
                        <x-forms.divider />
                    </div>
                    <div class="col-span-12">
                        <x-forms.checkbox label="Alamat Domisili Sesuai Dengan KTP" name="featured"
                            id="check_address" />
                    </div>
                    <div class="col-span-12">
                        <x-forms.input label="Alamat Domisili" name="alamat_domisili" />
                    </div>
                    <div class="col-span-3">
                        <x-forms.input label="Kelurahan" name="domisili_kelurahan" />
                    </div>
                    <div class="col-span-3">
                        <x-forms.input label="Kecamatan" name="domisili_kecamatan" />
                    </div>
                    <div class="col-span-3">
                        <x-forms.input label="Kota / Kabupaten" name="domisili_kota" />
                    </div>
                    <div class="col-span-3">
                        <x-forms.input label="Provinsi" name="domisili_provinsi" />
                    </div>
                    <div class="col-span-12">
                        <x-forms.select label="Agama" name="religion">
                            <option selected disabled>Pilih</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Lainnya</option>
                        </x-forms.select>
                    </div>
                    <div class="col-span-12">
                        <x-forms.fieldset>
                            Status Pernikahan
                            <div class="mt-2 flex gap-x-6">
                                <x-forms.radio label="Lajang" id="lajang" name="marriage_status" />
                                <x-forms.radio label="Menikah" id="menikah" name="marriage_status" />
                                <x-forms.radio label="Cerai" id="cerai" name="marriage_status" />
                            </div>
                        </x-forms.fieldset>
                    </div>
                    <div class="col-span-12">
                        <x-forms.divider />
                    </div>
                </div>

                {{-- Pendidikan --}}
                <h2 class="text-base/7 font-semibold text-gray-900">Pendidikan</h2>
                <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                    <div class="col-span-12">
                        <x-forms.select label="Pendidikan Terakhir" name="last_education">
                            <option selected disabled>Pilih</option>
                            <option>SD</option>
                            <option>SMP</option>
                            <option>SMA / SMK</option>
                            <option>Sarjana</option>
                        </x-forms.select>
                    </div>
                    <div class="col-span-12">
                        <x-forms.input label="Nama Sekolah / Universitas" name="school_name" />
                    </div>
                    <div class="col-span-12">
                        <x-forms.input label="Program Studi / Jurusan" name="major" />
                    </div>
                    <div class="col-span-12">
                        <x-forms.input label="Tahun Kelulusan" name="graduate_year" />
                    </div>
                    <div class="col-span-12">
                        <x-forms.input label="Nilai / IPK Akhir" name="final_grade" />
                    </div>
                    <div class="col-span-12">
                        <x-forms.divider />
                    </div>
                </div>

                {{-- Pengalaman Kerja --}}
                <h2 class="text-base/7 font-semibold text-gray-900">Pengalaman Kerja</h2>
                <x-forms.button>Tambah Pengalaman Kerja</x-forms.button>
                <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                    {{-- fetch dari database --}}
                </div>
                <div class="col-span-12">
                    <x-forms.divider />
                </div>

                {{-- Informasi Tambahan --}}
                <h2 class="text-base/7 font-semibold text-gray-900">Pendidikan</h2>
                <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                    <div class="col-span-12">
                        <x-forms.textarea label="Keahlian Khusus" name="skills" />
                        <x-forms.info>Bersifat Teknis</x-forms.info>
                    </div>
                    <div class="col-span-12">
                        <x-forms.fieldset>
                            Riwayat Kesehatan
                            <div class="mt-2 flex gap-x-6">
                                <x-forms.radio label="Ada" id="yes" name="health" />
                                <x-forms.radio label="Tidak Ada" id="no" name="health" />
                            </div>
                        </x-forms.fieldset>
                    </div>
                    <div class="col-span-12">

                    </div>
                </div>
            </div>
        </x-forms.form>
    </x-users.section>

</x-users.layout>
