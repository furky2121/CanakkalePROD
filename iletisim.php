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
                    <h2>İletişim</h2>
                    <ul>
                        <li>
                            <a href="index.html">Anasayfa</a>
                        </li>
                        <li>İletişim</li>
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

<!-- Start Contact Info Area -->
<section class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='flaticon-phone-call'></i>
                        <h3>Telefon</h3>
                    </div>

                    <p><i class="flaticon-check"></i> <a href="tel:<?=$tel1?>"><?=$tel1?></a></p>
                    <p><i class="flaticon-check"></i> <a href="tel:<?=$tel2?>"><?=$tel2?></a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='flaticon-mail'></i>
                        <h3>E-Posta</h3>
                    </div>

                    <p><i class="flaticon-check"></i> <a href="mailto:<?=$email?>"><span class="__cf_email__"><?=$email?></span></a></p>
                    <br>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='flaticon-placeholder'></i>
                        <h3>Adres</h3>
                    </div>

                    <p><i class="flaticon-check"></i> <?=strip_tags($adres)?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Area -->

<!-- Start Contact Area -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form">
                    <h3>Bize <span>Mesaj Gönder</span></h3>

                    <form id="contactForm" action="" method="post" role="form">
                        <input name="ip" type="hidden" class="form-control" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                        <input name="durum" type="hidden" class="form-control" value="1">
                        <input type="hidden" name="tarih" value="<?php echo date('d.m.Y H:i:s'); ?>">
                        <div class="form-group">
                            <input class="form-control" type="text" name="isim" id="name" required placeholder="İsminiz Soyisminiz">
                            
                        </div>

                        <div class="form-group">
                            <input type="email" name="mail" id="email" class="form-control" required placeholder="Elektronik Posta Adresiniz">
                            
                        </div>

                        <div class="form-group">
                            <input  type="text" id="sub" placeholder="İletmek İstediğiniz Mesajın Konusu" class="form-control" name="konu">
                            
                        </div>

                        <div class="form-group">
                            <textarea name="mesaj" class="form-control" id="message" cols="30" rows="5" placeholder="İletmek İstediğiniz Mesajınız"></textarea>
                            
                        </div>



                        <button name="iletisim" type="submit" class="default-btn">Mesaj Gönder <i class="flaticon-pointer"></i></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-image" style="background-image: url(<?php echo $site; ?>/panel/uploads/settings_v/1920x1080/<?php echo $headerhakkimizda; ?>)"></div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!--  start wpo-contact-map -->
<section class="wpo-contact-map-section">
    <div class="wpo-contact-map">
        <?=$haritakodu?>
    </div>
</section>
<!-- end wpo-contact-map -->

<?php include "includes/footer.php"; ?>
