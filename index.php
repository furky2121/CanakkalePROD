<?php $page = 'anasayfa'; include "includes/header.php"; ?>


<?php $refsor2=$db->prepare("select * from aktif WHERE id=62");
$refsor2->execute();
while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) { if ($refcek2['isActive']==1){ ?>
    <!-- Start Main Slides Area -->
    <div class="main-slides-area">
        <div class="home-slides owl-carousel owl-theme">
        <?php
        $sayfada = 50; // sayfada gösterilecek içerik miktarını belirtiyoruz.
        $sorgu=$db->prepare("select * from slides");
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
        $refsor=$db->prepare("select * from slides order by rank ASC limit $limit,$sayfada");
        $refsor->execute();
        while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
            if ($refcek['isActive']==1){
                ?>
            <div class="main-slides-item-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="main-slides-content">
                                <h1><?php echo $refcek['title']; ?></h1>
                                <p><?php echo strip_tags($refcek['description']); ?></p>

                         <?php if ($refcek['allowButton']==1){ ?>
                                <div class="slides-btn">
                             <?php if ($refcek['button_caption']){?>
                                    <a href="<?php echo $refcek['button_url']; ?>" class="default-btn"><?php echo $refcek['button_caption']; ?> <i class="flaticon-pointer"></i></a>
                            <?php } ?>
                            <?php if ($refcek['yenibutonisim']){?>
                                    <a href="<?php echo $refcek['yenibutonlink']; ?>" class="optional-btn"><?php echo $refcek['yenibutonisim']; ?> <i class="flaticon-repairing-service"></i></a>
                            <?php } ?>
                                </div>
                         <?php } ?>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="main-slides-image">
                                <img src="<?php echo $site; ?>/panel/uploads/slides_v/1920x1080/<?php echo $refcek['img_url']; ?>" alt="<?php echo $refcek['title']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>
    <!-- End Main Slides Area -->
<?php }} ?>



<?php $refsor2=$db->prepare("select * from aktif WHERE id=63");
$refsor2->execute();
while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) { if ($refcek2['isActive']==1){ ?>
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

                            <a href="<?=$tanitimvideo?>" class="video-btn popup-youtube">
                                <i class="flaticon-play"></i>
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
<?php }} ?>



<?php $refsor2=$db->prepare("select * from aktif WHERE id=64");
$refsor2->execute();
while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) { if ($refcek2['isActive']==1){ ?>
    <!-- Start Services Area -->
    <div class="services-area ptb-100">
        <div class="container">
            <?php $refsor2=$db->prepare("select * from baslik WHERE id=11");
            $refsor2->execute();
            while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) { if ($refcek2['isActive']==1){ ?>
                <div class="section-title">
                    <h2><?php echo $refcek2['isim']; ?></h2>
                    <p><?php echo $refcek2['altbaslik']; ?></p>
                </div>
            <?php }} ?>


            <div class="tab services-list-tab">
                <ul class="tabs">

                <?php
                $sayfada = 100000; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                $sorgu=$db->prepare("select * from services");
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
                $refsor=$db->prepare("select * from services order by rank ASC limit $limit,$sayfada");
                $refsor->execute();
                while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                    if ($refcek['isActive']==1){
                        ?>
                    <li style="margin-bottom: 20px">
                        <a href="#">
                            <i class="flaticon-bipolar"></i>
                            <span><?php echo $refcek['title']; ?></span>
                        </a>
                    </li>
                    <?php }} ?>
                </ul>

                <div class="tab_content">
                <?php
                $sayfada = 1000000; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                $sorgu=$db->prepare("select * from services");
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
                $refsor=$db->prepare("select * from services order by rank ASC limit $limit,$sayfada");
                $refsor->execute();
                while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                    if ($refcek['isActive']==1){
                        ?>
                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="services-tab-image">
                                    <img class="mo" style="width: 100%;height: 600px;object-fit: cover;" src="<?php echo $site; ?>/panel/uploads/services_v/1920x1080/<?php echo $refcek['img_url']; ?>" alt="image">
                                    <img class="ma" style="width: 100%;height: 400px;object-fit: cover;" src="<?php echo $site; ?>/panel/uploads/services_v/1920x1080/<?php echo $refcek['img_url']; ?>" alt="image">

                                    <div class="services-tab-shape">
                                        <div class="shape-1">
                                            <img src="assets/images/services/shape-1.png" alt="image">
                                        </div>

                                        <div class="shape-2">
                                            <img src="assets/images/services/shape-2.png" alt="image">
                                        </div>

                                        <div class="shape-3">
                                            <img src="assets/images/services/shape-3.png" alt="image">
                                        </div>

                                        <div class="shape-4">
                                            <img src="assets/images/services/shape-4.png" alt="image">
                                        </div>

                                        <div class="circle-shape">
                                            <img src="assets/images/services/circle-shape.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="services-tab-content">
                                    <div class="services-content-image">
                                        <img src="assets/images/services/flower.jpg" alt="image">

                                        <h4 class="sub-title"><?php echo $refcek['title']; ?></h4>
                                    </div>
                                    <p><?php echo substr(strip_tags($refcek['description']),0,800); ?>...</p>

                                    <div class="services-btn">
                                        <a href="hizmet-icerik/<?=seo($refcek['title'])."-".$refcek['id']?>" class="default-btn">İncele <i class="flaticon-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->
<?php }} ?>




<?php $refsor2=$db->prepare("select * from aktif WHERE id=65");
$refsor2->execute();
while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) { if ($refcek2['isActive']==1){ ?>
    <!-- Start Reviews Area -->
    <section class="reviews-area ptb-100">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="reviews-image">
                        <img src="<?php echo $site; ?>/panel/uploads/settings_v/1920x1080/<?php echo $headerbolumler; ?>" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <?php $refsor2=$db->prepare("select * from baslik WHERE id=12");
                    $refsor2->execute();
                    while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) { if ($refcek2['isActive']==1){ ?>
                        <div class="reviews-title">
                            <h3><?php echo $refcek2['isim']; ?></h3>
                        </div>
                    <?php }} ?>


                    <div class="reviews-slides">
                        <div class="reviews-feedback">
                            <div>
                            <?php
                            $sayfada = 100; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                            $sorgu=$db->prepare("select * from yorum");
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
                            $refsor=$db->prepare("select * from yorum order by rank ASC limit $limit,$sayfada");
                            $refsor->execute();
                            while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                                if ($refcek['isActive']==1){
                                    ?>
                                <div class="item">
                                    <div class="single-feedback">
                                        <div class="icon">
                                            <i class="flaticon-close"></i>
                                        </div>
                                        <p><?php echo strip_tags($refcek['description']); ?></p>
                                    </div>
                                </div>
                                <?php }} ?>
                            </div>

                            <button class="prev-arrow slick-arrow">
                                <i class="bx bxs-left-arrow"></i>
                            </button>

                            <button class="next-arrow slick-arrow">
                                <i class="bx bxs-right-arrow"></i>
                            </button>
                        </div>

                        <div class="reviews-thumbnails">
                            <div>
                            <?php
                            $sayfada = 100; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                            $sorgu=$db->prepare("select * from yorum");
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
                            $refsor=$db->prepare("select * from yorum order by rank ASC limit $limit,$sayfada");
                            $refsor->execute();
                            while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                                if ($refcek['isActive']==1){
                                    ?>
                                <div class="item">
                                    <div class="title">
                                        <h3><?php echo $refcek['title']; ?></h3>
                                        <span><?php echo $refcek['statu']; ?></span>
                                    </div>

                                    <div class="img-fill">
                                        <img src="<?php echo $site; ?>/panel/uploads/yorum_v/555x343/<?php echo $refcek['img_url']; ?>" alt="<?php echo $refcek['title']; ?>">
                                    </div>
                                </div>
                                <?php }} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="reviews-main-shape">
            <img src="assets/images/reviews/shape-1.png" alt="image">
        </div>
    </section>
    <!-- End Reviews Area -->
<?php }} ?>




<?php $refsor2=$db->prepare("select * from aktif WHERE id=66");
$refsor2->execute();
while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) { if ($refcek2['isActive']==1){ ?>
    <!-- Start FAQS Area -->
    <section class="faqs-area bg-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-item">
                        <?php $refsor2=$db->prepare("select * from baslik WHERE id=13");
                        $refsor2->execute();
                        while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) { if ($refcek2['isActive']==1){ ?>
                            <div class="content">
                                <h3><?php echo $refcek2['isim']; ?></h3>
                            </div>
                        <?php }} ?>


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
                                $sayfada = 5; // sayfada gösterilecek içerik miktarını belirtiyoruz.
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

                        <div class="faq-btn">
                            <a href="sikca-sorulanlar" class="default-btn">Tümünü Görüntüle <i class="flaticon-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="faq-image" style="background-image: url(<?php echo $site; ?>/panel/uploads/settings_v/1920x1080/<?php echo $headerbolumici; ?>)"></div>
                </div>
            </div>
        </div>

        <div class="faqs-main-shape">
            <img src="assets/images/faq-shape.png" alt="image">
        </div>
    </section>
    <!-- End FAQS Area -->
<?php }} ?>



<?php $refsor2=$db->prepare("select * from aktif WHERE id=67");
$refsor2->execute();
while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) { if ($refcek2['isActive']==1){ ?>
    <!-- Start Fun Facts Area -->
    <section class="fun-facts-area pt-100 pb-70">
        <div class="container">
            <div class="row">
            <?php
            $sayfada = 4; // sayfada gösterilecek içerik miktarını belirtiyoruz.
            $sorgu=$db->prepare("select * from sayilar");
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
            $refsor=$db->prepare("select * from sayilar order by id ASC limit $limit,$sayfada");
            $refsor->execute();
            while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                if ($refcek['isActive']==1){
                    ?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="<?php echo $refcek['ikon']; ?>"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="<?php echo $refcek['no']; ?>">00</span>+
                        </h3>
                        <h5 style="font-size: 1em"><?php echo $refcek['title']; ?></h5>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->
<?php }} ?>




<?php $refsor2=$db->prepare("select * from aktif WHERE id=68");
$refsor2->execute();
while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) { if ($refcek2['isActive']==1){ ?>
    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <?php $refsor2=$db->prepare("select * from baslik WHERE id=14");
            $refsor2->execute();
            while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) { if ($refcek2['isActive']==1){ ?>
                <div class="section-title">
                    <h2><?php echo $refcek2['isim']; ?></h2>
                    <p><?php echo $refcek2['altbaslik']; ?></p>
                </div>
            <?php }} ?>


            <div class="row justify-content-center">
                <?php
                $sayfada = 1000000; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                $sorgu=$db->prepare("select * from news");
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
                $refsor=$db->prepare("select * from news order by id DESC limit $limit,$sayfada");
                $refsor->execute();
                while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                    if ($refcek['isActive']==1){
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item">
                            <div class="blog-image">
                                <a href="blog-icerik/<?=seo($refcek['title'])."-".$refcek['id']?>"><img style="width: 100%;height: 320px;object-fit: cover;" src="<?php echo $site; ?>/panel/uploads/news_v/1920x1080/<?php echo $refcek['img_url']; ?>" alt="<?php echo $refcek['title'];?>"></a>
                            </div>

                            <div class="blog-content">
                                <div class="meta">
                                    <p>
                                        <i class="flaticon-calendar"></i>
                                        <a><?php echo date('d.m.Y H:i', strtotime($refcek['createdAt']));?></a>
                                    </p>
                                </div>

                                <h3>
                                    <a href="blog-icerik/<?=seo($refcek['title'])."-".$refcek['id']?>"><?php echo $refcek['title'];?></a>
                                </h3>
                                <p><?php echo substr(strip_tags($refcek['description']),0,150); ?>...</p>
                                <div class="blog-btn">
                                    <a href="blog-icerik/<?=seo($refcek['title'])."-".$refcek['id']?>" class="default-btn">Devamını Oku <i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } } ?>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
<?php }} ?>



<?php include "includes/footer.php"; ?>