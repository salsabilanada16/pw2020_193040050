<?php
require 'php/functions.php';

$pakaian = query("SELECT * FROM pakaian");


// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
    $pakaian = cari($_POST['keyword']);
}
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

    <link rel="stylesheet" href="css/index.css">
</head>

<body id="home" class="scrollspy">
    <!-- Navbar -->
    <div id="#home"></div>
    <header class="open">
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper white">
                    <a href="#home" class="brand-logo center"><img src="assets/img/logo/1.png"></a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <form action="" method="POST">
                                <input type="text" name="keyword" class="keyword" autofocus autocomplete="off">
                                <button type="submit" name="cari" class="pink-effect pink lighten-4 tombol-cari">Search</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    </div>

    <section id="nav">
        <nav class="pink lighten-4">
            <div class="nav-wrapper">
                <ul class="hide-on-med-and-down">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#shop">Shop +</a></li>
                    <li><a href="">Category</a></li>
                    <li><a href="#wanted">Most Wanted</a></li>
                    <li><a href="#newarrival">New Arrival</a></li>
                    <li class="li"><a href="php/login.php">Login</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav pink lighten-4" id="mobile-demo">
            <li><a href="#home">Home</a></li>
            <li><a href="#shop">Shop +</a></li>
            <li><a href="">Category</a></li>
            <li><a href="#wanted">Most Wanted</a></li>
            <li><a href="#newarrival">New Arrival</a></li>
            <li><a href="php/login.php">Login</a></li>
        </ul>
    </section>
    <!-- Akhir Navbar -->


    <!-- slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="assets/img/slider/1.jpg"> <!-- random image -->
            </li>
            <li>
                <img src="assets/img/slider/2.jpg"> <!-- random image -->
            </li>
            <li>
                <img src="assets/img/slider/3.jpeg"> <!-- random image -->
            </li>
            <li>
                <img src="assets/img/slider/4.jpg"> <!-- random image -->
            </li>
            <li>
                <img src="assets/img/slider/5.jpg"> <!-- random image -->
            </li>
            <li>
                <img src="assets/img/slider/6.jpg"> <!-- random image -->
            </li>
        </ul>
    </div>
    <!-- Akhir Slider -->


    <!-- Cards -->
    <div class="container">
        <section id="shop">
            <div class="row">
                <?php if (empty($pakaian)) : ?>
                    <tr>
                        <td>
                            <h1>Data Not Found. Try Again!</h1>
                        </td>
                        <td><a href="index.php" class="btn pink-effect pink lighten-4" style="margin-left: 500px;">Back</a></td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($pakaian as $pkn) : ?>
                        <div class="col s12 m4">
                            <div class="card z-depth-3">
                                <div class="card-image">
                                    <img src="assets/img/<?= $pkn["Gambar"]; ?>" class="responsive-img materialboxed">
                                    <span class="card-title pink-text text-lighten-2"><b><?= $pkn["Nama"] ?></b></span>
                                </div>

                                <div class="card-content">
                                    <p class="nama">
                                        <a href="php/detail.php?Id=<?= $pkn['Id'] ?>">
                                            <span class="pink-text text-darken-3">
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
                <?php endif; ?>
            </div>
        </section>
    </div>
    <!-- Akhir Cards -->


    <!-- New Arrival -->
    <section id="newarrival1" class="newarrival white scrollspy">
        <h3 class="light center grey-text text-darken-3"></h3>
    </section>
    <!-- Akhir New Arrival -->


    <!-- Wanted -->
    <div id="wanted" class="parallax-container scrollspy">
        <div class="parallax"><img src="assets/img/parallax/6.jpg"></div>

        <div class="wanted scrollspy">
            <h3 class="center light black-text">Limited Edition!</h3>
            <div class="row">
                <div class="container">
                    <div class="col m3 s12 center">
                        <img src="assets/img/parallax/2.jpg" class="responsive-img materialboxed">
                    </div>
                    <div class="col m3 s12 center">
                        <img src="assets/img/parallax/3.jpg" class="responsive-img materialboxed">
                    </div>
                    <div class="col m3 s12 center">
                        <img src="assets/img/parallax/4.jpg" class="responsive-img materialboxed">
                    </div>
                    <div class="col m3 s12 center">
                        <img src="assets/img/parallax/5.jpg" class="responsive-img materialboxed">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Wanted -->


    <!-- New Arrival -->
    <section id="newarrival2" class="newarrival white scrollspy">
        <h3 class="light center grey-text text-darken-3"></h3>
    </section>
    <!-- Akhir New Arrival -->


    <!-- New Arrival -->
    <section id="newarrival" class="newarrival transparent scrollspy">
        <h3 class="light center grey-text text-darken-3">New Arrival</h3>
        <div class="container">
            <div class="row transparent">
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <img src="assets/img/Trending/gambar1.jpg" class="responsive-img materialboxed">
                    </div>
                </div>
                <div class=" col m4 s12">
                    <div class="card-panel center">
                        <img src="assets/img/Trending/gambar2.jpg" class="responsive-img materialboxed">
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <img src="assets/img/Trending/gambar3.jpg" class="responsive-img materialboxed">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir New Arrival -->


    <!-- Footer -->
    <section id="footer">
        <footer class="page-footer pink lighten-3">
            <div class="footer-copyright">
                <p class="flow-text white-text">© 2020 Radz Project.</p>
            </div>
        </footer>
    </section>
    <!-- Akhir Footer -->

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
    <script src="css/js/index.js"></script>
</body>

</html>