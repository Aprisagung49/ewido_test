<x-admin.layout>
    <x-slot:heading>
        Manager Applicant
    </x-slot:heading>

    {{-- KEADAAN KETIKA NEWSROOM BERHASIL DI POST --}}
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
                                    <h3 class="text-base font-semibold text-gray-900" id="modal-title">Sukses!!!
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

    <main class="h-screen">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div
                class="bg-white shadow-lg rounded-lg p-6 flex justify-between items-start w-full h-auto relative border border-gray-200">
                <!-- Left: Job Information -->
                <div class="w-2/3">
                    <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-2">
                        {{ $job->job_name }}
                    </h2>
                    <p class="text-sm text-gray-700 flex items-center gap-2 mt-1 mb-6">
                        <i class="fa-solid fa-building text-gray-500"></i>
                        {{ optional($job->departement)->departement_name }}
                    </p>
                    <p class="text-sm text-gray-700 font-semibold flex items-center gap-2 mt-3">
                        <i class="fa-solid fa-list-check text-yellow-500"></i> Requirements
                    </p>

                    <!-- Skills Badges -->
                    <div class="flex flex-wrap gap-2 mt-4">
                        @foreach ($job->tags as $tag)
                            <span
                                class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full flex items-center gap-2">
                                <i class="fa-solid fa-star"></i> {{ $tag->tag_name }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Top Right: Job Type & Location -->
                <div class="absolute top-6 right-6 flex flex-col items-end gap-2">
                    <p class="text-md font-semibold text-gray-800 flex items-center gap-2">
                        <i class="fa-solid fa-clock text-green-500"></i> {{ $job->job_type }}
                    </p>
                    <p class="text-sm text-gray-700 flex items-center gap-2">
                        <i class="fa-solid fa-location-dot text-red-500"></i> {{ $job->job_location }}
                    </p>
                </div>

                <!-- Bottom Right: Posted Date -->
                <div class="absolute bottom-4 right-6 text-gray-600 text-sm flex items-center gap-2">
                    <i class="fa-solid fa-school"></i> Minimal Pendidikan : {{ $job->status_education }}
                </div>
            </div>

            <!-- TABLE -->
            <div class="mt-4 bg-white relative shadow-md sm:rounded-lg overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form action="{{ route('nama.route.admin.job', ['id' => $job->id]) }}" method="GET"
                            class="flex items-center w-full">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="search" name="search" value="{{ request('search') }}" id="search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
                                    placeholder="Search nama applicant" />
                            </div>
                            <button type="submit"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded-r-lg ml-2">
                                Search
                            </button>
                        </form>
                    </div>

                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400"
                            viewbox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                clip-rule="evenodd" />
                        </svg>
                        <form method="GET" action="/admin/job/{{ $job->id }}/show"
                            class="flex items-center space-x-4">
                            {{-- Sorting Dropdown --}}
                            <select name="sort" onchange="this.form.submit()"
                                class="py-2 px-3 border border-gray-300 rounded-lg text-sm text-gray-700">
                                <option value="">Sort
                                </option>
                                <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Terbaru
                                </option>
                                <option value="terlama" {{ request('sort') == 'terlama' ? 'selected' : '' }}>Terlama
                                </option>
                            </select>

                            {{-- Filter Sekolah (contoh) --}}
                            <select name="last_school" onchange="this.form.submit()"
                                class="py-2 pr-8 border border-gray-300 rounded-lg text-sm text-gray-700">
                                <option value="">Pendidikan</option>
                                <option value="Paket C" {{ request('sort') == 'Paket C' ? 'selected' : '' }}>Paket C
                                </option>
                                <option value="SD" {{ request('sort') == 'SD' ? 'selected' : '' }}>SD
                                </option>
                                <option value="SMP" {{ request('sort') == 'SMP' ? 'selected' : '' }}>SMP
                                </option>
                                <option value="SMA" {{ request('sort') == 'SMA' ? 'selected' : '' }}>SMA
                                </option>
                                <option value="SMK" {{ request('sort') == 'SMK' ? 'selected' : '' }}>SMK
                                </option>
                                <option value="D1" {{ request('sort') == 'D1' ? 'selected' : '' }}>D1
                                </option>
                                <option value="D2" {{ request('sort') == 'D2' ? 'selected' : '' }}>D2
                                </option>
                                <option value="D3" {{ request('sort') == 'D3' ? 'selected' : '' }}>D3
                                </option>
                                <option value="S1" {{ request('sort') == 'S1' ? 'selected' : '' }}>S1
                                </option>
                                <option value="S2" {{ request('sort') == 'S2' ? 'selected' : '' }}>S2
                                </option>
                                <option value="S3" {{ request('sort') == 'S3' ? 'selected' : '' }}>S3
                                </option>
                            </select>

                            {{-- Filter Status --}}
                            <select name="status" onchange="this.form.submit()"
                                class="py-2 pr-6 border border-gray-300 rounded-lg text-sm text-gray-700">
                                <option value="">Semua Status</option>
                                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending
                                </option>
                                <option value="accepted" {{ request('status') == 'accepted' ? 'selected' : '' }}>
                                    Accepted
                                </option>
                                <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>
                                    Rejected
                                    Aktif</option>
                            </select>
                        </form>
                    </div>
                </div>



                <div class="relative overflow-x-auto shadow-md rounded-lg mx-4">
                    @if ($applicants->count() > 0)
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Lengkap
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal Melamar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Umur
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Pendidikan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jurusan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kota
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($applicants as $applicant)
                                    <form id="form-markread-{{ $applicant->id }}"
                                        action="/admin/job/applicantshow/{{ $applicant->id }}/mark-read"
                                        method="POST" style="display:none;">
                                        @csrf
                                    </form>
                                    <tr class="bg-white border-b border-gray-200 hover:bg-gray-50 cursor-pointer"
                                        onclick="event.preventDefault(); document.getElementById('form-markread-{{ $applicant->id }}').submit();">
                                        <th scope="row" class="px-6 py-4">
                                            {{ $loop->iteration }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            {{ $applicant->nama }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $applicant->created_at->format('d M Y') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $applicant->umur }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $applicant->education->last_education }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $applicant->education->jurusan }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $applicant->alamatKtp->kota1 }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="
                                            text-white text-xs font-medium me-2 px-3 py-1 rounded-full
                                            {{ $applicant->status === 'accepted'
                                                ? 'bg-green-500'
                                                : ($applicant->status === 'pending'
                                                    ? 'bg-gray-500'
                                                    : ($applicant->status === 'rejected'
                                                        ? 'bg-red-500'
                                                        : 'bg-gray-300')) }}
                                        ">
                                                {{ ucfirst($applicant->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            @if ($applicant->is_read)
                                                <i class="fa-solid fa-eye text-yellow-500 mr-2"></i>
                                            @endif
                                            @if ($applicant->is_print)
                                                <i class="fa-solid fa-print text-yellow-500 mr-2"></i>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Belum ada applicant untuk lowongan ini.</p>
                    @endif
                </div>
                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4 mt-4"
                    aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500">
                        Showing
                        <span
                            class="font-semibold text-gray-900">{{ ($applicants->currentPage() - 1) * $applicants->perPage() + 1 }}
                            -
                            {{ min($applicants->currentPage() * $applicants->perPage(), $applicants->total()) }}</span>
                        of
                        <span class="font-semibold text-gray-900">{{ $applicants->total() }}</span>
                    </span>

                    <ul class="inline-flex items-stretch -space-x-px">
                        <li>
                            <a href="{{ $applicants->previousPageUrl() }}"
                                class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 {{ $applicants->onFirstPage() ? 'pointer-events-none opacity-50' : '' }}">
                                < <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 01..." clip-rule="evenodd" />
                                    </svg>
                            </a>
                        </li>
                        <li>
                            @for ($i = 1; $i <= $applicants->lastPage(); $i++)
                        <li>
                            <a href="{{ $applicants->url($i) }}"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight
                    {{ $applicants->currentPage() === $i
                        ? 'text-primary-600 bg-primary-50 border border-primary-300'
                        : 'text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700' }}">
                                {{ $i }}
                            </a>
                        </li>
                        @endfor
                        <li>
                            <a href="{{ $applicants->nextPageUrl() }}"
                                class="flex items-center justify-center h-full py-1.5 px-3 text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 {{ !$applicants->hasMorePages() ? 'pointer-events-none opacity-50' : '' }}">>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 01..." clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>

</x-admin.layout>
