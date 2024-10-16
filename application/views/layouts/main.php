<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Nipindo Travel - Umroh, Haji & Visa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/') ?>img/icon.png" rel="icon">
    <link href="<?php echo base_url('assets/') ?>img/icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/') ?>vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/') ?>css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bethany - v4.7.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <!-- <h1 class="text-light"><a href="index.html"><span>Bethany</span></a></h1> -->
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo base_url('assets'); ?>/img/logonip.png" alt="" class="img-fluid"></a>
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="<?php echo site_url(); ?>">Beranda</a></li>
                        <li><a class="nav-link scrollto" href="#why-us">Tentang Kami</a></li>
                        <li><a class="nav-link scrollto" href="#services">Paket</a></li>
                        <li><a class="nav-link scrollto " href="#portfolio">Kontak</a></li>
                        <li><a class="getstarted scrollto" href="<?php echo site_url('admin'); ?>">Masuk</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div><!-- End Header Container -->
        </div>
    </header><!-- End Header -->


    <?php
    if (isset($_view) && $_view)
        $this->load->view($_view);
    ?>

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <div class="row">
                            <div class="col-md-5">
                                <a href="<?php echo site_url(); ?>"><img src="<?php echo base_url('assets'); ?>/img/logonip.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <br>
                        <p>
                            Jl. Pegambiran No.5, RT.12/RW.7, <br>
                            Rawamangun, Kec. Pulo Gadung,<br>
                            Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220 <br><br>
                            <strong>Nomor HP:</strong> +62 812 3327 059<br>
                            <strong>Email:</strong> nipindotravel@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Link Cepat</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo site_url(); ?>">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#why-us">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Paket</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Kontak</a></li>
                        </ul>
                    </div>
                    <!-- 
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div> -->

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Dapatkan informasi Terbaru</h4>
                        <!-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> -->
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <!-- <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Bethany</span></strong>. All Rights Reserved
                </div>
                <div class="credits"> -->
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div> -->
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://www.facebook.com/nipindotourandtravel/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/nipindotourandtravel/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/') ?>vendor/purecounter/purecounter.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/aos/aos.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/') ?>js/main.js"></script>


</body>

</html>