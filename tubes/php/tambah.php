<?php
// Mencegah file diakses sebelum melakukan login
session_start();

// Tidak bisa masuk ke halaman manapun sebelum login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

// Cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal Ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
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

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/tambah.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data Elements</title>
</head>

<body>
    <!-- Navbar -->
    <section id="home">
        <a href="#home" class="brand-logo center"><img src="../assets/img/logo/1.png"></a>
    </section>
    <!-- Akhir Navbar -->

    <!-- Title -->
    <section id="title">
        <h3>Form Add Data</h3>
    </section>
    <!-- Akhir Title -->

    <!-- Form -->
    <div class="container">
        <section id="tambah" class="grey lighten-5">
            <div class="row">
                <form action="" method="POST" class="col s6" enctype="multipart/form-data">
                    <input type="hidden" name="Id" id="Id" value="<?= $pkn['Id']; ?>">
                    <div class="row">
                        <div class="input-field col s6">
                            <label for="Gambar" class="gambar">Pict :</label><br>
                            <input type="file" name="gambar" class="gambar" onchange="previewImage()" style="padding-top: 25px; margin-bottom: -15px;">
                            <img src="../assets/img/nophoto.png" width="300" style="display: block; padding-top: 20px;" class="img-preview">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <label for="Kode">Kode :</label><br>
                            <input type="text" name="Kode" id="Kode" autofocus required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <label for="Nama">Name :</label><br>
                            <input type="text" name="Nama" id="Nama" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <label for="Harga">Price :</label><br>
                            <input type="text" name="Harga" id="Harga" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <label for="Warna">Color :</label><br>
                            <input type="text" name="Warna" id="Warna" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <label for="Ukuran">Size :</label><br>
                            <input type="text" name="Ukuran" id="Ukuran" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <label for="Material">Material :</label><br>
                            <input type="text" name="Material" id="Material" required>
                        </div>
                    </div>
            </div>
            <button type="submit" name="tambah" class="btn pink-effect pink lighten-4 z-depth-2" style="margin-left: 400px;">
                Add Data!</button>
            <a href="admin.php" type="submit" class="btn pink-effect pink lighten-4 z-depth-2" style="margin-left: 40px;">
                Back
            </a>
            </form>
        </section>
    </div>
    <!-- Akhir Form -->


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <script>
        $(document).ready(function() {
            M.updateTextFields();
        });
    </script>

    <script src="../css/js/script.js"></script>
</body>

</html>