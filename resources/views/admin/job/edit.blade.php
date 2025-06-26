<x-admin.layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>



    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <form method="POST" action="/admin/job/{{ $job->slug }}/update" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-4">
                                <label for="job_name"
                                    class="@error('job_name') is-invalid @enderror block text-sm/6 font-medium text-gray-900">Job
                                    Position
                                    <span class="text-red-500">* Wajib Diisi</span></label>
                                <div class="mt-2">
                                    <input id="job_name" name="job_name" type="text" autocomplete="job_name"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                        autofocus value="{{ old('job_name', $job->job_name) }}">
                                    @error('job_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-span-4">

                                    <div class="mt-2">
                                        <input id="slug" name="slug" type="hidden" autocomplete="slug"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            autofocus value="{{ old('slug', $job->slug) }}">
                                        @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="border-b border-gray-900/10 pb-12">
                                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <div class="col-span-4">
                                            <label for="quota"
                                                class="@error('quota') is-invalid @enderror block text-sm/6 font-medium text-gray-900">
                                                Quota
                                                <span class="text-red-500">Optional</span></label>
                                            <div class="mt-2">
                                                <input id="quota" name="quota" type="text" autocomplete="quota"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                    autofocus value="{{ old('quota', $job->quota) }}">
                                                @error('quota')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-4">
                                            <label for="age"
                                                class="@error('age') is-invalid @enderror block text-sm/6 font-medium text-gray-900">
                                                Maximal Umur
                                                <span class="text-red-500">Optional</span></label>
                                            <div class="mt-2">
                                                <input id="age" name="age" type="text" autocomplete="age"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                    autofocus value="{{ old('age', $job->age) }}">
                                                @error('age')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-4">
                                            <label for="ipk"
                                                class="@error('ipk') is-invalid @enderror block text-sm/6 font-medium text-gray-900">
                                                Maximal Nilai IPK
                                                <span class="text-red-500">Optional</span></label>
                                            <div class="mt-2">
                                                <input id="ipk" name="ipk" type="text" autocomplete="ipk"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                    autofocus value="{{ old('ipk', $job->ipk) }}">
                                                @error('ipk')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label for="job_type" class="block text-sm/6 font-medium text-gray-900">Job
                                                Type
                                                <span class="text-red-500">Optional</span></label>
                                            <div class="mt-2 grid grid-cols-1">
                                                <select name="job_type">
                                                    <option selected disabled>Choose</option>
                                                    <option value="FullTime"
                                                        {{ old('job_type', $job->job_type ?? '') == 'FullTime' ? 'selected' : '' }}>
                                                        FullTime</option>
                                                    <option value="Shift"
                                                        {{ old('job_type', $job->job_type ?? '') == 'Shift' ? 'selected' : '' }}>
                                                        Shift</option>
                                                    <option value="Internship"
                                                        {{ old('job_type', $job->job_type ?? '') == 'Internship' ? 'selected' : '' }}>
                                                        Internship</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label for="job_location"
                                                class="block text-sm/6 font-medium text-gray-900">Job Location
                                                <span class="text-red-500">Optional</span></label>
                                            <div class="mt-2 grid grid-cols-1">
                                                <select name="job_location">
                                                    <option selected disabled>Choose</option>
                                                    <option value="Plant 1"
                                                        {{ old('job_location', $job->job_location ?? '') == 'Plant 1' ? 'selected' : '' }}>
                                                        Plant 1</option>
                                                    <option value="Plant 2"
                                                        {{ old('job_location', $job->job_location ?? '') == 'Plant 2' ? 'selected' : '' }}>
                                                        Plant 2</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="sm:col-span-3">
                                            <label for="departement_id"
                                                class="block text-sm/6 font-medium text-gray-900">Departement
                                                <span class="text-red-500">Optional</span></label>
                                            <div class="mt-2 grid grid-cols-1">
                                                <select id="departement_id" name="departement_id"
                                                    autocomplete="departement_id"
                                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    <option selected disabled>Choose</option>
                                                    @foreach ($departements as $departement)
                                                        @if (old('departement_id', $job->departement_id) == $departement->id)
                                                            <option value="{{ $departement->id }}"selected>
                                                                {{ $departement->departement_name }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $departement->id }}">
                                                                {{ $departement->departement_name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label for="status_education"
                                                class="block text-sm/6 font-medium text-gray-900">Minimal Pendidikan
                                                <span class="text-red-500">Optional</span></label>
                                            <div class="mt-2 grid grid-cols-1">
                                                <select name="status_education">
                                                    <option selected disabled>Choose</option>
                                                    <option value="SMK"
                                                        {{ old('status_education', $job->status_education ?? '') == 'SMK' ? 'selected' : '' }}>
                                                        SMK</option>
                                                    <option value="Sarjana S1"
                                                        {{ old('status_education', $job->status_education ?? '') == 'Sarjana S1' ? 'selected' : '' }}>
                                                        S1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    {{-- <div class="col-span-full">
                                            <label for="job_deskripsi"
                                                class="@error('job_deskripsi') is-invalid @enderror block text-sm/6 font-medium text-gray-900">Job
                                                Description <span class="text-red-500">*</span></label>
                                            <div class="mt-2">
                                                <textarea name="job_deskripsi" id="job_deskripsi" rows="3"
                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('job_deskripsi', $job->job_deskripsi) }}</textarea>
                                                @error('job_deskripsi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> --}}



                                    <div class="space-y-12">
                                        <div class="border-b border-gray-900/10 pb-12">
                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                                <div class="col-span-4">
                                                    <label for="tags (Comma Separated)"
                                                        class=" block text-sm/6 font-medium text-gray-900">Job
                                                        Requirements
                                                        <span class="text-red-500">Optional</span></label>
                                                    <div class="mt-2">
                                                        <input id="tags" name="tags"
                                                            placeholder="laracasts, video, education" type="text"
                                                            autocomplete="tags"
                                                            value="{{ $tags->pluck('tag_name')->implode(', ') }}"
                                                            class= "block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">

                                                    </div>
                                                </div>

                                                <div class="sm:col-span-6">
                                                    <label for="is_preferred_position"
                                                        class="block text-sm/6 font-medium text-gray-900">
                                                        Posisi Yang Diinginkan
                                                        <span class="text-red-500">Optional</span>
                                                    </label>

                                                    {{-- Hidden input untuk memastikan nilai 0 jika tidak dicentang --}}
                                                    <input type="hidden" name="is_preferred_position"
                                                        value="0">

                                                    <label class="block text-sm/6 font-medium text-gray-900">
                                                        <input type="checkbox" name="is_preferred_position"
                                                            value="1"
                                                            {{ old('is_preferred_position', $job->is_preferred_position ?? 0) == 1 ? 'checked' : '' }}
                                                            class="form-checkbox">
                                                        <br>
                                                        <span class="ml-1 text-red-500 text-xs">
                                                            * Jika Diaktifkan maka akan menampilkan pilihan untuk user
                                                            memilih bagian/posisi yang diinginkan
                                                        </span>
                                                    </label>
                                                </div>



                                                <div class="sm:col-span-3">
                                                    <label for="job_status"
                                                        class="block text-sm/6 font-medium text-gray-900">Status
                                                        Job
                                                        <span class="text-red-500">* Wajib Diisi</span></label>
                                                    <div class="mt-2 grid grid-cols-1">
                                                        <select name="job_status">
                                                            <option selected disabled>Choose</option>
                                                            <option value="1"
                                                                {{ old('job_status', $job->job_status ?? '') == 1 ? 'selected' : '' }}>
                                                                Aktif</option>
                                                            <option value="0"
                                                                {{ old('job_status', $job->job_status ?? '') == 0 ? 'selected' : '' }}>
                                                                NonAktif</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button"></button>
                            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
                        </div>

                        <script>
                            const job_name = document.querySelector('#job_name');
                            const slug = document.querySelector('#slug');

                            job_name.addEventListener('change', function() {
                                fetch('/admin/job/checkSlug?job_name=' + job_name.value)
                                    .then(response => response.json())
                                    .then(data => slug.value = data.slug)
                            });
                        </script>
            </form>
        </div>
    </main>

</x-admin.layout>
