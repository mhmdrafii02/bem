@extends('layouts.app')
@section('content')
<x-nav/>

<main class="flex-grow">
    {{-- Hero --}}
    <header class="h-[60vh] bg-custom-purple w-full mt-16 flex items-center justify-center">
        <img src="{{ asset('images/images/homepage/bem.png') }}" alt="" class="h-[20vh]" />
    </header>

    {{-- Foto Ketua dan Wakil Ketua --}}
    <div class="relative justify-center w-full p-8 lg:p-24 flex gap-4">
      <!-- Gambar kiri -->
      <img 
        src="{{ asset('images/images/pres-wapres/oji.png') }}" 
        alt="Small 1" 
        class="w-[28%] h-auto rounded-lg shadow-md translate-y-[-10%]"
      >
      <!-- Gambar kanan -->
      <img 
        src="{{ asset('images/images/pres-wapres/raehan.png') }}" 
        alt="Small 2" 
        class="w-[28%] h-auto rounded-lg shadow-md translate-y-[10%]"
      >
    </div> 
   

    {{-- Visi & Misi --}}
    <section class="container mx-auto flex flex-col md:flex-row gap-4 m-2  p-0 lg:p-10 text-center justify-center items-center">
      <!-- Box Visi -->
      <div class="group perspective w-1/2 h-64 cursor-pointer">
        <div class="relative preserve-3d w-full h-full duration-1000 group-hover:my-rotate-y-180">
          <!-- Front Side -->
          <div class="absolute w-full h-full backface-hidden bg-gradient-to-br from-purple-gradient to-black-gradient flex justify-center items-center p-8 rounded-lg">
            <h1 class="text-5xl font-bold bg-gradient-to-b from-white to-green-gradient text-transparent bg-clip-text">
              VISI
            </h1>
          </div>
          <!-- Back Side -->
          <div class="absolute w-full h-full backface-hidden bg-cover bg-center flex justify-center items-center p-8 rounded-lg my-rotate-y-180" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/tbp.png');">
            <p class="text-white text-sm lg:text-lg font-semibold">
              BEM Trilogi yang inklusif, progresif, dan konstruktif. Dalam rangka mewujudkan bergerak berdampak bagi IKM Trilogi, Universitas Trilogi, dan NKRI.
            </p>
          </div>
        </div>
      </div>
    
      <!-- Box Misi -->
      <div class="group perspective w-1/2 h-64 cursor-pointer">
        <div class="relative preserve-3d w-full h-full duration-1000 group-hover:my-rotate-y-180">
          <!-- Front Side -->
          <div class="absolute w-full h-full backface-hidden bg-gradient-to-br from-purple-gradient to-black-gradient flex justify-center items-center p-8 rounded-lg">
            <h1 class="text-5xl font-bold bg-gradient-to-b from-white to-green-gradient text-transparent bg-clip-text">
              MISI
            </h1>
          </div>
          <!-- Back Side -->
          <div class="absolute w-full h-full backface-hidden bg-cover bg-center flex justify-center items-center p-2 lg:p-8 rounded-lg my-rotate-y-180" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('images/gerilya.png');">
            <div class="text-white text-sm lg:text-lg text-left font-semibold overflow-y-auto h-full">
              <p>1. Menciptakan iklim organisasi di lingkungan kampus yang demokratis dan kolaboratif.</p>
              <p>2. Mengoptimalkan fungsi BEM Trilogi sebagai mediator terselenggaranya pendidikan dan pelayanan mahasiswa yang proaktif.</p>                
              <p>3. Mengakselerasi pengembangan Sumber Daya Manusia yang inklusif dan progresif.</p>              
              <p>4. Menghadirkan wadah eksplorasi yang dinamis untuk mendorong mahasiswa dalam berkontribusi aktif.</p>
              <p>5. Memberikan kebermanfaatan yang nyata dan berdampak dari IKM Trilogi, oleh mahasiswa, kepada Universitas Trilogi, dan untuk NKRI.</p>
            </div>
          </div>
        </div>
      </div>
    </section>                

    <section class="container mx-auto my-8 p-4">
        <section class="container mx-auto my-8 p-4">
            <!-- Judul -->
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-6 text-custom-purple">Makna Logo</h2>
          
            <!-- Logo -->
            <div class="flex justify-center mb-8">
              <img src="{{ asset('images/images/logo_bem_2.png') }}" alt="Logo BEM" class="h-24 w-24 object-contain">
            </div>
          
            <!-- Konten Makna -->
            <div class="grid grid-cols-1 m-10 md:grid-cols-3 gap-6 justify-items-center">
              <!-- Makna 1 -->
              <div class="flex md:flex-col flex-row items-center text-center md:text-center bg-gradient-to-br from-purple-gradient to-black-gradient text-white p-6 max-w-md rounded-lg">
                <img src="{{ asset('images/images/makna1_icon.png') }}" alt="Makna 1" class="h-20 w-20 object-contain mb-4 md:mb-0 md:mx-auto">
                <p class="text-sm md:text-base font-bold bg-gradient-to-b from-white to-green-gradient text-transparent bg-clip-text">
                  3 Bentuk mewakilkan 3 visi dari kabinet bergerak berdampak, yaitu progresif, inklusif, dan konstruktif.
                </p>
              </div>
          
              <!-- Makna 2 -->
              <div class="flex md:flex-col flex-row items-center text-center md:text-center bg-gradient-to-br from-purple-gradient to-black-gradient text-white p-6 max-w-md rounded-lg">
                <img src="{{ asset('images/images/makna2_icon.png') }}" alt="Makna 2" class="h-20 w-20 object-contain mb-4 md:mb-0 md:mx-auto">
                <p class="text-sm md:text-base font-bold bg-gradient-to-b from-white to-green-gradient text-transparent bg-clip-text">
                  Lingkaran pada logo kabinet bergerak berdampak bermakna 1 visi yang ingin kami tuju.
                </p>
              </div>
          
              <!-- Makna 3 -->
              <div class="flex md:flex-col flex-row items-center text-center md:text-center bg-gradient-to-br from-purple-gradient to-black-gradient text-white p-6 max-w-md rounded-lg">
                <img src="{{ asset('images/images/makna3_icon.png') }}" alt="Makna 3" class="h-20 w-20 object-contain mb-4 md:mb-0 md:mx-auto">
                <p class="text-sm md:text-base font-bold bg-gradient-to-b from-white to-green-gradient text-transparent bg-clip-text">
                  Secara garis besar logo kabinet bergerak berdampak, yaitu tanda panah ke atas yang berarti progres terus berkembang dan maju.
                </p>
              </div>
            </div>
          </section>

    {{-- Nilai Organisasi --}}
    <section class="container mx-auto my-4 p-10 text-center justify-items-center">
<h2 class="text-2xl md:text-3xl font-bold text-custom-purple mb-10">Nilai Organisasi</h2>
<div class="flex flex-wrap gap-4 justify-center">
    <!-- Progresif -->
    <div class="font-bold bg-gradient-to-br from-purple-gradient to-black-gradient p-4 rounded-lg w-[400px] basis-1/2 lg:basis-1/3 flex items-center justify-center">
        <p class= "font-bold bg-gradient-to-b from-white to-green-gradient text-transparent bg-clip-text">Progresif</p>
    </div>
    <!-- Inklusif -->
    <div class="font-bold bg-gradient-to-br from-purple-gradient to-black-gradient text-green-gradient p-4 rounded-lg w-[400px] basis-1/2 lg:basis-1/3 flex items-center justify-center">
      <p class= "font-bold bg-gradient-to-b from-white to-green-gradient text-transparent bg-clip-text">Inklusif</p>
    </div>
    <!-- Konstruktif -->
    <div class="font-bold bg-gradient-to-br from-purple-gradient to-black-gradient text-green-300 p-4 rounded-lg w-[400px] basis-1/2 lg:basis-1/3 flex items-center justify-center">
      <p class= "font-bold bg-gradient-to-b from-white to-green-gradient text-transparent bg-clip-text">Konstruktif</p>
    </div>
</div>
</section>

    
</main>
@endsection