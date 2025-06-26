<x-admin.layout>
    <x-slot:heading>
        Detail Applicants
    </x-slot:heading>

    <main>
        <div class="mx-auto max-w-4xl px-4 py-6 sm:px-6 lg:px-8 p-6">
            <!-- Navigation Bar -->
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center space-x-2">
                    <button onclick="history.back()" class="text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <span class="text-xl font-semibold">CV Digital</span>
                    <a href="{{ route('job.markPrint', $applicant->id) }}" target="_blank"
                        class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded">
                        Print &nbsp;<i class="fa-solid fa-print "></i>
                    </a>
                </div>
                <form action="/admin/job/applicantshow/{{ $applicant->id }}/status" method="POST" class="inline-flex">
                    @csrf
                    <input type="hidden" name="status" value="accepted">
                    <div class="inline-flex rounded-md shadow-xs" role="group">
                        <button id="btn-approve" type="submit"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-green-500 border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-green-700 focus:text-green-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 h-4 me-2">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Approve
                        </button>
                </form>

                <form action="/admin/job/applicantshow/{{ $applicant->id }}/status" method="POST" class="inline-flex">
                    @csrf
                    <input type="hidden" name="status" value="pending">
                    <button id="btn-pending" type="submit"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-gray-400 border-t border-b border-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:z-10 focus:ring-2 focus:ring-gray-700 focus:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 me-2">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        Pending
                    </button>
                </form>

                <form action="/admin/job/applicantshow/{{ $applicant->id }}/status" method="POST" class="inline-flex">
                    @csrf
                    <input type="hidden" name="status" value="rejected">
                    <button id="btn-reject" type="submit"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-red-500 border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-red-700 focus:text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 me-2">
                            <path fill-rule="evenodd"
                                d="m6.72 5.66 11.62 11.62A8.25 8.25 0 0 0 6.72 5.66Zm10.56 12.68L5.66 6.72a8.25 8.25 0 0 0 11.62 11.62ZM5.105 5.106c3.807-3.808 9.98-3.808 13.788 0 3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788Z"
                                clip-rule="evenodd" />
                        </svg>
                        Reject
                    </button>
                </form>

            </div>

        </div>

        <header class="bg-white shadow-md rounded-lg p-6 mb-6 flex items-center">
            <!-- Photo Placeholder -->
            @if ($file_uploads && $file_uploads->pas_foto_upload)
                <img src="{{ asset('storage/' . $file_uploads->pas_foto_upload) }}" alt="Foto KTP"
                    class="w-40 h-60 object-cover rounded-lg" />
            @else
                <div class="w-40 h-60 bg-gray-300 rounded-lg flex items-center justify-center text-gray-600 text-sm">
                    160x240
                </div>
            @endif

            <!-- Text Content -->

            <div class="ml-6 flex-1">

                <h1 class="text-3xl font-bold text-gray-800">{{ $applicant->nama }}</h1>
                <div class="mt-4 text-gray-700 text-sm">
                    <div class="grid gap-y-2">
                        <div class="flex">
                            <p class="font-medium w-40">NIK</p>
                            <p class="mr-2">:</p>
                            <p>{{ $applicant->nik }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-40">Jenis Kelamin</p>
                            <p class="mr-2">:</p>
                            <p>{{ $applicant->jenis_kelamin }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-40">Umur</p>
                            <p class="mr-2">:</p>
                            <p>{{ $applicant->umur }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-40">No HP</p>
                            <p class="mr-2">:</p>
                            <p>{{ $applicant->nohp }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-40">Email</p>
                            <p class="mr-2">:</p>
                            <p>{{ $applicant->email }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-40">Tempat, Tanggal Lahir</p>
                            <p class="mr-2">:</p>
                            <p>Bandung,
                                {{ \Carbon\Carbon::parse($applicant->tanggal_lahir)->translatedFormat('d F Y') }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-40">Alamat</p>
                            <p class="mr-2">:</p>
                            <p>{{ $applicant->alamatDomisili->alamat0 }},
                                {{ $applicant->alamatDomisili->kota0 }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-40">Agama</p>
                            <p class="mr-2">:</p>
                            <p>{{ $applicant->agama }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-40">Status Pernikahan</p>
                            <p class="mr-2">:</p>
                            <p>{{ $applicant->status_menikah }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <section class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Pendidikan</h2>
            <div class="mt-4 text-gray-700 text-sm">
                <div class="grid gap-y-2">
                    <div class="flex">
                        <p class="font-medium w-60">Pendidikan Terakhir</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->education->last_education }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Nama Institusi / Universitas</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->education->name_school }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Program Studi / Jurusan</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->education->jurusan }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Tahun Kelulusan</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->education->tahun_kelulusan }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Nilai / IPK Akhir</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->education->nilai_ipk }}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Alamat Domisili</h2>
            <div class="mt-4 text-gray-700 text-sm">
                <div class="grid gap-y-2">
                    <div class="flex">
                        <p class="font-medium w-60">Alamat Domisili</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->alamatDomisili->alamat0 }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Kota</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->alamatDomisili->kota0 }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Kecamatan</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->alamatDomisili->kecamatan0 }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Kelurahan</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->alamatDomisili->kelurahan0 }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Provinsi</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->alamatDomisili->provinsi0 }}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Alamat KTP</h2>
            <div class="mt-4 text-gray-700 text-sm">
                <div class="grid gap-y-2">
                    <div class="flex">
                        <p class="font-medium w-60">Alamat Lengkap </p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->alamatKtp->alamat1 }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Kota</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->alamatKtp->kota1 }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Kecamatan</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->alamatKtp->kecamatan1 }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Kelurahan</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->alamatKtp->kelurahan1 }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Provinsi</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->alamatKtp->provinsi1 }}</p>
                    </div>
                </div>
            </div>
        </section>


        @foreach ($applicant->experiences as $experience)
            <section class="bg-white shadow-md rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Pengalaman Kerja {{ $loop->iteration }}</h2>
                <div class="mt-4 text-gray-700 text-sm">
                    <div class="grid gap-y-2">
                        <div class="flex">
                            <p class="font-medium w-60">Nama Instansi / Perusahaan</p>
                            <p class="mr-2">:</p>
                            <p>{{ $experience->nama_perusahaan }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-60">Posisi / Jabatan</p>
                            <p class="mr-2">:</p>
                            <p>{{ $experience->jabatan }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-60">Jenis Pekerjaan</p>
                            <p class="mr-2">:</p>
                            <p>{{ $experience->jenis_pekerjaan }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-60">Periode</p>
                            <p class="mr-2">:</p>
                            <p>{{ $experience->tanggal_mulai }} - {{ $experience->tanggal_selesai }}</p>
                        </div>
                        <div class="flex">
                            <p class="font-medium w-60">Gaji Terakhir</p>
                            <p class="mr-2">:</p>
                            <p>Rp. {{ $experience->gaji_terakhir }} ,-</p>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach

        <section class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Informasi Tambahan</h2>
            <div class="mt-4 text-gray-700 text-sm">
                <div class="grid gap-y-2">
                    <div class="flex">
                        <p class="font-medium w-60">Keahlian Khusus</p>
                        <p class="mr-2">:</p>
                        @foreach ($skills as $skill)
                            @foreach ($skill->keahlian as $keahlian)
                                <span
                                    class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-gray-300">{{ is_array($keahlian) ? implode(', ', $keahlian) : $keahlian }}
                                </span>
                            @endforeach
                        @endforeach
                    </div>

                    <div class="flex">
                        <p class="font-medium w-60">Riwayat Kesehatan</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->riwayatKesehatan->nama_penyakit }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Ketersediaan Bekerja</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->job_information->siap_ditempatkan }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Bagian Yang Diharapkan</p>
                        <p class="mr-2">:</p>
                        <p>{{ optional($applicant->job_information)->preferred_position }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Informasi Lowongan Kerja</h2>
            <div class="mt-4 text-gray-700 text-sm">
                <div class="grid gap-y-2">
                    <div class="flex">
                        <p class="font-medium w-60">Referensi Kerja</p>
                        <p class="mr-2">:</p>
                        <p>{{ is_array($applicant->job_information->referensi_kerja) ? implode(', ', $applicant->job_information->referensi_kerja) : $applicant->job_information->referensi_kerja }}
                        </p>
                    </div>
                    <div class="flex">
                        <p class="font-medium w-60">Rekan / Kerabat</p>
                        <p class="mr-2">:</p>
                        <p>{{ $applicant->job_information->kenalan }}</p>
                    </div>
                </div>
            </div>
        </section>

        </section class="mt-6 border-t pt-4">
        <h2 class="text-lg font-semibold text-gray-800 mb-3">Attachments</h2>
        <div class="flex flex-wrap gap-3">
            @if ($file_uploads && $file_uploads->cv_upload)
                <a href="{{ asset('storage/' . $file_uploads->cv_upload) }}" target="_blank"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
                    View CV
                </a>
            @endif
            @if ($file_uploads && $file_uploads->ktp_upload)
                <a href="{{ asset('storage/' . $file_uploads->ktp_upload) }}" target="_blank"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
                    View KTP
                </a>
            @endif
            @if ($file_uploads && $file_uploads->kk_upload)
                <a href="{{ asset('storage/' . $file_uploads->kk_upload) }}" target="_blank"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
                    View KK
                </a>
            @endif
            @if ($file_uploads && $file_uploads->ijazah_upload)
                <a href="{{ asset('storage/' . $file_uploads->ijazah_upload) }}" target="_blank"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
                    View Ijazah
                </a>
            @endif
            @if ($file_uploads && $file_uploads->sertifikasi_lainnya_upload)
                <a href="{{ asset('storage/' . $file_uploads->sertifikasi_lainnya_upload) }}" target="_blank"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
                    View Sertifikat Pendukung
                </a>
            @endif
        </div>
        {{-- JAVASCRIPT --}}

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Ambil semua form yang punya tombol ubah status
                document.querySelectorAll('form[onsubmit]').forEach(function(form) {
                    form.addEventListener('submit', function(e) {
                        if (!confirm('Yakin ubah status?')) {
                            e.preventDefault(); // Batalin submit kalau user klik Cancel
                            return false;
                        }

                        // Disable semua tombol setelah submit dikonfirmasi
                        document.getElementById('btn-approve').disabled = true;
                        document.getElementById('btn-pending').disabled = true;
                        document.getElementById('btn-reject').disabled = true;
                    });
                });
            });
        </script>

        <section>
            </div>



    </main>




</x-admin.layout>
