<?php
// Mencegah file diakses sebelum melakukan login
session_start();

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

    <link rel="stylesheet" href="../css/ubah.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>


</head>


<body>
    <div class="container">
        <!-- Title -->
        <section id="title">
            <h3>Form Ubah Data Pakaian</h3>
        </section>
        <!-- Akhir Title -->

        <!-- Form -->
        <section id="ubah">
            <div class="row">
                <div class="col m2 s12">

                </div>

                <div class="col m8 s12">
                    <form action="" method="POST">
                        <div class="card-panel">

                            <div class="input-field">
                                <label for="Kode">Kode :</label><br>
                                <input type="text" name="Kode" id="Kode" autofocus required value="<?= $pkn['Kode']; ?>">
                            </div>
                            <div class="input-field">
                                <label for="Nama">Nama :</label><br>
                                <input type="text" name="Nama" id="Nama" required value="<?= $pkn['Nama']; ?>">
                            </div>
                            <div class="input-field">
                                <label for="Harga">Harga :</label><br>
                                <input type="text" name="Harga" id="Harga" required value="<?= $pkn['Harga']; ?>">
                            </div>
                            <div class="input-field">
                                <label for="Warna">Warna :</label><br>
                                <input type="text" name="Warna" id="Warna" required value="<?= $pkn['Warna']; ?>">
                            </div>
                            <div class="input-field">
                                <label for="Ukuran">Ukuran :</label><br>
                                <input type="text" name="Ukuran" id="Ukuran" required value="<?= $pkn['Ukuran']; ?>">
                            </div>
                            <div class="input-field">
                                <label for="Material">Material :</label><br>
                                <input type="text" name="Material" id="Material" required value="<?= $pkn['Material']; ?>">
                            </div>

                            <button class="btn waves-effect grey darken-3 z-depth-2" type="submit" name="ubah">Change Data!</button>
                            <a href="../index.php" class="grey darken-3 z-depth-2 btn">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>


        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/materialize.min.js"></script>

        <script>
            $(document).ready(function() {
                M.updateTextFields();
            });
        </script>
</body>

</html>