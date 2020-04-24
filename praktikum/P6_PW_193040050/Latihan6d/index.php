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
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->

    <div class="navbar-fixed">
        <div class="container">
            <nav>
                <div class="nav-wrapper white">
                    <a href="#!" class="brand-logo center teal-text text-darken-4">Radz Project</a>
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="sass.html"><i class="material-icons teal-text text-darken-4">menu</i></a></li>
                    </ul>

                    <ul class="right hide-on-med-and-down">
                        <li><a href=""><i class="material-icons teal-text text-darken-4">search</i></a></li>
                        <li><a href=""><i class="material-icons teal-text text-darken-4">shopping_cart</i></a></li>
                        <li><a href="php/tambah.php"><i class="material-icons teal-text text-darken-4">create</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
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

                        <div class="card-action">
                            <a href="php/ubah.php?Id=<?= $pkn['Id']; ?>"><button class="btn teal-effect teal darken-4" type="submit" name="action">Ubah</button></a>
                            <a href="hapus.php?Id=<? $pkn['Id'] ?>" onclick="return confirm('Hapus Data??')" class="teal-effect teal darken-4 btn">Hapus</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script></script>
</body>

</html>