<x-users.layout>
    <x-users.panel>
        <x-users.section>
            <div
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert pl-5">
                <header class="mb-4 lg:mb-6 not-format">
                    <x-users.heading>{{ $newroom['title'] }}</x-users.heading>
                    <x-admin.author> By Admin | Published
                        {{ $newroom->created_at->format('d F Y') }}</x-admin.author>
                </header>
            </div>
            <div class="flex flex-col items-center gap-4">
                @php
                    $images = json_decode($newroom->image, true) ?? [];
                @endphp

                {{-- Main Image --}}
                <div class="w-3/5 mb-4">
                    @if (isset($images[0]))
                        <img id="mainImage" class="w-full h-auto rounded-lg" src="{{ asset('storage/' . $images[0]) }}"
                            alt="Main Image">
                    @else
                        <img class="w-full h-auto rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="Main Image">
                    @endif
                </div>

                {{-- Thumbnails --}}
                @if (count($images) > 1)
                    <div class="w-3/5 relative">
                        <div id="thumbnailContainer"
                            class="overflow-x-auto flex gap-4 scroll-smooth px-2 py-2 whitespace-nowrap border rounded-md">
                            @foreach (array_slice($images, 1) as $img)
                                <div class="flex-shrink-0 w-32 sm:w-36 md:w-40">
                                    <img class="w-full h-auto rounded-md cursor-pointer thumbnail-img"
                                        src="{{ asset('storage/' . $img) }}" alt="Thumbnail">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
            <!-- Article Below Images -->
            <article class="mx-auto w-3/5 text-base/7 text-justify leading-relaxed text-gray-800 mt-8">
                <p>
                    {!! $newroom['body'] !!}
                </p>

            </article>
            <div class="flex flex-col gap-4 items-end mt-12">
                <address class="flex items-end not-italic">

                </address>
            </div>
            <div class="mx-auto mt-10 w-3/5 border-t border-gray-300 pt-10"></div>
            <section class="bg-gray-0 py-4">
                <div class="text-center mb-6">
                    <h2 class="text-3xl font-bold">Newsroom</h2>
                    <p class="text-gray-500">The latest news and updates, direct from EWINDO</p>
                </div>
                <div class="text-center">
                    <a href="/newsroom">
                        <button
                            class="cursor-pointer py-2 px-6 rounded-full hover:bg-yellow-600 bg-yellow-500 text-white font-semibold">Read
                            More</button>
                    </a>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const mainImage = document.getElementById('mainImage');
                        const thumbnails = document.querySelectorAll('.thumbnail-img');

                        thumbnails.forEach(thumbnail => {
                            thumbnail.addEventListener('click', function() {
                                const tempSrc = mainImage.src;
                                mainImage.src = this.src;
                                this.src = tempSrc;
                            });
                        });
                    });
                </script>
            </section>
        </x-users.section>
    </x-users.panel>
</x-users.layout>
