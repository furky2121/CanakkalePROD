<?php $page = 'blog'; include "includes/header.php"; ?>
<?php
$refsor2=$db->prepare("SELECT * FROM news where id=:id");
$refsor2->execute(array('id' => $_GET['id']));
$refcek2=$refsor2->fetch(PDO::FETCH_ASSOC);
?>

    <!-- Start Page Banner Area -->
    <div class="page-banner-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-image">
                        <img src="assets/images/page-banner/page-banner-3.jpg" alt="image">

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

    <!-- Start Blog Details Area -->
    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="blog-details-desc">
                <div class="article-content">
                    <div class="title-box">
                        <h2><?php echo $refcek2['title']; ?></h2>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="flaticon-calendar"></i> <a><?php echo date('d.m.Y H:i', strtotime($refcek2['createdAt']));?></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="article-image">
                        <img style="width: 100%" src="<?php echo $site; ?>/panel/uploads/news_v/1920x1080/<?php echo $refcek2['img_url']; ?>" alt="<?php echo $refcek2['title']; ?>">
                    </div>
                    <br>
                    <p><?php echo $refcek2['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Details Area -->



<?php include "includes/footer.php"; ?>