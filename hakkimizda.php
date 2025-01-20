<?php $page = 'kurumsal'; include "includes/header.php"; ?>

    <!-- Start Page Banner Area -->
    <div class="page-banner-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-image">
                        <img src="assets/images/page-banner/page-banner-1.jpg" alt="image">

                        <div class="image-shape">
                            <img src="assets/images/page-banner/shape.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h2>Hakkımızda</h2>
                        <ul>
                            <li>
                                <a href="index.html">Anasayfa</a>
                            </li>
                            <li>Hakkımızda</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-banner-shape">
            <img src="assets/images/page-banner/banner-shape-1.png" alt="image">
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start About Area -->
    <section class="about-area bg-ffffff ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-main-content">
                        <h3><?=$sloganhak?></h3>

                        <div class="about-content-image">
                            <img src="assets/images/about/about-2.jpg" alt="image">

                            <h4 class="sub-title"><?=$baslikhak?></h4>

                            <a href="<?=$tanitimvideo?>">
                                
                            </a>
                        </div>
                        <p><?=$hakkimizda?></p>

                        <div class="about-btn">
                            <a href="iletisim" class="default-btn">İletişime Geç <i class="flaticon-user"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-main-image">
                        <img src="<?php echo $site; ?>/panel/uploads/settings_v/1920x1080/<?=$kurumsalfoto?>" alt="<?=$baslikhak?>">

                        <div class="about-shape about-wrap">
                            <div class="shape-1">
                                <img src="assets/images/about/shape-1.png" alt="image">
                            </div>

                            <div class="shape-2">
                                <img src="assets/images/about/shape-2.png" alt="image">
                            </div>

                            <div class="shape-3">
                                <img src="assets/images/about/shape-3.png" alt="image">
                            </div>

                            <div class="shape-4">
                                <img src="assets/images/about/shape-4.png" alt="image">
                            </div>

                            <div class="shape-5">
                                <img src="assets/images/about/shape-5.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

<?php include "includes/footer.php"; ?>