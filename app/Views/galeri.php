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

    <title><?= $galeri['judul'] ?> - Risva Management</title>
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
                        <a class="nav-link px-0 active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0" href="/#paket">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0" href="/#gallery">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0" href="/#testi">Testimoni</a>
                    </li>
                </ul>
                <a href="/#contact" class="ml-3 btn btn-primary shadow-none">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar Section Close -->

    <!-- Home Section Open -->
    <section class="home" id="home">
        <div class="container">
            <div class="row align-items-center">
              <div class="home-content" data-aos="fade-up" data-aos-duration="1000">
                  <h1 class="text-home-bold fw-bold text-dark mt-1" style="text-align: justify;">
                    <span class="text-primary"><?= $galeri['judul'] ?></span>
                  </h1>
                  <h4 class="text-home-reguler fw-normal text-secondary">
                    <?= $galeri['deskripsi'] ?>
                  </h4>
                  <?php if($galeri['type'] == 'foto'): ?>
                    <img src="<?= base_url('img/') . $galeri['foto'] ?>" class="w-100">
                  <?php else: ?>
                    <iframe
                        width="300"
                        height="480"
                        src="<?= $galeri['foto']; ?>"
                        title="Video Short"
                        frameborder="0"
                        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                  <?php endif; ?>
                  <div class="home-btn mt-5">
                      <a href="/#gallery" class="btn btn-secondary shadow-none mb-3">Kembali</a>
                  </div>
              </div>
            </div>
        </div>
    </section>
    <!-- Home Section Close -->




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
                              <div class="d-flex flex-column align-items-start" style="margin-left: 10px;">
                                  <a href="https://wa.me/<?= $profil['whatsapp']; ?>" target="_blank" class="text-white"><?= $profil['whatsapp']; ?></a>
                                  <span class="text-white" style="padding-left: 50;">Scan QR code dibawah ini!</span>
                                  <img src="<?= base_url('assets/wa-qr.png') ?>" class="w-25">
                              </div>
                            </div>
                            <div class="w-100 d-flex flex-row mt-4">
                              <img src="https://img.icons8.com/?size=100&id=32309&format=png&color=ffffff" width="20" height="20">
                              <a href="https://instagram.com/<?= str_replace("@", "", $profil['instagram']); ?>" target="_blank" style="margin-left: 10px;" class="text-white"><?= $profil['instagram']; ?></a>
                            </div>
                            <div class="w-100 d-flex flex-row mt-3">
                              <img src="https://img.icons8.com/?size=100&id=53430&format=png&color=ffffff" width="20" height="20">
                              <a href="https://maps.app.goo.gl/RM68n9AB2jkM8oDw5" target="_blank" style="margin-left: 10px; text-align: start;" class="text-white"><?= $profil['alamat']; ?></a>
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
                                    <li><a href="/#paket" class="py-1 d-block">Paket</a></li>
                                    <li><a href="/#gallery" class="py-1 d-block">Gallery</a></li>
                                    <li><a href="/#testi" class="py-1 d-block">Testimoni</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="footer-content">
                                <span>Contact</span>
                                <ul class="footer-link mt-3 list-unstyled">
                                    <li><a href="https://maps.app.goo.gl/RM68n9AB2jkM8oDw5" target="_blank" class="py-1 d-block">Batang - Indonesia</a></li>
                                    <li><a href="https://wa.me/<?= $profil['whatsapp']; ?>" target="_blank" class="py-1 d-block"><?= $profil['whatsapp'] ?></a></li>
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