@extends('layouts.app')
@section('content')
{{-- Navbar --}}
<x-nav />
{{-- hero --}}
<x-hero />
{{-- About --}}
<x-about />

<section class="bg-purple-gradient h-[80%] flex flex-col justify-center">
    <header class="text-center flex flex-col items-center w-full max-w-7xl mx-auto px-5 mb-7">
        <h1 class="text-white text-2xl md:text-3xl lg:text-4xl font-bold mt-6">DOKUMENTASI PROGRAM KERJA</h1>
    </header>
    <div class="w-full relative max-w-7xl mx-auto">
        <div class="swiper multiple-slide-carousel swiper-container relative mt-12 md:mt-1">
            <div class="swiper-wrapper md:mb-16">
                @foreach ($documentasis->sortByDesc('created_at')->chunk(2) as $chunk)
                    <div class="swiper-slide flex gap-4">
                        @foreach ($chunk as $itemdocumentasis)
                            <!-- Tambahkan 'group' di sini -->
                            <div class="relative bg-white rounded-lg overflow-hidden shadow-lg w-1/2 group">
                                <img src="{{ Storage::url($itemdocumentasis->avatar) }}" class="w-full h-64 object-cover" alt="{{ $itemdocumentasis->title }}">
                                
                                <!-- Kotak Ungu yang muncul saat hover -->
                                <div class="bg-purple-gradient p-3 rounded-xl opacity-0 absolute bottom-4 left-4 z-20 
                                    transition duration-300 ease-in-out group-hover:opacity-100 group-hover:-translate-y-1 
                                    group-focus:opacity-100">
                                    <h1 class="text-base font-bold text-white">{{ $itemdocumentasis->title }}</h1>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach

            </div>

            <!-- Navigasi Button -->
            <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-10">
                <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-black !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-green-gradient !-translate-x-16">
                    <svg class="h-5 w-5 text-black group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-black !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-green-gradient !translate-x-16">
                    <svg class="h-5 w-5 text-black group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <header class="text-center my-16 flex justify-center max-w-7xl mx-auto px-5">
        <h1 class="text-purple-gradient text-2xl md:text-3xl lg:text-4xl font-bold">APRESIASI MAHASISWA</h1>
    </header>
    

    <div class="w-full relative max-w-7xl mx-auto">
        <div id="swiper-apresiasi" class="swiper-container max-w-full mx-auto overflow-hidden">
            <div class="swiper-wrapper md:mb-16">
                @foreach ($apresiasis as $itemapresiasis)  
                    <div class="swiper-slide flex justify-center items-center">  
                        <div class="m-2 space-y-2">
                            <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                <div class="group relative mx-auto flex h-[400px] w-[280px] rounded-xl">
                                    <div class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200">
                                        <img src="{{ Storage::url($itemapresiasis->foto) }}"
                                            class="block h-full w-full object-cover object-center" 
                                            alt="" />
                                    </div>
                                    <div class="bg-purple-gradient p-4 rounded-xl opacity-0 absolute bottom-0 z-20 transition duration-300 ease-in-out group-hover:scale-105 group-hover:opacity-100">
                                        {{-- <h1 class="text-lg font-bold text-white">{{ $itemapresiasis->nama }}</h1> --}}
                                        <h2 class="text-base font-light text-gray-200">{{ $itemapresiasis->prestasi }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 🔹 Navigasi Button -->
            <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                <button id="apresiasi-prev"
                    class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-purple-gradient !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-purple-gradient !-translate-x-16"
                    data-carousel-prev>
                    <svg class="h-5 w-5 text-purple-gradient group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button id="apresiasi-next"
                    class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-purple-gradient !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-purple-gradient !translate-x-16"
                    data-carousel-next>
                    <svg class="h-5 w-5 text-purple-gradient group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="my-16 max-w-7xl mx-auto px-5">
    <header class="text-center my-16 flex justify-center">
        <h1 class="text-purple-gradient text-2xl md:text-3xl lg:text-4xl font-bold">WEBSITE TERKAIT</h1>
    </header>
    {{-- <main class="flex flex-col md:flex-row items-center gap-8  justify-center">
        <a href="" class="w-full px-4 md:w-1/2 xl:w-1/3 block">
            <div class="mb-10 overflow-hidden duration-300 bg-white rounded-2xl shadow-md hover:shadow-lg min-h-[300px] lg:min-h-[450px] flex flex-col">
                <img src="{{ asset('images/images/sevi.svg') }}" alt="image"
                    class="w-full h-[200px] lg:h-[300px] object-cover transition-transform duration-300 transform hover:scale-105" />
                <div class="p-5 text-center flex flex-col justify-between h-full">
                    <h3 class="mb-4 block text-base font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl line-clamp-2">
                        SIAKAD Trilogi
                    </h3>
                    <h2 class="mb-4 block text-sm text-gray-600 font-semibold line-clamp-2 hover:line-clamp-none transition-all duration-300">
                        Sistem Informasi Akademik yang dirancang untuk meningkatkan efisiensi dan kemudahan dalam pengelolaan administrasi akademik kampus secara daring.
                    </h2>
                    <div
                        class="w-full flex items-center justify-center gap-2 border border-green whitespace-nowrap bg-green px-5 py-2 md:py-4 rounded-xl text-white text-center bg-purple-gradient text-xs md:text-base">
                        Selengkapnya..
                     </div>
                </div>
            </div>
        </a>
        
        <a href="" class="w-full px-4 md:w-1/2 xl:w-1/3 block">
            <div class="mb-10 overflow-hidden duration-300 bg-white rounded-2xl shadow-md hover:shadow-lg min-h-[300px] lg:min-h-[450px] flex flex-col">
                <img src="{{ asset('images/images/maskot 1@2x.svg') }}" alt="image"
                    class="w-full h-[200px] lg:h-[300px] object-cover transition-transform duration-300 transform hover:scale-105" />
                <div class="p-5 text-center flex flex-col justify-between h-full">
                    <h3 class="mb-4 block text-base font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl line-clamp-2">
                        PKKMB Trilogi
                    </h3>
                    <h2 class="mb-4 block text-sm text-gray-600 font-semibold line-clamp-2 hover:line-clamp-none transition-all duration-300">
                        Sebuah platform informasi resmi yang dirancang untuk memberikan pembaruan terkini terkait PKKMB di Universitas Trilogi.
                    </h2>
                    <div
                        class="w-full flex items-center justify-center gap-2 border border-green whitespace-nowrap bg-green px-5 py-2 md:py-4 rounded-xl text-white text-center bg-purple-gradient text-xs md:text-base">
                        Selengkapnya..
                     </div>
                </div>
            </div>
        </a>
    </main> --}}
    <main class="flex flex-col md:flex-row items-center gap-8 justify-center">
        @foreach ($terkaits as $itemterkait)
            <a href="{{ $itemterkait->link }}" class="w-full px-4 md:w-1/2 xl:w-1/3 block">
                <div class="mb-10 overflow-hidden duration-300 bg-white rounded-2xl shadow-md hover:shadow-lg min-h-[300px] lg:min-h-[450px] flex flex-col">
                    <img src="{{ Storage::url($itemterkait->thumbnail) }}" alt="image"
                        class="w-full h-[200px] lg:h-[300px] object-cover transition-transform duration-300 transform hover:scale-105" />
                    <div class="p-5 text-center flex flex-col justify-between h-full">
                        <h3 class="mb-4 block text-base font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl line-clamp-2">
                            {{ $itemterkait->title }}
                        </h3>
                        <h2 class="mb-4 block text-sm text-gray-600 font-semibold line-clamp-2 hover:line-clamp-none transition-all duration-300">
                            {{ $itemterkait->isi }}
                        </h2>
                        <div
                            class="w-full flex items-center justify-center gap-2 border border-green whitespace-nowrap bg-green px-5 py-2 md:py-4 rounded-xl text-white text-center bg-purple-gradient text-xs md:text-base">
                            Selengkapnya..
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </main>
    
</section>

{{-- footer --}}
<x-footer />
@endsection