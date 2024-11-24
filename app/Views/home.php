<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive-style.css') ?>">

    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Risva Management</title>
</head>

<body>
    <!-- Navbar Section Open -->
    <nav class="navbar navbar-expand-lg fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('uploaded/') . $profil['logo']; ?>" class="me-2" alt="brand" width="50">
                <span class="text-dark">Risva Management</span>
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class='bx bx-menu'></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link px-0 active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0" href="#paket">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0" href="#gallery">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0" href="#testi">Testimoni</a>
                    </li>
                </ul>
                <a href="#contact" class="ml-3 btn btn-primary shadow-none">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar Section Close -->

    <!-- Home Section Open -->
    <section class="home" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="home-content" data-aos="fade-up" data-aos-duration="1000">
                        <p class="badge fs-6 fw-normal bg-primary-light text-primary"><?= $profil['slogan']; ?></p>
                        <h1 class="text-home-bold fw-bold text-dark mt-1" style="text-align: justify;">
                          <span class="text-primary">Risva</span> Management
                        </h1>
                        <h4 class="text-home-reguler fw-normal text-secondary">
                          <?= $profil['deskripsi']; ?>
                        </h4>
                        <div class="home-btn mt-5">
                            <a href="#paket" class="btn btn-primary shadow-none mb-3">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-primary" style="height: 350px; border-radius: 20px;" data-aos="fade-up" data-aos-duration="2000">
                      <iframe class="h-100 w-100" style="border-radius: 20px;" src="<?= str_replace('youtu.be', 'www.youtube.com/embed', $profil['youtube_video']); ?>" title="Profil Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section Close -->

    <!-- Services Section Open -->
    <section class="services text-center" id="paket">
        <div class="container">
            <span class="text-primary">Paket</span>
            <h2 class="fw-bold text-dark mt-3">Paket Kami</h2>
            <div class="row">
              <?php foreach($paket as $p): ?>
                <div class="col-sm-4 content mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?= $p['image'] ? (base_url('uploaded/paket/') . $p['image']) : base_url('assets/dummy.jpg') ?>" class="img-fluid w-75" alt="<?= "Foto Paket " . $p['nama_paket'] ?>">
                    <h3 class="services-title text-dark mt-4"><?= $p['nama_paket'] ?></h3>
                    <h5 class="services-title text-dark mt-2"><?= 'Rp ' . number_format($p['harga'], 0, ".", ","); ?></h5>
                    <a href="/paket/<?= $p['id_paket'] ?>" class="mt-4 btn btn-sm btn-primary">Lihat Detail</a>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Services Section Close -->

    <!-- About Section Open -->
    <!-- <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                  <div class="gallery-img mt-3" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?= base_url('uploaded/') . $profil['logo'] ?>" class="w-75" alt="">
                  </div>
                </div>
                <div class="col-md-9">
                    <div class="about-content" data-aos="fade-up" data-aos-duration="2000">
                        <span class="text-primary">About</span>
                        <h2 class="fw-bold text-dark mt-3">Risva Management</h2>
                        <p class="text-secondary mt-3">
                          <?= $profil['deskripsi'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- About Section Close -->

    <!-- Menu Section Open -->
    <section class="menu" style="margin-top: 200px;" id="gallery">
        <div class="container">
            <h2 class="fw-bold text-dark mt-3">Gallery</h2>
            <div class="row">
              <?php foreach($galeri as $g): ?>
                <div class="col-md-4">
                  <div class="card-menu bg-white mt-3" data-aos="fade-up" data-aos-duration="1000">
                    <a href="/galeri/<?= $g['id_galeri'] ?>">
                      <div class="item">
                        <img src="<?= base_url('img/') . $g['foto'] ?>" alt="">
                        <h5 class="menu-title text-dark mt-3"><?= $g['judul']; ?></h5>
                        <p class="text-secondary mt-2"><?= $g['deskripsi']; ?></p>
                      </div>
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Menu Section Close -->

    <!-- Testimonials Section Open -->
    <section class="testimonials text-center" id="testi">
        <div class="container">
            <span class="text-primary">Testimonials</span>
            <h2 class="fw-bold text-dark mt-3">Apa yang mereka katakan?</h2>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <?php foreach($testi as $index => $data): ?>
                            <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                              <div class="content-testimonials mt-5" data-aos="fade-up" data-aos-duration="1000">
                                  <!-- <img class="rounded-circle" src="https://i.ibb.co/9NycsJ7/image.png" style="width: 80px;"> -->
                                  <img class="rounded-circle" src="<?= base_url('uploaded/testimoni/') . $data['image'] ?>" style="width: 80px;">
                                  <h5 class="name-testimonials text-dark mt-3"><?= $data['nama'] ?></h5>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <i class='bx bxs-star'></i>
                                  <p class="text-secondary mt-3"><?= $data['pesan'] ?></p>
                              </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section Close -->


    <!-- Newslatter Section Open -->
    <section class="newslatter" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newslatter-content bg-primary text-center" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title-newslatter fw-bold text-white mb-5">Hubungi kami lewat kontak dibawah ini</h2>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="w-100 d-flex flex-row mt-3">
                              <img src="https://img.icons8.com/?size=100&id=16733&format=png&color=ffffff" width="20" height="20">
                              <span style="margin-left: 10px;" class="text-white"><?= $profil['whatsapp']; ?></span>
                            </div>
                            <div class="w-100 d-flex flex-row mt-3">
                              <img src="https://img.icons8.com/?size=100&id=32309&format=png&color=ffffff" width="20" height="20">
                              <span style="margin-left: 10px;" class="text-white"><?= $profil['instagram']; ?></span>
                            </div>
                            <div class="w-100 d-flex flex-row mt-3">
                              <img src="https://img.icons8.com/?size=100&id=53430&format=png&color=ffffff" width="20" height="20">
                              <span style="margin-left: 10px; text-align: start;" class="text-white"><?= $profil['alamat']; ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=+(Risva%20Management)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newslatter Section Close -->

    <!-- Footer Section Open -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5">
                    <div class="row">
                        <div class="col-md-12 col-lg-10">
                            <a href="#" class="footer-brand">
                                <img src="<?= base_url('uploaded/') . $profil['logo'] ?>" width="80" class="me-3" alt="brand">
                                <span class="text-dark">Risva Management</span>
                                <p class="text-secondary mt-3">
                                  <?= $profil['deskripsi'] ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="footer-content">
                                <span>Info</span>
                                <ul class="footer-link mt-3 list-unstyled">
                                    <li><a href="#paket" class="py-1 d-block">Paket</a></li>
                                    <li><a href="#gallery" class="py-1 d-block">Gallery</a></li>
                                    <li><a href="#testi" class="py-1 d-block">Testimoni</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="footer-content">
                                <span>Contact</span>
                                <ul class="footer-link mt-3 list-unstyled">
                                    <li><a href="#" class="py-1 d-block">Batang - Indonesia</a></li>
                                    <li><a href="#" class="py-1 d-block"><?= $profil['whatsapp'] ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <p class="copyright text-secondary text-center">
                        Copyright &copy; <?= date('Y') ?> All rights reserved | <a class="text-primary" href="#">Risva Management</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Close -->

    <!-- AOS Animate on Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Add Drop Shadow on Scroll -->
    <script>
        window.addEventListener('scroll', (e) => {
            const nav = document.querySelector('.navbar');
            if (window.pageYOffset > 0) {
                nav.classList.add("drop-shadow");
            } else {
                nav.classList.remove("drop-shadow");
            }
        });
    </script>

    <script>
        AOS.init();
    </script>

</body>

</html>