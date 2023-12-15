<!-- <body class="detail-artikel"> -->
<div class="untree_co-section" style="margin-top: 6rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article>
                    <h2 class="section-title text-left mb-4"><?php echo $artikel['judul_artikel']; ?></h2>
                    <div class="mb-4">
                        <img src="https://alfatihahtravel.com/admin/assets/images/artikel/<?php echo $artikel['artikel_img']; ?>" alt="Image" class="img-fluid rounded-20">
                    </div>
                    <p><?php echo $artikel['konten']; ?></p>
                </article>
            </div>
            <!-- <div class="col-lg-1">
            </div> -->
            <div class="col-lg-4">
                <div class="container">
                    <div class="row text-left justify-content-left mb-5">
                        <div class="col-lg-7">
                            <h2 class="section-title text-left">Blog Artikel Lain</h2>
                        </div>
                    </div>
                    <?php foreach ($artikellain as $artikel_item) : ?>
                        <a href="<?php echo site_url('artikel/view/' . $artikel_item['id_artikel']); ?>">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-lg-7">
                                    <h6 style="padding-bottom: 5px!important;" class="section-title text-left"><?php echo substr($artikel_item['judul_artikel'], 0, 20); ?>...</h6>
                                    <p><?php echo substr($artikel_item['konten'], 0, 50); ?>...</p>
                                </div>
                                <div class="col-lg-5">
                                    <figure class="img-play-video">
                                        <img src="https://alfatihahtravel.com/admin/assets/images/artikel/<?php echo $artikel_item['artikel_img']; ?>" alt="Image" class="img-fluid rounded-20">
                                    </figure>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container mt-5">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Artikel</h2>
                <ol>
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li>Artikel</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="<?php echo 'https://alfatihahtravel.com/admin/assets/images/' . $paket[0]['paket_img']; ?>" alt="">
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
                            <li>
                                <h6 style="font-size: small;"><?php if ($paket[0]['tampilan'] == 'Uang Muka') {
                                                                    echo 'DP Mulai :';
                                                                } else {
                                                                    echo 'Harga Mulai :';
                                                                } ?></h6>
                                <h4 style="color: #db8d00;"><?php if ($paket[0]['tampilan'] == 'Uang Muka') {
                                                                echo 'Rp ' . number_format($paket[0]['uang_muka'], 0, ",", ".");
                                                            } else {
                                                                echo 'Rp ' . number_format($paket[0]['harga_paket'], 0, ",", ".");
                                                            } ?></h4>
                            </li>
                        </ul>
                        <a href="https://api.whatsapp.com/send/?phone=628113003258&text=Halo%20Nipindo%20Travel%2C%20Saya%20ingin%20mengetahui%20lebih%20lanjut%20mengenai%20paket%20<?php echo $encoded; ?>&app_absent=0" class="btn btn-success">Pesan Sekarang</a>
                    </div>
                    <!-- <div class="portfolio-description">
                            <h2>This is an example of portfolio detail</h2>
                            <p>
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                            </p>
                        </div> -->
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main>
<!-- </body> -->