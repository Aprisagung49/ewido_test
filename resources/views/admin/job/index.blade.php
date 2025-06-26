<x-admin.layout>
    <x-slot:heading>
        HR Manager
    </x-slot:heading>


    @if (session()->has('success'))
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">Informational message</p>
            <p class="text-sm">{{ session('success') }}</p>
        </div>
    @endif

    <main class="h-screen overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 h-full">
            <div class="flex gap-6 h-full">
                <aside class="w-72 flex-none bg-gray-100 p-4 h-full">
                    @php
                        $totalJobs = $jobs->count();
                        $activeJobs = $jobs->where('job_status', 1)->count();
                        $inactiveJobs = $jobs->where('job_status', 0)->count();
                    @endphp

                    <ul class="my-3">
                        <li class="border-b border-gray-900 pb-4">
                            <a href="{{ route('jobs.filter') }}"
                                class="flex items-center justify-between px-4 py-2 text-white bg-yellow-500 rounded-lg shadow-sm font-semibold hover:bg-yellow-400">
                                Semua Loker
                                <span
                                    class="bg-white text-yellow-500 text-xs font-semibold px-2 py-1 rounded-full">{{ $totalJobs }}</span>
                            </a>
                        </li>
                        <li class="mt-2 pt-3">
                            <a href="{{ route('jobs.filter', ['job_status' => 1]) }}"
                                class="flex items-center justify-between px-4 py-2 text-gray-900 bg-white rounded-lg shadow-sm font-semibold hover:bg-gray-200">
                                Aktif
                                <span
                                    class="bg-yellow-500 text-white text-xs font-semibold px-2 py-1 rounded-full">{{ $activeJobs }}</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="{{ route('jobs.filter', ['job_status' => 0]) }}"
                                class="flex items-center justify-between px-4 py-2 text-gray-900 bg-white rounded-lg shadow-sm font-semibold hover:bg-gray-200">
                                Nonaktif
                                <span
                                    class="bg-yellow-500 text-white text-xs font-semibold px-2 py-1 rounded-full">{{ $inactiveJobs }}</span>
                            </a>
                        </li>
                    </ul>
                    <div class="bottom-1 left-44 right-4">
                        <a href="/admin/job/create"
                            class="rounded-md bg-yellow-500 px-12 py-2 text-lg font-semibold text-white shadow-xs hover:bg-yellow-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="inline size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Tambah Loker
                        </a>
                    </div>
                </aside>
                <div class="w-full h-full relative overflow-auto sm:rounded-lg pb-40 -mb-40">


                    @foreach ($jobs as $job)
                        <div class="card mt-7 bg-white border-3 border-gray-200 rounded-lg shadow-lg">
                            <div class="flex items-center justify-between gap-y-10 gap-20 p-8">
                                <div class="bg-white p-6">
                                    <!-- Job Title & Department -->


                                    <div class="mb-6">
                                        <h3 class="text-2xl font-bold text-gray-900">{{ $job->job_name }}</h3>
                                        <span
                                            class="text-sm text-gray-600">{{ optional($job->departement)->departement_name }}</span>
                                    </div>

                                    <!-- Job Details Grid -->
                                    <div class="grid grid-cols-1 gap-y-3">
                                        <div class="flex items-center gap-4">
                                            <i class="fa-solid fa-calendar text-gray-700 w-6 text-xl"></i>
                                            <span
                                                class="text-base text-gray-700">{{ $job->created_at->format('d F Y') }}</span>
                                        </div>
                                        <div class="flex items-center gap-4">
                                            <i class="fa-solid fa-briefcase text-gray-700 w-6 text-xl"></i>
                                            <span class="text-base text-gray-700">{{ $job->job_type }}</span>
                                        </div>
                                        <div class="flex items-center gap-4">
                                            <i class="fa-solid fa-user-group text-gray-700 w-6 text-xl"></i>
                                            <span class="text-base text-gray-700">{{ $job->quota }} Orang</span>
                                        </div>
                                        <div class="flex items-center gap-4">
                                            <i class="fa-solid fa-location-dot text-gray-700 w-6 text-xl"></i>
                                            <span class="text-base text-gray-700">{{ $job->job_location }}</span>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $isChecked = $job->job_status == 1; // Misalnya $data->status adalah nilai dari database
                                @endphp
                                <div class="flex flex-col items-end justify-end gap-y-10">
                                    <label class="inline-flex items-center me-5 cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer"
                                            {{ $isChecked ? 'checked' : '' }} disabled>
                                        <div
                                            class="relative w-11 h-6 bg-red-200 rounded-full peer dark:bg-red-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-red-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-red-600 peer-checked:bg-green-600 dark:peer-checked:bg-green-600">
                                        </div>
                                        <span class="ms-3 text-sm font-medium text-red-900 dark:text-red-300"></span>
                                    </label>
                                    <div
                                        class="mt-4 border border-yellow-500 rounded-lg p-3 flex items-center w-auto justify-evenly">
                                        <div class="flex items-center bg-white rounded px-10">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 fill-current text-yellow-500 mr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                            </svg>

                                            <div class="flex-grow flex flex-col ml-4">

                                                <span class="text-xl font-bold">{{ $job->applicants_count }}</span>

                                                <div class="flex items-center justify-between">
                                                    <span class="text-gray-500">Pendaftar</span>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="border-l border-yellow-500 h-24"></div>
                                        <div class="flex items-center bg-white rounded px-10">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-6 h-6 fill-current text-yellow-500 mr-2">
                                                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                <path fill-rule="evenodd"
                                                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="flex-grow flex flex-col ml-4">
                                                <span
                                                    class="text-xl font-bold">{{ $job->applicants_is_read_count }}</span>
                                                <div class="flex items-center justify-between">
                                                    <span class="text-gray-500">Dilihat</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pastikan ini ada di <head> HTML kamu -->
                            <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

                            <div class="mt-4 bg-gray-200 py-4 px-6 flex justify-end items-end rounded-b-lg">
                                <a href="/admin/job/{{ $job->id }}/show"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md mr-2">
                                    Kelola Kandidat
                                </a>

                                <!-- Dropdown pakai Alpine -->
                                <div class="relative inline-block text-left" x-data="{ open: false }"
                                    @click.outside="open = false">
                                    <button @click="open = !open"
                                        class="bg-white border border-gray-300 hover:bg-gray-100 text-gray-900 font-semibold px-4 py-2 rounded-lg shadow-md flex items-center">
                                        Aksi Lainnya <i class="fa-solid fa-caret-down ml-2"></i>
                                    </button>

                                    <!-- Dropdown Menu -->
                                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95"
                                        class="absolute right-0 mt-2 w-40 bg-white border border-gray-300 rounded-lg shadow-lg z-50"
                                        style="display: none;">

                                        <a href="/admin/job/{{ $job->slug }}/edit"
                                            class="block px-4 py-2  text-gray-800 hover:bg-gray-100">Edit</a>

                                        <form action="/admin/job/{{ $job->slug }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this?')">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                class="block w-full text-left px-4 py-2 z-999 text-red-600 font-semibold hover:bg-gray-100">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    @endforeach


                    <!-- <div class="after:content-[''] after:block after:h-40"></div> -->
                </div>

            </div>
            <div class="mt-10">
                {{ $jobs->links() }}
            </div>
        </div>
    </main>


    </div>

    </div>
    </main>
</x-admin.layout>
