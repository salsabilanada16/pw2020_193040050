<?php
require '../php/functions.php';

$pakaian = cari($_GET['keyword']);
?>

<section id="shop">
  <div class="row">
    <?php if (empty($pakaian)) : ?>
      <tr>
        <td>
          <h1>Data Not Found. Try Again!</h1>
        </td>
        <td><a href="admin.php" class="btn pink-effect pink lighten-4 kembali" style="margin-left: 500px;">Back</a></td>
      </tr>
    <?php else : ?>
      <?php foreach ($pakaian as $pkn) : ?>
        <div class=" col s12 m4">
          <div class="card z-depth-3">
            <div class="card-image">
              <img src="../assets/img/<?= $pkn["Gambar"]; ?>">
              <span class="card-title pink-text text-darken-3"><?= $pkn["Nama"] ?></span>
            </div>

            <div class="card-content">
              <p class="nama">
                <a href="../php/detail.php?Id=<?= $pkn['Id'] ?>">
                  <span class="pink-text text-darken-3">
                    <?= $pkn["Kode"] ?><br>
                    <?= $pkn["Harga"] ?><br>
                    <?= $pkn["Warna"] ?><br>
                    <?= $pkn["Ukuran"] ?><br>
                    <?= $pkn["Material"] ?><br>
                  </span>
                </a>
              </p>
            </div>

            <div class="card-action">
              <a href="../php/ubah.php?Id=<?= $pkn['Id']; ?>"><button class="btn pink-effect pink lighten-4" type="submit" name="action">Ubah</button></a>
              <a href="../php/hapus.php?Id=<? $pkn['Id'] ?>" onclick="return confirm('Hapus Data??')" class="btn pink-effect pink lighten-4" class="teal-effect teal darken-4 btn">Hapus</a>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>