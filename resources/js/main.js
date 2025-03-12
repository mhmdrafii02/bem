// swiper js

var swiper = new Swiper(".swiper-container", ".multiple-slide-carousel", {
    loop: true, // Ubah ke false untuk mengecek apakah semua item muncul
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: ".multiple-slide-carousel .swiper-button-next",
        prevEl: ".multiple-slide-carousel .swiper-button-prev",
    },
    breakpoints: {
        1920: {
            slidesPerView: 4, // Pastikan pada layar besar bisa tampil 4
            spaceBetween: 30,
        },
        1028: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
    },
});

document.addEventListener("DOMContentLoaded", function () {
    var swiperApresiasi = new Swiper("#swiper-apresiasi", {
        slidesPerView: 1, // Default: 1 gambar per slide (untuk mobile)
        spaceBetween: 20, // Jarak antar gambar (bisa disesuaikan)
        slidesPerGroup: 1, // Pastikan pergeseran slide sesuai jumlah per grup
        loop: false, // Matikan loop agar tidak ada duplikasi gambar
        centeredSlides: false, // Hindari tampilan slide yang bergeser
        breakpoints: {
            640: { slidesPerView: 2, slidesPerGroup: 2 }, // Handphone: 2 gambar per slide
            1024: { slidesPerView: 3, slidesPerGroup: 3 }, // Desktop: 3 gambar per slide
        },
        navigation: {
            nextEl: "#apresiasi-next",
            prevEl: "#apresiasi-prev",
        },
    });
});

var swiper = new Swiper(".multiple-slide-carousel", {
    slidesPerView: 1, // Setiap slide hanya terdiri dari satu elemen <div class="swiper-slide">
    spaceBetween: 20,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".mySwiperBerita", {
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1024: { slidesPerView: 4 }, // Desktop (≥ 1024px) → 4 berita per slide
            768: { slidesPerView: 2 }, // Tablet (≥ 768px) → 2 berita per slide
            320: { slidesPerView: 2 }, // HP (≥ 320px) → 2 berita per slide
        },
    });

    // Cek jika layar lebih kecil dari 768px dan refresh Swiper
    function updateSwiper() {
        if (window.innerWidth < 768) {
            swiper.update();
        }
    }

    // Jalankan saat load dan resize
    window.addEventListener("resize", updateSwiper);
    updateSwiper();
});
// document.addEventListener("DOMContentLoaded", updateAvatarLayout);
// window.addEventListener("resize", updateAvatarLayout);

// function updateAvatarLayout() {
//     const avatarContainers = document.querySelectorAll(".avatar-container");
//     const screenWidth = window.innerWidth;

//     avatarContainers.forEach((container) => {
//         if (screenWidth <= 768) {
//             container.classList.remove("lg:flex-row");
//             container.classList.add("flex-row", "justify-center", "gap-4");
//         } else {
//             container.classList.remove("flex-row", "justify-center", "gap-4");
//             container.classList.add("lg:flex-row");
//         }
//     });
// }
