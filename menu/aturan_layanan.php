<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>

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
    <link rel="stylesheet" href="../css/aturan_layanan.css">
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

    <div id="mt" class="bg-aturanlayanan" style="background: url(../img/background/bg.png);">
        <!-- Aturan Layanan -->
        <section id="aturan-layanan">
            <div class="container">
                <div class="hero">
                    <h1>ATURAN LAYANAN</h1>
                </div>

            </div>
            <!--Akhir Container-->
        </section>

        <section id="isi-aturanLayanan">

            <div class="container">
                <a href="#" class="btn tombol animate__animated animate__bounceInDown hvr-bounce-to-top">Unduh Aturan
                    Layanan</a>
                <hr>

                <div class="view-desktop-aturanLayanan">
                    <div class="col">
                        <br>
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#pasal1" class="nav-link hvr-underline-from-left active" data-toggle="tab"
                                    data-aos="fade-right">Pasal 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#pasal2" class="nav-link hvr-underline-from-left" data-toggle="tab"
                                    data-aos="fade-right" data-aos-delay="200">Pasal 2</a>
                            </li>
                            <li class="nav-item">
                                <a href="#pasal3" class="nav-link hvr-underline-from-left" data-toggle="tab"
                                    data-aos="fade-right" data-aos-delay="300">Pasal 3</a>
                            </li>
                            <li class="nav-item">
                                <a href="#pasal4" class="nav-link hvr-underline-from-left" data-toggle="tab"
                                    data-aos="fade-right" data-aos-delay="400">Pasal 4</a>
                            </li>
                            <li class="nav-item">
                                <a href="#pasal5" class="nav-link hvr-underline-from-left" data-toggle="tab"
                                    data-aos="fade-right" data-aos-delay="500">Pasal 5</a>
                            </li>
                            <li class="nav-item">
                                <a href="#pasal6" class="nav-link hvr-underline-from-left" data-toggle="tab"
                                    data-aos="fade-right" data-aos-delay="600">Pasal 6</a>
                            </li>
                            <li class="nav-item">
                                <a href="#pasal7" class="nav-link hvr-underline-from-left" data-toggle="tab"
                                    data-aos="fade-right" data-aos-delay="700">Pasal 7</a>
                            </li>
                        </ul>


                        <div class="container">
                            <div class="row row-isi-pasal">
                                <div class="col d-flex justify-content-center">
                                    <div class="tab-content" data-aos="fade-down" data-aos-delay="600">
                                        <div role="tabpanel" class="tab-pane active" id="pasal1">
                                            <h1 id="pasal">Pasal 1</h1>
                                            <h1 id="isi-pasal">Permintaan Layanan</h1>
                                            <h2 id="ayat-pasal">Ayat 1</h2>
                                            <h2 id="judul-ayat">Tentang Kelengkapan Data</h2>
                                            <p id="isi-ayat">Customer wajib mengisikan data yang valid pada setiap form
                                                yang
                                                disediakan saat permintaan layanan. Data nama yang diisikan harus sama
                                                dengan nama pemilik rekening yang digunakan saat pembayaran. Profio
                                                berhak
                                                untuk tidak menindaklanjuti permintaan jika nama customer berbeda dengan
                                                nama pemilik rekening pembayaran atau data yang diisikan pada form
                                                pemesanan
                                                terbukti tidak valid.</p>

                                            <h2 id="ayat-pasal">Ayat 2</h2>
                                            <h2 id="judul-ayat">Tentang Tata Cara Pembayaran</h2>
                                            <p id="isi-ayat">
                                            <ul>
                                                <li>Setiap biaya layanan Profio dikenakan PPN 10%.</li>
                                                <li>Profioakan mengirimkan tagihan pada email kontak yang terdaftar pada
                                                    sistem 7 (tujuh) hari sebelum tagihan jatuh tempo.</li>
                                                <li>Faktur pajak (e-faktur) diterbitkan jika permintaan faktur direquest
                                                    telah dilengkapi dengan data pendukung pada bulan yang sama dengan
                                                    pembayaran tagihan.</li>
                                                <li>Untuk permintaan faktur fisik maka biaya pengiriman ditanggung oleh
                                                    pelanggan. Faktur pajak (e-faktur) yang dapat diproses adalah faktur
                                                    pajak yang NPWP nya menggunakan NPWP perusahaan & bendaharawan
                                                    (Bukan
                                                    perorangan).</li>
                                                <li>NPWP perusahaan/bendaharawan tidak dapat diganti ke NPWP
                                                    perusahaan/bendaharawan lain.</li>
                                                <li>Faktur pajak (e-faktur) akan diterbitkan pada hari kerja setelah
                                                    pembayaran diterima dengan valid.</li>
                                                <li>Potongan PPH23 hanya diberikan untuk invoice yang belum dilakukan
                                                    pembayaran & pelanggan telah melakukan aktivasi fitur PPH23</li>
                                                <li>Pembayaran dengan potongan PPH23, wajib mengirimkan bukti potong
                                                    maksimal 50 hari sejak pembayaran dilakukan</li>
                                                <li>Pembayaran dapat dilakukan dengan cara online transfer sesuai dengan
                                                    yang tertera pada invoice.</li>
                                                <li>Pembayaran harus sesuai nominal order yang tertera pada invoice
                                                    setelah
                                                    dikenakan pajak.</li>
                                            </ul>
                                            </p>

                                            <h2 id="ayat-pasal">Ayat 3</h2>
                                            <h2 id="judul-ayat">Tentang Jangka Waktu Penyerahan Layanan</h2>
                                            <p id="isi-ayat">Profio akan melakukan penyerahan aplikasi setelah menerima
                                                pembayaran yang valid dan sesuai dengan ketentuan yang telah di Pasal 1
                                                Ayat
                                                1, kecuali apabila ternyata pelanggan menghendaki sebuah kebutuhan
                                                khusus
                                                dimana dibutuhkan sebuah persyaratan tambahan dalam pemenuhannya
                                                (seperti
                                                pada permintaan penerbitan faktur pajak).</p>

                                            <h2 id="ayat-pasal">Ayat 4</h2>
                                            <h2 id="judul-ayat">Tentang Perubahan Data Kepemilikan</h2>
                                            <p id="isi-ayat">Profio hanya akan melakukan perubahan data kepemilikan
                                                Pelanggan apabila mendapatkan permintaan dari email yang terdaftar di
                                                daftar
                                                kontak kami dengan disertakan dokumen pendukung kepemilikan yang valid &
                                                identitas customer yang sama seperti dengan yang terdaftar di data saat
                                                pendaftaran. Pelanggan berhak untuk menolak permintaan perpindahan
                                                kepemilikan tanpa harus menyertakan alasan apapun sebelumnya.</p>

                                            <h2 id="ayat-pasal">Ayat 5</h2>
                                            <h2 id="judul-ayat">Garansi dan Maintenance</h2>
                                            <p id="isi-ayat">Garansi hanya berlaku selama 6 bulan dengan persyaratan
                                                source
                                                code tidak dimodifikasi oleh Pihak Ketiga.</p>

                                            <h2 id="ayat-pasal">Ayat 6</h2>
                                            <h2 id="judul-ayat">Pihak Ketiga</h2>
                                            <p id="isi-ayat">
                                                Pihak Ketiga yang dimaksud sebagaimana pada Pasal 1 ayat 5 yaitu :
                                            <ul>
                                                <li>Seseorang ataupun kelompok tertentu secara struktural ataupun non
                                                    struktural yang memiliki afiliasi/kerjasama baik secara langsung
                                                    maupun
                                                    tidak langsung dengan instansi pengguna aplikasi eoffice masa kini
                                                    Profio.</li>
                                                <li>Vendor atau orang lain yang ditunjuk dan bukan merupakan bagian dari
                                                    PT
                                                    Profio Teknova Indonesia.</li>
                                            </ul>
                                            </p>

                                            <h2 id="ayat-pasal">Ayat 7</h2>
                                            <h2 id="judul-ayat">Layanan dan Support</h2>
                                            <p id="isi-ayat">Profio akan memberikan bantuan layanan support melalui
                                                tiket
                                                maupun online chat 5×8 jam, pada hari kerja Senin s/d Jumat selama masa
                                                maintenance masih berlaku. Permintaan bantuan via chat whatsapp cp atau
                                                jalur telepon pada jam 08.00 hingga 16.00 WIB. Adapun beberapa bantuan
                                                termasuk ke dalam bantuan support, diantaranya :
                                            <ul>
                                                <li>Perbaikan error atau bug dalam aplikasi, ( bukan perubahan fungsi
                                                    atau
                                                    alur ).</li>
                                                <li>Penjelasan alur dan fitur aplikasi.</li>
                                                <li>Instalasi dan konfigurasi standar aplikasi pada server pengguna,
                                                    yang
                                                    sudah terpasang web server dan database server.</li>
                                            </ul>
                                            </p>

                                            <h2 id="ayat-pasal">Ayat 8</h2>
                                            <h2 id="judul-ayat">Instalasi Standar</h2>
                                            <p id="isi-ayat">Instalasi standar yang dimaksud pada Ayat 7 poin ke-3
                                                adalah
                                                sebagai berikut :
                                            <ul>
                                                <li>Kode sumber Profio sudah terpasang pada web server pelanggan.</li>
                                                <li>Library tambahan untuk aplikasi.</li>
                                                <li>Database Profiosudah terpasang pada database server.</li>
                                                <li>Aplikasi sudah bisa diakses pada IP yang disediakan oleh pelanggan,
                                                    misalkan http://168.1.1.0</li>
                                            </ul>
                                            </p>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="pasal2">
                                            <h1 id="pasal">Pasal 2</h1>
                                            <h1 id="isi-pasal">Hak Cipta</h1>
                                            <h2 id="ayat-pasal">Ayat 1</h2>
                                            <h2 id="judul-ayat">Lisensi</h2>
                                            <p id="isi-ayat">Profio memungkinkan untuk memberikan lisensi kepada
                                                customer
                                                secara eksklusif yaitu source code dengan ketentuan Anda menyetujui
                                                syarat
                                                dan ketentuan Perjanjian ini.</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="pasal3">
                                            <h1 id="pasal">Pasal 3</h1>
                                            <h1 id="isi-pasal">Bantuan dan Restore Data</h1>
                                            <h2 id="ayat-pasal">Ayat 1</h2>
                                            <h2 id="judul-ayat">Bantuan Input Data Awal</h2>
                                            <p id="isi-ayat">
                                            <ul>
                                                <li>Tim Profiomensupport untuk melakukan inisiasi awal data pengguna
                                                    pada
                                                    server pelanggan maksimal 500 data unique.</li>
                                                <li>Segala kesalahan input yg diakibatkan kesalahan data sumber setelah
                                                    masuk ke sistem merupakan tanggung jawab milik pelanggan.</li>
                                            </ul>
                                            </p>

                                            <h2 id="ayat-pasal">Ayat 2</h2>
                                            <h2 id="judul-ayat">Tentang Ketentuan Back-Up Data</h2>
                                            <p id="isi-ayat">Profio tidak menyediakan backup data bagi pelanggan.
                                                Pelanggan
                                                disarankan untuk membuat backup data secara manual dan disimpan di
                                                storage
                                                pribadi untuk keamanan data.
                                            </p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="pasal4">
                                            <h1 id="pasal">Pasal 4</h1>
                                            <h1 id="isi-pasal">Pelanggaran dan Sanksi</h1>
                                            <p id="isi-ayat">Jika Pelanggan melakukan pelanggaran seperti yang tercantum
                                                pada Pasal 2, Pihak Profio dapat memberikan sanksi kepada Pelanggan dan
                                                dapat berlanjut ke proses hukum.
                                            </p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="pasal5">
                                            <h1 id="pasal">Pasal 5</h1>
                                            <h1 id="isi-pasal">Force Majeur</h1>
                                            <p id="isi-ayat">Force majeure adalah suatu keadaan yang ada di luar
                                                kemampuan.
                                                Misalnya bencana alam, banjir, badai, yang dinyatakan oleh Pemerintah
                                                sebagai bencana alam, huru hara, kebakaran, sabotase, peperangan,
                                                epidemi
                                                dan kepatuhan terhadap pelaksanaan perundang-undangan.</p>
                                            <p id="isi-ayat">
                                                Tidak termasuk force majeure, hal-hal yang diakibatkan oleh kelalaian,
                                                kealpaan, kecerobohan dan/atau ketidakpatuhan terhadap pelaksanaan
                                                peraturan. Apabila Profio mengalami force majeur maka Profio akan
                                                memberitahukan melalui email yang terdaftar, segera setelah mengalami
                                                force
                                                majeure selambat-lambatnya 7 (tujuh) hari sejak force majeure terjadi
                                                dengan
                                                memberikan penjelasan dan perkiraan dimulainya kembali pelaksanaan
                                                ketentuan
                                                Perjanjian.</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="pasal6">
                                            <h1 id="pasal">Pasal 6</h1>
                                            <h1 id="isi-pasal">Hukum Berlaku</h1>
                                            <p id="isi-ayat">Ketentuan layanan ini dan pelaksanaannya tunduk pada dan
                                                diartikan sesuai dengan peraturan perundang-undangan dan hukum Negara
                                                Republik Indonesia. Profio dapat melakukan kerjasama dengan penegak
                                                hukum &
                                                pihak yang berwenang tanpa persetujuan ataupun pemberitahuan lebih
                                                lanjut
                                                kepada Pelanggan. Dalam hal terjadi perselisihan atau perbedaan pendapat
                                                sebagai akibat dari pelaksanaan ketentuan layanan ini, maka baik
                                                Pelanggan
                                                maupun Profio sepakat dan setuju untuk menyelesaikannya secara
                                                musyawarah
                                                untuk mencapai mufakat.</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="pasal7">
                                            <h1 id="pasal">Pasal 7</h1>
                                            <h1 id="isi-pasal">Penggunaan Data</h1>
                                            <h2 id="ayat-pasal">Ayat 1</h2>
                                            <h2 id="judul-ayat">Tentang Penggunaan Data</h2>
                                            <p id="isi-ayat">Website kami akan menyimpan cookies data dari browser
                                                Pengunjung dan juga beberapa data cookies personal Pengunjung dari
                                                platform
                                                seperti Google, Facebook, Twitter, dll. Hal ini kami lakukan agar kami
                                                bisa
                                                tetap menyajikan konten-konten yang relevan bagi Pengunjung, baik
                                                organic
                                                maupun yang berupa iklan. Kami tidak akan pernah membagikan data-data
                                                ini ke
                                                orang lain yang tidak berkepentingan, maupun menggunakannya untuk hal
                                                lain
                                                diluar kebutuhan marketing kami.</p>
                                            <p id="isi-ayat">Pengunjung juga mungkin menemukan beberapa konten yang
                                                mengharuskan Pengunjung untuk login atau meng-otorisasi akses ke akun
                                                sosial
                                                media Pengunjung, namun itu semua tentu harus melalui proses persetejuan
                                                dari Pengunjung. Pengunjung bisa memilih untuk tidak melakukannya, meski
                                                pada akhirnya Pengunjung mungkin tidak bisa mengakses konten-konten
                                                tertentu
                                                pada website kami.</p>

                                            <h2 id="ayat-pasal">Ayat 2</h2>
                                            <h2 id="judul-ayat">Pendaftaran Email pada Form Lain Selain Form Order</h2>
                                            <p id="isi-ayat">Ketika Pengunjung memasukkan email itu artinya Pengunjung
                                                setuju email Pengunjung ditambahkan ke dalam sebuah daftar kontak yang
                                                akan
                                                kami kirimi sebuah pemberitahuan dan penawaran khusus sebagai bagian
                                                dari
                                                kegiatan marketing kami.</p>
                                            <p id="isi-ayat">Pengunjung juga bisa melakukan ‘unsubscribe’ ketika tidak
                                                ingin
                                                lagi mendapatkan informasi atau penawaran khusus dari kegiatan marketing
                                                kami. Pengunjung bisa klik tombol / link ‘unsubscribe’ di bagian bawah
                                                email
                                                yang kami kirimkan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Akhir view-dektop-aturanLayanan -->

                <div class="view-mobile-aturanLayanan">
                    <div class="container">
                        <div class="row">
                            <div class="col" data-aos="fade-down" data-aos-delay="600">

                                <div class="wrapper">
                                    <div class="accordion_wrap accordion_1">
                                        <div class="accordion_header">
                                            PASAL 1
                                        </div>
                                        <div class="accordion_body">
                                            <h1 id="pasal">Pasal 1</h1>
                                            <h1 id="isi-pasal">Permintaan Layanan</h1>
                                            <h2 id="ayat-pasal">Ayat 1</h2>
                                            <h2 id="judul-ayat">Tentang Kelengkapan Data</h2>
                                            <p id="isi-ayat">Customer wajib mengisikan data yang valid pada setiap form
                                                yang
                                                disediakan saat permintaan layanan. Data nama yang diisikan harus sama
                                                dengan nama pemilik rekening yang digunakan saat pembayaran. Profio
                                                berhak
                                                untuk tidak menindaklanjuti permintaan jika nama customer berbeda dengan
                                                nama pemilik rekening pembayaran atau data yang diisikan pada form
                                                pemesanan
                                                terbukti tidak valid.</p>

                                            <h2 id="ayat-pasal">Ayat 2</h2>
                                            <h2 id="judul-ayat">Tentang Tata Cara Pembayaran</h2>
                                            <p id="isi-ayat">
                                            <ul>
                                                <li>Setiap biaya layanan Profio dikenakan PPN 10%.</li>
                                                <li>Profioakan mengirimkan tagihan pada email kontak yang terdaftar pada
                                                    sistem 7 (tujuh) hari sebelum tagihan jatuh tempo.</li>
                                                <li>Faktur pajak (e-faktur) diterbitkan jika permintaan faktur direquest
                                                    telah dilengkapi dengan data pendukung pada bulan yang sama dengan
                                                    pembayaran tagihan.</li>
                                                <li>Untuk permintaan faktur fisik maka biaya pengiriman ditanggung oleh
                                                    pelanggan. Faktur pajak (e-faktur) yang dapat diproses adalah faktur
                                                    pajak yang NPWP nya menggunakan NPWP perusahaan & bendaharawan
                                                    (Bukan
                                                    perorangan).</li>
                                                <li>NPWP perusahaan/bendaharawan tidak dapat diganti ke NPWP
                                                    perusahaan/bendaharawan lain.</li>
                                                <li>Faktur pajak (e-faktur) akan diterbitkan pada hari kerja setelah
                                                    pembayaran diterima dengan valid.</li>
                                                <li>Potongan PPH23 hanya diberikan untuk invoice yang belum dilakukan
                                                    pembayaran & pelanggan telah melakukan aktivasi fitur PPH23</li>
                                                <li>Pembayaran dengan potongan PPH23, wajib mengirimkan bukti potong
                                                    maksimal 50 hari sejak pembayaran dilakukan</li>
                                                <li>Pembayaran dapat dilakukan dengan cara online transfer sesuai dengan
                                                    yang tertera pada invoice.</li>
                                                <li>Pembayaran harus sesuai nominal order yang tertera pada invoice
                                                    setelah
                                                    dikenakan pajak.</li>
                                            </ul>
                                            </p>

                                            <h2 id="ayat-pasal">Ayat 3</h2>
                                            <h2 id="judul-ayat">Tentang Jangka Waktu Penyerahan Layanan</h2>
                                            <p id="isi-ayat">Profio akan melakukan penyerahan aplikasi setelah menerima
                                                pembayaran yang valid dan sesuai dengan ketentuan yang telah di Pasal 1
                                                Ayat
                                                1, kecuali apabila ternyata pelanggan menghendaki sebuah kebutuhan
                                                khusus
                                                dimana dibutuhkan sebuah persyaratan tambahan dalam pemenuhannya
                                                (seperti
                                                pada permintaan penerbitan faktur pajak).</p>

                                            <h2 id="ayat-pasal">Ayat 4</h2>
                                            <h2 id="judul-ayat">Tentang Perubahan Data Kepemilikan</h2>
                                            <p id="isi-ayat">Profio hanya akan melakukan perubahan data kepemilikan
                                                Pelanggan apabila mendapatkan permintaan dari email yang terdaftar di
                                                daftar
                                                kontak kami dengan disertakan dokumen pendukung kepemilikan yang valid &
                                                identitas customer yang sama seperti dengan yang terdaftar di data saat
                                                pendaftaran. Pelanggan berhak untuk menolak permintaan perpindahan
                                                kepemilikan tanpa harus menyertakan alasan apapun sebelumnya.</p>

                                            <h2 id="ayat-pasal">Ayat 5</h2>
                                            <h2 id="judul-ayat">Garansi dan Maintenance</h2>
                                            <p id="isi-ayat">Garansi hanya berlaku selama 6 bulan dengan persyaratan
                                                source
                                                code tidak dimodifikasi oleh Pihak Ketiga.</p>

                                            <h2 id="ayat-pasal">Ayat 6</h2>
                                            <h2 id="judul-ayat">Pihak Ketiga</h2>
                                            <p id="isi-ayat">
                                                Pihak Ketiga yang dimaksud sebagaimana pada Pasal 1 ayat 5 yaitu :
                                            <ul>
                                                <li>Seseorang ataupun kelompok tertentu secara struktural ataupun non
                                                    struktural yang memiliki afiliasi/kerjasama baik secara langsung
                                                    maupun
                                                    tidak langsung dengan instansi pengguna aplikasi eoffice masa kini
                                                    Profio.</li>
                                                <li>Vendor atau orang lain yang ditunjuk dan bukan merupakan bagian dari
                                                    PT
                                                    Profio Teknova Indonesia.</li>
                                            </ul>
                                            </p>

                                            <h2 id="ayat-pasal">Ayat 7</h2>
                                            <h2 id="judul-ayat">Layanan dan Support</h2>
                                            <p id="isi-ayat">Profio akan memberikan bantuan layanan support melalui
                                                tiket
                                                maupun online chat 5×8 jam, pada hari kerja Senin s/d Jumat selama masa
                                                maintenance masih berlaku. Permintaan bantuan via chat whatsapp cp atau
                                                jalur telepon pada jam 08.00 hingga 16.00 WIB. Adapun beberapa bantuan
                                                termasuk ke dalam bantuan support, diantaranya :
                                            <ul>
                                                <li>Perbaikan error atau bug dalam aplikasi, ( bukan perubahan fungsi
                                                    atau
                                                    alur ).</li>
                                                <li>Penjelasan alur dan fitur aplikasi.</li>
                                                <li>Instalasi dan konfigurasi standar aplikasi pada server pengguna,
                                                    yang
                                                    sudah terpasang web server dan database server.</li>
                                            </ul>
                                            </p>

                                            <h2 id="ayat-pasal">Ayat 8</h2>
                                            <h2 id="judul-ayat">Instalasi Standar</h2>
                                            <p id="isi-ayat">Instalasi standar yang dimaksud pada Ayat 7 poin ke-3
                                                adalah
                                                sebagai berikut :
                                            <ul>
                                                <li>Kode sumber Profio sudah terpasang pada web server pelanggan.</li>
                                                <li>Library tambahan untuk aplikasi.</li>
                                                <li>Database Profiosudah terpasang pada database server.</li>
                                                <li>Aplikasi sudah bisa diakses pada IP yang disediakan oleh pelanggan,
                                                    misalkan http://168.1.1.0</li>
                                            </ul>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion_wrap accordion_2">
                                        <div class="accordion_header">
                                            PASAL 2
                                        </div>
                                        <div class="accordion_body">
                                            <h1 id="pasal">Pasal 2</h1>
                                            <h1 id="isi-pasal">Hak Cipta</h1>
                                            <h2 id="ayat-pasal">Ayat 1</h2>
                                            <h2 id="judul-ayat">Lisensi</h2>
                                            <p id="isi-ayat">Profio memungkinkan untuk memberikan lisensi kepada
                                                customer
                                                secara eksklusif yaitu source code dengan ketentuan Anda menyetujui
                                                syarat
                                                dan ketentuan Perjanjian ini.</p>
                                        </div>
                                    </div>
                                    <div class="accordion_wrap accordion_3">
                                        <div class="accordion_header">
                                            PASAL 3
                                        </div>
                                        <div class="accordion_body">
                                            <h1 id="pasal">Pasal 2</h1>
                                            <h1 id="isi-pasal">Bantuan dan Restore Data</h1>
                                            <h2 id="ayat-pasal">Ayat 1</h2>
                                            <h2 id="judul-ayat">Bantuan Input Data Awal</h2>
                                            <p id="isi-ayat">
                                            <ul>
                                                <li>Tim Profiomensupport untuk melakukan inisiasi awal data pengguna
                                                    pada
                                                    server pelanggan maksimal 500 data unique.</li>
                                                <li>Segala kesalahan input yg diakibatkan kesalahan data sumber setelah
                                                    masuk ke sistem merupakan tanggung jawab milik pelanggan.</li>
                                            </ul>
                                            </p>

                                            <h2 id="ayat-pasal">Ayat 2</h2>
                                            <h2 id="judul-ayat">Tentang Ketentuan Back-Up Data</h2>
                                            <p id="isi-ayat">Profio tidak menyediakan backup data bagi pelanggan.
                                                Pelanggan
                                                disarankan untuk membuat backup data secara manual dan disimpan di
                                                storage
                                                pribadi untuk keamanan data.</p>
                                        </div>
                                    </div>
                                    <div class="accordion_wrap accordion_4">
                                        <div class="accordion_header">
                                            PASAL 4
                                        </div>
                                        <div class="accordion_body">
                                            <h1 id="pasal">Pasal 4</h1>
                                            <h1 id="isi-pasal">Pelanggaran dan Sanksi</h1>
                                            <p id="isi-ayat">Jika Pelanggan melakukan pelanggaran seperti yang tercantum
                                                pada Pasal 2, Pihak Profio dapat memberikan sanksi kepada Pelanggan dan
                                                dapat berlanjut ke proses hukum.</p>
                                        </div>
                                    </div>
                                    <div class="accordion_wrap accordion_5">
                                        <div class="accordion_header">
                                            PASAL 5
                                        </div>
                                        <div class="accordion_body">
                                            <h1 id="pasal">Pasal 5</h1>
                                            <h1 id="isi-pasal">Force Majeur</h1>
                                            <p id="isi-ayat">Force majeure adalah suatu keadaan yang ada di luar
                                                kemampuan.
                                                Misalnya bencana alam, banjir, badai, yang dinyatakan oleh Pemerintah
                                                sebagai bencana alam, huru hara, kebakaran, sabotase, peperangan,
                                                epidemi
                                                dan kepatuhan terhadap pelaksanaan perundang-undangan.</p>
                                            <p id="isi-ayat">
                                                Tidak termasuk force majeure, hal-hal yang diakibatkan oleh kelalaian,
                                                kealpaan, kecerobohan dan/atau ketidakpatuhan terhadap pelaksanaan
                                                peraturan. Apabila Profio mengalami force majeur maka Profio akan
                                                memberitahukan melalui email yang terdaftar, segera setelah mengalami
                                                force
                                                majeure selambat-lambatnya 7 (tujuh) hari sejak force majeure terjadi
                                                dengan
                                                memberikan penjelasan dan perkiraan dimulainya kembali pelaksanaan
                                                ketentuan
                                                Perjanjian.</p>
                                        </div>
                                    </div>
                                    <div class="accordion_wrap accordion_6">
                                        <div class="accordion_header">
                                            PASAL 6
                                        </div>
                                        <div class="accordion_body">
                                            <h1 id="pasal">Pasal 6</h1>
                                            <h1 id="isi-pasal">Hukum Berlaku</h1>
                                            <p id="isi-ayat">Ketentuan layanan ini dan pelaksanaannya tunduk pada dan
                                                diartikan sesuai dengan peraturan perundang-undangan dan hukum Negara
                                                Republik Indonesia. Profio dapat melakukan kerjasama dengan penegak
                                                hukum &
                                                pihak yang berwenang tanpa persetujuan ataupun pemberitahuan lebih
                                                lanjut
                                                kepada Pelanggan. Dalam hal terjadi perselisihan atau perbedaan pendapat
                                                sebagai akibat dari pelaksanaan ketentuan layanan ini, maka baik
                                                Pelanggan
                                                maupun Profio sepakat dan setuju untuk menyelesaikannya secara
                                                musyawarah
                                                untuk mencapai mufakat.</p>
                                        </div>
                                    </div>
                                    <div class="accordion_wrap accordion_7">
                                        <div class="accordion_header">
                                            PASAL 7
                                        </div>
                                        <div class="accordion_body">
                                            <h1 id="pasal">Pasal 7</h1>
                                            <h1 id="isi-pasal">Penggunaan Data</h1>
                                            <h2 id="ayat-pasal">Ayat 1</h2>
                                            <h2 id="judul-ayat">Tentang Penggunaan Data</h2>
                                            <p id="isi-ayat">Website kami akan menyimpan cookies data dari browser
                                                Pengunjung dan juga beberapa data cookies personal Pengunjung dari
                                                platform
                                                seperti Google, Facebook, Twitter, dll. Hal ini kami lakukan agar kami
                                                bisa
                                                tetap menyajikan konten-konten yang relevan bagi Pengunjung, baik
                                                organic
                                                maupun yang berupa iklan. Kami tidak akan pernah membagikan data-data
                                                ini ke
                                                orang lain yang tidak berkepentingan, maupun menggunakannya untuk hal
                                                lain
                                                diluar kebutuhan marketing kami.</p>
                                            <p id="isi-ayat">Pengunjung juga mungkin menemukan beberapa konten yang
                                                mengharuskan Pengunjung untuk login atau meng-otorisasi akses ke akun
                                                sosial
                                                media Pengunjung, namun itu semua tentu harus melalui proses persetejuan
                                                dari Pengunjung. Pengunjung bisa memilih untuk tidak melakukannya, meski
                                                pada akhirnya Pengunjung mungkin tidak bisa mengakses konten-konten
                                                tertentu
                                                pada website kami.</p>

                                            <h2 id="ayat-pasal">Ayat 2</h2>
                                            <h2 id="judul-ayat">Pendaftaran Email pada Form Lain Selain Form Order</h2>
                                            <p id="isi-ayat">Ketika Pengunjung memasukkan email itu artinya Pengunjung
                                                setuju email Pengunjung ditambahkan ke dalam sebuah daftar kontak yang
                                                akan
                                                kami kirimi sebuah pemberitahuan dan penawaran khusus sebagai bagian
                                                dari
                                                kegiatan marketing kami.</p>
                                            <p id="isi-ayat">Pengunjung juga bisa melakukan ‘unsubscribe’ ketika tidak
                                                ingin
                                                lagi mendapatkan informasi atau penawaran khusus dari kegiatan marketing
                                                kami. Pengunjung bisa klik tombol / link ‘unsubscribe’ di bagian bawah
                                                email
                                                yang kami kirimkan.</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--akhir col-->
                        </div>
                        <!--akhir row-->
                    </div> <!-- akhir container-->

                </div>
                <!-- Akhir view-mobile-aturanLayanan -->


            </div>
        </section>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#2926A9" fill-opacity="1"
                d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </div>

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