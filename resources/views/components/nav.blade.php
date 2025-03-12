<nav
    class="fixed top-0 flex items-center w-full justify-between py-4 md:py-6 px-10 bg-purple-gradient text-white z-30">
    <a href="" class="flex items-center gap-2">
        <img src="{{ asset('images/images/logo_bem_2.png') }}" class="flex shrink-0 h-11" alt="logo">
        <span class="text-lg font-bold hidden md:block">BEM Universitas Trilogi</span>
    </a>

    <!-- Tambahkan div ini untuk mendorong menu ke kanan -->
    <div class="ml-auto mr-10">
        <ul id="menu"
            class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:justify-center gap-6 w-full lg:w-auto bg-white lg:bg-transparent lg:p-0 p-4 absolute lg:static top-16 left-0 shadow-lg lg:shadow-none"
            x-data="{ openDropdown: false }">
            <li
                class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300 mobile-item-spacing text-center">
                <a href="/">Beranda</a>
            </li>

            <!-- Tentang Kami dengan Dropdown -->
            <li class="relative">
                <button @click="openDropdown = !openDropdown"
                    class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300 mobile-item-spacing text-center flex items-center gap-2">
                    Tentang Kami
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 transition-transform duration-300"
                        :class="{ 'rotate-180': openDropdown }">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 9l-7.5 7.5L4.5 9" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <ul x-show="openDropdown" @click.away="openDropdown = false" x-transition
                    class="absolute left-0 mt-[35px] w-48 bg-white shadow-lg text-custom-purple rounded-lg border border-gray-200">
                    <li class="px-4 py-2 hover:bg-purple-gradient hover:text-white transition"><a
                            href="{{ route('front.profile') }}">Profile</a></li>
                    <li class="px-4 py-2 hover:bg-purple-gradient hover:text-white transition"><a href="{{ route('front.struktur') }}">Struktur</a></li>
                </ul>
            </li>

            <li
                class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300 mobile-item-spacing text-center">
                <a href="{{ route('front.article') }}">Berita</a>
            </li>
            <li
                class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300 mobile-item-spacing text-center">
                <a href="{{ route('front.contact') }}">Kontak</a>
            </li>
        </ul>
    </div>

    <button>
        <i class="ri-menu-3-line block md:hidden text-2xl"></i>
    </button>
</nav>
<nav id="bottom-navigation"
class="block lg:hidden fixed inset-x-0 bottom-0 bg-white shadow z-[99999] border-t border-gray-200 py-2"
x-data="{ showMore: false }">
<div id="tabs" class="flex justify-between">
    <a href="/"
        class="w-full focus:text-purple-gradient hover:text-purple-gradient justify-center inline-block text-center pt-2 pb-1 text-gray-600">
        <i class="ri-home-9-line text-2xl"></i>
        <span class="tab tab-home block text-xs">Beranda</span>
    </a>
    <a href="{{ route('front.article') }}"
        class="w-full focus:text-purple-gradient hover:text-purple-gradient justify-center inline-block text-center pt-2 pb-1 text-gray-600">
        <i class="ri-news-line text-2xl"></i>
        <span class="tab tab-kategori block text-xs">Berita</span>
    </a>
    {{-- <a href="#"
        class="w-full focus:text-purple-gradient hover:text-purple-gradient justify-center inline-block text-center pt-2 pb-1 text-gray-600">
        <i class="ri-team-line text-2xl"></i>
        <span class="tab tab-explore block text-xs">Struktur</span>
    </a> --}}
    <a href="{{ route('front.contact') }}"
        class="w-full focus:text-purple-gradient hover:text-purple-gradient justify-center inline-block text-center pt-2 pb-1 text-gray-600">
        <i class="ri-contacts-book-3-line text-2xl"></i>
        <span class="tab tab-whishlist block text-xs">Kontak</span>
    </a>
    <div class="relative w-full text-center">
        <button @click="showMore = true"
            class="w-full focus:text-purple-gradient hover:text-purple-gradient justify-center inline-block text-center pt-2 pb-1 text-gray-600">
            <i class="ri-add-line text-2xl"></i>
            <span class="tab tab-more block text-xs">Tentang Kami</span>
        </button>
    </div>
</div>

<!-- Menu tambahan di tengah layar -->
<div x-show="showMore" x-transition.opacity
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-[100000]"
    @click="showMore = false">
    <!-- Modal -->
    <div class="bg-white rounded-lg shadow-lg p-4 w-3/4 text-center relative" @click.stop>
        <button @click="showMore = false" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">
            <img src="{{ asset('images/close.svg') }}" class="h-5" alt="">
        </button>
        <div class="flex flex-col gap-2 m-5">
            <a href="{{ route('front.profile') }}" class="block px-4 py-2 text-white bg-purple-gradient rounded-lg">Profile</a>
            <a href="{{ route('front.struktur') }}" class="block px-4 py-2 text-white bg-purple-gradient rounded-lg">Struktur</a>
            {{-- <a href="#" class="block px-4 py-2 text-white bg-purple-gradient rounded-lg">Settings</a> --}}
        </div>
    </div>
</div>
</nav>
<style>
@media (max-width: 1024px) {
    .mobile-item-spacing {
        margin-bottom: 40px;
    }
}
</style>
