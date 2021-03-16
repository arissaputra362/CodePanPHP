<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Portofolio</title>

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
    <link rel="stylesheet" href="../css/portofolio.css">
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
                            <a class="nav-link" href="./portofolio.php" onclick="moveMenuNav(this)">PORTOFOLIO
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

    <!-- Isi portofolio  -->
    <div id="mt" class="container-isi-portofolio">
        <div class="padding-screen">
            <div class="container">
                <!-- Container Judul portofolio -->
                <div class="container-judul">
                    <div class="judul-porto">
                        <h1>Twins Robo - Media Pembelajaran Robotika</h1>
                        <p>Belajar robotika dikemas secara fun dan langsung di implentasikan kedalam robot secara
                            wirelessly dan hanya satu genggaman</p>
                    </div>
                    <div class="img-judul">
                        <img src="../img/portofolio/LogoApps-TwinsRobo.png" alt="">
                    </div>
                </div>
                <!-- End of Container Judul portofolio -->

                <!-- Breadcrumb Boostrap -->
                <nav style="--bs-breadcrumb-divider: &#xf061" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="#">Portofolio</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="#">Artikel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Memastikan Keamanan Jaringan dengan
                            Teknologi Firewall</li>
                    </ol>
                </nav>
                <!-- End of Breadcrumb Boostrap -->

                <div id="mt" class="content">
                    <div class="img-container" data-aos="fade-up">
                        <img src="../img/portofolio/device-epel.png" alt="">
                    </div>
                    <div class="portofolio-main text-justify" data-aos="fade-up">
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <h5>Tentang Mitra</h5>
                            </div>
                            <div class="col-md-9">
                                <p>Codepan Studio adalah perusahaan privat yang bergerak dibidang Jasa Software dan
                                    Layanan IT yang didirikan pada tahun 2019 dan di bawah naungan CV.Arindra
                                    Production. Hari ini perusahaan kami telah memiliki tim kuat yang handal dan
                                    memiliki spesialisasi tertentu serta siap menyingsingkan lengan baju menyelesaikan
                                    masalah IT guna memenuhi kebutuhan bisnis Anda.<br>
                                    Mitra: Codepan Studio Surabaya <br>
                                    Industri: Software House <br>
                                    Layanan: Aplikasi Mobile</p>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-3">
                                <h5>Tantangan</h5>
                            </div>
                            <div class="col-md-9">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-3">
                                <h5>Solusi</h5>
                            </div>
                            <div class="col-md-9">
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English. Many desktop publishing
                                    packages and web page editors now use Lorem Ipsum as their default model text, and a
                                    search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                                    versions have evolved over the years, sometimes by accident, sometimes on purpose
                                    (injected humour and the like).</p>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-3">
                                <h5>Hasil</h5>
                            </div>
                            <div class="col-md-9">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                                    up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                                    going through the cites of the word in classical literature, discovered the
                                    undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de
                                    Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45
                                    BC. This book is a treatise on the theory of ethics, very popular during the
                                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes
                                    from a line in section 1.10.32.</p>
                            </div>
                        </div>

                        <b>Share Artikel Ini : <br></b>
                        <!-- AddToAny BEGIN -->
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_copy_link"></a>
                            <a class="a2a_button_twitter"></a>
                            <a class="a2a_button_whatsapp"></a>
                            <a class="a2a_button_telegram"></a>
                            <a class="a2a_button_email"></a>
                            <a class="a2a_button_line"></a>
                            <a class="a2a_button_facebook_messenger"></a>
                            <a class="a2a_button_linkedin"></a>
                            <a class="a2a_button_google_gmail"></a>
                            <a class="a2a_button_wechat"></a>
                        </div>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->
                    </div>

                    <p class="tag">Tags : <a href="">#Firewall</a></p>
                </div>

                <!-- Prev Next Navigation -->
                <div class="row prev-next-bar">
                    <a href="#" class="col-md-5 col-sm-12 row pl-0 mb-3">
                        <div class="col-2 button">
                            <div class="btn-prev"><i class="fas fa-caret-left"></i></div>
                        </div>
                        <div class="col-10 text-left text-btn">
                            Previous Post<br>
                            <b>Tak Kenal Maka Kenalan:Codepan Studio itu sia...</b>
                        </div>
                    </a>
                    <a href="./blog.php" class="col-md-2 col-sm-12 oval mb-3">
                        <div class="cover">
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                        </div>
                    </a>
                    <a href="#" class="col-md-5 col-sm-12 row pr-0 mb-3">
                        <div class="col-10 text-right text-btn">
                            Next Post <br>
                            <b>Tak Kenal Maka Kenalan:Codepan Studio itu sia...</b>
                        </div>
                        <div class="col-2 button">
                            <div class="btn-next"><i class="fas fa-caret-right"></i></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#2926A9" fill-opacity="1"
                d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </div>
    <!-- End of Isi portofolio -->

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

    <!-- Costum Main.js -->
    <script type="text/javascript" src="../js/main.js"></script>

    <!-- <script>
    topNavBar();
    $(function() {
        AOS.init({
            duration: 600,
            anchorPlacement: 'top-bottom',
            once: false,
        });
        window.addEventListener("load", AOS.refresh);
    });
    </script> -->
</body>

</html>