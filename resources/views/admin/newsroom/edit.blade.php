<x-admin.layout>
    <x-slot:heading>
        Edit Press
    </x-slot:heading>



    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <form method="POST" action="/admin/newsroom/{{ $newsroom->slug }}/update" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="space-y-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4">
                        <div class="col-span-4">
                            <label for="title" class="block text-sm/6 font-medium text-gray-900">Title <span
                                    class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <input id="title" name="title" type="text"
                                    class=" @error('title') is-invalid @enderror block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                    autofocus value="{{ old('title', $newsroom->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-span-2">
                            <div class="mt-2">
                                <input id="slug" name="slug" type="hidden"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                    autofocus value="{{ old('slug', $newsroom->slug) }}">
                                @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    <p>test</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="category_id" class="block text-sm/6 font-medium text-gray-900">Category
                                <span class="text-red-500">*</span></label>
                            <div class="mt-2 grid grid-cols-1">
                                <select name="category_id"
                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    <option selected disabled>Choose</option>
                                    @foreach ($categories as $category)
                                        @if (old('category_id', $newsroom->category_id) == $category->id)
                                            <option value="{{ $category->id }}"selected>{{ $category->name }}
                                            </option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="body"
                                class="@error('body') is-invalid @enderror block text-sm/6 font-medium text-gray-900">News
                                Detail
                                <span class="text-red-500">*</span></label>
                            <div class="mt-2">
                                <textarea name="body" id="description" rows="3"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('body', $newsroom->body) }}</textarea>
                                @error('body')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- File input -->
                        <div class="col-span-full">
                            <label for="upload-photo" class="block text-sm/6 font-medium text-gray-900">Upload
                                Photos
                            </label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="flex justify-center items-center min-h-[200px]">
                                        <div
                                            class="mt-4 p-4 border-2 border-dashed rounded-lg text-sm/6 text-gray-600 flex flex-col sm:flex-row items-center justify-center gap-2">
                                            <label for="files"
                                                class="cursor-pointer font-semibold text-indigo-600 hover:text-indigo-500">
                                                Upload a file
                                                <input id="files" name="files[]" type="file" class="sr-only"
                                                    accept="image/*" multiple>
                                            </label>
                                            <p class="text-sm text-gray-500"></p>
                                        </div>
                                    </div>
                                    <p class="text-xs/5 text-gray-600">PNG, JPG, GIF max 2MB/image(s)</p>
                                </div>
                            </div>
                            <div id="image-preview-container" class="grid grid-cols-10 gap-4 mt-4"></div>
                            <input type="hidden" name="remaining_old_images" id="remaining-old-images">
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button"
                            class="rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer"
                            onclick="confirmCancel()">
                            Cancel
                        </button>

                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update
                            Post</button>
                    </div>
            </form>
        </div>

        <script>
            const previewContainer = document.getElementById('image-preview-container');
            const fileInput = document.getElementById('files');
            const hiddenInput = document.getElementById('remaining-old-images');

            // Ambil gambar dari relasi
            const existingImages = @json($newsroom->newsroom_images->pluck('image_path'));

            function updateRemainingImages() {
                const remaining = [];
                previewContainer.querySelectorAll('img[data-old="true"]').forEach(img => {
                    const src = img.getAttribute('src');
                    if (src.startsWith('/storage/')) {
                        const path = src.replace('/storage/', '');
                        remaining.push(path);
                    }
                });
                hiddenInput.value = JSON.stringify(remaining);
            }

            function createImagePreview(src, isOld = false) {
                const wrapper = document.createElement('div');
                wrapper.className = 'relative w-24 h-24';

                const img = document.createElement('img');
                img.src = src;
                img.className = 'object-cover w-full h-full rounded border';
                if (isOld) img.setAttribute('data-old', 'true');

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.innerText = '✖';
                removeBtn.className =
                    'absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center';
                removeBtn.addEventListener('click', () => {
                    wrapper.remove();
                    updateRemainingImages();
                });

                wrapper.appendChild(img);
                wrapper.appendChild(removeBtn);
                previewContainer.appendChild(wrapper);
            }

            // Tampilkan gambar lama dari relasi
            existingImages.forEach(imagePath => {
                createImagePreview(`/storage/${imagePath}`, true);
            });
            updateRemainingImages();

            // Handle file baru
            fileInput.addEventListener('change', e => {
                Array.from(e.target.files).forEach(file => {
                    const reader = new FileReader();
                    reader.onload = event => createImagePreview(event.target.result);
                    reader.readAsDataURL(file);
                });
            });
        </script>


        <script>
            function confirmCancel() {
                const confirmLeave = confirm('Perubahan tidak akan disimpan. Yakin ingin meninggalkan halaman ini?');
                if (confirmLeave) {
                    window.location.href = '/admin/newsroom';
                }
                // kalau tidak, tidak melakukan apa-apa, tetap di halaman ini
            }
        </script>

        <script>
            const input = document.getElementById('files');
            const previewContainer = document.getElementById('image-preview-container');
            let filesArr = [];

            input?.addEventListener('change', function(event) {
                const newFiles = Array.from(event.target.files);

                newFiles.forEach((file) => {
                    if (!file.type.startsWith('image/')) return;

                    filesArr.push(file);
                    updateFileInput();

                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgContainer = document.createElement('div');
                        imgContainer.classList.add(
                            'relative', 'w-24', 'h-24', 'border', 'rounded-lg',
                            'overflow-hidden', 'shadow-sm', 'hover:shadow-md', 'transition-shadow'
                        );

                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.classList.add('w-full', 'h-full', 'object-cover');

                        const removeBtn = document.createElement('button');
                        removeBtn.innerHTML = '✖';
                        removeBtn.classList.add(
                            'absolute', 'top-1', 'right-1', 'bg-red-500', 'text-white',
                            'rounded-full', 'w-5', 'h-5', 'flex', 'items-center', 'justify-center',
                            'text-xs', 'hover:bg-red-600', 'transition-colors'
                        );

                        removeBtn.addEventListener('click', function() {
                            const index = filesArr.indexOf(file);
                            if (index !== -1) {
                                filesArr.splice(index, 1);
                                updateFileInput();
                                imgContainer.remove();
                            }
                        });

                        imgContainer.appendChild(img);
                        imgContainer.appendChild(removeBtn);
                        previewContainer.appendChild(imgContainer);
                    };
                    reader.readAsDataURL(file);
                });
            });


            function removeFile(index) {
                filesArr.splice(index, 1);
                const dataTransfer = new DataTransfer();
                filesArr.forEach(file => dataTransfer.items.add(file));
                input.files = dataTransfer.files;
                previewFiles();
            }


            function checkFilesLimit() {
                const input = document.getElementById('files');
                if (input?.files.length > 20) {
                    alert('You can only upload a maximum of 20 files.');
                    input.value = ""; // reset input file
                }
            }


            function updateFileInput() {
                const dataTransfer = new DataTransfer();
                filesArr.forEach(file => dataTransfer.items.add(file));
                input.files = dataTransfer.files;
            }
        </script>







        <script>
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('change', function() {
                fetch('/admin/newsroom/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });
        </script>
        {{-- <script>
            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.image_preview');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script> --}}

        <script>
            let filesArray = [];

            function previewFiles() {
                const fileInput = document.getElementById('files');
                const container = document.getElementById('preview-container');
                container.innerHTML = '';
                filesArray = Array.from(fileInput.files);

                filesArray.forEach((file, index) => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        container.innerHTML += `
                            <div class="relative">
                                <img src="${e.target.result}" class="rounded-lg shadow w-full h-32 object-cover"/>
                                <button type="button" class="absolute top-1 right-1 bg-red-500 text-white rounded-full p-1 text-xs" onclick="removeFile(${index})">X</button>
                            </div>`;
                    };
                    reader.readAsDataURL(file);
                });
            }

            function removeFile(index) {
                filesArray.splice(index, 1);
                // Simulate re-assign file input
                const dataTransfer = new DataTransfer();
                filesArray.forEach(file => dataTransfer.items.add(file));
                document.getElementById('files').files = dataTransfer.files;
                previewFiles(); // re-render preview
            }
        </script>

        <script>
            < script >
                function checkFilesLimit() {
                    const input = document.getElementById('files');
                    if (input.files.length > 20) {
                        alert('You can only upload a maximum of 20 files.');
                        input.value = ""; // reset input file
                    }
                } <
                />
        </script>
    </main>

</x-admin.layout>
