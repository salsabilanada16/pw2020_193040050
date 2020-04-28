<?php
require 'php/functions.php';

$pakaian = query("SELECT * FROM pakaian")

?>

<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Lobster&family=Pacifico&Playfair+Display:ital@1&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <title>Radz Project</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body id="home" class="scrollspy">
    <!-- Navbar -->
    <div id="#home"></div>
    <header class="open">
        <div class="navbar-fixed">
            <nav style="height: 80px;">
                <div class="nav-wrapper white">
                    <a href="#home" class="brand-logo center"><img src="assets/img/logo/1.png" style="padding-top: 2px;"></a>
                </div>
            </nav>
        </div>
    </header>
    </div>

    <nav class="pink lighten-4" style="height: 70px; padding-left: 650px; padding-top: 10px;">
        <div class="nav-wrapper">
            <ul class="hide-on-med-and-down">
                <li><a href="#home">Home</a></li>
                <li><a href="badges.html">Shop +</a></li>
                <li><a href="collapsible.html">Category</a></li>
                <li><a href="mobile.html"></a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="#home">Home</a></li>
        <li><a href="badges.html">Shop +</a></li>
        <li><a href="collapsible.html">Category</a></li>
        <li><a href="mobile.html">Mobile</a></li>
    </ul>
    <!-- Akhir Navbar -->


    <!-- slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="assets/img/slider/1.jpg"> <!-- random image -->
                <div class="caption center-align">
                </div>
            </li>
            <li>
                <img src="assets/img/slider/2.jpg"> <!-- random image -->
                <div class="caption right-align">
                </div>
            </li>
            <li>
                <img src="assets/img/slider/3.jpg"> <!-- random image -->
                <div class="caption left-align">
                </div>
            </li>
            <li>
                <img src="assets/img/slider/4.jpg"> <!-- random image -->
                <div class="caption center-align">
                </div>
            </li>
        </ul>
    </div>


    <!-- Cards -->
    <div class="container">
        <div class="row">
            <?php foreach ($pakaian as $pkn) : ?>
                <div class="col s12 m4">
                    <div class="card z-depth-3">
                        <div class="card-image">
                            <img src="assets/img/<?= $pkn["Gambar"]; ?>">
                            <span class="card-title teal-text text-darken-4"><?= $pkn["Nama"] ?></span>
                        </div>

                        <div class="card-content">
                            <p class="nama">
                                <a href="php/detail.php?Id=<?= $pkn['Id'] ?>">
                                    <span class="teal-text text-darken-4">
                                        <?= $pkn["Kode"] ?><br>
                                        <?= $pkn["Harga"] ?><br>
                                        <?= $pkn["Warna"] ?><br>
                                        <?= $pkn["Ukuran"] ?><br>
                                        <?= $pkn["Material"] ?><br>
                                    </span>
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- Clients -->
    <div id="clients" class="parallax-container scrollspy">
        <div class="parallax"><img src="assets/img/slider/1.jpg"></div>

        <div class="container clients scrollspy">
            <h3 class="center light white-text">Our Clients</h3>
            <div class="row">
                <div class="col m4 s12 center">
                    <img src="../img/clients/gojek.png">
                </div>
                <div class="col m4 s12 center">
                    <img src="../img/clients/tokopedia.png">
                </div>
                <div class="col m4 s12 center">
                    <img src="../img/clients/traveloka.png">
                </div>
            </div>
        </div>
    </div>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="css/js/materialize.min.js"></script>
    <!-- Carousel -->
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.sidenav').seidenav
        })

        $(document).ready(function() {
            $('.parallax').parallax();
        });
    </script>
</body>

</html>