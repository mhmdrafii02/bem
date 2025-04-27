@extends('layouts.app')
@section('content')
    <x-nav/>
 {{-- <!-- Hero Section -->
 <section class="relative">
  <div class="relative">
    <img src="/images/news/hero.png" alt="Background Image" class="w-full h-64 sm:h-96 object-cover" />
    <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center">
      <p class="text-white text-center text-xl sm:text-2xl lg:text-2xl font-bold pt-48 lg:pt-80 md:pt-80 sm:pt-80 px-2">Universitas Trilogi dan Kemnaker perkuat pendampingan TKMP</p>
    </div>
  </div>
</section> --}}
<!-- Hero Section -->
<section class="relative">
  <div class="relative">
    @php
      $latestArticle = $articles->first(); // Ambil artikel terbaru
    @endphp
    @if ($latestArticle)
      <a href="{{ route('front.detailArticle', $latestArticle->slug) }}">
        <img src="{{ Storage::url($latestArticle->thumbnail) }}" alt="Background Image" class="w-full h-64 sm:h-96 object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center">
          <p class="text-white text-center text-xl sm:text-2xl lg:text-2xl font-bold pt-48 lg:pt-80 md:pt-80 sm:pt-80 px-2">
            {{ $latestArticle->title }}
          </p>
        </div>
      </a>
    @endif
  </div>
</section>
<!-- Berita -->
{{-- <section class="max-w-5xl mx-auto px-4 py-8">
  <h2 class="text-xl sm:text-2xl font-bold text-purple-900 border-b-4 border-green-400 pb-2">BERITA UTAMA</h2>
  <main class="flex flex-col lg:flex-row gap-5">
    <article class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-4 w-full lg:w-3/4 order-2 lg:order-1">
      @forelse ($articles as $itemArticle)
      <a href="{{ route('front.detailArticle', $itemArticle->slug) }}" class="bg-white rounded-xl shadow-xl border overflow-hidden">
        <img src="{{ Storage::url($itemArticle->thumbnail) }}" alt="Berita 1" class="w-full h-40 sm:h-48 object-cover" />
        <div class="p-3">
          <h3 class="text-sm sm:text-base font-semibold text-gray-800 hover:underline line-clamp-3">{{ $itemArticle->about }}</h3>
        </div>
      </a>
      @empty
          <p>Empty</p>
      @endforelse
    </article>
    <div class="mt-6">
      {{ $articles->links() }}
    </div>
    <aside class="w-full lg:w-1/4 mt-2 border rounded-xl shadow-lg p-3 order-1 lg:order-2 max-h-[330px] overflow-auto flex flex-col gap-y-2">
      @forelse ($category as $itemCategory)
          <a href="" class="border inline-block p-5 w-full rounded-xl hover:border-blue-600">
            <h1 class="text-lg tracking-wide font-semibold">{{ $itemCategory->title }}</h1>
            <p class="text-base text-gray-600 font-semibold">{{ $itemCategory->tagline }}</p>
          </a>
      @empty
          
      @endforelse
    </aside>
  </main>
</section> --}}

<div class="max-w-5xl mx-auto px-4 py-8">
  <h2 class="text-xl sm:text-2xl font-bold text-purple-900 border-b-4 border-green-400 pb-2 mb-6">BERITA UTAMA</h2> 
  
  <!-- Swiper Wrapper -->
  <div class="swiper mySwiperBerita">
    <div class="swiper-wrapper">
      @foreach ($articles as $itemArticle)
      <div class="swiper-slide">
        <a href="{{ route('front.detailArticle', $itemArticle->slug) }}" class="bg-white rounded-lg shadow-md overflow-hidden block">
          <img src="{{ Storage::url($itemArticle->thumbnail) }}" alt="Berita" class="w-full h-40 sm:h-48 object-cover" />
          <div class="p-4">
            <h3 class="text-sm sm:text-base font-semibold text-gray-800 hover:underline">{{ $itemArticle->about }}</h3>
          </div>
        </a>
      </div>
      @endforeach
    </div>

    <!-- Navigasi Swiper -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- Beasiswa -->
<div class="max-w-5xl mx-auto px-4 py-8">
  <h2 class="text-xl sm:text-2xl font-bold text-purple-900 border-b-4 border-green-400 pb-2">BEASISWA</h2>
  <div class="mt-4 space-y-4">
    @forelse ($beasiswaArticles as $beasiswaArticle)
    <a href="{{ route('front.detailArticle', $beasiswaArticle->slug) }}" class="flex flex-col sm:flex-col lg:flex-row md:flex-row bg-white rounded-lg border overflow-hidden hover:border-blue-500">
      <img src="{{ Storage::url($beasiswaArticle->thumbnail) }}" alt="Beasiswa 1" class="m-3 h-32 object-cover" />
      <div class="p-4 flex flex-col justify-center">
        <h3 class="pr-8 text-lg lg:text-left sm:text-center md:text-left text-center sm:text-base font-bold text-gray-800">{{ $beasiswaArticle->title }}</h3>
        <p class="text-gray-600 text-center md:text-left lg:text-left pr-8 sm:text-center">Pertama di Indonesia Beasiswa untuk Mahasiswa Hemat</p>
      </div>
    </a>
    @empty
        <p>Empty</p>
    @endforelse   
  </div>
</div>
@endsection