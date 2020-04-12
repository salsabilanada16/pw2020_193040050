<?php
    if (!issets($_GET['Id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['Id'];

    $pakaian = query("SELECT * FROM pakaian WHERE Id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <table>
        <div class="gambar">
            <img src="../assets/img/<?= $pkn["Gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $pkn["No"]; ?></p>
            <p><?= $pkn["Kode"]; ?></p>
            <p><?= $pkn["Nama"]; ?></p>
            <p><?= $pkn["Harga"]; ?></p>
            <p><?= $pkn["Warna"]; ?></p>
            <p><?= $pkn["Ukuran"]; ?></p>
            <p><?= $pkn["Material"]; ?></p>
            <p><?= $pkn["Stok"]; ?></p>
            <p><?= $pkn["Estimasi"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    </table>
</body>
</html>