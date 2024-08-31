<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <title><?= $paket['nama_paket'] ?> - Risva Management</title>
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
  
    <script
      defer
      src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"
    ></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/atom-one-dark.min.css"
    />
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
    <script>
      hljs.highlightAll();
    </script>  
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
  <div class="w-full z-50 top-0 py-3 sm:py-5  bg-primary ">
  <div class="container flex items-center justify-between">
    <div>
      <a href="/">
        <img src="<?= base_url('uploaded/') . $profil['logo']; ?>" class="w-24">
      </a>
    </div>
    <div class="hidden lg:block">
      <ul class="flex items-center">
        
        <li class="group pl-6">
          
          <a
            href='/#profil'
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Profil</a>
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <a
            href='/#paket'
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Paket</a>
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <a
            href='/#galeri'
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Galeri</a>
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <a
            href='/#testimoni'
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Testimoni</a>
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <a
            href='/#kontak'
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Kontak</a>
          
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
        
        <a
          href='/#profil'
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Profil</a>
        
      </li>
      
      <li class="py-2">
        
        <a
          href='/#paket'
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Paket</a>
        
      </li>
      
      <li class="py-2">
        
        <a
          href='/#galeri'
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Galeri</a>
        
      </li>
      
      <li class="py-2">
        
        <a
          href='/#testimoni'
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Testimoni</a>
        
      </li>
      
      <li class="py-2">
        
        <a
          href='/#kontak'
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Kontak</a>
        
      </li>
      
    </ul>
  </div>
</div>


      <div><div class="container py-6 md:py-10">
  <div class="mx-auto max-w-4xl">
    <div class="flex flex-col py-5">
      <span class="font-body text-3xl font-semibold text-primary sm:text-4xl md:text-5xl"
      >
        <?= $paket['nama_paket'] ?>
      </span>
      <span class="text-lg font-bold pt-3">
        <?= 'Rp ' . number_format($paket['harga'], 0, ".", ","); ?>
      </span>
    </div>
    <div class="prose max-w-none pt-8">
      <h2 id="lorem-ipsum-dolor-sit-amet">Deskripsi</h2>
      <p><?= $paket['deskripsi'] ?></p>

      <h3 id="lorem-ipsum-dolor-sit-amet-1">Benefit</h3>
      <ul>
        <?php foreach($item as $i): ?>
        <li><?= $i['item'] ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <a href="/#paket" class="flex items-center mt-8">
      <i class="bx bx-left-arrow-alt text-2xl text-primary"></i>
      <span
        class="block pl-2 font-body text-lg font-bold uppercase text-primary md:pl-5"
        >Kembali</span
      >
    </a>
  </div>
</div>
</div>

      <div class="bg-primary mt-10">
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

    
  </body>
</html>
