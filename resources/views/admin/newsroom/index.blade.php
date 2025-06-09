<x-admin.layout>
    <x-slot:heading>
        Press Manager
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

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="p-10">
                <!-- ADD BUTTON -->
                <div class="mt-6 flex items-center justify-center gap-x-6">
                    <a href="/admin/newsroom/create"
                        class="rounded-md bg-yellow-500 px-3 py-2 text-lg font-semibold text-white shadow-xs hover:bg-yellow-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="inline size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        News Update
                    </a>
                </div>
                <!-- Sorting & Search -->
                <div class="mt-12 flex justify-between items-center">
                    <div class="relative w-1/2 max-w-sm flex">
                        <form>
                            <input type="search" name="search" value="{{ request('search') }}" id="search"
                                placeholder="Search news..."
                                class="w-full px-4 py-2 border border-gray-300 focus:outline-2 focus:-outline-offset-1 focus:outline-yellow-500 rounded-l-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">
                            <button type="submit"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded-r-lg">
                                Search
                            </button>
                    </div>

                    <!-- Sorting Dropdown -->
                    <div>
                        <label for="sort" class="text-gray-700 font-semibold">Sort by:</label>
                        <select name="sort" class="..." onchange="this.form.submit()">
                            <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest</option>
                            <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest</option>
                        </select>

                    </div>
                    </form>
                </div>

                @if ($articles->count() > 0)
                    <div
                        class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        @foreach ($articles as $article)
                            @php
                                $images = json_decode($article->image, true) ?? [];
                                $firstImage = $images[0] ?? null;
                            @endphp

                            <div class="border border-gray-300 rounded-2xl p-4 bg-white shadow-lg">
                                <article class="flex max-w-xl flex-col items-start justify-between">
                                    @if ($firstImage)
                                        <img src="{{ asset('storage/' . $firstImage) }}" alt="Article Image"
                                            class="w-full h-48 rounded-lg mb-4" />
                                    @else
                                        <img src="{{ asset('storage/images/newsroom/google-hq.png') }}"
                                            alt="Article Image" class="w-full h-48 rounded-lg mb-4" />
                                    @endif

                                    <div class="flex items-center gap-x-4 text-xs">
                                        <time datetime="2020-03-16"
                                            class="text-gray-500">{{ $article->created_at->diffForHumans() }}</time>
                                        <a href="#"
                                            class="relative z-10 rounded-full bg-yellow-500 px-3 py-1.5 font-medium text-white hover:bg-yellow-400">{{ $article->category->name }}</a>
                                    </div>
                                    <div class="group relative">
                                        <h3
                                            class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                                            <a href="newsroom/{{ $article->slug }}">
                                                <span class="absolute inset-0"></span>
                                                {{ $article->title }}
                                            </a>
                                        </h3>
                                        <p class="my-5 line-clamp-3 text-sm/6 text-gray-600">
                                            {!! Str::limit($article->body, 150) !!}
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 mt-4">
                                        <!-- Tombol Edit -->
                                        <a href="/admin/newsroom/{{ $article->slug }}/edit"
                                            class="text-md text-blue-600 font-semibold hover:underline"
                                            onclick="return confirm('Are you sure want to edit this?')">Edit</a>

                                        <!-- Tombol Delete -->
                                        <form action="/admin/newsroom/{{ $article->slug }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this?')">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                class="text-md text-red-600 font-semibold hover:underline cursor-pointer">Delete</button>
                                        </form>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-10">
                        {{ $articles->links() }}
                    </div>
                @else
                    {{-- Pesan jika tidak ada produk --}}
                    <div class="text-center py-10 text-gray-600">
                        News tidak ditemukan.
                    </div>
                @endif
            </div>
        </div>
    </main>
</x-admin.layout>
