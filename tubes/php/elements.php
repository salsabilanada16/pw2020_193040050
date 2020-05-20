<?php
require 'functions.php';

$pakaian = query("SELECT * FROM pakaian");


// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
    $pakaian = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Radz Project.</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/Logo/logo1.png">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98" class="scrollspy" style="background-image: url(../img/Background/bg6.jpg)">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="../img/Tools/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="elements.php"><img src="../img/Logo/logo1.png" alt="image" style="width: 50%;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <h1><span style="font-size: 250%; color: #e60073;" class="navbar-brand">RADZ</span>PROJECT</h1>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About</a></li>
                        <li><a class="nav-link" href="#collections">Collections</a></li>
                        <li><a class="nav-link" href="#trendy">Trendy</a></li>
                        <li><a class="nav-link" href="#payment">Payment With</a></li>
                        <li><a class="nav-link" href="#limited">Limited</a></li>
                        <li><a class="nav-link active" href="login.php" style="background: palevioletred; color:#fff;">My Account</a>
                        </li>
                        <li>
                            <div class="search-box" style="margin-top: 2.5%;">
                                <form action="" method="POST">
                                    <input type="text" class="keyword search-txt" name="keyword" placeholder="Search" autocomplete="off">
                                    <button type="submit" name="cari" class="tombol-cari search-btn"><img src="../img/Tools/search_icon.png" alt="#" /></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(../img/Banner/banner01.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3>"The only real elegance is in the mind; if you’ve got that, the rest really comes from it.”</h3>
                                        <br>
                                        <h4><span class="theme_color" style="color: palevioletred">— Diana Vreeland</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(../img/Banner/banner02.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3>“Don’t be into trends. Don’t make fashion own you, but you decide what you are, what you want to express by the way you dress and the way you live.”</h3>
                                        <br>
                                        <h4><span class="theme_color" style="color: palevioletred">— Gianni Versace</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(../img/Banner/banner03.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3>“Fashion is what you’re offered four times a year by designers. And style is what you choose.”</h3>
                                        <br>
                                        <h4><span class="theme_color" style="color: palevioletred">— Lauren Hutton</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(../img/Banner/banner04.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3>“What you wear is how you present yourself to the world, especially today, when human contacts are so quick. Fashion is instant language.”</h3>
                                        <br>
                                        <h4><span class="theme_color" style="color: palevioletred">—Miuccia Prada</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(../img/Banner/banner05.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3>“Create your own style… let it be unique for yourself and yet identifiable for others.”</h3>
                                        <br>
                                        <h4><span class="theme_color" style="color: palevioletred">― Anna Wintour</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- About -->
    <section id="about">
        <div class="section layout_padding" style="background: white;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <div class="left">
                                    <p class="section_count"> </p>
                                </div>
                                <div class="right">
                                    <p class="small_tag"> </p>
                                    <h2><span class="theme_color">LET'S</span> EXPLORE!</h2>
                                    <p class="large">Get your Own Style</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->

        <div class="section dark_bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 text_align_center padding_0">
                        <div class="full">
                            <img class="img-responsive" src="../img/About/img1.jpeg" alt="#" />
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 white_fonts layout_padding padding_left_right">
                        <h3 class="small_heading">EVERYTHING<br>YOU NEED IN ONE SOLUTION</h3><br>
                        <p>"What you wear is how you present yourself to the world, especially today, when human contacts are so quick. Fashion is instant language.<br><br>- Miuccia Prada</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Collections -->
    <div class="container1">
        <section id="collections">
            <div class="section layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="heading_main text_align_left">
                                    <div class="center">
                                        <h2><span class="theme_color">H A P P Y</span> SHOPPING!</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top_30">


                        <?php if (empty($pakaian)) : ?>
                            <tr>
                                <td>
                                    <h1>Data Not Found. Try Again!</h1>
                                </td>
                                <td><a href="../elements.php" style="margin-left: 500px;"><button class="btn" type="submit" name="action">Back</button></a></td>

                            </tr>
                        <?php else : ?>
                            <?php foreach ($pakaian as $pkn) : ?>
                                <div class="col-sm-12 col-md-4">
                                    <div class="service_blog">
                                        <div class="service_icons">
                                            <img src="../img/<?= $pkn["Gambar"]; ?>" style="display: block; margin-left: auto; margin-right: auto;">
                                        </div>
                                        <div class="full">
                                            <h4 style="text-align: center"><a href="detail.php?Id=<?= $pkn['Id'] ?>"><?= $pkn["Nama"] ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Collections -->

    <!-- Trendy -->
    <section id="trendy" class="scrollspy">
        <div class="section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_left">
                                <div class="right">
                                    <h2><span class="theme_color">LET's CHOOSE YOUR</span> TRENDY STYLE!</h2>
                                    <p class="small_tag">Gurls</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top_30">
                    <div class="col-lg-12 margin-top_30">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <img class="img-responsive" src="../img/Slideshow/img1.jpg" alt="#" height="100%;">
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <img class="img-responsive" src="../img/Slideshow/img2.jpg" alt="#" height="100%;">
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <img class="img-responsive" src="../img/Slideshow/img3.jpg" alt="#" height="100%;">
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <img class="img-responsive" src="../img/Slideshow/img4.jpg" alt="#" height="100%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <img class="img-responsive" src="../img/Slideshow/img5.jpg" alt="#" height="100%;">
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <img class="img-responsive" src="../img/Slideshow/img6.jpg" alt="#" height="100%;">
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <img class="img-responsive" src="../img/Slideshow/img7.jpg" alt="#" height="100%;">
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <img class="img-responsive" src="../img/Slideshow/img8.jpg" alt="#" height="100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="full center">
                            <a href="more.php" class="hvr-radial-out button-theme">See More ></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Trendy -->

    <!-- Payment -->
    <section id="payment">
        <div class="section layout_padding dark_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main white_fonts">
                                <div class="center">
                                    <h2>EASY <span class="theme_color">PAYMENT WITH
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top_30">
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay1.png" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay2.png" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay3.png" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay4.png" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay5.png" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay6.png" alt=""></p>
                    </div>
                </div>
                <div class="row margin-top_30">
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay7.png" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay8.png" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay9.png" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay10.png" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="" alt=""></p>
                    </div>
                </div>
                <div class="row margin-top_30">
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay11.png" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="../img/About/pay12.png" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="" alt=""></p>
                    </div>
                    <div class="col-sm-4 col-md-2 margin-top_30 white_fonts">
                        <p><img src="" alt=""></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Payment -->

    <!-- Limited -->
    <section id="limited">
        <div class="section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_left">
                                <div class="left">
                                    <p class="section_count"> </p>
                                </div>
                                <div class="right">
                                    <p class="small_tag">Grab it Fast!</p>
                                    <h2>Cause this<span class="theme_color"> Limited Edition.</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top_30">
                    <div class="col-lg-12 margin-top_30">
                        <div id="team_slider" class="carousel slide" data-ride="carousel">

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="full">
                                                <div class="full team_member_img text_align_center">
                                                    <img src="../img/Limited/gambar1.jpg" alt="#" />
                                                    <div class="social_icon_team">
                                                        <ul class="social_icon">
                                                            <li>
                                                                <h4>Rp 1.149.000</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="full text_align_center">
                                                    <h3>Vans</h3>
                                                </div>
                                                <div class="full text_align_center">
                                                    <p>Sk8-Hi Platform 2.0</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="full">
                                                <div class="full team_member_img text_align_center">
                                                    <img src="../img/Limited/gambar2.jpg" alt="#" />
                                                    <div class="social_icon_team">
                                                        <ul class="social_icon">
                                                            <li>
                                                                <h4>Rp 2.269.000</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="full text_align_center">
                                                    <h3>ATHLETIC PROPULSION LABS</h3>
                                                </div>
                                                <div class="full text_align_center">
                                                    <p>Techloom Breeze</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="full">
                                                <div class="full team_member_img text_align_center">
                                                    <img src="../img/Limited/gambar3.jpg" alt="#" />
                                                    <div class="social_icon_team">
                                                        <ul class="social_icon">
                                                            <li>
                                                                <h4>Rp 2.349.000</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="full text_align_center">
                                                    <h3>ATHLETIC PROPULSION LABS</h3>
                                                </div>
                                                <div class="full text_align_center">
                                                    <p>Women's Techloom Breeze Running Shoes</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="full">
                                                <div class="full team_member_img text_align_center">
                                                    <img src="../img/Limited/gambar4.jpg" alt="#" />
                                                    <div class="social_icon_team">
                                                        <ul class="social_icon">
                                                            <li>
                                                                <h4>Rp 2.896.500</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="full text_align_center">
                                                    <h3>TORY BURCH</h3>
                                                </div>
                                                <div class="full text_align_center">
                                                    <p>KIRA 70MM BOOTIE</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="full">
                                                <div class="full team_member_img text_align_center">
                                                    <img src="../img/Limited/gambar5.jpg" alt="#" />
                                                    <div class="social_icon_team">
                                                        <ul class="social_icon">
                                                            <li>
                                                                <h4>Rp 6.519.000</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="full text_align_center">
                                                    <h3>TORY BURCH</h3>
                                                </div>
                                                <div class="full text_align_center">
                                                    <p>PENELOPE 85MM CAP-TOE PUMP</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="full">
                                                <div class="full team_member_img text_align_center">
                                                    <img src="../img/Limited/gambar6.jpg" alt="#" />
                                                    <div class="social_icon_team">
                                                        <ul class="social_icon">
                                                            <li>
                                                                <h4>Rp 5.356.000</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="full text_align_center">
                                                    <h3>TORY BURCH</h3>
                                                </div>
                                                <div class="full text_align_center">
                                                    <p>GRAHAM 65MM SANDAL</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="bullets">
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#team_slider" data-slide-to="0" class="active"></li>
                                    <li data-target="#team_slider" data-slide-to="1"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Limited -->

    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container" style="height: 25%;">
            <div class="row">
                <div class="col-md-12 margin-bottom_30">
                    <img src="../img/Logo/logo1.png" alt="#" width="10%;" style="margin-top: -40px;">
                </div>
                <div class="col-xl-8 white_fonts">
                    <div class="row">
                        <div class="col-md-12 white_fonts margin-bottom_20">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="full icon">
                                <img src="../img/Tools/social1.png">
                            </div>
                            <div class="full white_fonts">
                                <p>United States
                                    <br>New York City</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full icon">
                                <img src="../img/Tools/social2.png">
                            </div>
                            <div class="full white_fonts">
                                <p>radzproject@gmail.com
                                    <br>sadzani16@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="full icon">
                                <img src="../img/Tools/social3.png">
                            </div>
                            <div class="full white_fonts">
                                <p>+7586656566
                                    <br>+7586656566</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="full social_icon margin-top_20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 white_fonts">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="footer_blog footer_menu">
                                <h3>Menus</h3>
                                <ul class="margin-bottom_-20">
                                    <li><a class="nav-link" href="#home">Home</a></li>
                                    <li><a class="nav-link" href="#about">About</a></li>
                                    <li><a class="nav-link" href="#collections">Collections</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer_blog footer_menu">
                                <h3></h3>
                                <ul class="margin-bottom_20">
                                    <li><a class="nav-link" href="#trendy">Trendy</a></li>
                                    <li><a class="nav-link" href="#wanted">Payment With</a></li>
                                    <li><a class="nav-link" href="#limited">Limited</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© 2020 Radz Project. Salsabila Nada Adzani</p>
                    <ul class="bottom_menu">
                        <li><a href="#">Term of Service</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.pogo-slider.min.js"></script>
    <script src="../js/slider-index.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/images-loded.min.js"></script>
    <script src="../js/custom.js"></script>
    <script>
        /* counter js */

        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
    <script src="../js/elements.js"></script>
</body>

</html>