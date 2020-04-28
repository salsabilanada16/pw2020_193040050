<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Lobster&family=Pacifico&Playfair+Display:ital@1&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <title>Radz Project</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="home" class="scrollspy">
    <!-- Navbar -->
    <div id="#home"></div>
    <header class="open">
        <div class="navbar-fixed">
            <nav style="height: 80px;">
                <div class="nav-wrapper white">
                    <a href="#home" class="brand-logo center"><img src="../assets/img/logo/1.png" style="padding-top: 2px;"></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="tambah.php">
                                <div class="add"><i class="material-icons pink-text text-darken-3">add</i></div>
                            </a></li>
                        <li>
                            <form action="" method="POST">
                                <input type="text" name="keyword" autofocus style="color: pink; width: 100px;">
                                <button type="submit" name="cari" class="pink-effect pink lighten-4 pink-text text-darken-3">Search</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    </div>

    <nav class="pink lighten-4" style="height: 70px; padding-left: 550px; padding-top: 10px;">
        <div class="nav-wrapper">
            <ul class="hide-on-med-and-down">
                <li><a href="#home">Home</a></li>
                <li><a href="badges.html">Shop +</a></li>
                <li><a href="collapsible.html">Category</a></li>
                <li><a href="#wanted">Most Wanted</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="#home">Home</a></li>
        <li><a href="badges.html">Shop +</a></li>
        <li><a href="collapsible.html">Category</a></li>
        <li><a href="#wanted">Most Wanted</a></li>
    </ul>
    <!-- Akhir Navbar -->


    <!-- slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="../assets/img/slider/1.jpg"> <!-- random image -->
            </li>
            <li>
                <img src="../assets/img/slider/2.jpg"> <!-- random image -->
            </li>
            <li>
                <img src="../assets/img/slider/3.jpeg"> <!-- random image -->
            </li>
            <li>
                <img src="../assets/img/slider/4.jpg"> <!-- random image -->
            </li>
            <li>
                <img src="../assets/img/slider/5.jpg"> <!-- random image -->
            </li>
            <li>
                <img src="../assets/img/slider/6.jpg"> <!-- random image -->
            </li>
        </ul>
    </div>
    <!-- Akhir Slider -->


    <!-- Cards -->
    <div class="container">
        <div class="row">
            <?php if (empty($pakaian)) : ?>
                <tr>
                    <td>
                        <h1 style="text-align: center;">Data tidak ditemukan</h1>
                    </td>
                    <td><a href="admin.php" class="btn pink-effect pink lighten-4" style="margin-left: 400px;">Kembali</a></td>
                </tr>
            <?php else : ?>
                <?php foreach ($pakaian as $pkn) : ?>
                    <div class=" col s12 m4">
                        <div class="card z-depth-3">
                            <div class="card-image">
                                <img src="../assets/img/<?= $pkn["Gambar"]; ?>">
                                <span class="card-title pink-text text-darken-3"><?= $pkn["Nama"] ?></span>
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

                            <div class="card-action">
                                <a href="ubah.php?Id=<?= $pkn['Id']; ?>"><button class="btn pink-effect pink lighten-4" type="submit" name="action">Ubah</button></a>
                                <a href="hapus.php?Id=<? $pkn['Id'] ?>" onclick="return confirm('Hapus Data??')" class="btn pink-effect pink lighten-4" class="teal-effect teal darken-4 btn">Hapus</a>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- Akhir Cards -->


    <!-- Wanted -->
    <div id="wanted" class="parallax-container scrollspy">
        <div class="parallax"><img src="../assets/img/Parallax/1.png"></div>

        <div class="wanted scrollspy">
            <h3 class="center light white-text">Limited Edition!</h3>
            <div class="row" style="height: 0;">
                <div class="col m3 s12 center">
                    <img src="../assets/img/Parallax/2.jpg">
                </div>
                <div class="col m3 s12 center">
                    <img src="../assets/img/Parallax/3.jpg">
                </div>
                <div class="col m3 s12 center">
                    <img src="../assets/img/Parallax/4.jpg">
                </div>
                <div class="col m3 s12 center">
                    <img src="../assets/img/Parallax/5.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Wanted -->



    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../css/js/materialize.min.js"></script>
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