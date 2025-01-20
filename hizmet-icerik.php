<?php $page = 'hizmet'; include "includes/header.php"; ?>
<?php
$refsor2=$db->prepare("SELECT * FROM services where id=:id");
$refsor2->execute(array('id' => $_GET['id']));
$refcek2=$refsor2->fetch(PDO::FETCH_ASSOC);
?>

    <!-- Start Page Banner Area -->
    <div class="page-banner-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-image">
                        <img src="assets/images/page-banner/page-banner-2.jpg" alt="image">

                        <div class="image-shape">
                            <img src="assets/images/page-banner/shape.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h2><?php echo $refcek2['title']; ?></h2>
                        <ul>
                            <li>
                                <a href="index.html">Anasayfa</a>
                            </li>
                            <li><?php echo $refcek2['title']; ?></li>
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

    <!-- Start Services Details Area -->
    <section class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="services-details-desc">
                        <div class="content-image">
                            <img src="assets/images/services-details/shape.jpg" alt="image">

                            <h4 class="sub-title"><?php echo $refcek2['title']; ?></h4>
                        </div>

                        <div class="overview-image">
                            <img style="width: 100%" src="<?php echo $site; ?>/panel/uploads/services_v/1920x1080/<?php echo $refcek2['img_url']; ?>" alt="<?php echo $refcek2['title']; ?>">
                        </div>
                        <p><?php echo $refcek2['description']; ?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="services-details-info">
                        <ul class="services-list">
                            <?php
                            $sayfada = 100; // sayfada gösterilecek içerik miktarını belirtiyoruz.
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
                                    <li><a <?php if ($refcek['id']==$_GET['id']){echo 'class="active"';}?> href="<?=$site?>/hizmet-icerik/<?=seo($refcek['title'])."-".$refcek['id']?>"><?php echo $refcek['title']; ?> <i class="flaticon-extrovert"></i></a></li>
                                <?php }} ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Details Area -->


<?php include "includes/footer.php"; ?>