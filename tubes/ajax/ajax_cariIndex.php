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
        <td><a href="index.php" class="btn pink-effect pink lighten-4" style="margin-left: 500px;">Back</a></td>
      </tr>
    <?php else : ?>
      <?php foreach ($pakaian as $pkn) : ?>
        <div class="col s12 m4">
          <div class="card z-depth-3">
            <div class="card-image">
              <img src="assets/img/<?= $pkn["Gambar"]; ?>" class="responsive-img materialboxed">
              <span class="card-title pink-text text-lighten-2"><b><?= $pkn["Nama"] ?></b></span>
            </div>

            <div class="card-content">
              <p class="nama">
                <a href="php/detail.php?Id=<?= $pkn['Id'] ?>">
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
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>