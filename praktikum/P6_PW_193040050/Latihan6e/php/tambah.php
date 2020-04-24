<?php
require 'functions.php';

// Cek apakah
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

    <link rel="stylesheet" href="../css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <div class="container">
        <h3 style="font-family: 'Kaushan Script', cursive; text-align: center;">Form Tambah Data Pakaian</h3>

        <!-- Form -->
        <div class="row">
            <form action="" method="post" class="col s6">
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Gambar">Gambar :</label><br>
                        <input type="text" name="Gambar" id="Gambar" autofocus required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Kode">Kode :</label><br>
                        <input type="text" name="Kode" id="Kode" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Nama">Nama :</label><br>
                        <input type="text" name="Nama" id="Nama" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Harga">Harga :</label><br>
                        <input type="text" name="Harga" id="Harga" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Warna">Warna :</label><br>
                        <input type="text" name="Warna" id="Warna" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Ukuran">Ukuran :</label><br>
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

        <button type="submit" name="tambah" class="btn waves-effect grey darken-3 z-depth-2">
            Add Data!</button>
        <a href="../index.php" type="submit" class="btn white-text grey darken-3 z-depth-2 ">
            Back
        </a>
        </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <script>
        $(document).ready(function() {
            M.updateTextFields();
        });
    </script>
</body>

</html>