<?php $page = 'kurumsal'; include "includes/header.php"; ?>

    <!-- Start Page Banner Area -->
    <div class="page-banner-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-image">
                        <img src="assets/images/page-banner/page-banner-4.jpg" alt="image">

                        <div class="image-shape">
                            <img src="assets/images/page-banner/shape.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h2>Sıkça Sorulanlar</h2>
                        <ul>
                            <li>
                                <a href="index.html">Anasayfa</a>
                            </li>
                            <li>Sıkça Sorulanlar</li>
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

    <!-- Start FAQS Area -->
    <section class="faqs-area bg-ffffff ptb-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="faq-accordion">
                        <div class="accordion">
                        <?php
                        $sayfada = 1; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                        $sorgu=$db->prepare("select * from sikcasorulan");
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
                        $refsor=$db->prepare("select * from sikcasorulan order by id ASC limit 0,1");
                        $refsor->execute();
                        while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                            if ($refcek['isActive']==1){
                                ?>
                            <div class="accordion-item">
                                <div class="accordion-title active">
                                    <i class='bx bxs-down-arrow'></i>
                                    <?php echo $refcek['baslik']; ?>
                                </div>

                                <div class="accordion-content show">
                                    <p><?php echo strip_tags($refcek['aciklama']); ?></p>
                                </div>
                            </div>
                            <?php }} ?>
                            <?php
                            $sayfada = 100; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                            $sorgu=$db->prepare("select * from sikcasorulan");
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
                            $refsor=$db->prepare("select * from sikcasorulan order by id ASC limit 1,100");
                            $refsor->execute();
                            $sayi = 2;
                            while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                                if ($refcek['isActive']==1){
                                    ?>
                            <div class="accordion-item">
                                <div class="accordion-title">
                                    <i class='bx bxs-down-arrow'></i>
                                    <?php echo $refcek['baslik']; ?>
                                </div>

                                <div class="accordion-content">
                                    <p><?php echo strip_tags($refcek['aciklama']); ?></p>
                                </div>
                            </div>
                                <?php }} ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="faqs-main-shape">
            <img src="assets/images/faq-shape.png" alt="image">
        </div>
    </section>
    <!-- End FAQS Area -->

<?php include "includes/footer.php"; ?>