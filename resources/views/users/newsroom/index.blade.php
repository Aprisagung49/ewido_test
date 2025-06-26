<x-users.layout>

    <x-users.panel>
        <x-users.section-product>
            <x-users.heading>Newsroom</x-users.heading>

            {{-- Banner Section --}}
            <div class="w-full rounded-xl overflow-hidden shadow-lg">
                <div class="w-full min-h-[120px] min-w-[50px] lg:min-h-[400px] bg-center bg-cover relative flex items-end pl-6 pt-16 lg:p-6"
                    style="background-image: url('{{ asset('/storage/images/hero/2.png') }}')">
                    <div class="flex items-start justify-items-start w-full h-full py-6">
                        <div class="text-left">
                            <div class="container mx-auto">
                                <div class="max-w-4xl mx-auto text-left">
                                    <h2 class="text-2xl font-extrabold tracking-wide text-gold shadow-text sm:text-4xl uppercase rounded-lg"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 1)">
                                        What's New
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-users.section-product>
    </x-users.panel>

    <x-users.panel>

        <div class="bg-white py-12 sm:py-16">
            <div class="mx-auto max-w-7xl px-8 lg:px-8">
                <div
                    class="grid grid-cols-2 gap-3 mx-auto max-w-2xl sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 mb-8 mx-64">

                    @php
                        $currentSlug = request()->segment(2); // ambil segment URL kedua
                    @endphp

                    @foreach ($categories as $category)
                        <a href="/newsroom/{{ $category->slug }}"
                            class="category-button bg-gray-200 text-center py-4 px-2 rounded shadow hover:bg-gray-200 hover:text-yellow-500 focus:text-yellow-500 transition 
                            {{ $currentSlug === $category->slug ? 'text-yellow-500 bg-gray-200' : 'bg-gray-100' }}">
                            <button class="n">
                                {{ $category->name }}
                            </button></a>
                    @endforeach
                </div>
                <div
                    class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    @if ($articles->count() > 0)
                        @foreach ($articles as $article)
                            @php
                                $firstImage = $article->newsroom_images->first();
                            @endphp
                            <div class="border border-gray-300 rounded-2xl p-4">
                                <article class="flex max-w-xl flex-col items-start justify-between">
                                    @if ($firstImage)
                                        <img src="{{ asset('storage/' . $firstImage->image_path) }}"
                                            class="w-full h-48 rounded-lg mb-4" />
                                    @else
                                        <img src="{{ asset('storage/images/newsroom/google-hq.png') }}"
                                            alt="Default Article Image" class="w-full h-48 rounded-lg mb-4" />
                                    @endif
                                    <div class="flex items-center gap-x-4 text-xs">
                                        <p>{{ $article->created_at->diffForHumans() }}</p>
                                        <a href="#"
                                            class="relative z-10 rounded-full bg-yellow-500 px-3 py-1.5 font-medium text-white hover:bg-yellow-400 cursor-pointer">{{ $article->category->name }}</a>
                                    </div>
                                    <div class="group relative">
                                        <h3
                                            class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                                            <a href="/categories/{{ $article->slug }}">
                                                <span class="absolute inset-0"></span>
                                                {{ $article->title }}
                                            </a>
                                        </h3>
                                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">
                                            {!! Str::limit(strip_tags($article->body), 150) !!}
                                        </p>

                                        <a href="/newsroom/{{ $article['id'] }}"
                                            class="hover:underline cursor-pointer text-md text-indigo-600 font-semibold">Read
                                            more &raquo;</a>
                                    </div>
                                    <div class="relative mt-8 flex items-center gap-x-4">
                                        <img src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                            alt="" class="size-10 rounded-full bg-gray-50" />
                                        <div class="text-sm/6">
                                            <p class="font-semibold text-gray-900">
                                                <a href="post.php">
                                                    <span class="absolute inset-0"></span>

                                                </a>
                                            </p>
                                            <p class="text-gray-600">ADMIN</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                </div>
                <div class="mt-10">
                    {{ $articles->links() }}
                </div>
            @else
                {{-- Pesan jika tidak ada produk --}}
                <div class="font-bold text-2xl text-gold">
                    Not Found
                </div>
                @endif
            </div>
        </div>



        </x-users-panel>

</x-users.layout>
