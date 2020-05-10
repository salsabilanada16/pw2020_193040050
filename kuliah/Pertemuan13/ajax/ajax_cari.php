<?php
require '../php/functions.php';

$mahasiswa = cari($_GET['keyword']);
?>

<section id="card">
  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td>
        <h1>Data tidak ditemukan</h1>
      </td>
      <td><a href="index.php" class="black btn white-text btn">Kembali</a></td>
    </tr>
  <?php endif; ?>


  <div class="row">
    <?php foreach ($mahasiswa as $mhs) : ?>
      <div class="col s12 m4">
        <div class="card z-depth-3">
          <div class="card-image">
            <img src="assets/img/<?= $mhs['gambar']; ?>" height="500px">
          </div>

          <div class="card-content">
            <span class="card-title teal-text text-darken-4" style="text-align: center;">
              <?= $mhs['nama']; ?><br>
            </span>
          </div>
          <div class="card-action">
            <a href="php/detail.php?id=<?= $mhs['id']; ?>" class="black btn white-text" style="margin-left: 80px;">Lihat Detail</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>