<x-users.layout>

    <x-users.panel>
        <x-users.section>
            <x-users.heading>Newsroom</x-users.heading>

            {{-- Banner Section --}}
            <div class="w-full rounded-xl overflow-hidden shadow-lg">
                <div class="w-full min-h-[400px] bg-center bg-cover relative flex items-end p-6"
                    style="background-image: url('{{ asset('/storage/images/hero/2.png') }}')">
                    <div class="flex items-start justify-items-start w-full h-full py-6">
                        <div class="text-left">
                            <div class="container mx-auto">
                                <div class="max-w-4xl mx-auto text-left">
                                    <h2 class="text-4xl font-extrabold tracking-wide text-gold shadow-text sm:text-4xl uppercase px-4 py-2 mt-8 rounded-lg"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 1)">
                                        What's New
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-users.section>
    </x-users.panel>

    <x-users.panel>

        <div class="bg-white py-24 sm:py-16">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 mb-8 mx-64">

                    @foreach ($categories as $category)
                        <a href="/newsroom/{{ $category->slug }}"
                            class="category-button bg-gray-200 text-center py-4 px-13 rounded shadow hover:bg-gray-300 hover:text-yellow-500 focus:text-yellow-500 transitio">
                            <button class="n">
                                {{ $category->name }}
                            </button></a>
                    @endforeach

                </div>
                <div
                    class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    @foreach ($articles as $article)
                        @php
                            $images = json_decode($article->image, true) ?? [];
                            $firstImage = $images[0] ?? null;
                        @endphp
                        <div class="border border-gray-300 rounded-2xl p-4">
                            <article class="flex max-w-xl flex-col items-start justify-between">
                                @if ($firstImage)
                                    <img src="{{ asset('storage/' . $firstImage) }}"
                                        class="w-full h-48 rounded-lg mb-4" />
                                @else
                                    <img src="{{ asset('storage/images/newsroom/google-hq.png') }}"
                                        alt="Default Article Image" class="w-full h-48 rounded-lg mb-4" />
                                @endif
                                <div class="flex items-center gap-x-4 text-xs">
                                    <p>{{ $article->created_at->diffForHumans() }}</p>
                                    <a href="#"
                                        class="relative z-10 rounded-full bg-yellow-500 px-3 py-1.5 font-medium text-white hover:bg-yellow-400 cursor-default">{{ $article->category->name }}</a>
                                </div>
                                <div class="group relative">
                                    <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                                        <a href="/categories/{{ $article->slug }}">
                                            <span class="absolute inset-0"></span>
                                            {{ $article->title }}
                                        </a>
                                    </h3>
                                    <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">
                                        {!! Str::limit($article->body, 150) !!}
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
                                                IT
                                            </a>
                                        </p>
                                        <p class="text-gray-600">{{ $article->user->name }}</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="mt-10">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>



        </x-users-panel>

</x-users.layout>
