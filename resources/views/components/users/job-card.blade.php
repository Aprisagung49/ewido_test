<x-users.job-panel
    class="flex flex-col md:flex-row gap-6 bg-white shadow-lg rounded-2xl p-6 border border-gray-200 hover:shadow-xl transition-shadow duration-300">
    <div
        class="flex-1 flex flex-col self-start text-sm text-gray-500 hover:text-gray-700 transition-colors duration-200">
        {{-- {{ $job_location }} --}}
        <a href="/careers/{{ $jobSlug }}/apply">
            <h3 class="font-bold text-2xl mt-3 text-gray-900 group-hover:text-gold transition-colors duration-300">
                {{ $slot }}
            </h3>
        </a>
        <p class="text-sm text-gray-600 mt-2 leading-relaxed">
            {{-- Job Deskripsi --}}

            {{-- <p class="text-xs text-gray-600">Deskripsi Pekerjaan : </p>{{ $job_deskripsi }}</p> --}}

            {{-- End Job Deskripsi --}}

        <div class="flex flex-row">
        </div>
        {{-- <ul>
            <li class="self-start text-sm text-gray-500 hover:text-gray-700 transition-colors duration-200">Min :
                {{ $status_education }}</li>
            <li class="self-start text-sm text-gray-500 hover:text-gray-700 transition-colors duration-200">Umur Maks
                : {{ $age }} tahun</li>
            <li class="self-start text-sm text-gray-500 hover:text-gray-700 transition-colors duration-200">IPK Min :
                {{ $ipk }}</li>
        </ul> --}}
    </div>

    <div class="mt-auto flex flex-wrap gap-2 text-gray-500 hover:text-gray-700 transition-colors duration-200">
        {{-- {{ $tag_job }} {{ $job_type }} --}}
    </div>

</x-users.job-panel>
