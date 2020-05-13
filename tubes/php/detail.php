<?php
session_start();


require 'functions.php';


// Ambil id dari URL
$id = $_GET['Id'];

// Query pakaian berdasarkan id
$pkn = query("SELECT * FROM pakaian WHERE Id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&family=Lobster+Two:ital@1&family=Pacifico&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <title>Detail Pakaian</title>

    <style>
        body {
            background-image: url(../assets/img/Bg/1.gif);
        }

        #card .card-content {
            font-size: 20px;
        }

        #card h2 {
            text-align: center;
            font-family: 'Lobster Two', cursive;
        }

        #card .card-horizontal {
            padding-left: 100px;
        }

        #card .card-action a {
            padding-left: 10px;
            margin-right: 10px;
            color: black;
        }
    </style>
</head>

<body>
    <!-- Card -->
    <div class="container">
        <section id="card">
            <div class="col s12 m7">
                <h2 class="header"><?= $pkn["Nama"]; ?></h2>
                <div class="container">
                    <div class="card horizontal purple lighten-5 z-depth-3">
                        <div class="card-image">
                            <img src="../assets/img/<?= $pkn["Gambar"]; ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p><b><?= $pkn["Kode"]; ?></b></p>
                                <p><?= $pkn["Nama"]; ?></p><br>
                                <p>Price : <?= $pkn["Harga"]; ?></p>
                                <p>Color : <?= $pkn["Warna"]; ?></p>
                                <p>Size : <?= $pkn["Ukuran"]; ?></p>
                                <p>Material : <?= $pkn["Material"]; ?></p>
                            </div>
                            <div class="card-action">
                                <button class="tombol-kembali"><a href="../index.php" class="purple-text">Back</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Akhir Card -->

    <!-- Javascript -->
    <script type="text/javascript" src="../css/js/materialize.min.js"></script>
</body>

</html>