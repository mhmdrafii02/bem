@extends('layouts.app')
@section('content')
<x-nav />
<header class="h-[60vh] bg-custom-purple w-full mt-16 flex items-center justify-center">
    <h1 class="text-center text-6xl font-bold text-white leading-tight tracking-widest">DEPARTEMEN
        <br>{{ $departement->name }}
    </h1>
</header>
{{-- @forelse ($divisi as $itemdivisi)
    <h1 class="text-center my-16 text-4xl font-bold tracking-widest">{{ $itemdivisi->name }}</h1>
    <section class="flex flex-col md:flex-row items-center gap-8 mb-16 max-w-7xl mx-auto px-5 justify-center flex-wrap">
        @forelse ($itemdivisi->anggotas as $itemAnggota)
            <img src="{{ Storage::url($itemAnggota->avatar) }}" alt=""
                class="h-[25rem] rounded-xl cursor-pointer hover:scale-105 transition" />
        @empty
            <p>Belum ada divisi</p>
        @endforelse
    </section>
@empty
    <p class="text-center">Belum ada data divisi</p>
@endforelse --}}

@forelse ($divisi as $itemdivisi)
    <h1 class="text-custom-purple text-center my-16 text-4xl font-bold tracking-widest">{{ $itemdivisi->name }}</h1>
    <section class="flex flex-col md:flex-row items-center gap-8 mb-16 max-w-7xl mx-auto px-5 justify-center flex-wrap">
        @forelse ($itemdivisi->anggotas as $key => $itemAnggota)
            <div class="relative">
                <img src="{{ Storage::url($itemAnggota->avatar) }}" alt=""
                    class="h-[25rem] rounded-xl cursor-pointer hover:scale-105 transition 
                    @if ($loop->iteration == 1 || $loop->iteration == 3) translate-y-10 @endif" />
            </div>
        @empty
            <p>Belum ada anggota</p>
        @endforelse
    </section>
@empty
    <p class="text-center">Belum ada data divisi</p>
@endforelse


@endsection