<x-admin.layout>
    <x-slot:heading>
        Press Manager Preview
    </x-slot:heading>

    <section class="container py-10 dark:text-gray-800">
        <div
            class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert pl-5">
            <header class="mb-4 lg:mb-6 not-format">
                <h1
                    class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl text-center dark:text-gray-800">
                    {{ $newsroom->title }}</h1>
            </header>
        </div>
        <div class="flex flex-col items-center gap-4">
            {{-- Main Image --}}
            @php
                $firstImage = $newsroom->newsroom_images->first();
            @endphp

            @if ($firstImage)
            @endif

            <div x-data="{ currentImage: '{{ $firstImage ? asset('storage/' . $firstImage->image_path) : '' }}' }" class="space-y-4 w-4/5">
                <div>
                    <img :src="currentImage" alt="Main Image"
                        class="w-full h-[500px] rounded-lg shadow-lg object-cover">
                </div>

                {{-- Small Images --}}
                <div class="flex gap-4 overflow-x-auto max-w-full pb-2">
                    @foreach ($newsroom->newsroom_images as $image)
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Thumbnail"
                            class="w-50 h-[100px] rounded-lg border border-gray-300 cursor-pointer object-cover hover:scale-105 transition"
                            @click='currentImage = "{{ asset('storage/' . $image->image_path) }}"'>
                    @endforeach
                </div>
            </div>
            <!-- Newsroom body -->
            <article class="mx-auto w-4/5 text-base/7 text-justify leading-relaxed text-gray-800 mt-8">
                {!! $newsroom->body !!}
            </article>
            {{-- Writer Info --}}
            <div class="flex flex-col gap-4 items-end mt-12">
                <address class="flex items-end not-italic">
                    <div class="inline-flex items-end mr-32 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="#" rel="author"
                                class="text-xl font-bold text-gray-900 dark:text-gray-800"></a>
                            <p class="text-base text-gray-700 dark:text-gray-600">Administrator</p>
                            <p class="text-base text-gray-700 dark:text-gray-600"><time pubdate
                                    datetime="2025-02-04">{{ $newsroom->created_at }}</time></p>
                        </div>
                    </div>
                </address>
            </div>
            {{-- Divider --}}
            <div class="mx-auto mt-10 w-3/5 border-t border-gray-300 pt-10"></div>
            {{-- Bottom section --}}
            <section class="py-4">
                <div class="text-center mb-6">
                    <h2 class="text-3xl font-bold">Newsroom</h2>
                    <p class="text-gray-500">The latest news and updates, direct from EWINDO</p>
                </div>
                <div class="text-center">
                    <a href="/admin/newsroom">
                        <button
                            class="bg-gold py-2 px-6 rounded-full hover:bg-yellow-400 text-white font-semibold cursor-pointer">Back
                            to Newsroom Page</button>
                    </a>
                </div>
            </section>
    </section>

    </x-users.layout>
