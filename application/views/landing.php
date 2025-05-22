
<!-- Modal -->
<div class="modal fade" id="promoModal" tabindex="-1" aria-labelledby="promoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="promoModalLabel">PROMO TERBARU</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <img src="https://rosanatravel.com/admin/assets/images/<?php echo $paket_terbaru[0]['paket_img'] ?>" alt="Image" class="img-fluid" loading="lazy style="display: block;" id="mainImage">
            </div>
            <div class="modal-footer">
                <a href="https://api.whatsapp.com/send?phone=6281133399833&text=Halo%2C%20saya%20ingin%20tahu%20lebih%20lanjut%20mengenai%20Promo%20Terbaru%20<?php echo $paket_terbaru[0]['nama_program'] ?>%20yang%20ada%20di%20Website%2C%20%F0%9F%98%8A" class="btn btn-primary">Info Lebih Lanjut</a>
            </div>
        </div>
    </div>
</div>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <!--<div class="col-xl-2 col-lg-4 col-md-3 col-sm-2 m-5">
                <img class="logo me-auto me-lg-0 img-fluid" src="<?php echo base_url('assets'); ?>/img/icon.png" alt="">
            </div>-->
        </div>
        <br>
        <h2 class="judul-sub" style="margin-bottom: 20px!important; font-size: 25px!important;font-weight: 500!important;">Umroh Murah Berkualitas</h2><br>
        <h1 class="judul-utama">Selamat Datang<br>
            Para Calon Tamu Allah<br>
            Dihalaman Website<br>
            Nipindo Travel</h1><br>
        <a background-color: #009970; href="https://api.whatsapp.com/send/?phone=6281133399833&text=Halo%20Nipindo%20Travel%2C%20Saya%20ingin%20mengetahui%20lebih%20lanjut%20mengenai%20paket%20Di%20Nipindo%20Travel%20&app_absent=0" class="btn-get-started scrollto" style="background-color: #009970!important;">Konsultasikan Sekarang</a>
        <style>
        .judul-sub {
            margin-bottom: 20px;}
        .judul-utama {
            margin-top: 10px;}
        </style>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container">

            <div class="row d-flex align-items-center text-center">

                <!-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div> -->

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="<?php echo base_url('assets/') ?>img/clients/asita.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
                    <img src="<?php echo base_url('assets/') ?>img/clients/himpuh.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
                    <img src="<?php echo base_url('assets/') ?>img/clients/kemenag.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
                    <img src="<?php echo base_url('assets/') ?>img/clients/iata.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
                    <img src="<?php echo base_url('assets/') ?>img/clients/kan.png" class="img-fluid" alt="">
                </div> 
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
                    <img src="<?php echo base_url('assets/') ?>img/clients/abacus-international-removebg-preview.png" class="img-fluid" alt="">
                </div> 

            </div>

        </div>
    </section>
    <!-- End Clients Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
    <div class="section-title" data-aos="fade-right">
        <h2>Paket Umroh</h2>
    </div>
    <div class="row">
        <?php foreach ($paketumroh as $p) { ?>
            <div class="col-md-4 d-flex align-items-stretch mb-4">
                <a href="<?php echo base_url('paket/detail_paket/' . $p['id_paket']); ?>" class="icon-box-link" style="text-decoration: none; color: inherit;">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100" style="position: relative; <?php echo ($p['is_aktif'] == 0) ? 'pointer-events: none;' : ''; ?>">
                        <img src="<?php echo 'https://rosanatravel.com/admin/assets/images/' . $p['paket_img']; ?>" 
                            class="img-fluid mb-4" alt="" style="border-radius: 0.5rem; filter: <?php echo ($p['is_aktif'] == 0) ? 'grayscale(100%) opacity(0.7)' : 'none'; ?>;">
                        
                        <?php if ($p['is_aktif'] == 0) : ?>
                            <div class="sold-out-overlay">
                                <span>SOLD OUT</span>
                            </div>
                        <?php endif; ?>
                        
                        <h4 style="color: #000; font-weight: bold;"> <?php echo $p['nama_program']; ?> </h4>
                        <div class="row">
                            <div class="col">
                                <h6 style="font-size: small;">Uang Muka</h6>
                                <h4 style="color: #db8d00;">Rp <?php echo number_format($p['uang_muka'], 0, ',', '.'); ?></h4>
                            </div>
                        </div>
                        <a href="https://api.whatsapp.com/send/?phone=6281133399833&text=Halo%20Nipindo%20Travel%2C%20Saya%20ingin%20mengetahui%20lebih%20lanjut%20mengenai%20paket%20<?php echo $p['nama_program']; ?>&app_absent=0" class="btn btn-success">Info Lebih Lanjut</a>
                        <br>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>

    <!-- Paket Haji -->
    <div class="section-title mt-5" data-aos="fade-right">
        <h2>Paket Haji</h2>
    </div>
    <div class="row">
        <?php foreach ($pakethaji as $p) { ?>
            <div class="col-md-4 d-flex align-items-stretch mb-4">
                <a href="<?php echo base_url('paket/detail_paket/' . $p['id_paket']); ?>" class="icon-box-link" style="text-decoration: none; color: inherit;">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100" style="position: relative; <?php echo ($p['is_aktif'] == 0) ? 'pointer-events: none;' : ''; ?>">
                        <img src="<?php echo 'https://rosanatravel.com/admin/assets/images/' . $p['paket_img']; ?>" 
                            class="img-fluid mb-4" alt="" style="border-radius: 0.5rem; filter: <?php echo ($p['is_aktif'] == 0) ? 'grayscale(100%) opacity(0.7)' : 'none'; ?>;">
                        
                        <?php if ($p['is_aktif'] == 0) : ?>
                            <div class="sold-out-overlay">
                                <span>SOLD OUT</span>
                            </div>
                        <?php endif; ?>
                        
                        <h4 style="color: #000; font-weight: bold;"> <?php echo $p['nama_program']; ?> </h4>
                        <div class="row">
                            <div class="col">
                                <h6 style="font-size: small;">Harga Mulai :</h6>
                                <h4 style="color: #009970;"> <?php echo $p['matauangall'] . '&nbsp;' . number_format($p['uang_muka'], 0, ',', '.'); ?> </h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>

    <!-- Paket Tour -->
    <div class="section-title mt-5" data-aos="fade-right">
        <h2>Paket Tour</h2>
    </div>
    <div class="row">
        <?php foreach ($pakettour as $p) { ?>
            <div class="col-md-4 d-flex align-items-stretch mb-4">
                <a href="<?php echo base_url('paket/detail_paket/' . $p['id_paket']); ?>" class="icon-box-link" style="text-decoration: none; color: inherit;">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100" style="position: relative; <?php echo ($p['is_aktif'] == 0) ? 'pointer-events: none;' : ''; ?>">
                        <img src="<?php echo 'https://rosanatravel.com/admin/assets/images/' . $p['paket_img']; ?>" 
                            class="img-fluid mb-4" alt="" style="border-radius: 0.5rem; filter: <?php echo ($p['is_aktif'] == 0) ? 'grayscale(100%) opacity(0.7)' : 'none'; ?>;">
                        
                        <?php if ($p['is_aktif'] == 0) : ?>
                            <div class="sold-out-overlay">
                                <span>SOLD OUT</span>
                            </div>
                        <?php endif; ?>
                        
                        <h4 style="color: #000; font-weight: bold;"> <?php echo $p['nama_program']; ?> </h4>
                        <div class="row">
                            <div class="col">
                                <h6 style="font-size: small;">Harga Mulai :</h6>
                                <h4 style="color: #009970;"> <?php echo $p['matauangall'] . '&nbsp;' . number_format($p['uang_muka'], 0, ',', '.'); ?> </h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>

        </div>
    </div>
</section>
<!-- End Portfolio Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <h2>Tentang Nipindo Travel</h2>
                    <h3>Nipindo Travel merupakan Perusahaan penyedia jasa travel Umroh dan Haji serta pelayanan Pengurusan Visa Saudi Arabia nomor 1 di Indonesia</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <p>
                        Persaingan bisnis biro perjalanan wisata yang makin ketat, membuat kami harus berpikir keras untuk dapat tetap eksis dan menjadi pilihan pelanggan dalam setiap perjalanan wisata mereka.
                        Dengan berbekal pengalaman yang lebih dari 25 tahun tentunya bukan hal mustahil untuk kami dapat bertahan menjadi yang terdepan.
                        <br>Mengantongi Izin Resmi dari KEMENAG RI sebagai :
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Penyelenggara Ibadah Haji Khusus (PIHK) - No. 193 Tahun 2019</li>
                        <li><i class="ri-check-double-line"></i> Penyelenggara Perjalanan Ibadah Umroh (PPIU) - No. 787 Tahun 2019</li>
                    </ul>
                    <p class="fst-italic">
                        Nipindo Travel terus berinovasi dan berpacu meningkatkan pelayanan yang profesional dan kekeluargaan untuk dapat secara maksimal melayani dari hati dengan Visi dan Misi :
                    </p>
                    <p><strong>Visi : </strong></p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Menjadi perusahaan penyedia kebutuhan wisata yang terdepan di Indonesia</li>
                    </ul>
                    <p><strong>Misi : </strong></p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Menyediakan produk-produk yang berkualitas baik dan berfokus pada kebutuhan pelanggan</li>
                        <li><i class="ri-check-double-line"></i> Memberikan pelayanan yang profesional dan amanah untuk membangun loyalitas pelanggan</li>
                        <li><i class="ri-check-double-line"></i> Meningkatkan kedekatan dengan pelangan melalui hubungan yang harmonis, komunikatif, dan kekeluargaan</li>
                        <li><i class="ri-check-double-line"></i> Menyelenggarakan tata kelola perusahaan dengan management yang baik dengan sumber daya manusia yang berkuaitas</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="content">
                        <h3>Mengapa memilih Nipindo Travel ?</h3>
                        <p>
                            Nipindo Travel merupakan Perusahaan penyedia jasa travel Umroh dan Haji serta pelayanan Pengurusan Visa Saudi Arabia nomor 1 di Indonesia
                        </p>
                        <!-- <div class="text-center">
                            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Berpengalaman Lebih dari 25 Tahun</h4>
                                    <p>Memilih penyelenggara yang telah memiliki pengalaman dan reputasi baik dalam menyelenggarakan perjalanan ibadah haji dan umroh dapat memberikan rasa percaya diri kepada calon jamaah. </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Fasilitas dan Pelayanan Berkualitas</h4>
                                    <p>Pilihlah penyelenggara yang menyediakan fasilitas yang sesuai dengan kebutuhan dan kenyamanan Anda. </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Ketersediaan Paket yang Beragam</h4>
                                    <p>Setiap orang memiliki kebutuhan dan preferensi yang berbeda, dan penyelenggara yang menawarkan paket yang beragam, dapat memberikan opsi yang sesuai dengan anggaran dan keinginan pribadi.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="text-center" data-aos="zoom-in">
                <h3>Tunggu Apa lagi ?</h3>
                <p>Hubungi kami dan dapatkan promo dan penawaran menarik</p>
                <a class="cta-btn" href="https://api.whatsapp.com/send/?phone=6281133399833&text=Halo%20Nipindo%20Travel%2C%20Saya%20ingin%20mengetahui%20lebih%20lanjut%20mengenai%20paket%20Di%20Nipindo%20Travel%20&app_absent=0">Halo Nipindo Travel</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Pelayanan Kami</h2>
                        <p>Kami menyediakan layanan terbaik untuk kepuasan pelanggan. Dengan tim profesional kami, kami berkomitmen untuk memberikan solusi yang tepat dan berkualitas.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon"><img style="height: 2rem;" src="<?php echo base_url('assets/img/icons/haji.png') ?>" alt="" class=""></div>
                                <h4><a href="">Haji Plus Kuota</a></h4>
                                <p>Nikmati kenyamanan Haji Plus dengan kuota yang telah dialokasikan.</p>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon"><img style="height: 2rem;" src="<?php echo base_url('assets/img/icons/hajitanpa.png') ?>" alt="" class=""></div>
                                <h4><a href="">Haji Plus Tanpa Antri</a></h4>
                                <p>Lewati antrian dan nikmati pengalaman Haji Plus tanpa menunggu antrian Haji.</p>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex align-items-stretch mt-4">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon"><img style="height: 2rem;" src="<?php echo base_url('assets/img/icons/umroh.png') ?>" alt="" class=""></div>
                                <h4><a href="">Umroh</a></h4>
                                <p>Berangkatlah dalam perjalanan spiritual dengan paket Umrah kami.</p>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex align-items-stretch mt-4">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                                <div class="icon"><img style="height: 2rem;" src="<?php echo base_url('assets/img/icons/halal.png') ?>" alt="" class=""></div>
                                <h4><a href="">Pelayanan Visa</a></h4>
                                <p>Berangkatlah dalam perjalanan spiritual dengan pelayanan penyediaan Visa kami.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Blog Artikel</h2>
                        <p>Baca juga informasi menarik, tips & trik seputar traveling berikut ini.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <?php foreach ($artikel as $artikel_item) : ?>
                            <div class="col-md-12 align-items-stretch">
                                <a href="<?php echo site_url('artikel/view/' . $artikel_item['id_artikel']); ?>">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-lg-5">
                                            <figure class="img-play-video">
                                                <img src="https://rosanatravel.com/admin/assets/images/artikel/<?php echo $artikel_item['artikel_img']; ?>" alt="Image" class="img-fluid rounded-20">
                                            </figure>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="text-left" style="color: #000; font-style: bold;"><?php echo $artikel_item['judul_artikel']; ?></h4>
                                            <p><?php echo substr($artikel_item['konten'], 0, 100); ?>...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-left">
                <h2>Galeri</h2>

            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <?php foreach ($galeri as $g) { ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?php echo 'https://rosanatravel.com/admin/assets/images/galeri/' . $g['nama']; ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <div class="portfolio-links">
                                        <a href="<?php echo 'http://localhost/nipindo/be/' . 'assets/uploads/' . $g['nama']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <center>
    <button id="loadMoreBtn" class="py-2 px-4" style="border: #009970; color: white; background-color: #009970; border-radius: 1rem;">
        Lebih Banyak <i class="bx bx-right-arrow-alt"></i>
    </button>
</center>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="section-title">
                        <h2>Kontak Kami</h2>
                        <p>Temukan Dukungan untuk Kebutuhan Perjalanan Anda. Dapatkan jawaban dan solusi atas pertanyaan Anda di sini. Kami selalu siap untuk membantu Anda.</p>
                        <br>
                        <img src="<?php echo base_url('assets/') ?>img/portfolio/kantornipindo.jpeg" 
                            class="img-fluid mb-4" alt="" style="border-radius: 0.5rem;">
                        
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.473353852619!2d106.88847801527538!3d-6.201113562475438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4bdc4e88c31%3A0xcf8ed9fdb2fe32ff!2sNipindo%20Travel%20(Official)!5e0!3m2!1sen!2sid!4v1650417807936!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
                    <div class="info mt-4">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Alamat :</h4>
                        <p>Jl. Pegambiran No.5, RT.12/RW.7, Rawamangun, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <div class="info">
                                <i class="bi bi-envelope"></i>
                                <h4>Email :</h4>
                                <p>info@nipindotravel.com</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info w-100 mt-4">
                                <i class="bi bi-phone"></i>
                                <h4>Nomor HP / Whatsapp :</h4>
                                <p>+62 811 333 99 833</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let items = document.querySelectorAll(".portfolio-item");
        let itemsPerPage = 6; 
        let loadMoreBtn = document.getElementById("loadMoreBtn");

        function updateVisibility() {
            let hiddenItems = Array.from(items).filter(item => item.style.display === "none");
            hiddenItems.slice(0, itemsPerPage).forEach(item => item.style.display = "block");
            if (hiddenItems.length <= itemsPerPage) {
                loadMoreBtn.style.display = "none";
            }
        }

        items.forEach((item, index) => {
            if (index >= itemsPerPage) {
                item.style.display = "none";
            }
        });

        loadMoreBtn.addEventListener("click", function () {
            updateVisibility();
        });
    });
</script>


<script>
    // Fungsi untuk mendapatkan nilai dari sessionStorage
    function getSessionStorageItem(key) {
        return sessionStorage.getItem(key);
    }

    // Fungsi untuk menetapkan nilai ke sessionStorage
    function setSessionStorageItem(key, value) {
        sessionStorage.setItem(key, value);
    }

    // Fungsi untuk menampilkan modal jika belum pernah ditutup
    function showPopup() {
        var reloadCount = getSessionStorageItem('reloadCount') || 0;

        // Tampilkan modal hanya jika pengguna belum reload lebih dari 2 kali
        if (reloadCount < 5) {
            $('#promoModal').modal('show');
            setSessionStorageItem('reloadCount', parseInt(reloadCount) + 1);
        }
    }

    // Panggil fungsi showPopup saat halaman dimuat
    $(document).ready(function() {
        showPopup();
        // sessionStorage.clear(); // Jika perlu menghapus semua data sesi
    });
    
</script>