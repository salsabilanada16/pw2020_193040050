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

    <link rel="stylesheet" href="css/style.css">
</head>

<body id="home" class="scrollspy" style="background-image: url('assets/img/Bg/3.jpg');">
    <!-- Navbar -->
    <div id="#home"></div>
    <header class="open">
        <div class="navbar-fixed">
            <nav style="height: 80px;">
                <div class="nav-wrapper white">
                    <a href="#home" class="brand-logo center"><img src="assets/img/logo/1.png" style="padding-top: 2px;"></a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <form action="" method="POST">
                                <input type="text" name="keyword" autofocus style="color: pink; width: 100px;">
                                <button type="submit" name="cari" class="pink-effect pink lighten-4" style="margin: auto;">Search</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    </div>

    <nav class="pink lighten-4" style="height: 70px; padding-left: 500px; padding-top: 10px;">
        <div class="nav-wrapper">
            <ul class="hide-on-med-and-down">
                <li><a href="#home" style="font-size: 20px; font-family: 'Pacifico', cursive;">Home</a></li>
                <li><a href="#shop" style="font-size: 20px; font-family: 'Pacifico', cursive;">Shop +</a></li>
                <li><a href="" style="font-size: 20px; font-family: 'Pacifico', cursive;">Category</a></li>
                <li><a href="#wanted" style="font-size: 20px; font-family: 'Pacifico', cursive;">Most Wanted</a></li>
                <li><a href="#newarrival" style="font-size: 20px; font-family: 'Pacifico', cursive;">New Arrival</a></li>
                <li style="padding-left: 280px;"><a href="php/login.php" style="font-size: 20px; font-family: 'Pacifico', cursive;">Login</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav pink lighten-4" id="mobile-demo">
        <li><a href="#home" style="font-family: 'Pacifico', cursive;">Home</a></li>
        <li><a href="#shop" style="font-family: 'Pacifico', cursive;">Shop +</a></li>
        <li><a href="" style="font-family: 'Pacifico', cursive;">Category</a></li>
        <li><a href="#wanted" style="font-family: 'Pacifico', cursive;">Most Wanted</a></li>
        <li><a href="#newarrival" style="font-family: 'Pacifico', cursive;">New Arrival</a></li>
        <li><a href="php/login.php" style="font-family: 'Pacifico', cursive;">Login</a></li>
    </ul>
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
    <section id="shop">
        <div class="container">

            <div class="row" style="margin-top: 50px;">
                <?php if (empty($pakaian)) : ?>
                    <tr>
                        <td>
                            <h1 style="text-align: center;">Data tidak ditemukan</h1>
                        </td>
                        <td><a href="index.php" class="btn pink-effect pink lighten-4" style="margin-left: 400px;">Kembali</a></td>
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

        </div>
    </section>
    <!-- Akhir Cards -->


    <section id="newarrival" class="newarrival white scrollspy" style="margin-top: 60px; margin-bottom: -70px; height: 40px;">
        <h3 class="light center grey-text text-darken-3" style="padding-top: 20px;"></h3>
    </section>


    <!-- Wanted -->
    <div id="wanted" class="parallax-container scrollspy" style="height: 350px; margin-top: 70px;">
        <div class="parallax"><img src="assets/img/parallax/6.jpg"></div>

        <div class="wanted scrollspy">
            <h3 class="center light black-text" style="font-family: 'Lobster'; padding-bottom: 20px; padding-top: 20px;">Limited Edition!</h3>
            <div class="row" style="height: 0;">
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

    <section id="newarrival" class="newarrival white scrollspy" style="margin-top: -30px; margin-bottom: 50px; height: 40px;">
        <h3 class="light center grey-text text-darken-3" style="padding-top: 20px;"></h3>
    </section>

    <!-- New Arrival -->
    <section id="newarrival" class="newarrival transparent scrollspy" style="margin-top: 30px;">
        <h3 class="light center grey-text text-darken-3" style="font-family: 'Pacifico', cursive;">New Arrival</h3>
        <div class="container">
            <div class="row transparent" style="padding-top: 20px;">
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
    <footer class="page-footer pink lighten-3">
        <div class="footer-copyright">
            <p class="flow-text white-text" style="margin-left: 630px; font-size: 25px;">© 2020 Radz Project.</p>
        </div>
    </footer>
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
</body>

</html>