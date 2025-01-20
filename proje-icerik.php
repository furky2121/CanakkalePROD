<?php $page = 'proje'; include "includes/header.php"; ?>
<?php
$refsor2=$db->prepare("SELECT * FROM portfolios where id=:id");
$refsor2->execute(array('id' => $_GET['id']));
$refcek2=$refsor2->fetch(PDO::FETCH_ASSOC);
$pid = $_GET['id'];
$kategori = $refcek2['category_id'];
?>
    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <br><br><br><br>
                    <div class="wpo-breadcumb-wrap">
                        <h2><?php echo $refcek2['title']; ?></h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="index.html">Anasayfa</a></li>
                            <li><?php echo $refcek2['title']; ?></li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- wpo-project-single-area start -->
    <div class="wpo-project-single-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="wpo-project-single-wrap">
                        <div class="wpo-project-single-item">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="wpo-project-single-main-img owl-carousel">
                                        <?php
                                        $refsor3=$db->prepare("select * from portfolio_images WHERE portfolio_id='$pid'");
                                        $refsor3->execute();
                                        while ($refcek3=$refsor3->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                        <img src="<?php echo $site; ?>/panel/uploads/portfolio_v/1080x426/<?php echo $refcek3['img_url']; ?>" alt="<?php echo $refcek2['title']; ?>">
                                        <?php  }  ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="wpo-project-single-content-des-right">

                                        <ul>
                                            <h4>Proje Bilgileri</h4>
                                            <li>
                                                Firma:
                                                <span><?php echo $refcek2['client']; ?></span>
                                            </li>
                                            <li>
                                                Bitiş Tarihi:
                                                <span><?php echo date('d.m.Y', strtotime($refcek2['finishedAt']));?></span>
                                            </li>
                                            <li>
                                                Türü:
                                                <span><?php echo $refcek2['place']; ?></span>
                                            </li>
                                            <li>
                                                Kategori:
                                                <span><?php
                                                    $refsor3=$db->prepare("select * from portfolio_categories WHERE id='$kategori'");
                                                    $refsor3->execute();
                                                    while ($refcek3=$refsor3->fetch(PDO::FETCH_ASSOC)) {
                                                        if ($refcek3['isActive']==1){
                                                            ?>
                                                            <?php echo $refcek3['title']; ?>
                                                        <?php }} ?></span>
                                            </li>
                                            <?php if (!empty($refcek2['portfolio_url'])){?>
                                                <li>
                                                    Proje Linki:
                                                    <span><a target="_blank" href="<?php echo $refcek2['portfolio_url']; ?>" class="btn btn-primary">Siteye Git</a></span>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="wpo-project-single-item list-widget">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="wpo-project-single-title">
                                        <h3>Proje Detayları</h3>
                                    </div>
                                    <?php echo $refcek2['description']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-service-single-area end -->


<?php include "includes/footer.php"; ?>