<x-users.layout>
    <x-users.panel>
        <x-users.section-product>
            <x-users.heading>Careers</x-users.heading>

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
                                        {{-- <div
                                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:size-10">
                                            <svg class="size-6 text-green-600" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>
                                        </div> --}}
                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                            <h3 class="text-base font-semibold text-gray-900" id="modal-title">
                                            </h3>
                                            <div class="mt-2">
                                                <p class="text-sm text-gray-500">{!! session('success') !!}</p>
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
            {{-- Banner Section --}}
            <div class="w-full rounded-xl overflow-hidden shadow-lg">
                <div class="w-full min-h-[120px] min-w-[50px] lg:min-h-[400px] bg-center bg-cover relative flex items-end p-6"
                    style="background-image: url('{{ asset('/storage/images/hero/joinus2.png') }}')">
                    <div class="flex items-start justify-items-start w-full h-full py-6">
                        <div class="text-left">
                            <div class="container mx-auto">
                                <div class="max-w-4xl mx-auto text-left">
                                    <h2 class="text-4xl font-extrabold tracking-wide text-gold shadow-text sm:text-4xl uppercase px-4 py-2 mt-8 rounded-lg"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 1)">
                                        Join Us
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-users.section-product>
    </x-users.panel>

    <x-users.section>
        <div class="text-center mt-14">
            <h1 class="text-3xl font-bold">Available Jobs</h1>
            <p class="text-gray-500 mt-4">Placement will be adjusted based on the results of the test and interview.</p>
        </div>
        @foreach ($jobs as $job)
            <div class="mt-12 space-y-8 max-w-4xl mx-auto mb-14">
                <div class="mt-6 space-y-6">
                    <x-users.job-card :jobSlug="$job->slug">
                        <x-slot:job_location>Penempatan : {{ $job->job_location }}</x-slot:job_location>

                        {{-- <x-slot:job_create>Posted : {{ $job->created_at->format('d F Y') }}</x-slot:job_create> --}}
                        {{-- <x-slot:job_quota>Kuota : {{ $job->quota }}</x-slot:job_quota> --}}
                        <x-slot:job_type>
                            <x-users.type-job>{{ $job->job_type }}</x-users.type-job>
                        </x-slot:job_type>
                        {{ $job->job_name }}

                        {{-- job Deskripsi --}}
                        <x-slot:job_deskripsi>{!! $job->deskripsi !!}</x-slot:job_deskripsi>


                        <x-slot:status_education>{{ $job->status_education }}</x-slot:status_education>
                        <x-slot:age>{{ $job->age }}</x-slot:age>
                        <x-slot:ipk>{{ $job->ipk }}</x-slot:ipk>

                        <x-slot:tag_job>
                            @foreach ($job->tags as $tag)
                                <x-users.tag>{{ $tag->tag_name }}</x-users.tag>
                            @endforeach
                        </x-slot:tag_job>
                    </x-users.job-card>
        @endforeach
        </div>
        <div class="mt-10">
            {{ $jobs->links() }}
        </div>
        </div>
    </x-users.section>

</x-users.layout>
