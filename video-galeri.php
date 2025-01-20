<?php $page = 'galeri'; include "includes/header.php"; ?>

    <!-- Start Page Banner Area -->
    <div class="page-banner-with-full-image">
        <div class="container">
            <div class="page-banner-content-two">
                <h2>Video Galeri</h2>
                <ul>
                    <li>
                        <a href="index.html">Anasayfa</a>
                    </li>
                    <li>Video Galeri</li>
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
                $sayfada = 6; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                $sorgu=$db->prepare("select * from videos");
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
                $refsor=$db->prepare("select * from videos order by rank ASC limit $limit,$sayfada");
                $refsor->execute();
                while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                    if ($refcek['gallery_id']==11){
                        if ($refcek['isActive']==1){
                            ?>
                            <div class="col-lg-4 col-md-6" style="margin-bottom: 40px">
                                <iframe width="100%" height="315" src="<?php echo $refcek['url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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
                            <a href="video-galeri?k=<?php echo $katid; ?>&sayfa=<?php echo $s ?>" class="page-numbers"><?php echo $s; ?></a>
                        <?php   } }  ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Area -->

<?php include "includes/footer.php"; ?>