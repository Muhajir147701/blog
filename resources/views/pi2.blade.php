<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mts Putri 2</title>
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,700&family=Poppins:wght@300;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="icon" href="/image/icon_asadiyah.png">

</head>

<body>
    <section class="header">
        <nav>
            <a href="#"><img src="/image/logo_baru.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#course">KEGIATAN</a></li>
                    <li><a href="#facilities">FASILITAS</a></li>
                    <li><a href="#about">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>MTs As'adiyah Putri 2 Pusat</h1>
            <p>Menjadi tempat nyaman dan tepat untuk belajar, <br>
                bagi usia peralihan anak ke remaja.</p>
            <a href="{{ url('/pustaka') }}" class="hero-btn">Kunjungi Lebih jauh</a>
        </div>

    </section>

    <!-- Course -->

    <section class="course" id="course">
        <h1>Kegiatan Belajar Mengajar</h1>
        <p>Kegiatan belajar mengajar yang dilakukan di pesantren</p>

        <div class="row">
            <div class="course-col">
                <h3>Intra Kurikuler</h3>
                <div class="column-course">

                    <ul>
                        <li>Matematika</li>
                        <li>BahasaIndonesia</li>
                        <li>BahasaInggris</li>
                        <li>IPA</li>
                        <li>IPS</li>
                        <li>PKN</li>
                        <li>Kesenian</li>
                        <li>Penjaskes</li>
                        <li>Prakarya</li>
                    </ul>
                </div>
                <div class="column-course">

                    <ul>
                        <li>Al_QuranHadis</li>
                        <li>S K I</li>
                        <li>AqidahAkhlak</li>
                        <li>Fiqhi</li>
                        <li>BahasaArab</li>

                    </ul>
                </div>

            </div>
            <div class="course-col">
                <h3>Kurikulum Pondok Pesantren</h3>
                <div class="column-course">
                    <ul>



                        <li>IlmuTajwid</li>
                        <li>IlmuTauhid</li>
                        <li>NahwuSharaf</li>
                        <li>IlmuRasmi</li>
                        <li>Hadis</li>
                        <li>Faraid</li>
                        <li>UshulTafsir</li>


                    </ul>
                    <ul>




                        <li>Ket.Keagamaan</li>
                        <li>ilmuHadis</li>
                        <li>BahasaDaerah</li>
                        <li>FiqhiKifayah</li>
                        <li>Keasadiahan</li>
                        <li>UshulFiqhi</li>


                    </ul>
                </div>
            </div>
            <div class="course-col">
                <h3>Extra Kurikuler</h3>
                <div class="column-course">

                    <ul>
                        <li>LatihanTilawah</li>
                        <li>LatihanKaligrafi</li>
                        <li>LatihanPramuka</li>
                        <li>LatihanPalangMerah</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>


    <!-- campus -->
    <section class="campus">
        <h1>PRESTASI</h1>
        <p>Prestasi yang sempat diraih di beberapa even baik tingkat Regional maupun Nasional</p>

        <div class="row">
            <div class="campus-col">
                <img src="/image/london.png">
                <div class="layer">
                    <h3>FASHION SHOW</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="/image/newyork.png">
                <div class="layer">
                    <h3>DUTA ANAK</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="/image/washington.png">
                <div class="layer">
                    <h3>DRUM BAND</h3>
                </div>
            </div>

        </div>
    </section>


    <!-- Facilities -->

    <section class="facilities" id="facilities">
        <h1>FASILITAS</h1>
        <p>Fasilitas adalah penunjang utama terjadinya proses pembelajaran. </p>
        <div class="row">
            <div class="facilities-col">
                <img src="/image/library.png">
                <h3>Perpustakaan</h3>
                <p>Perpustakaan Mts As'adiyah putri dua telah mengoleksi 7000 Judul buku dalam bentuk cetak serta
                    ratusan dalam bentuk digital</p>
            </div>
            <div class="facilities-col">
                <img src="/image/basketball.png">
                <h3>Lapangan Olah Raga</h3>
                <p>Lapangan Olah-Raga yang pada hari sabtu digunakan untuk lapangan upacara</p>
            </div>
            <div class="facilities-col">
                <img src="/image/cafeteria.png">
                <h3>Kantin Sekolah</h3>
                <p>Kantin Sekolah menyiapkan bahan konsumsi sehat untuk siswa</p>
            </div>
        </div>
    </section>

    <!-- -------------testimonial-------------->
    <section class="testimonial">
        <h1>What Ours Student Says</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore aliquid est fugit nulla adipisci nisi!</p>
        <div class="row">
            <div class="testimonial-col">
                <img src="/image/user1.jpg">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit earum magnam adipisci commodi
                        autem iure minima ratione doloremque dolore cupiditate!</p>
                    <h3>Christine Berkley</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>

            </div>
            <div class="testimonial-col">
                <img src="/image/user2.jpg">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit earum magnam adipisci commodi
                        autem iure minima ratione doloremque dolore cupiditate!</p>
                    <h3>David Home</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>

            </div>
        </div>

    </section>

    <!-- ---------call to Action--------- -->

    <section class="cta">
        <h1>Enroll for our various online courses<br> Anywhere from The World</h1>
        <a href="#about" class="hero-btn">CONTACT US</a>
    </section>

    <!-- ----------footer--------- -->

    <section class="footer" id="about">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus exercitationem odit et <br>fugiat possimus
            asperiores cum voluptas reiciendis aspernatur repudiandae!</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart-o"> Creator Mpi2</i></p>
    </section>



    <!-- ---------script for toggle menu-------- -->
    <script>
    var navLinks = document.getElementById('navLinks');

    function showMenu() {
        navLinks.style.display = "inline-block";
    }

    function hideMenu() {
        navLinks.style.display = "none";
    }
    </script>



</body>

</html>