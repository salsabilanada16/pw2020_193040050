<?php
require 'functions.php';

// Tampung ke variable Mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");


// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&family=Pacifico&family=Rubik&display=swap" rel="stylesheet">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="nav-extended">
    <div class="nav-wrapper black navbar-fixed" style="height: 85px;">
      <div class="container">
        <a href="#" class="brand-logo center white-text" style="padding-top: 10px; font-size: 50px;">Daftar Mahasiswa</a>
      </div>
    </div>
  </nav>
  <br>
  <div class="container">
    <a href="tambah.php" class="black btn white-text btn" style="border-radius: 20%;">Tambah Data Mahasiswa</a>
    <form action="" method="POST">
      <input type="text" name="keyword" placeholder="Masukan keyword pencarian.." autocomplete="off" autofocus>
      <button type="submit" name="cari" class="btn-small">Cari!</button>
    </form>
  </div>
  <br>





  <!-- Cards -->
  <!-- Data tidak ditemukan -->
  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td>
        <h1 style="text-align: center;">Data tidak ditemukan</h1>
      </td>
      <td><a href="index.php" class="black btn white-text btn" style="margin-left: 700px;">Kembali</a></td>
    </tr>
  <?php endif; ?>

  <div class="container">
    <div class="row">
      <?php foreach ($mahasiswa as $mhs) : ?>
        <div class="col s12 m4">
          <div class="card z-depth-3">
            <div class="card-image">
              <img src="img/<?= $mhs['gambar']; ?>" height="500px">
            </div>

            <div class="card-content">
              <span class="card-title teal-text text-darken-4">
                <?= $mhs['nama'] ?><br>
              </span>
            </div>
            <div class="card-action">
              <a href="detail.php?id=<?= $mhs['id']; ?>" class="black btn white-text">Lihat Detail</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>




  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="css/js/materialize.min.js"></script>

</body>

</html>