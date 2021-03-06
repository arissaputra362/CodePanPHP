<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <!-- Font CSS From Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        rel="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css">

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Line Awesome CSS From https://icons8.com/line-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet"
        media="all">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Header Effect CSS -->
    <link rel="stylesheet" href="./css/headerEffect/style.css">
    <link rel="stylesheet" href="./css/headerEffect/reset.css">

    <!-- Owl Carousel CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Hover Effect CSS -->
    <link rel="stylesheet" href="./css/hover-min.css">

    <!-- Animate on Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Conainer of header (contact, email, karirbtn, blogbtn, and kontakbtn) -->
        <div class="container">
            <!-- Justify Content Between Kontak Bar and Buttons Container -->
            <div class="d-flex justify-content-between row">

                <!-- Kontak Bar (telepon and email) -->
                <div class="contact col-md-9 col-sm-12">
                    <!-- Container Hubungi Kami (telepon) -->
                    <div class="telepon">
                        <img src="./img/header/chat-icon.png" alt="">
                        <div class="text">
                            <p class="judul">Hubungi Kami</p>
                            <a href="tel:+6281252200089" class="isi">081252200089</a>
                        </div>
                    </div>
                    <!-- End of Container Hubungi Kami (telepon) -->

                    <!-- Container Email -->
                    <div class="email">
                        <img src="./img/header/email-icon.png" alt="">
                        <div class="text">
                            <p class="judul">Email Kami</p>
                            <a href="mailto:info@codepanstudio.com" target="_blank"
                                class="isi">info@codepanstudio.com</a>
                        </div>
                    </div>
                    <!-- End of Container Email -->
                </div>
                <!-- End of Kontak Bar -->

                <!-- Containner Buttons(Kontak, Karir, and Blog) -->
                <!-- Display Flex md end to align the content center of the navbar menu when on mobile devices -->
                <ul class="d-flex justify-content-md-end col-md-3 col-sm-12">
                    <li>
                        <a href="./menu/karir.php">
                            <img src="./img/header/karir-icon.png" alt="">
                            <p>Karir</p>
                        </a>
                    </li>
                    <li>
                        <a href="./menu/blog.php">
                            <img src="./img/header/blog-icon.png" alt="">
                            <p>Blog</p>
                        </a>
                    </li>
                    <li>
                        <a href="./menu/kontak.php">
                            <img src="./img/header/contact-icon.png" alt="">
                            <p>Kontak</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End of Containner Buttons(Kontak, Karir, and Blog) -->
        </div>
        <!-- Container of Header (contact, email, karirbtn, blogbtn, and kontakbtn) -->

        <!--  Bar Navigasi Using Boostrap 4 -->
        <nav id="navbar" class="mt-4 mb-0 navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Navbar Logo Brand for Codepan Studio Logo when screen < 992px -->
                <a class="navbar-brand display-logo-left" href="#"><img class="logo mr-auto"
                        src="./img/navbar/logo-codepan.png" alt="" class=""></a>

                <!-- Toggler Button using boostrap 4 and small costumize on animation when screen < 992px -->
                <button id="toggleTop" class="navbar-toggler toggle-top" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-inner"></span>
                </button>
                <!-- End of Toggler Button using boostrap 4 and small costumize on animation when screen < 992px -->

                <!-- Container of navbar items/collapse -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-5">
                        <!-- Simple Menu Beranda -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#" onclick="moveMenuNav(this)">BERANDA <span
                                    class="sr-only">(current)</span></a>
                        </li>

                        <!-- Simple Menu Tentang Kami -->
                        <li class="nav-item">
                            <a class="nav-link" href="./menu/tentang_kami.php" onclick="moveMenuNav(this)">TENTANG KAMI
                                <span class="sr-only">(current)</span></a>
                        </li>

                        <!-- Simple Menu Portofolio -->
                        <li class="nav-item">
                            <a class="nav-link" href="./menu/portofolio.php" onclick="moveMenuNav(this)">PORTOFOLIO
                                <span class="sr-only">(current)</span></a>
                        </li>

                        <!-- Dropdown Menu Layanan IT -->
                        <li class="nav-item dropdown menu-area">
                            <!-- Dropdown Menu Button -->
                            <a class="nav-link dropdown-toggle" href="#" onclick="moveMenuNav(this)" id="mega-one"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                LAYANAN IT
                            </a>

                            <!-- Dropdown Mega Area Menu Container -->
                            <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
                                <div class="row">
                                    <!-- Sistem Informasi -->
                                    <div class="col-lg-2 dropdown-item">
                                        <a href="./menu/sistem_informasi.php">
                                            <i class="fas fa-laptop"></i>
                                            <h5>Sistem Informasi</h5>
                                        </a>
                                    </div>

                                    <!-- Aplikasi Mobile -->
                                    <div class="col-lg-2 dropdown-item">
                                        <a href="./menu/aplikasi_mobile.php">
                                            <i class="fas fa-mobile-alt"></i>
                                            <h5>Aplikasi Mobile</h5>
                                        </a>
                                    </div>

                                    <!-- Aplikasi E-Gov -->
                                    <div class="col-lg-2 dropdown-item">
                                        <a href="./menu/aplikasi_egov.php">
                                            <i class="las la-chart-bar"></i>
                                            <h5>Aplikasi E-Gov</h5>
                                        </a>
                                    </div>

                                    <!-- Integrasi Sistem -->
                                    <div class="col-lg-2 dropdown-item">
                                        <a href="./menu/integrasi_sistem.php">
                                            <i class="fas fa-sync"></i>
                                            <h5>Integrasi Sistem</h5>
                                        </a>
                                    </div>

                                    <!-- Pengadaan IT -->
                                    <div class="col-lg-2 dropdown-item">
                                        <a href="./menu/pengadaan_it.php">
                                            <i class="fas fa-file-alt"></i>
                                            <h5>Pengadaan IT</h5>
                                        </a>
                                    </div>

                                    <!-- Semua Layanan -->
                                    <div class="col-lg-2 dropdown-item">
                                        <a href="./menu/layanan_it.php">
                                            <i class="las la-plus-circle"></i>
                                            <h5>Semua layanan</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Dropdown Mega Area Menu Container -->
                        </li>
                        <!-- Dropdown Menu Layanan IT -->

                        <!-- Simple Menu Karir -->
                        <li class="nav-item menu-hidden">
                            <a class="nav-link" href="./menu/karir.php">KARIR
                                <span class="sr-only">(current)</span></a>
                        </li>

                        <!-- Simple Menu Blog -->
                        <li class="nav-item menu-hidden">
                            <a class="nav-link" href="./menu/blog.php">BLOG
                                <span class="sr-only">(current)</span></a>
                        </li>

                        <!-- Simple Menu Kontak -->
                        <li class="nav-item menu-hidden">
                            <a class="nav-link" href="./menu/kontak.php">KONTAK
                                <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                    <!-- Navbar Logo for Large Screen > 992px  -->
                    <a href="#" class="d-flex justify-content-center display-logo-center"><img class="logo mr-auto"
                            src="./img/navbar/logo-codepan.png" alt="" class=""></a>

                    <!-- Container Social Media Buttons -->
                    <ul class="d-flex justify-content-md-center ml-auto p-icon-sosmed">
                        <!-- Facebook Button -->
                        <li>
                            <a href="" class="fb">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>

                        <!-- Instagram Button -->
                        <li>
                            <a href="" class="ig">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>

                        <!-- Linked In Button -->
                        <li>
                            <a href="" class="in">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End of Container Social Media Icon -->
                </div>
                <!-- Container of navbar items/collapse -->
            </div>
        </nav>
        <!-- End of Bar Navigasi -->
    </header>
    <!-- End of Header -->

    <!-- Fixed Button WA -->
    <a href="" class="wa-button hvr-icon-pop">
        <i class="fab fa-whatsapp hvr-icon"></i>
        <p>Silahkan Konsultasi di Nomor Whatsapp Kami</p>
    </a>
    <!-- End Fixed Button WA -->

    <!-- Jumbotron Heading with background from file -->
    <div id="mt" class="jumbotron d-flex justify-content-end"
        style="background-image: url('./img/background/JumboboxPIC.png');">
        <!-- Container using boostrap 4 and scroll animation fade from down using Animated On Scroll -->
        <div class="container" data-aos="fade-down">
            <!-- Content -->
            <div class="content">
                <!-- Sub Heading  -->
                <h2>Codepan Studio Melayani</h2>

                <!-- Main Heading with Headline Animation -->
                <h1 class="display-4 cd-headline slide">
                    <!-- Wrapper for Headline Animation -->
                    <span class="cd-words-wrapper text-right">
                        <!-- Add Text Here -->
                        <!-- Active text (display first) indicator "is-visible" -->
                        <b class="is-visible">Sistem Informasi</b>

                        <!-- Another text -->
                        <b>Aplikasi Mobile</b>
                        <b>Aplikasi E-Gov</b>
                        <b>Integrasi Sistem</b>
                        <b>Pengadaan IT</b>
                    </span>
                </h1>
                <!-- End of Main Heading with Headline Animation -->

                <!-- Line Under Main Heading -->
                <hr>

                <!-- Describe text -->
                <p class="col-lg-7 col-sm-12 p-0">Layanan jasa pembuatan software kami telah membantu banyak perusahaan
                    untuk mempermudah dan meningkatkan kinerja IT mereka</p>
                <br>

                <!-- Link using hover-effect.css -->
                <p class="hvr-underline-from-left"><a href="">Dapatkan Konsultasi Gratis Sekarang</a></p>
            </div>
        </div>
    </div>
    <!-- End of Jumbotron Heading -->

    <!-- Masalah dan kinerja -->
    <div class="page-masalah">
        <div class="container">
            <div class="row">
                <!-- Heading and describe text -->
                <div class="col-md-7 col-sm-12 p-keterangan" data-aos="fade-right">
                    <!-- Heading -->
                    <h2>CODEPAN STUDIO MENYELESAIKAN 3 MASALAH UTAMA PADA BISNIS ANDA</h2>

                    <!-- Describe Text -->
                    <div class="caption">
                        <p>
                            Kami tahu bahwa setiap bisnis Anda memerlukan teknologi yang handal dan mampu menekan
                            pengeluaran. Bagi kami, pengalaman pengguna adalah kunci utama untuk menghadirkan sistem
                            yang paling handal
                        </p>
                    </div>

                    <!-- Link Button -->
                    <a href="" class="btn btn-primary">LAYANAN SELENGKAPNYA</a>
                </div>
                <!-- End of Heading and describe text -->

                <!-- Three Point of layanan -->
                <div class="col-md-5 col-sm-12 margin" data-aos="fade-left">
                    <!-- List -->
                    <ul>
                        <!-- Point Kinerja dan Pelayanan IT -->
                        <li>
                            <div class="number">
                                <h1>1</h1>
                            </div>
                            <div class="text">
                                <h3>Kinerja dan Pelayanan IT</h3>
                                <p>Lemahnya kinerja dan pelayanan IT membuat produktivitas berkurang.</p>
                            </div>
                        </li>

                        <!-- Point Pengaturan Biaya Bisnis -->
                        <li>
                            <div class="number">
                                <h1>2</h1>
                            </div>
                            <div class="text">
                                <h3>Pengaturan Biaya Bisnis</h3>
                                <p>Peningkatan performa layanan IT terbukti meningkatkan kinerja bisnis anda.</p>
                        </li>

                        <!-- Point Dokumentasi dan Pelacakan Data -->
                        <li>
                            <div class="number">
                                <h1>3</h1>
                            </div>
                            <div class="text">
                                <h3>Dokumentasi & Pelacakan Data</h3>
                                <p>Sering kali pengguna merasa kesulitan dalam melacak data-data mereka karena lemahnya
                                    pengolahan sistem IT.</p>
                        </li>
                    </ul>
                    <!-- End of List -->
                </div>
                <!-- End of Three Point of layanan -->
            </div>
        </div>
    </div>
    <!-- End of Masalah dan kinerja -->

    <!-- Layanan -->
    <div class="jenis-layanan" data-aos="fade-up">
        <div class="container">
            <!-- Heading Jenis Layanan -->
            <div class="judul">
                <!-- Line left of heading  -->
                <hr>

                <!-- This is Heading  -->
                <h3>Jenis Layanan Kami</h3>

                <!-- Line right of heading -->
                <hr>
            </div>

            <!-- Responsive card carousel container -->
            <div class="owl-carousel">
                <!-- Sistem Informasi -->
                <div>
                    <div class="card">
                        <div class="card-body text-center">
                            <!-- Title -->
                            <h5 class="card-title">Sistem Informasi</h5>

                            <!-- Describe Text -->
                            <p class="card-text">Platform sistem informasi terbaik untuk memudahkan bisnis Anda</p>

                            <!-- Icon -->
                            <div class="img-area laptop"
                                style="display:flex; justify-content:center; align-items:center;">
                                </script>
                                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_wkossx6a.json"
                                    background="transparent" speed="1" style="width: 170px; height: 170px;" loop
                                    autoplay></lottie-player>

                            </div>

                            <!-- Button Container -->
                            <div class="selengkapnya">
                                <!-- Button with hover-effect.css-->
                                <a href="" class="hvr-icon-wobble-horizontal">SELENGKAPNYA <i
                                        class="fa fa-arrow-right hvr-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aplikasi Mobile -->
                <div>
                    <div class="card">
                        <div class="card-body text-center">
                            <!-- Title -->
                            <h5 class="card-title">Aplikasi Mobile</h5>

                            <!-- Describe Text -->
                            <p class="card-text">Lebih dekat mitra bisnis anda melalui Aplikasi Mobile </p>

                            <!-- Icon -->
                            <div class="img-area phone">
                                </script>
                                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_viopfy4u.json"
                                    background="transparent" speed="1" style="width: 110px; height: 110px;" loop
                                    autoplay></lottie-player>
                            </div>

                            <!-- Button Container -->
                            <div class="selengkapnya">
                                <!-- Button with hover-effect.css-->
                                <a href="" class="hvr-icon-wobble-horizontal"> SELENGKAPNYA <i
                                        class="fa fa-arrow-right hvr-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aplikasi E-Gov -->
                <div>
                    <div class="card">
                        <div class="card-body text-center">
                            <!-- Card Title -->
                            <h5 class="card-title">Aplikasi E-Gov</h5>

                            <!-- Describe Text -->
                            <p class="card-text">Teknologi sebagai solusi mewujudkan Smart Goverment</p>

                            <!-- Icon -->
                            <div class="img-area">
                                </script>
                                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_qc9iczkv.json"
                                    background="transparent" speed="1" style="width: 140px; height: 140px;" loop
                                    autoplay></lottie-player>
                            </div>

                            <!-- Button Container -->
                            <div class="selengkapnya">
                                <!-- Button with hover-effect.css-->
                                <a href="" class="hvr-icon-wobble-horizontal">SELENGKAPNYA <i
                                        class="fa fa-arrow-right hvr-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Integritas Sistem -->
                <div>
                    <div class="card">
                        <div class="card-body text-center">
                            <!-- Card Title -->
                            <h5 class="card-title">Integritas Sistem</h5>

                            <!-- Describe Text -->
                            <p class="card-text">Tingkakan kinerja IT Anda dengan data yang terintegrasi</p>

                            <!-- Icon -->
                            <div class="img-area">
                                </script>
                                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_aanhnju9.json"
                                    background="transparent" speed="1" style="width: 100px; height: 100px;" loop
                                    autoplay></lottie-player>

                            </div>

                            <!-- Button Container -->
                            <div class="selengkapnya">
                                <!-- Button with hover-effect.css-->
                                <a href="" class="hvr-icon-wobble-horizontal">SELENGKAPNYA <i
                                        class="fa fa-arrow-right hvr-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pengadaan IT -->
                <div>
                    <div class="card">
                        <div class="card-body text-center">
                            <!-- Card Title -->
                            <h5 class="card-title">Pengadaan IT</h5>

                            <!-- Describe Text -->
                            <p class="card-text">Komponen Instruktur IT yang berkualitas untuk sistem yang handal</p>
                            <div class="img-area">
                                </script>
                                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ssodehfl.json"
                                    background="transparent" speed="1" style="width: 100px; height: 100px;" loop
                                    autoplay></lottie-player>
                            </div>

                            <!-- Button Container -->
                            <div class="selengkapnya">
                                <!-- Button with hover-effect.css-->
                                <a href="" class="hvr-icon-wobble-horizontal">SELENGKAPNYA <i
                                        class="fa fa-arrow-right hvr-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Layanan -->

    <!-- Portofolio -->
    <div class="portofolio">
        <div class="container text-center">
            <!-- Heading Container -->
            <div class="container-judul">
                <!-- Sub Heading -->
                <p class="sub-judul">Portofolio</p>

                <!-- Heading -->
                <h2>
                    LAYANAN KAMI TELAH
                    <br>
                    DIGUNAKAN DALAM BANYAK BIDANG
                </h2>

                <!-- Describtive text -->
                <p class="keterangan-judul">Dengan pengalaman yang cukup, tenaga ahli kami mampu merampingkan proses dan
                    memberikan solusi handal untuk mendukung produktivitas bisnis Anda</p>
            </div>

            <!-- Main Content of Portofolio -->
            <div class="row" data-aos="fade-up" data-aos-offset="10">
                <!-- Portofolio 1 -->
                <div class="col-lg-6 col-md-6 batas-card">
                    <div class="card h-100">
                        <!-- Img Contaienr -->
                        <div class="img-card-container">
                            <!-- Background Img -->
                            <img src="./img/portofolio/ap.png" class="card-img-top" alt="...">

                            <!-- Logo -->
                            <img src="./img/portofolio/Logo-Arindra.png" class="logo" alt="">
                        </div>

                        <!-- Text -->
                        <div class="card-body text-left">
                            <!-- Sub Title -->
                            <p class="mini-judul">Sistem Informasi</p>

                            <!-- Card Title -->
                            <h5 class="card-title">Website Company Profile Arindraproduction.com - CV.Arindra Production
                            </h5>

                            <!-- Text -->
                            <p class="card-text">Latar Belakang CV.Arindra Production adalah sebuah production house di
                                bidang Videography video Comany Profile, Video Documentasi Event, Aerial Footage,
                                Documenter Film, Motion Graphic, Video Iklan, dan Live Streaming.CV.Arindra Production
                                banyak sekali keahlian dan pengalaman yang cukup untuk mengerjakan di bidang
                                Videography.</p>

                            <!-- Link Selengkapnya with hover-effect.css -->
                            <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>

                <!-- Portofolio 2 -->
                <div class="col-lg-6 col-md-6 batas-card">
                    <div class="card h-100">
                        <!-- Img Container -->
                        <div class="img-card-container">
                            <!-- Background Img -->
                            <img src="./img/portofolio/twin-robo.png" class="card-img-top" alt="...">

                            <!-- Logo -->
                            <div class="logo position">
                                <!-- Logo img -->
                                <img src="./img/portofolio/joss.png" alt="">
                                <!-- Logo Text -->
                                <img src="./img/portofolio/txtTwinsRobo.png" alt="">
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="card-body text-left">
                            <!-- Sub Title -->
                            <p class="mini-judul">Aplikasi Mobile</p>

                            <!-- Card Title -->
                            <h5 class="card-title">Aplikasi Media Pembelajaran Programing Robot - Twins Robo Apps</h5>

                            <!-- Text -->
                            <p class="card-text">Twins Robo Apps adalah suatu aplikasi media pembelajaran programming
                                robot line maze berbasis mobile untuk membantu siswa SD, SMP, SMA yang ingin belajar
                                programming secara basic dan dikemas dalam bentuk games secara multiplayer dan langsung
                                bisa di implementasikan/di upoad ke dalam robot scara real.</p>

                            <!-- Link Selengkapnya with hover-effect.css -->
                            <a href="#" class="btn btn-primary hvr-bounce-to-top">SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Portofolio -->

    <!-- Alasan Bermitra -->
    <div class="alasan-bermitra">
        <div class="container">
            <div class="container-judul row" data-aos="fade-up">
                <div class="col-md-12">
                    <p class="sub-judul">ALASAN MEMILIH KAMI</p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h2>6 ALASAN UNTUK BERMITRA DENGAN KAMI</h2>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p>Inilah 6 alasan mengapa Anda harus memilih kami untuk merampingkan proses, membangun sistem,
                        serta memberi saran kepada Anda yang dapat meningkatkan produktivitas perusahaan</p>
                </div>
            </div>

            <ul class="items row">
                <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-3 text-img">
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_dunmkucz.json"
                                background="transparent" speed="1" loop autoplay></lottie-player>
                        </div>
                        <div class="col-9 text">
                            <h3>Respon Cepat</h3>
                            <p>Dengan dukungan nomor pusat keluhan via Whatsapp di nomer 081252200899 dan nomor telepon
                                (031) 8437588 kami hadirkan layanan cepat atas setiap keluhan yang dialami mitra.</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-3 text-img">
                            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_q32pr5gh.json"
                                background="transparent" speed="1" loop autoplay>
                            </lottie-player>
                        </div>
                        <div class="col-9 text">
                            <h3>Berpengalaman</h3>
                            <p>Dukungan tim handal yang lebih dari 5
                                tahun telah sukses menyelesaikan
                                berbagai studi kasus mitra, kami siap
                                menyajikan berbagai layanan handal
                                dan berkualitas untuk Anda.</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-3 text-img">
                            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_U8MhmH.json"
                                background="transparent" style="transform: scale(1.3);" speed="1" loop autoplay>
                            </lottie-player>
                        </div>
                        <div class="col-9 text">
                            <h3>Tim Handal</h3>
                            <p>Dengan didukung berbagai latar
                                belakang keahlian dan
                                pengalaman perusahaan dibidang
                                teknologi, kami siap memenuhi
                                target penyelesaian lebih cepat
                                dan handal.</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="row">
                        <div class="col-3 text-img">
                            <lottie-player class="atas"
                                src="https://assets2.lottiefiles.com/packages/lf20_iq0zmgip.json"
                                background="transparent" style="transform: scale(0.7);" speed="1" loop autoplay>
                            </lottie-player>
                        </div>
                        <div class="col-9 text">
                            <h3>Solusi Terbaik</h3>
                            <p>Studi kasus dan latar belakang dari pengguna selalu menjadi materi
                                perumusan solusi yang kami tawarkan
                                guna menghasilkan layanan yang tepat
                                sasaran</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="row">
                        <div class="col-3 text-img">
                            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_lqbg5smd.json"
                                background="transparent" style="transform: scale(1.7);" speed="1" loop autoplay>
                            </lottie-player>
                        </div>
                        <div class="col-9 text">
                            <h3>Serba Bisa</h3>
                            <p>Dengan didukung tenaga ahli yang
                                handal, tim kami mampu membangun
                                sebuah layanan yang berkualitas dalam berbagai platform teknologi baik mobile, desktop,
                                web,
                                maupun hardware.</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6 mx-0 item" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="row">
                        <div class="col-3 text-img">
                            <lottie-player class="atas"
                                src="https://assets5.lottiefiles.com/packages/lf20_qdbb21wb.json"
                                background="transparent" style="transform: scale(0.9);" speed="1" loop autoplay>
                            </lottie-player>
                        </div>
                        <div class="col-9 text">
                            <h3>100% Jaminan Puas</h3>
                            <p>Kami memberikan jaminan bahwa
                                solusi kami harus bekerja dan
                                mencapai tujuan mitra dalam
                                meningkatkan performa bisnis
                                mereka melalui teknologi.</p>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="end-text" data-aos="fade-up">
                <p>Sudah saatnya bisnis Anda terbang lebih tinggi. <a href="" class="hvr-underline-from-left">Telusuri
                        perusahaan kami.</a></p>
            </div>
        </div>
    </div>
    <!-- End of Alasan Bermitra -->

    <!-- Form Solusi -->
    <div class="solusi">
        <div class="container">
            <!-- Container Mitra -->
            <div class="row container-mitra" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-5 text-center keterangan">
                    <p class="sub-judul">SELANGKAH KAMI LEBIH DEKAT</p>
                    <h2>DAPATKAN SOLUSINYA SEKARANG</h2>
                    <p class="text-under-judul">Silakan hubungi kontak atau isi form yang telah tersedia.</p>

                    <ul class="row items">
                        <li class="col-md-12 item">
                            <div class="row">
                                <div class="col-3 pt-2">
                                    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_q75ozg3t.json"
                                        background="transparent" speed="1" style="width: 100%; height: auto;" loop
                                        autoplay>
                                    </lottie-player>
                                </div>
                                <div class="text text-left col-9">
                                    <h3>Mari Berdiskusi</h3>
                                    <p>Kami akan menghubungi dan
                                        berdiskusi tentang bisnis Anda,
                                        bagaimana Anda menggunakan teknologi, dan apa saja yang Anda butuhkan.</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-12 item">
                            <div class="row">
                                <div class="col-3 pt-2">
                                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_my6ldrkt.json"
                                        background="transparent" speed="1" style="width: 100%; height: auto;" loop
                                        autoplay>
                                    </lottie-player>
                                </div>
                                <div class="text text-left col-9">
                                    <h3>Pilih Layanan</h3>
                                    <p>Anda bisa pilih paket layanan IT yang sesuai dengan kebutuhan perusahaan Anda.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-12 item">
                            <div class="row">
                                <div class="col-3 pt-4">
                                    <lottie-player class="target"
                                        src="https://assets3.lottiefiles.com/packages/lf20_ich37shs.json"
                                        background="transparent" speed="1" style="width: 100%; height: auto;" loop
                                        autoplay>
                                    </lottie-player>
                                </div>
                                <div class="text text-left col-9">
                                    <h3>Mulai Pengerjaan</h3>
                                    <p>Tim ahli kami akan mulai pengerjaan sesuai target dan kesepakatan bersama. Hingga
                                        kemudian solusi jitu kami tersedia pada bisnis Anda.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 form">
                    <!-- Container Form -->
                    <div class="container-form">
                        <form>
                            <div class="row">
                                <!-- Alert -->
                                <div class="alert alert-success alert-dismissible fade show col-md-12 d-none"
                                    role="alert">
                                    <strong>Selamat!</strong> Data Anda berhasil dikirim.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- Input Nama -->
                                <div class="col-md-6 margin-text">
                                    <input type="text" class="form-control" placeholder="Nama Anda*" required>
                                </div>

                                <!-- Input Email -->
                                <div class="col-md-6 margin-text">
                                    <input type="email" class="form-control" placeholder="Email Anda*" required>
                                </div>

                                <!-- Input No. HP -->
                                <div class="col-md-6 margin-text">
                                    <input type="tel" class="form-control" placeholder="No HP*" required>
                                </div>

                                <!-- Input Nama Perusahaan -->
                                <div class="col-md-6 margin-text">
                                    <input type="text" class="form-control" placeholder="Nama Perusahaan*" required>
                                </div>

                                <!-- Select Layanan IT -->
                                <div class="col-md-12 margin-select">
                                    <select class="form-control">
                                        <option>Layanan IT apa yang Anda butuhkan ?*</option>
                                    </select>
                                </div>
                                <!-- End of Select Layanan IT -->

                                <!-- Radio Button -->
                                <!-- Radio Button Question -->
                                <div class="col-md-12">
                                    <h5 for="jumlahKaryawan">Berapa banyak orang yang bekerja pada perusahaan Anda?
                                        </label>
                                </div>


                                <!-- Radio Button Value -->
                                <!-- Value 1-5 -->
                                <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                    <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="1-5">
                                    <span class="radio-btn">
                                        <div class="jumlah">
                                            <h3>1 - 5</h3>
                                        </div>
                                        <i class="las la-check"></i>
                                    </span>
                                </label>
                                <!-- End of Value 1-5 -->

                                <!-- Value 5-15 -->
                                <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                    <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="5-15">
                                    <span class="radio-btn">
                                        <div class="jumlah">
                                            <h3>5 - 15</h3>
                                        </div>
                                        <i class="las la-check"></i>
                                    </span>
                                </label>
                                <!-- End Value 5-15 -->

                                <!-- Value 15-25 -->
                                <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                    <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="15-25">
                                    <span class="radio-btn">
                                        <div class="jumlah">
                                            <h3>15 - 25</h3>
                                        </div>
                                        <i class="las la-check"></i>
                                    </span>
                                </label>
                                <!-- End of Value 15-25 -->

                                <!-- Value 20+ -->
                                <label class="costum-radio col-lg-3 col-md-6 col-sm-6">
                                    <input type="radio" name="jumlahKaryawan" id="jumlahKaryawan" value="20+">
                                    <span class="radio-btn">
                                        <div class="jumlah">
                                            <h3>20+</h3>
                                        </div>
                                        <i class="las la-check"></i>
                                    </span>
                                </label>
                                <!-- End of Value 20+ -->

                                <!-- Select Bidang Perusahaan -->
                                <div class="col-md-12 margin-select">
                                    <select class="form-control" id="exampleFormControlSelect1" placeholder="holder">
                                        <!-- Value of Select Bidang Perusahaan -->
                                        <option>Pilih bidang perusahaan Anda</option>
                                        <option>Pariwisata</option>
                                        <option>Keuangan</option>
                                        <option>Hukum</option>
                                        <option>Manajemen</option>
                                    </select>
                                </div>
                                <!-- End of Select Bidang Perusahaan -->

                                <!-- Verification Input -->
                                <div class="col-md-7 margin-end">
                                    <input type="text" class="form-control" placeholder="Verification *" required>
                                </div>

                                <!-- Verification Code Place -->
                                <div class="col-md-5 margin-end">
                                    <img src="" alt="">
                                </div>

                                <!-- Agreement -->
                                <div class="col-lg-7 box-setuju d-flex justify-content-start">
                                    <input type="checkbox" id="setuju" name="setuju">
                                    <!-- Agreement Text -->
                                    <label for="setuju">Saya menyetujui bahwa data yang saya isi adalah benar</label>
                                </div>
                                <!-- End of Agreement -->

                                <!-- Submit Button -->
                                <div class="col-lg-5 text-center">
                                    <button type="submit" class="btn-primary btn-submit" id="kirim_btn"
                                        disabled="disabled">Kirim
                                    </button>

                                    <button class="btn btn-primary d-none" type="button" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- End of Container Form -->
                </div>
            </div>
            <!-- End of Container Mitra -->

            <div class="row container-testi d-flex justify-content-between">
                <div class="pelanggan col-md-6 row" data-aos="fade-right">
                    <div class="mx-0 col-lg-4 pelanggan-info">
                        <div class="img-testi">
                            <img src="./img/solusi/foto-mas-arindra.png" alt="">
                        </div>
                        <div class="info">
                            <h5 class="nama-pelanggan">Reza Arindra Fadillah</h5>
                            <p class="posisi">CEO & Project Manager CV. Arindra Production</p>
                        </div>
                    </div>
                    <div class="mx-0 mt-1 pl-0 col-lg-8">
                        <p>Terima kasih kepada Codepan Studio Surabaya, aplikasinya sangat membantu. Sudah kami gunakan
                            seluruhnya. Lalu layanan dari Profio secara kesuluruhan juga sudah cukup baik mulai dari
                            komunikasi, hasil, dan ketepatan dalam menyelesaikannya.</p>
                    </div>
                </div>

                <div class="pelanggan col-md-6 row" data-aos="fade-right" data-aos-delay="200">
                    <div class="mx-0 col-lg-4 pelanggan-info">
                        <div class="img-testi">
                            <img src="./img/solusi/foto-pelanggan2.png" alt="">
                        </div>
                        <div class="info">
                            <h5 class="nama-pelanggan">Andrea Piacquadio</h5>
                            <p class="posisi">CEO & Project Manager PT. Angkasa Indah</p>
                        </div>
                    </div>
                    <div class="mx-0 mt-1 pl-0 col-lg-8">
                        <p>Layanan jasa dari Codepan Studio Surabaya baik, koordinasinya tanggap dan cepat, pelayanannya
                            maksimal. Overall bagus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Form Solusi -->

    <!-- Page Blog -->
    <div class="page-blog">
        <div class="container">
            <!-- Container Judul -->
            <div class="container-judul text-center">
                <p class="sub-judul">Blog Kami</p>
                <h2 class="judul">GAGASAN, NARASI, DAN INOVASI TEKNOLOGI</h2>
            </div>
            <!-- End of Container Judul -->
            <p class="text-center text-under-judul">Telusuri Blog Codepan Studio untuk gagasan yang berharga dan
                pemikiran inovatif tentang trend IT masa kini</p>

            <!-- Container Blog -->
            <div class="container-blog row">
                <!-- Card Blog 1 -->
                <div class="col-lg-4 col-md-6 margin-blog" data-aos="zoom-out-down">
                    <div class="card hvr-underline-reveal">
                        <img src="./img/page-blog/Foto-Blog1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="sub-judul">04/10/2020</p>
                            <h5 class="card-title">Memastikan Keamanan Jaringan dengan Teknologi Firewall</h5>
                            <p class="card-text">Teknologi firewall adalah salah satu dari sekian banyak sistem keamanan
                                yang dapat di terapkan pada jaringan private inte???</p>
                        </div>
                    </div>
                </div>

                <!-- Card Blog 2 -->
                <div class="col-lg-4 col-md-6 margin-blog" data-aos="zoom-out-down" data-aos-delay="300">
                    <div class="card hvr-underline-reveal">
                        <img src="./img/page-blog/Foto-Blog2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="sub-judul">04/10/2020</p>
                            <h5 class="card-title">Memastikan Keamanan Jaringan dengan Teknologi Firewall</h5>
                            <p class="card-text">Teknologi firewall adalah salah satu dari sekian banyak sistem keamanan
                                yang dapat di terapkan pada jaringan private inte???</p>
                        </div>
                    </div>
                </div>

                <!-- Card Blog 3 -->
                <div class="col-lg-4 col-md-6 margin-blog" data-aos="zoom-out-down" data-aos-delay="600">
                    <div class="card hvr-underline-reveal">
                        <img src="./img/page-blog/Foto-Blog3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="sub-judul">04/10/2020</p>
                            <h5 class="card-title">Memastikan Keamanan Jaringan dengan Teknologi Firewall</h5>
                            <p class="card-text">Teknologi firewall adalah salah satu dari sekian banyak sistem keamanan
                                yang dapat di terapkan pada jaringan private inte???</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Container Blog -->

            <!-- Text under container -->
            <p class="text-center text-under-container" data-aos="fade-up">Wawasan baru membantu Anda melakukan
                pekerjaan dengan lebih baik dan efisien. <a href="" class="hvr-underline-from-left">Lihat semua
                    artikel.</a></p>
        </div>

    </div>
    <!-- End of Page Blog -->

    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1"
            d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
    <footer>
        <div class="container">
            <!-- Page Mari Bermitra -->
            <div class="mari-bermitra" data-aos="fade-up" data-aos-delay="200">
                <div class="background text-center">
                    <h1>Mari Bermitra</h1>
                    <p>
                        Ketika berkaitan dengan teknologi IT untuk perusahaan, Anda membutuhkan seseorang yang ahli.
                        Izinkan kami menunjukkan kepada Anda sebuah layanan IT yang responsif, amanah, dan dapat
                        diandalkan.
                    </p>
                    <a href="">MULAI KONSULTASI GRATIS</a>
                </div>
            </div>
            <!-- End of Page Mari Bermitra -->

            <!-- Menu Footer -->
            <div class="menu">
                <div class="row">
                    <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right">
                        <ul>
                            <li>
                                <h5>Produk</h5>
                            </li>
                            <li>Twins Robo Apps</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right" data-aos-delay="200">
                        <ul>
                            <li>
                                <h5>Layanan IT</h5>
                            </li>
                            <li>Sistem Informasi</li>
                            <li>Aplikasi Mobile</li>
                            <li>Aplikasi E-Gov</li>
                            <li>Intergrasi Sistem</li>
                            <li>Pengadaan IT</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right" data-aos-delay="400">
                        <ul>
                            <li>
                                <h5>Perusahaan</h5>
                            </li>
                            <li>Tentang Kami</li>
                            <li>Pakta Integritas</li>
                            <li>Aturan Layanan</li>
                            <li>Kontak Kami</li>
                            <li>Karir</li>
                            <li>Blog</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right" data-aos-delay="600">
                        <ul>
                            <li>
                                <h5>Akun Kami</h5>
                            </li>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Linkedin</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Of Menu Footer -->

            <!-- Contact -->
            <div class="contact" data-aos="fade-left">
                <p>Alamat : Jl. Sidosermo VI No.7, Sidosermo, Kec. Wonocolo, Kota SBY, Jawa Timur 60285 </p>
                <p>Telepon: <a href="tel:+620318437588" class="hvr-underline-from-left">(031) 8437588</a> | Email: <a
                        href="mailto:info@codepanstudio.com" class="hvr-underline-from-left"
                        target="_blank">info@codepanstudio.com</a> | GMAPS : <a href="https://bit.ly/GMAPSCodepanStudio"
                        class="hvr-underline-from-left" target="_blank">https://bit.ly/GMAPSCodepanStudio</a> </p>
            </div>
            <!-- End of Contact -->

            <!-- Copyright -->
            <div class="copyright text-center">
                <p>Copyright ?? 2021 CV. Arindra Production</p>
            </div>
        </div>
    </footer>

    <!-- Boostrap Bundle CSS include JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

    <!-- Owl Caousel .js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous"></script>

    <!-- Header Effect .js -->
    <script src="./js/headerEffect/main.js"></script>
    <script src="./js/headerEffect/modernizr.js"></script>

    <!-- Lottie Js -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@0.5.1/dist/lottie-player.js"></script>

    <!-- Animate on Scroll .js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Costum Main.js -->
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>