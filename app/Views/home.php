<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <title>Risva Management</title>
    <!-- <link rel="canonical" href="//" /> -->

    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
    <meta name="theme-color" content="#5540af" />
    <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link
        as="style"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
        rel="preload"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
        rel="stylesheet"
    />
    <link
        crossorigin="anonymous"
        href="/assets/styles/main.min.css"
        media="screen"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    
    <style>
        .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet,
        .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
            width: 16px !important;
            height: 4px !important;
            border-radius: 5px !important;
            margin: 0 6px !important;
        }

        .swiper-pagination {
            bottom: 2px !important;
        }

        .swiper-wrapper {
            height: max-content !important;
            width: max-content !important;
            padding-bottom: 64px;
        }

        .swiper-pagination-bullet-active {
            background: #4F46E5 !important;
        }
        
        .swiper-slide.swiper-slide-active>.slide_active\:border-indigo-600 {
            --tw-border-opacity: 1;
            border-color: rgb(79 70 229 / var(--tw-border-opacity));
        }

        .swiper-slide.swiper-slide-active>.group .slide_active\:text-gray-800 {
            ---tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
        }
    </style>

    <script
        defer
        src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"
    ></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>


  <body
    :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
    class="relative"
    x-data="{ mobileMenu: false }"
  >
    
    <div id="main" class="relative">
      <div
  x-data="{
    triggerNavItem(id) {
        $scroll(id)
    },
    triggerMobileNavItem(id) {
        mobileMenu = false;
        this.triggerNavItem(id)
    }
}"
>
  <div class="w-full z-50 top-0 py-3 sm:py-5  absolute
  ">
  <div class="container flex items-center justify-between">
    <div>
      <a href="/">
        <img src="<?= base_url('uploaded/') . $profil['logo']; ?>" class="w-24">
      </a>
    </div>
    <div class="hidden lg:block">
      <ul class="flex items-center">
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#profil')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Profil</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#paket')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Paket</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#galeri')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Galeri</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#testimoni')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Testimoni</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#kontak')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Kontak</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
      </ul>
    </div>
    <div class="block lg:hidden">
      <button @click="mobileMenu = true">
        <i class="bx bx-menu text-4xl text-white"></i>
      </button>
    </div>
  </div>
</div>

<div
  class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
  :class="{ 'opacity-100 pointer-events-auto': mobileMenu }"
>
  <div
    class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3"
  >
    <button
      class="absolute top-0 right-0 mt-4 mr-4"
      @click="mobileMenu = false"
    >
      <img src="/assets/img/icon-close.svg" class="h-10 w-auto" alt="" />
    </button>

    <ul class="mt-8 flex flex-col">
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#profil')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Profil</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#paket')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Paket</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#galeri')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Galeri</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#testimoni')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Testimoni</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#kontak')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Kontak</span
        >
        
      </li>
      
    </ul>
  </div>
</div>


      <div><div
  class="relative bg-cover bg-center bg-no-repeat py-8"
  style="background-image: url(/assets/img/bg-hero.jpg)"
>
  <div
    class="absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to bg-cover bg-center bg-no-repeat"
  ></div>

  <div
    class="container relative z-30 pt-20 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-48"
  >
    <div class="flex flex-col items-center justify-center lg:flex-row">
      <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
        <h1
          class="text-center font-header text-3xl text-white sm:text-left sm:text-5xl md:text-6xl"
        >
          Risva Management
        </h1>
        <div class="pt-5 text-white text-center text-md md:text-xl"><?= $profil['slogan']; ?></div>
      </div>
    </div>
  </div>
</div>

<div class="bg-grey-50" id="profil">
  <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
    <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
      <h2
        class="pt-8 font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
      >
        Profil
      </h2>
      <p class="pt-6 font-body leading-relaxed text-grey-20">
        <?= $profil['deskripsi'] ?>
      </p>
      <div
        class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start"
      >
        <div class="flex items-center justify-center sm:justify-start">
          <p class="font-body text-lg font-semibold uppercase text-grey-20">
            Hubungi Kami
          </p>
          <div class="hidden sm:block">
            <i class="bx bx-chevron-right text-2xl text-primary"></i>
          </div>
        </div>
        <div
          class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
        >
          <a href="https://wa.me/<?= $profil['whatsapp']; ?>">
            <i
              class="bx bxl-whatsapp text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="https://instagram.com/<?= str_replace("@", "", $profil['instagram']); ?>" class="pl-4">
            <i
              class="bx bxl-instagram text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
        </div>
      </div>
    </div>
    <div class="flex w-full justify-center pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
      <iframe class="w-full h-56" src="<?= str_replace('youtu.be', 'www.youtube.com/embed', $profil['youtube_video']); ?>" title="Profil Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  </div>
</div>

<div class="container py-16 md:py-20" id="paket">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Paket
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Lorem ipsum dolor sit amet
  </h3>

  <div
    class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3"
  >
    <a href="/paket/1" class="group rounded px-8 py-12 shadow border-2 border-primary hover:bg-primary">
      <div>
        <h3 class="pt-8 text-lg text-center font-bold uppercase text-primary group-hover:text-yellow lg:text-2xl">Paket 1</h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          <ul class="list-disc px-4 group-hover:text-white">
            <li>500-800 Tamu Undangan</li>
            <li>4 Crew Profesional</li>
            <li>Unlimited Consultation</li>
            <li>Lorem ipsum</li>
            <li>Lorem ipsum</li>
          </ul>
        </p>
      </div>
    </a>
    <a href="/paket/2" class="group rounded px-8 py-12 shadow border-2 border-primary hover:bg-primary">
      <div>
        <h3 class="pt-8 text-lg text-center font-bold uppercase text-primary group-hover:text-yellow lg:text-2xl">Paket 2</h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          <ul class="list-disc px-4 group-hover:text-white">
            <li>500-800 Tamu Undangan</li>
            <li>4 Crew Profesional</li>
            <li>Unlimited Consultation</li>
            <li>Lorem ipsum</li>
            <li>Lorem ipsum</li>
          </ul>
        </p>
      </div>
    </a>
    <a href="/paket/3" class="group rounded px-8 py-12 shadow border-2 border-primary hover:bg-primary">
      <div>
        <h3 class="pt-8 text-lg text-center font-bold uppercase text-primary group-hover:text-yellow lg:text-2xl">Paket 3</h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          <ul class="list-disc px-4 group-hover:text-white">
            <li>500-800 Tamu Undangan</li>
            <li>4 Crew Profesional</li>
            <li>Unlimited Consultation</li>
            <li>Lorem ipsum</li>
            <li>Lorem ipsum</li>
          </ul>
        </p>
      </div>
    </a>
    
  </div>
</div>

<div class="container py-16 md:py-20" id="galeri">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Galeri
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Lorem ipsum dolor sit amet
  </h3>

  <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
    <div class="grid gap-4">
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
      </a>
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
      </a>
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
      </a>
    </div>
    <div class="grid gap-4">
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
      </a>
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
      </a>
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
      </a>
    </div>
    <div class="grid gap-4">
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
      </a>
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
      </a>
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
      </a>
    </div>
    <div class="grid gap-4">
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
      </a>
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
      </a>
      <a href="/galeri/1">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
      </a>
    </div>
  </div>
</div>

<div class="bg-grey-50" id="testimoni">
  <div class="container py-16 md:py-20">
    <h2
      class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
    >
        TESTIMONIAL
    </h2>
    <h4
      class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
    >
      Beberapa testimoni dari klien kami
    </h4>
    <div class="swiper mySwiper pt-8">
      <div class="swiper-wrapper w-max">
        <?php foreach($testi as $data): ?>
        <a href="/testimoni/<?= $data['id_testi'] ?>" class="swiper-slide">
          <div class="group bg-white border border-solid border-gray-300 rounded-xl p-6 transition-all duration-500  w-full mx-auto hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
            <p
              class="text-base text-gray-600 leading-6  transition-all duration-500 pb-8 group-hover:text-gray-800 slide_active:text-gray-800">
              <?= $data['pesan'] ?>
            </p>
            <div class="flex items-center gap-5 border-t border-solid border-gray-200 pt-5">
              <div class="block">
                <h5 class="text-gray-900 font-medium transition-all duration-500  mb-1"><?= $data['nama'] ?></h5>
              </div>
            </div>
          </div>
        </a>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>

<div class="container py-16 md:py-20" id="kontak">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Kontak
  </h2>
  <h4
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Anda bisa menghubungi kami lewat kontak dibawah ini
  </h4>
  <div class="flex flex-col pt-16 lg:flex-row">
    <div
      class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3"
    >
      <div class="flex items-center">
        <i class="bx bx-phone text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          Whatsapp
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        <?= $profil['whatsapp']; ?>
      </p>
    </div>
    <div
      class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
    >
      <div class="flex items-center">
        <i class="bx bx-envelope text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          Instagram
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        <?= $profil['instagram']; ?>
      </p>
    </div>
    <div
      class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
    >
      <div class="flex items-center">
        <i class="bx bx-map text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          Alamat
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary text-sm">
        <?= $profil['alamat']; ?>
      </p>
    </div>
  </div>
</div>
<div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=+(Risva%20Management)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe></div>

</div>

      <div class="bg-primary">
  <div class="container flex flex-col justify-between py-6 sm:flex-row">
    <p class="text-center font-body text-white md:text-left">
      © Copyright <?= date('Y') ?>. All right reserved, Risva Management.
    </p>
    <div class="flex items-center justify-center pt-5 sm:justify-start sm:pt-0">
      <a href="https://wa.me/<?= $profil['whatsapp']; ?>" class="pl-4">
        <i class="bx bxl-whatsapp text-2xl text-white hover:text-yellow"></i>
      </a>
      <a href="https://instagram.com/<?= str_replace("@", "", $profil['instagram']); ?>" class="pl-4">
        <i class="bx bxl-instagram text-2xl text-white hover:text-yellow"></i>
      </a>
    </div>
  </div>
</div>

    </div>

    <script src="/assets/js/main.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 32,
            loop: true,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,

            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
            640: {
            slidesPerView: 1,
            spaceBetween: 32,
            },
            768: {
            slidesPerView: 2,
            spaceBetween: 32,
            },
            1024: {
            slidesPerView: 3,
            spaceBetween: 32,
            },
        },
        });
    </script>
    
  </body>
</html>
