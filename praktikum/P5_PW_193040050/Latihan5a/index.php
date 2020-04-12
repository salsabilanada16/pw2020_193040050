<?php
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

    mysqli_select_db($conn, "pw_193040050") or die("Database salah!");

    $result = mysqli_query($conn, "SELECT * FROM pakaian");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <div class="container">
      <table border="1" cellpadding="10" cellspacing="0" style="text-align: center">
              <tr style="text-transform: uppercase">
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
          <?php while($row = mysqli_fetch_assoc($result)) : ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><img src="assets/img/<?= $row["Gambar"]; ?>"></td>
                <td><?php echo $row["Kode"] ?></td>
                <td><?php echo $row["Nama"] ?></td>
                <td><?php echo $row["Harga"] ?></td>
                <td><?php echo $row["Warna"] ?></td>
                <td><?php echo $row["Ukuran"] ?></td>
                <td><?php echo $row["Material"] ?></td>
              </tr>
          <?php $no++ ?>
          <?php endwhile; ?>
      </table>
  </div>
</body>
</html>
 