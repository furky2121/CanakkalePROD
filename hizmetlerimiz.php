<?php $page = 'hizmet'; include "includes/header.php"; ?>

    <!-- Start Page Banner Area -->
    <div class="page-banner-with-full-image">
        <div class="container">
            <div class="page-banner-content-two">
                <h2>Hizmetlerimiz</h2>
                <ul>
                    <li>
                        <a href="index.html">Anasayfa</a>
                    </li>
                    <li>Hizmetlerimiz</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">
            <div class="row">
            <?php
            $sayfada = 9; // sayfada gösterilecek içerik miktarını belirtiyoruz.
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
            $refsor=$db->prepare("select * from services order by id ASC limit $limit,$sayfada");
            $refsor->execute();
            while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                if ($refcek['isActive']==1){
                    ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box">
                        <div class="courses-image">
                            <a href="hizmet-icerik/<?=seo($refcek['title'])."-".$refcek['id']?>">
                                <img style="width: 400px;height: 330px;object-fit: cover;" src="<?php echo $site; ?>/panel/uploads/services_v/1920x1080/<?php echo $refcek['img_url']; ?>" alt="<?php echo $refcek['title']; ?>">
                            </a>
                        </div>
                        <div class="courses-content">
                            <h3>
                                <a href="hizmet-icerik/<?=seo($refcek['title'])."-".$refcek['id']?>"><?php echo $refcek['title']; ?></a>
                            </h3>
                            <p><?php echo substr(strip_tags($refcek['description']),0,150); ?>...</p>
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
                            <a href="hizmetlerimiz?k=<?php echo $katid; ?>&sayfa=<?php echo $s ?>" class="page-numbers"><?php echo $s; ?></a>
                        <?php   } }  ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Area -->

<?php include "includes/footer.php"; ?>