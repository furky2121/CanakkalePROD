<?php $page = 'ekibimiz'; include "includes/header.php"; ?>

    <!-- Start Page Banner Area -->
    <div class="page-banner-with-full-image">
        <div class="container">
            <div class="page-banner-content-two">
                <h2>Ekibimiz</h2>
                <ul>
                    <li>
                        <a href="index.html">Anasayfa</a>
                    </li>
                    <li>Ekibimiz</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Coaches Area -->
    <section class="coaches-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
            <?php
            $sayfada = 9; // sayfada gösterilecek içerik miktarını belirtiyoruz.
            $sorgu=$db->prepare("select * from teams");
            $sorgu->execute();
            $toplam_icerik=$sorgu->rowCount();
            $toplam_sayfa = ceil($toplam_icerik / $sayfada);
            // eğer sayfa girilmemişse 1 varsayalım.
            $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
            // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
            if($sayfa < 1) $sayfa = 1;
            // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
            if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;
            $limit = ($sayfa - 1) * $sayfada;
            $refsor=$db->prepare("select * from teams order by rank ASC limit $limit,$sayfada");
            $refsor->execute();
            while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                if ($refcek['isActive']==1){
                    ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-coaches">
                        <div class="image">
                            <a><img style="width: 400px;height: 380px;object-fit: cover;" src="<?php echo $site; ?>/panel/uploads/teams_v/349x388/<?php echo $refcek['img_url']; ?>" alt="<?php echo $refcek['ad_soyad']; ?>"></a>

                            <ul class="social-link">
                                <?php if (!empty($refcek['facebook'])){ ?>
                                    <li><a href="<?php echo $refcek['facebook']; ?>" ><i class="bx bxl-facebook"></i></a></li>
                                <?php } ?>

                                <?php if (!empty($refcek['instagram'])){ ?>
                                    <li><a href="<?php echo $refcek['instagram']; ?>" ><i class="bx bxl-instagram"></i></a></li>
                                <?php } ?>

                                <?php if (!empty($refcek['twitter'])){ ?>
                                    <li><a href="<?php echo $refcek['twitter']; ?>" ><i class="bx bxl-twitter"></i></a></li>
                                <?php } ?>

                                <?php if (!empty($refcek['youtube'])){ ?>
                                    <li><a href="<?php echo $refcek['youtube']; ?>" ><i class="bx bxl-youtube"></i></a></li>
                                <?php } ?>

                                <?php if (!empty($refcek['linkedin'])){ ?>
                                    <li><a href="<?php echo $refcek['linkedin']; ?>" ><i class="bx bxl-linkedin"></i></a></li>
                                <?php } ?>

                                <?php if (!empty($refcek['pinterest'])){ ?>
                                    <li><a href="<?php echo $refcek['pinterest']; ?>" ><i class="bx bxl-pinterest"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>
                                <a><?php echo $refcek['ad_soyad']; ?></a>
                            </h3>
                            <span><?php echo $refcek['pozisyon']; ?></span>
                            <i class='bx bxs-share-alt'></i>
                        </div>
                    </div>
                </div>
                <?php }} ?>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <?php
                    $s=0;
                    while ($s < $toplam_sayfa) {
                        $s++; ?>
                        <?php
                        if ($s==$sayfa) {?>
                            <span class="page-numbers current" aria-current="page"><?php echo $s; ?></span>
                        <?php } else {?>
                            <a href="ekibimiz?k=<?php echo $katid; ?>&sayfa=<?php echo $s ?>" class="page-numbers"><?php echo $s; ?></a>
                        <?php   } }  ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Coaches Area -->

<?php include "includes/footer.php"; ?>