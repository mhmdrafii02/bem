@extends('layouts.app');
@section('content')
<x-nav />
<header class="h-[60vh] bg-custom-purple w-full mt-16 flex items-center justify-center">
    <h1 class="text-center text-6xl font-bold text-white">Struktur <br> BEM Universitas Trilogi</h1>
</header>
<section class="flex flex-col md:flex-row items-center gap-8 my-16 max-w-7xl mx-auto px-5 justify-center">
    <img src="{{ asset('images/images/pres-wapres/oji.png') }}" alt=""
        class="h-[25rem] rounded-xl cursor-pointer hover:scale-105 transition" />
    <img src="{{ asset('images/images/pres-wapres/raehan.png') }}" alt=""
        class="h-[25rem] rounded-xl cursor-pointer hover:scale-105 transition" />
</section>
{{-- @forelse ($departement as $itemdepartement)
    <section class="py-24 relative">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="relative w-full p-6 rounded-2xl overflow-hidden"
                style="background: url('{{ Storage::url($itemdepartement->thumbnail) }}') no-repeat center/cover;">
                
                    <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                        <div
                            class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                            <img class="sm:ml-0 ml-auto rounded-xl object-cover"
                                src="{{ Storage::url($itemdepartement->avatar) }}" alt="about Us image"
                                class="hover:scale-105" />
                            <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                                <img class=" rounded-xl object-cover" src="{{ Storage::url($itemdepartement->avatar2) }}"
                                    alt="about Us image" />
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                            <div class="w-full flex-col justify-center items-start gap-8 flex">
                                <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                    <h2
                                        class="text-gray-900 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                        {{ $itemdepartement->name }}</h2>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                        {{ $itemdepartement->about }}</p>
                                </div>
                            </div>
                            <a href="{{ route('front.detailDepartment', $itemdepartement->slug) }}"
                                class="sm:w-fit w-full px-3.5 py-2 bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                                <span
                                    class="px-1.5 text-white text-sm font-medium leading-6">{{ $itemdepartement->name }}</span>
                            </a>
                        </div>
                    </div>
            </div>    
        </div>
    </section>

@empty
    <p class="text-center">Belum ada data department</p>
@endforelse --}}

@forelse ($departement as $itemdepartement)
    <section class="py-20 relative">
        <div class="container mx-auto px-6 md:px-8 lg:px-10">
            <div class="relative rounded-lg shadow-md w-full p-6 md:p-10 text-white flex flex-col md:flex-row overflow-hidden"
                style="background-image: url('{{ Storage::url($itemdepartement->thumbnail) }}'); background-size: cover; background-position: center;">
                
                <!-- Overlay untuk efek transparan -->
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                
                <!-- Bagian Foto -->
                <div class="relative w-full md:w-1/2 flex flex-col md:flex-row justify-center md:justify-start items-center gap-6 p-4">
                    <div class="flex flex-row md:flex-row items-center justify-center md:items-start relative gap-4">
                        <img class="rounded-xl object-cover w-[40%] md:w-[260px] h-auto md:h-[325px] shadow-md md:mt-[-10px]" 
                            src="{{ Storage::url($itemdepartement->avatar) }}" alt="Avatar 1" />
                        <img class="rounded-xl object-cover w-[40%] md:w-[260px] h-auto md:h-[325px] shadow-md md:ml-4 md:mt-8" 
                            src="{{ Storage::url($itemdepartement->avatar2) }}" alt="Avatar 2" />
                    </div>
                </div>
                
                <!-- Bagian Teks -->
                <div class="relative w-full md:w-1/2 flex flex-col justify-center items-center md:items-start gap-6 text-center md:text-left p-4">
                    <h2 class="text-4xl md:text-5xl font-bold md:mt-[-20px]">{{ $itemdepartement->name }}</h2>
                    <p class="mt-2">{{ $itemdepartement->about }}</p>
                    <a href="{{ route('front.detailDepartement', $itemdepartement->slug) }}" 
                        class="w-full max-w-[33.33%] min-w-min font-bold bg-gradient-to-r from-purple-700 to-purple-900 text-green-300 py-2 px-4 rounded-lg hover:opacity-90 shadow-md">
                        {{ $itemdepartement->name }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@empty
    <p class="text-center">Belum ada data department</p>
@endforelse

@endsection