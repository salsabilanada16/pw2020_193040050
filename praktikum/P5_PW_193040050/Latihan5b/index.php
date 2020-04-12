<?php
    require 'php/functions.php';

    $pakaian = query("SELECT * FROM pakaian")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan 5b</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Playfair+Display:ital@1&family=Satisfy&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
      <table border="2" cellpadding="10" cellspacing="0">
              <tr style="text-transform: uppercase; font-size: 20px">
                <th>NO</th>
                <th>Gambar</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Warna</th>
                <th>Ukuran</th>
                <th>Material</th>
              </tr>
          <?php
            $no = 1;
          ?>
          <?php foreach ($pakaian as $pkn) : ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><img src="assets/img/<?= $pkn["Gambar"]; ?>"></td>
                <td><?php echo $pkn["Kode"] ?></td>
                <td><?php echo $pkn["Nama"] ?></td>
                <td><?php echo $pkn["Harga"] ?></td>
                <td><?php echo $pkn["Warna"] ?></td>
                <td><?php echo $pkn["Ukuran"] ?></td>
                <td><?php echo $pkn["Material"] ?></td>
              </tr>
          <?php $no++ ?>
          <?php endforeach; ?>
      </table>
  </div>
</body>
</html>
 