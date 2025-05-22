<style>
    .duration-container {
        display: flex;
        background-color: #fbf7f4;
        border-radius: 20px;
        max-width: fit-content;
        align-items: center;
    }

    .duration-container i {
        color: orange;
        font-size: 1.8em;
    }
</style>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container mt-5">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail paket</h2>
                <ol>
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li>Detail paket</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-5">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="<?php echo 'https://rosanatravel.com/admin/assets/images/' . $paket[0]['paket_img']; ?>" alt="">
                            </div>
                            <!-- 
                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                                </div> -->

                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <?php $encoded = rawurlencode($paket[0]['nama_program']) . ' ' . rawurlencode($paket[0]['paket']) ?>
                        <h3><?php echo $paket[0]['nama_program']; ?></h3>
                        <ul>
                            <li><strong>Paket</strong>: <?php echo $paket[0]['paket']; ?></li>
                            <li><strong>Hotel Mekkah</strong>: <?php echo $paket[0]['hotel_mekkah']; ?></li>
                            <li><strong>Hotel Madinah</strong>: <?php echo $paket[0]['hotel_madinah']; ?></li>
                            <li><h6 style="font-size: small;">Uang Muka</h6></li>
                            <li><h4 style="color: #db8d00;"><?php echo 'Rp ' . number_format($paket[0]['uang_muka'], 0, ",", ".")?></h6></li>
                        </ul>
                        <a href="https://api.whatsapp.com/send/?phone=6281133399833&text=Halo%20Nipindo%20Travel%2C%20Saya%20ingin%20mengetahui%20lebih%20lanjut%20mengenai%20paket%20<?php echo $encoded; ?>&app_absent=0" class="btn btn-success">Pesan Sekarang</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="portfolio-description">
                            <h2>Detail Paket</h2>
                            <!-- <?php print_r($paket[0]) ?> -->
                            <p><?php echo $paket[0]['konten']; ?>
                            <p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main>