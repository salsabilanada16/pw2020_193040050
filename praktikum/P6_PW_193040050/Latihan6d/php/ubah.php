<?php
require 'functions.php';

$data = $_GET['Id'];
$pkn = query("SELECT * FROM pakaian WHERE Id = $data")[0];

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
        <h3 style="font-family: 'Kaushan Script', cursive; text-align: center;">Form Ubah Data Pakaian</h3>

        <!-- Form -->
        <div class=" row">
            <form action="" method="POST" class="col s6">
                <input type="hidden" name="Id" id="Id" value="<?= $pkn['Id']; ?>">
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Kode">Kode :</label><br>
                        <input type="text" name="Kode" id="Kode" autofocus required value="<?= $pkn['Kode']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Nama">Nama :</label><br>
                        <input type="text" name="Nama" id="Nama" required value="<?= $pkn['Nama']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Harga">Harga :</label><br>
                        <input type="text" name="Harga" id="Harga" required value="<?= $pkn['Harga']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Warna">Warna :</label><br>
                        <input type="text" name="Warna" id="Warna" required value="<?= $pkn['Warna']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Ukuran">Ukuran :</label><br>
                        <input type="text" name="Ukuran" id="Ukuran" required value="<?= $pkn['Ukuran']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="Material">Material :</label><br>
                        <input type="text" name="Material" id="Material" required value="<?= $pkn['Material']; ?>">
                    </div>
                </div>
            </form>
        </div>
        <a class="btn waves-effect grey darken-3 z-depth-2" type="submit" name="ubah">Change Data!</a>
        <a href="../index.php" class="grey darken-3 z-depth-2 btn">Back</a>
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