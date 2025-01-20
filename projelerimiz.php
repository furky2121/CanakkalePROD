<?php $page = 'proje'; include "includes/header.php"; ?>

    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <br><br><br><br>
                    <div class="wpo-breadcumb-wrap">
                        <h2>Projelerimiz</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="index.html">Anasayfa</a></li>
                            <li>Projelerimiz</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- start of wpo-project-area -->
    <div class="wpo-project-area-s2 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="wpo-project-wrap">
                    <div class="sortable-gallery">
                        <div class="gallery-filters"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="project-grids gallery-container clearfix">
                            <?php
                            $sayfada = 21; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                            $sorgu=$db->prepare("select * from portfolio_categories");
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
                            $refsor=$db->prepare("select * from portfolio_categories limit $limit,$sayfada");
                            $refsor->execute();
                            while ($refcek=$refsor->fetch(PDO::FETCH_ASSOC)) {
                                if ($refcek['isActive']==1){
                                    $id = $refcek['id'];
                                    ?>

                                    <?php
                                    $refsor2=$db->prepare("select * from portfolios WHERE category_id='$id'");
                                    $refsor2->execute();
                                    while ($refcek2=$refsor2->fetch(PDO::FETCH_ASSOC)) {
                                        if ($refcek2['isActive']==1){
                                            $pid = $refcek2['id'];
                                            ?>
                                    <div class="grid">
                                        <div class="wpo-project-item">
                                            <div class="wpo-project-img">
                                                <?php
                                                $refsor3=$db->prepare("select * from portfolio_images WHERE portfolio_id='$pid'");
                                                $refsor3->execute();
                                                while ($refcek3=$refsor3->fetch(PDO::FETCH_ASSOC)) {
                                                    if ($refcek3['isCover']==1){
                                                        ?>
                                                        <img style="width: 100%;height: 330px;object-fit: cover;" src="<?php echo $site; ?>/panel/uploads/portfolio_v/1080x426/<?php echo $refcek3['img_url']; ?>" alt="">
                                                    <?php }} ?>
                                                <div class="left-border"></div>
                                                <div class="right-border"></div>
                                            </div>
                                            <div class="wpo-project-text">
                                                <h2><a href="proje-icerik/<?=seo($refcek2['title'])."-".$refcek2['id']?>"><?php echo $refcek2['title'];?></a></h2>
                                                <span><?php echo $refcek['title'];?></span>
                                            </div>
                                        </div>
                                    </div>
                                        <?php }} ?>
                                <?php }} ?>
                                </div>
                                <div class="pagination-wrapper pagination-wrapper-left">
                                    <ul class="pg-pagination">
                                        <?php
                                        $s=0;
                                        while ($s < $toplam_sayfa) {
                                            $s++; ?>
                                            <?php
                                            if ($s==$sayfa) {?>
                                                <li class="active"><a><?php echo $s; ?></a></li>
                                            <?php } else {?>
                                                <li><a href="projelerimiz?k=<?php echo $katid; ?>&sayfa=<?php echo $s ?>"><?php echo $s; ?></a></li>
                                            <?php   } }  ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-project-area -->

<?php include "includes/footer.php"; ?>