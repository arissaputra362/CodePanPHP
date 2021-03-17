<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Infrmasi</title>

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

    <!-- Hover Effect CSS -->
    <link rel="stylesheet" href="../css/hover-min.css">

    <!-- Animate on Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/dropdown_item.css">
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
                        <img src="../img/header/chat-icon.png" alt="">
                        <div class="text">
                            <p class="judul">Hubungi Kami</p>
                            <a href="tel:+6281252200089" class="isi">081252200089</a>
                        </div>
                    </div>
                    <!-- End of Container Hubungi Kami (telepon) -->

                    <!-- Container Email -->
                    <div class="email">
                        <img src="../img/header/email-icon.png" alt="">
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
                        <a href="./karir.php">
                            <img src="../img/header/karir-icon.png" alt="">
                            <p>Karir</p>
                        </a>
                    </li>
                    <li>
                        <a href="./blog.php">
                            <img src="../img/header/blog-icon.png" alt="">
                            <p>Blog</p>
                        </a>
                    </li>
                    <li>
                        <a href="./kontak.php">
                            <img src="../img/header/contact-icon.png" alt="">
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
                        src="../img/navbar/logo-codepan.png" alt="" class=""></a>

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
                            <a class="nav-link" href="../index.php" onclick="moveMenuNav(this)">BERANDA <span
                                    class="sr-only">(current)</span></a>
                        </li>

                        <!-- Simple Menu Tentang Kami -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="moveMenuNav(this)">TENTANG KAMI <span
                                    class="sr-only">(current)</span></a>
                        </li>

                        <!-- Simple Menu Portofolio -->
                        <li class="nav-item">
                            <a class="nav-link active" href="./portofolio.php" onclick="moveMenuNav(this)">PORTOFOLIO
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
                                        <a href="#">
                                            <i class="fas fa-laptop"></i>
                                            <h5>Sistem Informasi</h5>
                                        </a>
                                    </div>

                                    <!-- Aplikasi Mobile -->
                                    <div class="col-lg-2 dropdown-item">
                                        <a href="#">
                                            <i class="fas fa-mobile-alt"></i>
                                            <h5>Aplikasi Mobile</h5>
                                        </a>
                                    </div>

                                    <!-- Aplikasi E-Gov -->
                                    <div class="col-lg-2 dropdown-item">
                                        <a href="#">
                                            <i class="las la-chart-bar"></i>
                                            <h5>Aplikasi E-Gov</h5>
                                        </a>
                                    </div>

                                    <!-- Integrasi Sistem -->
                                    <div class="col-lg-2 dropdown-item">
                                        <a href="#">
                                            <i class="fas fa-sync"></i>
                                            <h5>Integrasi Sistem</h5>
                                        </a>
                                    </div>

                                    <!-- Pengadaan IT -->
                                    <div class="col-lg-2 dropdown-item">
                                        <a href="#">
                                            <i class="fas fa-file-alt"></i>
                                            <h5>Pengadaan IT</h5>
                                        </a>
                                    </div>

                                    <!-- Semua Layanan -->
                                    <div class="col-lg-2 dropdown-item">
                                        <a href="./layanan_it.php">
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
                            <a class="nav-link" href="./karir.php">KARIR
                                <span class="sr-only">(current)</span></a>
                        </li>

                        <!-- Simple Menu Blog -->
                        <li class="nav-item menu-hidden">
                            <a class="nav-link" href="./blog.php">BLOG
                                <span class="sr-only">(current)</span></a>
                        </li>

                        <!-- Simple Menu Kontak -->
                        <li class="nav-item menu-hidden">
                            <a class="nav-link" href="./kontak.php">KONTAK
                                <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                    <!-- Navbar Logo for Large Screen > 992px  -->
                    <a href="#" class="d-flex justify-content-center display-logo-center"><img class="logo mr-auto"
                            src="../img/navbar/logo-codepan.png" alt="" class=""></a>

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

    <!-- Jumbotron Heading -->
    <div id="mt" class="centered jumbotron jumbotron-fluid"
        style="background-image: url('../img/sistem-informasi/Jumbotron SI.png');">
        <div class="container">
            <h1 class="display-4">SISTEM INFORMASI</h1>
            <p class="lead text-center">
                Platform sistem informasi terbaik untuk memudahkan bisnis Anda
            </p>
            <a href="#" class="btn tombol hvr-bounce-to-top">Pesan Sekarang</a>
        </div>
    </div>
    <!-- Akhir JumboTron -->



    <!-- <section id="hadirDenganSolusi"> -->
    <section id="hadirDenganSolusi">
        <div class="container">
            <div class="row">
                <div class="col-md-5" id="judulSI" data-aos="fade-right">
                    <h1>Kami Hadir dengan Solusi Terbaik</h1>
                    <p>Kami hadir memberikan layanan dan solusi atas permasalahan Anda. Kami menawarkan layanan sistem
                        informasi yang kompetitif dan prima menggunakan metode yang handal dan terpercaya.</p>
                    <p><a class="hvr-bounce-to-top" href="#">Dapatkan Konsultasi Gratis <i
                                class="fas fa-long-arrow-alt-right hvr-icon-fade"></i></a></p>
                </div>

                <div class="col-md-7" id="bullets" data-aos="fade-left">
                    <ul>
                        <li><img src="../img/sistem-informasi/Pointer.png" alt=""></li>
                        <li class="bullets">
                            <h4>Mengoptimalkan Kinerja</h4>
                            <p>Sistem informasi yang handal akan membuat kinerja sistem manajemen perusahaan menjadi
                                lebih optimal.</p>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="../img/sistem-informasi/Pointer.png" alt=""></li>
                        <li class="bullets">
                            <h4>Mempermudah Pengelolaan Data</h4>
                            <p>Dengan sistem informasi, data bisnis menjadi mudah untuk dikelola oleh perusahaan Anda.
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="../img/sistem-informasi/Pointer.png" alt=""></li>
                        <li class="bullets">
                            <h4>Mempercepat Informasi</h4>
                            <p>Layanan sistem informasi berfungsi untuk mempercepat penyampaian informasi kepada calon
                                customer atau klien.</p>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="../img/sistem-informasi/Pointer.png" alt=""></li>
                        <li class="bullets">
                            <h4>Lebih Efisien</h4>
                            <p>Sistem informasi membuat beban operasional perusahaan Anda lebih efisien.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Akhir Row-->

            <div class="row" id="row-card" data-aos="fade-down" data-aos-delay="200">
                <div class="col-lg-3">
                    <div class="card">
                        <!-- <img src="/img/Path.png" class="card-img-top" alt="..."> -->
                        <div class="card-img-rowCard">
                            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_nl9bgfle.json"
                                background="transparent" speed="1" loop autoplay style="transform: scale(0.8);">
                            </lottie-player>
                        </div>
                        <div class="card-body">
                            <div id="counter">
                                <div class="pembungkus-counter d-flex justify-content-center align-items-center">
                                    <p class="card-text counter-value" id="count1" data-count="1">20</p>
                                    <span id="span1">+</span>
                                </div>
                                <h5 class="card-title">Pengalaman</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <!-- <img src="/img/smile.png" class="card-img-top" alt="..."> -->
                        <div class="card-img-rowCard">
                            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_qc9sajgo.json"
                                background="transparent" speed="1" loop autoplay style="transform: scale(0.5);">
                            </lottie-player>
                        </div>
                        <div class="card-body">
                            <div id="counter">
                                <div class="pembungkus-counter d-flex justify-content-center align-items-center">
                                    <p class="card-text counter-value" id="count2" data-count="100">50</p>
                                    <span id="span2">+</span>
                                </div>
                                <h5 class="card-title">Kepuasan Pelanggan</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <!-- <img src="/img/Shape.png" class="card-img-top" alt="..."> -->
                        <div class="card-img-rowCard">
                            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_tlzxty4j.json"
                                background="transparent" speed="1" loop autoplay style="transform: scale(1.3);">
                            </lottie-player>
                        </div>
                        <div class="card-body">
                            <div id="counter">
                                <div class="pembungkus-counter d-flex justify-content-center align-items-center">
                                    <p class="card-text counter-value" id="count3" data-count="365" style="">0</p>
                                    <span id="span3">24/7</span>
                                </div>
                                <h5 class="card-title">Kepuasan Pelanggan</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <!-- <img src="/img/user.png" class="card-img-top" alt="..."> -->
                        <div class="card-img-rowCard">
                            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_2wrjlrbz.json"
                                background="transparent" speed="1" loop autoplay style="transform: scale(0.7);">
                            </lottie-player>
                        </div>
                        <div class="card-body">
                            <div id="counter">
                                <div
                                    class="pembungkus-counter d-flex justify-content-center align-items-center align-items-center">
                                    <p class="card-text counter-value" id="count4" data-count="1">20</p>
                                    <span id="span4">partner</span>
                                </div>
                                <h5 class="card-title">Kepuasan Pelanggan</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Akhir Row-Card-->

            <p class="p-bottom">Kami akan membantu Anda mencapai tujuan. <a class="hvr-underline-from-left"
                    href="#">Konsultasi sekarang.</a></p>
        </div>
        <!--Akhir Container 1-->

        <div class="container" id="kunci-sukses">
            <div class="row">
                <div class="col">
                    <h5 class="tag-kecil">Kunci Sukses</h5>
                    <h1 class="tag-besar">SYARAT IMPLEMENTASI SISTEM INFORMASI</h1>
                    <p class="capt">Sistem informasi yang handal dan terbaik, membutuhkan kerja sama dari semua pihak.
                        Anda bisa membantu kami dalam mengimplementasikannya.</p>
                </div>
            </div>
            <!--Akhir Row1-->
            <div class="row">
                <div class="col-lg-4" data-aos="zoom-out">
                    <figure class="figure">
                        <img src="../img/sistem-informasi/card1.png" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h1>1. Masterplan</h1>
                            <p>Memiliki masterplan atau konsep pengembangan teknologi akan menjadi nilai plus dalam
                                mendukung output sistem.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="200">
                    <figure class="figure">
                        <img src="../img/sistem-informasi/card2.jpg" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h1>2. Kebijakan</h1>
                            <p>Pemangku kepentingan sudah mengeluarkan keputusan terkait rencana pengembangan sistem
                                informasi sekaligus menentukan goal dari tujuan akhir implementasi sistem informasi.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="300">
                    <figure class="figure">
                        <img src="../img/sistem-informasi/card3.jpg" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h1>3. Bisnis Proses</h1>
                            <p>Sudah ada aturan proses kerja dalam institusi yang telah dibakukan dan di sahkan.
                                (contoh: Standard Operational Procedure)</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <!--AKhir Row2-->

        </div>
        <!--Akhir Container 2-->
        <br><br>
    </section>


    <section id="portofolio">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5 class="tag-kecil">Portofolio</h5>
                    <h1 class="tag-besar">HASIL JASA LAYANAN KAMI</h1>
                    <p class="capt">Inilah beberapa hasil jasa layanan kami kepada beberapa mitra. Tenaga ahli kami
                        telah mampu menyelesaikan permasalahan dan meningkatkan kinerja perusahaan mitra kami.</p>
                </div>
            </div>
            <!--Akhir Row1-->
            <div class="row" data-aos="fade-up" data-aos-offset="10" data-aos-delay="300">
                <div class="col-md-4">
                    <div class="card card-portofolio">
                        <div class="card-img">
                            <img src="../img/sistem-informasi/card4.jpg" class="card-img-top hvr-grow" alt="...">
                        </div>
                        <div class="card-body">
                            <small class="card-info">Sistem Informasi</small>
                            <h5 class="card-title">Twins Robo Apps (Aplikasi Pembelajaraan
                                Program Komputer) </h5>
                            <p class="card-text">Tentang Aplikasi Twins Robo Apps Merupakan suatu aplikasi media
                                pembelajaran programming robot line maze berbasis mobile untuk membantu siswa SD,SMP,SMA
                                yang ingin belajar programming secara basic dan di kemas dalam bentuk games secara
                                multiplayer</p>
                            <a href="#" class="btn tombol hvr-bounce-to-top">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-portofolio">
                        <div class="card-img">
                            <img src="../img/sistem-informasi/card4.jpg" class="card-img-top hvr-grow" alt="...">
                        </div>
                        <div class="card-body">
                            <small class="card-info">Sistem Informasi</small>
                            <h5 class="card-title">Twins Robo Apps (Aplikasi Pembelajaraan
                                Program Komputer) </h5>
                            <p class="card-text">Tentang Aplikasi Twins Robo Apps Merupakan suatu aplikasi media
                                pembelajaran programming robot line maze berbasis mobile untuk membantu siswa SD,SMP,SMA
                                yang ingin belajar programming secara basic dan di kemas dalam bentuk games secara
                                multiplayer</p>
                            <a href="#" class="btn tombol hvr-bounce-to-top">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-portofolio">
                        <div class="card-img">
                            <img src="../img/sistem-informasi/card4.jpg" class="card-img-top hvr-grow" alt="...">
                        </div>
                        <div class="card-body">
                            <small class="card-info">Sistem Informasi</small>
                            <h5 class="card-title">Twins Robo Apps (Aplikasi Pembelajaraan
                                Program Komputer) </h5>
                            <p class="card-text">Tentang Aplikasi Twins Robo Apps Merupakan suatu aplikasi media
                                pembelajaran programming robot line maze berbasis mobile untuk membantu siswa SD,SMP,SMA
                                yang ingin belajar programming secara basic dan di kemas dalam bentuk games secara
                                multiplayer</p>
                            <a href="#" class="btn tombol hvr-bounce-to-top">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Akhir Row2-->

        </div>
        <!--Akhir Container Portfolio-->
    </section>



    <section id="mitraKerja">
        <div class="container">
            <div class="row row-biru">
                <div class="col d-flex flex-column align-items-center">
                    <h5 class="tag-kecil">Mitra Kerja</h5>
                    <h1 class="tag-besar">MITRA KERJA KAMI</h1>
                    <p class="capt">Kami bermitra dengan berbagai macam instansi dan perusahaan</p>
                    <img src="../img/sistem-informasi/Dinas.png" alt="" data-aos="fade-down">
                </div>
            </div>
            <!--Akhir Row1-->
            <div class="row row-putih">
                <div class="col-md-6">
                    <div class="row row-putih-testi" data-aos="fade-right">
                        <div class="col-lg-4 col-putih-testi">
                            <div class="img-testi">
                                <img src="../img/sistem-informasi/Reza Arindra.png" alt="">
                            </div>
                            <div class="info">
                                <h2>Reza Arindra Fadillah</h2>
                                <small>CEO & Project Manager <br>CV. Arindra Production</small>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <p>Terima kasih kepada Codepan Studio Surabaya, aplikasinya sangat membantu. Sudah kami
                                gunakan seluruhnya. Lalu layanan dari Profio secara kesuluruhan juga sudah cukup baik
                                mulai dari komunikasi, hasil, dan ketepatan dalam menyelesaikannya.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row row-putih-testi" data-aos="fade-right" data-aos-delay="200">
                        <div class="col-lg-4 col-putih-testi">
                            <div class="img-testi">
                                <img src="../img/sistem-informasi/Andrea.png" alt="">
                            </div>
                            <div class="info">
                                <h2>Andrea</h2>
                                <small>CEO & Project Manager <br>CV. Arindra Production</small>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <p>Layanan jasa dari Codepan Studio Surabaya baik, koordinasinya tanggap dan cepat,
                                pelayanannya maksimal. Overall bagus.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--Akhir Row2-->

        </div>
        <!--Akhir Container-->
    </section>




    <!-- Form Solusi -->
    <div class="solusi">
        <div class="container">
            <!-- Container Mitra -->
            <div class="row container-mitra" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-5 text-center keterangan">
                    <p class="sub-judul">Cara Kerja Kami</p>
                    <h2>DAPATKAN SOLUSINYA SEKARANG</h2>
                    <p class="text-under-judul">Silakan hubungi kontak atau isi form yang telah tersedia. Selanjutnya,
                        tim kami akan menghubungi Anda secepatnya.</p>

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
                                <div class="col-lg-7 box-setuju">
                                    <input type="checkbox" id="setuju" name="setuju">
                                    <!-- Agreement Text -->
                                    <label for="setuju">Saya menyetujui bahwa data yang saya isi adalah
                                        benar</label>
                                </div>
                                <!-- End of Agreement -->

                                <!-- Submit Button -->
                                <div class="col-md-5 d-flex text-center">
                                    <button type="submit" class="btn-submit" id="kirim_btn" disabled="disabled">Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End of Container Form -->
                </div>

            </div>
            <!-- End of Container Mitra -->
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#2926A9" fill-opacity="1"
                d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </div>
    <!-- End of Form Solusi -->

    <!-- Footer -->
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
                <p>Copyright © 2021 CV. Arindra Production</p>
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

    <!-- Header Effect .js -->
    <script src="../js/headerEffect/main.js"></script>
    <script src="../js/headerEffect/modernizr.js"></script>

    <!-- Animate on Scroll .js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Pagination -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/jquery.simplePagination.min.js">
    </script>

    <!-- Lottie Js -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@0.5.1/dist/lottie-player.js"></script>

    <!-- Costum Main.js -->
    <script type="text/javascript" src="../js/main.js"></script>

    <!-- <script>
    topNavBar();
    scrollCalculate();
    $(function() {
        AOS.init({
            duration: 600,
            anchorPlacement: 'top-top',
            once: false,
        });
        // window.addEventListener("load", AOS.refresh);
        onElementHeightChange(document.body, function() {
            AOS.refresh();
        });
    });

    function onElementHeightChange(elm, callback) {
        var lastHeight = elm.clientHeight
        var newHeight;

        (function run() {
            newHeight = elm.clientHeight;
            if (lastHeight !== newHeight) callback();
            lastHeight = newHeight;

            if (elm.onElementHeightChangeTimer) {
                clearTimeout(elm.onElementHeightChangeTimer);
            }

            elm.onElementHeightChangeTimer = setTimeout(run, 200);
        })();
    }

    function refreshAos() {
        onElementHeightChange(document.body, function() {
            AOS.refresh();
        });
        AOS.init({
            duration: 600,
            anchorPlacement: 'top-top',
            once: false,
        });
    }
    </script> -->
</body>

</html>