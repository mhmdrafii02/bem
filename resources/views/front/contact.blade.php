@extends('layouts.app')
@section('content')
    <x-nav/>

    <main class="flex-grow mt-16">
        <section class="m-0 p-0 text-center">
        <div class="bg-custom-purple p-12 w-full h-60 flex flex-col items-center justify-center">
          <h1 class="text-4xl font-bold bg-gradient-to-b from-white to-green-400 text-transparent bg-clip-text">
            Kami Mendengar
          </h1>
          <h5 class="text-xl font-bold bg-gradient-to-r from-white to-green-400 text-transparent bg-clip-text mt-2">
            got any aspiration, information, or dissatisfaction?
          </h5>
        </div>
      </section>

      <section class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
          <!-- Kolom Gambar dan Informasi -->
          <div class="relative w-full md:w-[600px] min-h-[500px] rounded-lg shadow-lg bg-custom-purple overflow-hidden">
            <div class="absolute inset-0 opacity-30 bg-cover bg-center" style="background-image: url({{ asset('images/images/cek.png') }});"></div>
            <div class="relative p-6 text-gray-200 h-full flex flex-col justify-center space-y-5">
              <div>
                <p class="text-3xl font-bold">
                  We're here if needed
                </p>
                <p class="mt-4 text-lg">
                  ada pertanyaan? we only one message away, let us know!!
                </p>
              </div>
              <div class="h-1 bg-gray-300 w-full"></div>
              <div class="mt-6 space-y-6">
                <!-- Hotline -->
                <div class="flex items-center space-x-4">
                  <!-- Icon -->
                  <div class="bg-purple-gradient rounded-md flex items-center justify-center w-14 h-12">
                    <img src="{{ asset('images/images/whatsapp.png') }}" alt="Phone Icon" class="w-8 h-8">
                  </div>
                  <!-- Text -->
                  <div>
                    <p class="font-bold italic">Hotline Badan Eksekutif Mahasiswa</p>
                    <p class="font-medium">085282331744</p>
                  </div>
                </div>
                <!-- Media Partnership -->
                <div class="flex items-center space-x-4">
                  <!-- Icon -->
                  <div class="bg-purple-gradient rounded-md flex items-center justify-center w-14 h-12">
                    <img src="{{ asset('images/images/whatsapp.png') }}" alt="Phone Icon" class="w-8 h-8">
                  </div>
                  <!-- Text -->
                  <div>
                    <p class="font-bold italic">Media Partnership & Sponsorship</p>
                    <p class="font-medium">0881011921615</p>
                  </div>
                </div>
                <!-- Email -->
                <div class="flex items-center space-x-4">
                  <!-- Icon -->
                  <div class="bg-purple-gradient rounded-md flex items-center justify-center w-14 h-12">
                    <img src="{{ asset('images/images/gmail.png') }}" alt="Phone Icon" class="w-8 h-8">
                  </div>
                  <!-- Text -->
                  <div>
                    <p class="font-bold italic">Email Badan Eksekutif Mahasiswa</p>
                    <p class="font-medium">bemtrilogi@trilogi.ac.id</p>
                  </div>
                </div>
              </div>
            </div>            
          </div>
      
          <!-- Kolom Form -->
          <div class="bg-white rounded-lg shadow-lg p-6 w-full md:w-[600px] min-h-[500px]">
            <h2 class="text-2xl font-bold text-purple-700 mb-4">Send us a message</h2>
            <form class="space-y-8" method="POST" action="{{ route('contact.store') }}">
              @csrf
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label for="name" class="block text-md font-bold text-purple-700">Name</label>
                  <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                </div>

                <div>
                  <label for="email" class="block text-md font-bold text-purple-700">Email</label>
                  <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                </div>
              </div>
              
              <div>
                <label for="subject" class="block text-md font-bold text-purple-700">Subject</label>
                <input type="text" id="subject" name="subject" class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
              </div>

              <div>
                <label for="message" class="block text-md font-bold text-purple-700">Message</label>
                <textarea id="message" name="message" rows="7" class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm"></textarea>
              </div>

              <div>
                <button type="submit" class="w-full font-bold bg-gradient-to-r from-purple-700 to-purple-900 text-green-300 py-2 px-4 rounded-lg hover:opacity-90 shadow-md">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>         
      
        <!-- Maps Section -->
        <div class="mt-8 bg-gray-100 rounded-lg p-6 m-10">
          <h2 class="text-lg font-bold text-purple-700 mb-4">MAPS</h2>
          <div class="h-64 w-full rounded-lg overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.33127749897!2d106.8491723!3d-6.2528183!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3a5be656509%3A0xb407f61e419da940!2sUniversitas%20Trilogi!5e0!3m2!1sid!2sid!4v1733464081701!5m2!1sid!2sid" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </section>
      
          
    </main>
@endsection