<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$pakaian = query("SELECT * FROM pakaian");

?>

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
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Lobster&family=Pacifico&Playfair+Display:ital@1&Playfair+Display:ital@1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper white">
                <a href="#!" class="brand-logo center teal-text text-darken-4">Radz Project</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="sass.html"><i class="material-icons teal-text text-darken-4">menu</i></a></li>
                </ul>

                <ul class="right hide-on-med-and-down">
                    <li><a href=""><i class="material-icons teal-text text-darken-4">search</i></a></li>
                    <li><a href=""><i class="material-icons teal-text text-darken-4">shopping_cart</i></a></li>
                    <li><a href="tambah.php">
                            <div class="add"><i class="material-icons teal-text text-darken-4">add</i></div>
                        </a></li>
                </ul>
            </div>
        </nav>
    </div>


    <table class="striped highlight centered responsive-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Warna</th>
                <th>Ukuran</th>
                <th>Material</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pakaian as $pkn) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?Id=<?= $pkn['Id']; ?>"><button class="btn teal-effect teal darken-4" type="submit" name="action">Ubah</button></a>
                        <br><br>
                        <a href="hapus.php?Id=<? $pkn['Id'] ?>" onclick="return confirm('Hapus Data??')"><button class="btn teal-effect teal darken-4" type="submit" name="action">Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $pkn['Gambar']; ?>" alt=""></td>
                    <td><?= $pkn['Kode']; ?></td>
                    <td><?= $pkn['Nama']; ?></td>
                    <td><?= $pkn['Harga']; ?></td>
                    <td><?= $pkn['Warna']; ?></td>
                    <td><?= $pkn['Ukuran']; ?></td>
                    <td><?= $pkn['Material']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>






    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>