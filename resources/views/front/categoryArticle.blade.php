@extends('layouts.app')

@section('content')
    <x-nav/>
    <section class="bg-white">
        <header class="text-center my-16">
            <h1 class="text-purple-gradient text-2xl md:text-4xl font-bold">Artikel BEM Trilogi</h1>
            <h2 class="text-2xl font-bold">( {{ $articles->count() }} )</h2>
        </header>
        <div class="w-full relative max-w-7xl mx-auto flex flex-col md:flex-row flex-wrap gap-4">
            @forelse ($category->articles as $articles)
                <a href="" class=" w-full px-4 md:w-1/2 xl:w-1/3 block">
                    <div
                        class="mb-10 overflow-hidden duration-300 bg-white rounded-2xl shadow-md hover:shadow-lg min-h-[300px] lg:min-h-[450px] flex flex-col">
                        <!-- Gambar dengan tinggi tetap -->
                        <img src="{{ Storage::url($articles->thumbnail) }}" alt="image"
                            class="w-full h-[200px] lg:h-[300px] object-cover transition-transform duration-300 transform hover:scale-105" />
                        <!-- Wrapper konten -->
                        <div class="px-5 mt-3 text-purple-gradient flex justify-between">
                            <p><i class="ri-calendar-2-line px-1"></i>{{ $articles->created_at->format('d M Y H:i') }}
                            </p>
                            <p><i class="ri-price-tag-3-line"></i>{{ $articles->category->title }}</p>
                        </div>
                        <div class="p-5 text-start flex flex-col justify-between h-full">
                            <h3
                                class="mb-4 block text-base font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl line-clamp-2">
                                {{ $articles->title }}
                            </h3>

                            <p
                                class="text-base md:text-base leading-relaxed text-body-color mb-7 flex-1 min-h-[50px] line-clamp-2">
                                {{ $articles->content }}
                            </p>

                            <!-- Tombol -->
                            <div
                                class="w-full flex items-center justify-center gap-2 border border-green whitespace-nowrap bg-green px-5 py-2 md:py-4 rounded-xl text-white text-center bg-purple-gradient text-xs md:text-base">
                                Selengkapnya..
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <p>Belum ada data artikel terbaru</p>
            @endforelse
        </div>
    </section>
@endsection