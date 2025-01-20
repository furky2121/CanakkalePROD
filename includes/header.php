<?php include "ayar.php"; ?>
<!doctype html>
<html lang="tr">
<head>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "jqwqg13rzs");
</script>
    <!-- Required meta tags -->
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SCRDKX919G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SCRDKX919G');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?php echo $site;?>" />
    <title><?=$sirketismi?></title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo $site; ?>/panel/uploads/settings_v/32x32/<?php echo $favicon; ?>" sizes="32x32">
    <link rel="apple-touch-icon" href="<?php echo $site; ?>/panel/uploads/settings_v/32x32/<?php echo $favicon; ?>">

    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="<?php echo $sirketismi; ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- Slick Min CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Carousel Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="assets/css/fancybox.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="assets/css/dark.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="uyari/sweetalert2.min.css">

    <?=$headerkod?>

</head>

<body>

<!-- Start Preloader Area -->
<div class="preloader-area">
    <div class="spinner">
        <div class="inner">
            <div class="disc"></div>
            <div class="disc"></div>
            <div class="disc"></div>
        </div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Top Header Area -->
<div class="header-information">İletişim Bilgileri</div>

<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-12">
                <ul class="top-header-information">
                    <li>
                        <i class="flaticon-phone-call"></i>
                        <a href="tel:<?=$tel1?>"><?=$tel1?></a>
                    </li>

                    <li>
                        <i class="flaticon-mail"></i>
                        <a href="mailto:<?=$email?>"><span class="__cf_email__"><?=$email?></span></a>
                    </li>

                    <li>
                        <i class="flaticon-placeholder"></i>
                        <?=strip_tags($adres)?>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12">
                <ul class="top-header-optional">
                    <li>

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
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Top Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="<?php echo $site; ?>/panel/uploads/settings_v/1280x720/<?php echo $logo; ?>" class="black-logo" alt="image">
                        <img src="<?php echo $site; ?>/panel/uploads/settings_v/1280x720/<?php echo $beyazlogo; ?>" class="white-logo" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img style="height: 60px" src="<?php echo $site; ?>/panel/uploads/settings_v/1280x720/<?php echo $logo; ?>" class="black-logo" alt="image">
                    <img  src="<?php echo $site; ?>/panel/uploads/settings_v/1280x720/<?php echo $beyazlogo; ?>" class="white-logo" alt="image">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item"><a href="index" class="nav-link <?php if($page=='anasayfa'){echo 'active';}?>">Anasayfa</a></li>
                        <li class="nav-item"><a href="#" class="nav-link <?php if($page=='kurumsal'){echo 'active';}?>">Kurumsal <i class='bx bx-caret-down'></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="hakkimizda">Hakkımızda</a></li>
                                <!--<li><a class="nav-link" href="sikca-sorulanlar">Sıkça Sorulanlar</a></li>-->																<li><a class="nav-link" href="ekibimiz">Ekibimiz</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="hizmetlerimiz"  class="nav-link <?php if($page=='hizmet'){echo 'active';}?>">Hizmetlerimiz <i class='bx bx-caret-down'></i></a>
                            <ul class="dropdown-menu">
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
                                        <li><a class="nav-link" href="hizmet-icerik/<?=seo($refcek['title'])."-".$refcek['id']?>"><?php echo $refcek['title']; ?></a></li>
                                    <?php }} ?>
                            </ul>
                        </li>
                        
                        <li class="nav-item"><a href="blog" class="nav-link <?php if($page=='blog'){echo 'active';}?>">Makaleler</a></li>
                        <li class="nav-item"><a href="#" class="nav-link <?php if($page=='galeri'){echo 'active';}?>">Multimedya <i class='bx bx-caret-down'></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="foto-galeri">Foto Galeri</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item"><a href="iletisim" class="nav-link <?php if($page=='iletisim'){echo 'active';}?>">İletişim</a></li>
                    </ul>


                    
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        
                        <div class="option-item">
                            <div class="search-box">
                                <i class='flaticon-search'></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="navbar-btn">
                                <a href="randevu-al" class="default-btn">Randevu Al<i class="flaticon-pointer"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Start Search Layout -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>

            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>

            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Ara...">
                    <button type="submit"><i class='flaticon-search'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Layout -->