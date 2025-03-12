@extends('layouts.app')

@section('content')
<div class="h-[112px]">
    <x-nav />
</div>
<section id="Category" class="w-full max-w-[1440px] mx-auto px-5 lg:px-[52px] mt-16 mb-[100px]">
    <div class="flex flex-col gap-16">
        <div class="flex flex-col items-center gap-1">
            <p class="font-extrabold text-[32px] capitalize text-custom-purple">Detail Artikel</p>
            <div class="flex items-center gap-2 text-black">
                <a href="/article" class="last:font-semibold">Homepage</a>
                <span>></span>
                <a class="last:font-semibold">Artikel Detail</a>
            </div>
        </div>

        <main class="flex flex-col lg:flex-row gap-8">
            <section id="Details"
                class="flex flex-col w-full lg:w-[824px] rounded-2xl gap-8 p-8 bg-white drop-shadow-lg">
                <div id="Thumbnail" class="relative flex w-full lg:h-[369px] rounded-2xl overflow-hidden bg-[#D9D9D9]">
                    <img src="{{ $articles->thumbnail ? Storage::url($articles->thumbnail) : asset('default-thumbnail.jpg') }}"
                        class="w-full h-full object-cover" alt="thumbnail">
                </div>
                <section id="Header" class="flex flex-col gap-6">
                    <div id="Rating" class="flex items-center gap-4">
                        <div
                            class="flex items-center rounded-md border border-aktiv-green py-2 px-3 gap-[5px] bg-purple-gradient text-white">
                            <p class="font-medium capitalize">
                                {{ $articles->category->title ?? 'Tanpa Kategori' }}</p>
                        </div>
                        <div
                            class="flex items-center rounded-md border border-aktiv-green py-2 px-3 gap-[5px] bg-aktiv-green/[9%]">
                            <p class="font-medium capitalize">
                                <i class="ri-calendar-2-line px-1"></i>{{ $articles->created_at->format('d M Y') }}
                            </p>
                        </div>
                    </div>
                    <div id="Title" class="flex flex-col gap-3">
                        <h1 class="font-bold text-2xl leading-[33.6px] capitalize">{{ $articles->title }}</h1>
                    </div>
                </section>
                <div class="group prose prose-lg text-sm relative font-medium leading-[28.8px]">
                    {!! $articles->content !!}
                </div>
            </section>

            <aside id="Sidebar" class="flex flex-col w-full lg:w-[520px] gap-8 drop-shadow-lg">
                <div class="flex flex-col rounded-3xl p-8 gap-4 bg-white">
                    <h2 class="font-bold text-xl leading-[27.5px]">Detail Penulis</h2>
                    <div class="flex items-center gap-3">
                        <div class="flex w-16 h-16 shrink-0 rounded-full overflow-hidden bg-[#D9D9D9]">
                            <img src="https://secure.gravatar.com/avatar/06e3ef9aa7f1c9408b8711de8fedf7af?s=300&d=mm&r=g"
                                class="w-full h-full object-cover" alt="photo">
                        </div>
                        <div class="flex flex-col gap-[2px] flex-1">
                            <p class="font-semibold text-lg leading-[27px]">{{ $user->name ?? 'Anonim' }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-3xl py-8 gap-6 bg-white">
                    <h2 class="font-bold text-xl leading-[27.5px] mx-8">Postingan Terbaru</h2>
                    <div
                        class="max-h-[512px] overflow-y-auto scrollbar-thin scrollbar-thumb-purple-gradient scrollbar-track-gray-200 scrollbar-thumb-rounded-full">
                        @forelse ($latestArticles as $itemArticles)
                        <a href="{{ route('front.detailArticle', $itemArticles->slug) }}"
                            class="flex items-center justify-between mx-8 p-3 rounded-2xl border border-r-2 border-b-2 border-[#E6E7EB] gap-3 h-24 mb-2">
                            
                            <!-- Bagian Teks -->
                            <div class="flex flex-col gap-1 flex-grow order-2">
                                <p class="font-semibold text-sm">{{ $itemArticles->title }}</p>
                                <p class="font-semibold text-xs text-gray-500">
                                    <i class="ri-calendar-2-line px-1"></i>{{ $itemArticles->created_at->format('d M Y') }}
                                </p>
                            </div>
                            
                            <!-- Gambar -->
                            <img src="{{ $itemArticles->thumbnail ? Storage::url($itemArticles->thumbnail) : asset('default-thumbnail.jpg') }}" 
                                 class="w-20 h-20 aspect-square rounded-2xl object-cover order-1" 
                                 alt="icon">
                         
                         </a>
                         
                        @empty
                            <p class="mx-8">Belum ada artikel</p>
                        @endforelse
                    </div>
                </div>
            </aside>
        </main>
    </div>
</section>
<x-footer />
@endsection