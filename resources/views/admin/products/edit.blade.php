<x-admin.layout>
    <x-slot:heading>
        Edit Product
    </x-slot:heading>

    <x-forms.form method="POST" action="/admin/products/{{ $product->slug }}/edit" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-span-full">
            <x-forms.select label="Category" name="product_group_id">
                <option disabled {{ old('product_group_id', $product->product_group_id ?? '') ? '' : 'selected' }}>Pilih
                </option>
                @foreach ($parentGroups as $parent)
                    <option value="{{ $parent->id }}"
                        {{ old('product_group_id', $product->product_group_id ?? '') == $parent->id ? 'selected' : '' }}>
                        {{ $parent->name }}
                    </option>
                @endforeach
            </x-forms.select>
        </div>
        <div class="col-span-full">
            <x-forms.select label="Category Type" name="category_type">
                <option disabled {{ old('category_type', $product->category_type ?? '') ? '' : 'selected' }}>Pilih
                </option>

                @foreach ($childGroups as $child)
                    <option value="{{ $child->parent_id }}"
                        {{ old('product_group_id', $product->product_group_id ?? '') == $child->parent_id ? 'selected' : '' }}>
                        {{ $child->name }}
                    </option>
                @endforeach
            </x-forms.select>
        </div>
        <x-forms.divider />
        <h2 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900">Display</h2>
        <div class="col-span-full">
            <label for="upload-product" class="block text-sm/6 font-medium text-gray-900">Upload Product</label>
            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                <div class="text-center">
                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    <div class="mt-4 flex text-sm/6 text-gray-600">
                        <label for="images"
                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                            <span>Upload a file</span>
                            <input id="images" name="images[]" type="file" class="sr-only" accept="image/*"
                                multiple>
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs/5 text-gray-600">PNG, JPG, GIF max 2MB/image(s)</p>
                </div>
            </div>
        </div>
        <input type="hidden" name="deleted_images" id="deleted-images">
        {{-- PREVIEW IMAGE --}}
        <div id="image-preview-container" class="grid grid-cols-10 gap-4 mt-4">
            {{-- Gambar lama --}}
            @foreach ($product->product_images as $img)
                <div class="relative w-24 h-24 border rounded-lg overflow-hidden" data-old-image="{{ $img->id }}">
                    <img src="{{ asset('storage/' . $img->image_path) }}" class="w-full h-full object-cover">
                    <button type="button"
                        class="absolute top-1 right-1 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs"
                        onclick="removeOldImage({{ $img->id }}, this)">✖</button>

                </div>
            @endforeach
        </div>
        <!-- Untuk menyimpan ID gambar lama yang dihapus -->

        <div class="col-span-full">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Certification
            </label>
            <div class="grid grid-cols-5 gap-4">
                @foreach ($certificates as $certificate)
                    <div class="flex items-center gap-3">
                        <div class="flex h-6 shrink-0 items-center">
                            <div class="group grid size-4 grid-cols-1">
                                <input id="cert-{{ $certificate->id }}" aria-describedby="cert-1-description"
                                    name="certificates[]" value="{{ $certificate->id }}"
                                    @if (in_array($certificate->id, old('certificates', $selectedCertificates ?? []))) checked @endif type="checkbox"
                                    class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                    viewBox="0 0 14 14" fill="none">
                                    <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="text-sm/6">
                            <label for="cert-{{ $certificate->id }}" class="font-medium text-gray-900">
                                <img src="{{ asset('storage/' . $certificate->logo) }}" width="150"
                                    alt="{{ $certificate->name }}">
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <x-forms.divider />
        <h2 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900">Item Details</h2>
        <div class="col-span-full">
            <x-forms.input label="Type" name="type" value="{{ old('type', $product->type ?? '') }}" />
        </div>
        <div class="col-span-full hidden" id="connector_type">
            <x-forms.input label="Connector Type" name="connector_type"
                value="{{ old('type', $product->type ?? '') }}" />
        </div>
        <div class="col-span-full">
            <x-forms.input label="Cable Type" name="cable_type"
                value="{{ old('cable_type', $product->cable_type ?? '') }}" />
        </div>
        <div class="col-span-full">
            <x-forms.input label="Size (AWG/mm<sup>2</sup>)" name="size"
                value="{{ old('size', $product->size ?? '') }}" />
        </div>
        <div class="col-span-full">
            <x-forms.input label="Rated Voltage" name="rated_voltage"
                value="{{ old('rated_voltage', $product->rated_voltage ?? '') }}" />
        </div>
        <p class="text-bold">Colour Available</p>
        <div class="grid grid-cols-10 gap-2">
            @foreach ($colors as $color)
                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="colour[]" value="{{ $color->code }}"
                        {{ in_array($color->code, old('colour', $selectedColours ?? [])) ? 'checked' : '' }}>
                    <span class="w-4 h-4 rounded" style="background-color: {{ $color->code }}"></span>
                    <span>{{ $color->name }}</span>
                </label>
            @endforeach
        </div>
        <div class="col-span-full">
            <x-forms.input label="Application" name="application"
                value="{{ old('application', $product->application ?? '') }}" />
        </div>
        <x-forms.divider />
        <h2 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900">Technical Data</h2>
        <div class="col-span-full">
            <x-forms.input label="Product Standard" name="product_standard"
                value="{{ old('product_standard', $product->product_standard ?? '') }}" />
        </div>
        <div class="col-span-full">
            <x-forms.fieldset>
                RoHS Compliance
                <div class="mt-2 flex gap-x-6">
                    <x-forms.radio label="Yes" id="yes" name="rohs" value="1" :checked="old('rohs', $product->rohs ?? null) == '1'" />
                    <x-forms.radio label="No" id="no" name="rohs" value="0" :checked="old('rohs', $product->rohs ?? null) == '0'" />
                </div>
            </x-forms.fieldset>
        </div>
        <div class="col-span-full">
            <x-forms.input label="Heat Resistance Class" name="heat_resistance"
                value="{{ old('heat_resistance', $product->heat_resistance ?? '') }}" />
        </div>
        <div class="col-span-full">
            <x-forms.input label="Rating Voltage" name="rating_voltage"
                value="{{ old('rating_voltage', $product->rating_voltage ?? '') }}" />
        </div>
        <div class="col-span-full">
            <x-forms.input label="Test" name="test" value="{{ old('test', $product->test ?? '') }}" />
        </div>
        <x-forms.divider />
        <h2 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900">Details</h2>
        <div class="col-span-full">
            <x-forms.textarea label="Product Description" name="description"
                id="description">{{ old('description', $product->description ?? '') }}</x-forms.textarea>
        </div>
        <div class="col-span-full">
            <p class="text-xs text-red-700">* Jika Upload Ulang Otomatis File Lama Akan Terganti</p>
            <x-forms.input label="Upload Data Sheet (PDF)" name="data_sheet" type="file" accept=".pdf" />
        </div>
        @if ($product->data_sheet)
            <div class="mt-2">
                <p class="text-sm text-gray-700">Data Sheet saat ini:</p>
                <a href="{{ asset('storage/' . $product->data_sheet) }}" target="_blank"
                    class="text-indigo-600 hover:underline">
                    Lihat / Download Data Sheet
                </a>
            </div>
        @endif

        <x-forms.divider />
        <x-forms.button>Edit</x-forms.button>
    </x-forms.form>
</x-admin.layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ==========================
        // Handle Dynamic Dropdown (Parent & Child Categories)
        // ==========================
        const parentSelect = document.getElementById('product_group_id');
        const childSelect = document.getElementById('category_type');
        const childCategories = @json($childGroups); // Data dari Laravel

        parentSelect.addEventListener('change', function() {
            const selectedParentId = this.value;
            childSelect.innerHTML = '<option selected disabled>Pilih</option>'; // Reset child options

            childCategories.forEach(child => {
                if (child.parent_id == selectedParentId) {
                    const option = new Option(child.name, child.id);
                    childSelect.add(option);
                }
            });
        });

        // ==========================
        // Preview & Hapus Gambar Baru
        // ==========================
        const input = document.getElementById('images');
        const previewContainer = document.getElementById('image-preview-container');
        let imagesArr = [];

        input.addEventListener('change', function(event) {
            const newFiles = Array.from(event.target.files);

            newFiles.forEach(file => {
                if (!file.type.startsWith('image/')) return;

                imagesArr.push(file);
                updateFileInput();

                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgContainer = document.createElement('div');
                    imgContainer.classList.add('relative', 'w-24', 'h-24', 'border',
                        'rounded-lg', 'overflow-hidden');

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('w-full', 'h-full', 'object-cover');

                    const removeBtn = document.createElement('button');
                    removeBtn.innerHTML = '✖';
                    removeBtn.classList.add(
                        'absolute', 'top-1', 'right-1', 'bg-red-500',
                        'text-white', 'rounded-full', 'w-5', 'h-5', 'flex',
                        'items-center', 'justify-center', 'text-xs'
                    );

                    removeBtn.addEventListener('click', function() {
                        const index = imagesArr.indexOf(file);
                        if (index !== -1) {
                            imagesArr.splice(index, 1);
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

        function updateFileInput() {
            const newFileList = new DataTransfer();
            imagesArr.forEach(file => newFileList.items.add(file));
            input.files = newFileList.files;
        }

        // ==========================
        // Hapus Gambar Lama
        // ==========================
        let deletedImages = [];

        window.removeOldImage = function(id, btnElement) {
            deletedImages.push(id);
            document.getElementById('deleted-images').value = JSON.stringify(deletedImages);
            btnElement.closest('div').remove();
        };
    });
</script>
