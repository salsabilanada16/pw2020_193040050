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

// Jika tidak ada id di URL
if (!isset($_GET['Id'])) {
    header("Location: admin.php");
    exit;
}

// Ambil id dari URL
$Id = $_GET['Id'];

// Query pakaian berdasarkan id
$pkn = query("SELECT * FROM pakaian WHERE Id = $Id");

// Cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                        alert('Data Berhasil Diubah!');
                        document.location.href = 'admin.php';
                    </script>";
    } else {
        echo "<script>
                        alert('Data Gagal Diubah!');
                        document.location.href = 'admin.php';
                    </script>";
    };
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


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Data</title>

    <style>
        body {
            background-image: url(../assets/img/Bg/1.jpg);
        }

        #title h3 {
            font-family: 'Kaushan Script', cursive;
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
        }

        #ubah .btn {
            margin-bottom: 30px;
            margin-left: 50px;
        }

        #ubah {
            margin-bottom: 40px;
        }

        #ubah .row {
            margin-left: 20px;
        }
    </style>
</head>


<body>
    <div class="container">
        <!-- Title -->
        <section id="title">
            <h3>Form Changes Data</h3>
        </section>
        <!-- Akhir Title -->

        <!-- Form -->
        <div class="container">
            <section id="ubah" class="grey lighten-5">
                <div class="row">
                    <form action="" method="POST" class="col s6" enctype="multipart/form-data">
                        <input type="hidden" name="Id" id="Id" value="<?= $pkn['Id']; ?>">
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="hidden" name="gambar_lama" value="<?= $mhs['gambar']; ?>">
                                <label for="Gambar" class="gambar">Pict :</label><br>
                                <input type="file" name="gambar" class="gambar" onchange="previewImage()" style="padding-top: 25px; margin-bottom: -15px;">
                                <img src="../assets/img/nophoto.png" width="300" style="display: block; padding-top: 20px;" class="img-preview">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <label for="Kode">Kode :</label><br>
                                <input type="text" name="Kode" id="Kode" autofocus required value="<?= $pkn['Kode']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <label for="Nama">Name :</label><br>
                                <input type="text" name="Nama" id="Nama" required value="<?= $pkn['Nama']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <label for="Harga">Price :</label><br>
                                <input type="text" name="Harga" id="Harga" required value="<?= $pkn['Harga']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <label for="Warna">Color :</label><br>
                                <input type="text" name="Warna" id="Warna" required value="<?= $pkn['Warna']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <label for="Ukuran">Size :</label><br>
                                <input type="text" name="Ukuran" id="Ukuran" required value="<?= $pkn['Ukuran']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <label for="Material">Material :</label><br>
                                <input type="text" name="Material" id="Material" required value="<?= $pkn['Material']; ?>">
                            </div>
                        </div>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect grey darken-3 z-depth-2" type="submit" name="ubah">Change Data!</button>
                    <a href="../index.php" class="grey darken-3 z-depth-2 btn">Back</a>
                </div>
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