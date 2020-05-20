<?php
require '../php/functions.php';

$pakaian = cari($_GET['keyword']);
?>

<section id="collections">
  <div class="section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="heading_main text_align_left">
              <div class="center">
                <h2><span class="theme_color">H A P P Y</span> SHOPPING!</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row margin-top_30">

        <?php if (empty($pakaian)) : ?>
          <tr>
            <td>
              <h1>Data Not Found. Try Again!</h1>
            </td>
            <td><a href="admin.php" class="btn pink-effect pink lighten-4" style="margin-left: 500px;">Back</a></td>
          </tr>
        <?php else : ?>
          <?php foreach ($pakaian as $pkn) : ?>
            <div class="col-sm-6 col-md-4">
              <div class="service_blog">
                <div class="service_icons">
                  <img src="../img/<?= $pkn["Gambar"]; ?>" class="responsive-img materialboxed" style="display: block; margin-left: auto; margin-right: auto;">
                </div>
                <div class="full">
                  <h4 style="text-align: center"><?= $pkn["Nama"] ?></h4>
                </div>
                <div class="full">
                  <p class="nama">
                    <a href="detail.php?Id=<?= $pkn['Id'] ?>">
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
                  <a href="ubah.php?Id=<?= $pkn['Id']; ?>"><button class="btn" type="submit" name="action">Change</button></a>
                  <a href="hapus.php?Id=<? $pkn['Id'] ?>" onclick="return confirm('Delete Data??')"><button class="btn" name="action">Delete</button></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>