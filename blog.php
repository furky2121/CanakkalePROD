<?php $page = 'blog'; include "includes/header.php"; ?>


    <!-- Start Page Banner Area -->
    <div class="page-banner-with-full-image item-bg2">
        <div class="container">
            <div class="page-banner-content-two">
                <h2>Makaleler</h2>
                <ul>
                    <li>
                        <a href="index.html">Anasayfa</a>
                    </li>
                    <li>Makaleler</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
            <?php
            $sayfada = 9; // sayfada gösterilecek içerik miktarını belirtiyoruz.
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
            <?php } ?>
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
                            <a href="blog?k=<?php echo $katid; ?>&sayfa=<?php echo $s ?>" class="page-numbers"><?php echo $s; ?></a>
                        <?php   } }  ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->


<?php include "includes/footer.php"; ?>