<?php $page = 'galeri'; include "includes/header.php"; ?>

    <!-- Start Page Banner Area -->
    <div class="page-banner-with-full-image">
        <div class="container">
            <div class="page-banner-content-two">
                <h2>Foto Galeri</h2>
                <ul>
                    <li>
                        <a href="index.html">Anasayfa</a>
                    </li>
                    <li>Foto Galeri</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Gallery Area -->
    <section class="gallery-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
            <?php
            $sayfada = 15; // sayfada gösterilecek içerik miktarını belirtiyoruz.
            $sorgu=$db->prepare("select * from images");
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
            $refsor=$db->prepare("select * from images order by rank ASC limit $limit,$sayfada");
            $refsor->execute();
            while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                if ($refcek['gallery_id']==9){
                    if ($refcek['isActive']==1){
                        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-item">
                        <a data-fancybox="gallery" href="<?php echo $site; ?>/panel/uploads/galleries_v/images/resim-galerisi/851x606/<?php echo $refcek['url']; ?>">
                            <img style="width: 100%;height: 340px;object-fit: cover;" src="<?php echo $site; ?>/panel/uploads/galleries_v/images/resim-galerisi/851x606/<?php echo $refcek['url']; ?>" alt="image">
                        </a>
                    </div>
                </div>
                    <?php }}} ?>
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
                    <a href="foto-galeri?k=<?php echo $katid; ?>&sayfa=<?php echo $s ?>" class="page-numbers"><?php echo $s; ?></a>
                    <?php   } }  ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Area -->

<?php include "includes/footer.php"; ?>