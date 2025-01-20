<!-- Start Footer Area -->
<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="widget-logo">
                        <a href="index.html"><img src="<?php echo $site; ?>/panel/uploads/settings_v/1280x720/<?php echo $beyazlogo; ?>" alt="<?php echo $sirketismi; ?>" title="<?php echo $sirketismi; ?>"></a>
                    </div>
                    <p><?=$misyon?></p>

                    <div class="widget-share">
                        <?php if (!empty($facebook)){?>
                            <a href="<?=$facebook?>"><i class="bx bxl-facebook"></i></a>
                        <?php } ?>
                        <?php if (!empty($instagram)){?>
                            <a href="<?=$instagram?>"><i class="bx bxl-instagram"></i></a>
                        <?php } ?>
                        <?php if (!empty($youtube)){?>
                            <a href="<?=$youtube?>"><i class="bx bxl-youtube"></i></a>
                        <?php } ?>
                        <?php if (!empty($twitter)){?>
                            <a href="<?=$twitter?>"><i class="bx bxl-twitter"></i></a>
                        <?php } ?>
                        <?php if (!empty($google)){?>
                            <a href="<?=$google?>"><i class="bx bxl-google"></i></a>
                        <?php } ?>
                        <?php if (!empty($linkedin)){?>
                            <a href="<?=$linkedin?>"><i class="bx bxl-linkedin"></i></a>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Hızlı Menü</h3>

                    <ul class="quick-links">
                        <li><a href="index"><i class='bx bxs-right-arrow'></i> Anasayfa</a></li>
                        <li><a href="hakkimizda"><i class='bx bxs-right-arrow'></i> Hakkımızda</a></li>
                        <li><a href="sikca-sorulanlar"><i class='bx bxs-right-arrow'></i> Sıkça Sorulanlar</a></li>
                        <li><a href="ekibimiz"><i class='bx bxs-right-arrow'></i> Ekibimiz</a></li>
                        <li><a href="hizmetlerimiz"><i class='bx bxs-right-arrow'></i> Hizmetler</a></li>
                        <li><a href="blog"><i class='bx bxs-right-arrow'></i> Blog</a></li>
                        <li><a href="foto-galeri"><i class='bx bxs-right-arrow'></i> Foto Galeri</a></li>
                        <li><a href="iletisim"><i class='bx bxs-right-arrow'></i> İletişim</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Hizmetlerimiz</h3>

                    <ul class="quick-links">
                        <?php
                        $sayfada = 10; // sayfada gösterilecek içerik miktarını belirtiyoruz.
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
                                <li><a href="<?=$site?>/hizmet-icerik/<?=seo($refcek['title'])."-".$refcek['id']?>"><i class='bx bxs-right-arrow'></i> <?php echo $refcek['title']; ?></a></li>
                            <?php }} ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>İletişim Bilgileri</h3>

                    <ul class="footer-contact-info">
                        <li>
                            <i class='flaticon-phone-call'></i>
                            <span>Telefon:</span>
                            <a href="tel:<?=$tel1?>"><?=$tel1?></a>
                        </li>
                        <li>
                            <i class='flaticon-mail'></i>
                            <span>E-Posta:</span>
                            <a href="mailto:<?=$email?>"><span class="__cf_email__"><?=$email?></span></a>
                        </li>
                        <li>
                            <i class='flaticon-placeholder'></i>
                            <span>Adres:</span>
                            <?=strip_tags($adres)?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">
            <p>
                <?=$copy?>
            </p>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='flaticon-up-arrow'></i>
</div>
<!-- End Go Top Area -->

<!-- Jquery Slim JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap Bundle JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Meanmenu JS -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Jquery Appear JS -->
<script src="assets/js/jquery.appear.js"></script>
<!-- Odometer JS -->
<script src="assets/js/odometer.min.js"></script>
<!-- Slick Min JS -->
<script src="assets/js/slick.min.js"></script>
<!-- Nice Select JS -->
<script src="assets/js/nice-select.min.js"></script>
<!-- Magnific Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Fancybox JS -->
<script src="assets/js/fancybox.min.js"></script>
<!-- Ajaxchimp JS -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.js"></script>

<?php include "includes/post.php"; ?>
<?=$footerkod?>

</body>
</html>