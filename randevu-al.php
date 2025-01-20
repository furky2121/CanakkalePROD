<?php $page = 'iletisim'; include "includes/header.php"; ?>

<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-banner-image">
                    <img src="assets/images/page-banner/page-banner-1.jpg" alt="image">

                    <div class="image-shape">
                        <img src="assets/images/page-banner/shape.png" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="page-banner-content">
                    <h2>Randevu Al</h2>
                    <ul>
                        <li>
                            <a href="index.html">Anasayfa</a>
                        </li>
                        <li>Randevu Al</li>
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


<!-- Start Contact Area -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form">
                    <h3>Randevu <span>Formu</span></h3>

                    <form id="contactForm" action="" method="post" role="form">
                        <input name="ip" type="hidden" class="form-control" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                        <input name="durum" type="hidden" class="form-control" value="0">
                        <input type="hidden" name="gonderimtarih" value="<?php echo date('d.m.Y H:i:s'); ?>">
                        <div class="form-group">
                            <input class="form-control" name="isim" type="text" id="popup-name" placeholder="İsim Soyisim *" required>

                        </div>

                        <div class="form-group">
                            <input class="form-control" name="mail" type="text" id="popup-email" placeholder="E-Posta Adresiniz *" required>

                        </div>

                        <div class="form-group">
                            <input class="form-control" name="tel" type="text" id="popup-phone" placeholder="İletişim Numaranız *" required>

                        </div>

                        <style>
                            .nice-select.open .list{
                                width: 100%;
                            }
                        </style>

                        <div class="form-group">
                            <div class="form-group">
                                <select name="bolum" class="form-control">
                                    <option value="Seçim Yapılmadı" selected>Seçim Yapınız...</option>
                                    <?php
                                    $sayfada = 50; // sayfada gösterilecek içerik miktarını belirtiyoruz.
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
                                            <option  value="<?php echo $refcek['title']; ?>"><?php echo $refcek['title']; ?></option>
                                        <?php }} ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <input style="height: 60px" class="form-control" name="tarih" type="date" required>

                        </div>

                        <button name="randevu" type="submit" class="default-btn">Randevu Oluştur <i class="flaticon-pointer"></i></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-image"  style="background-image: url(<?php echo $site; ?>/panel/uploads/settings_v/1920x1080/<?php echo $headermusteri; ?>)"></div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->


<?php include "includes/footer.php"; ?>
