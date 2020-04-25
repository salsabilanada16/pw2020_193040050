<?php
require 'functions.php';

// Ambil id dari URL
$id = $_GET['id'];


// Query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

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
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&family=Pacifico&display=swap" rel="stylesheet">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <!-- Navbar -->
  <section id="home">
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper pink lighten-5">
          <a href="#home" class="brand-logo center black-text">Detail Mahasiswa</a>
        </div>
      </nav>
    </div>
  </section>

  <!-- Cards -->
  <div class="container">
    <div class="row">
      <div class="col s12 m4 offset-m4">
        <div class="card z-depth-3">
          <div class="card-image">
            <img src="img/<?= $mhs['gambar']; ?>">
          </div>
          <div class="card-content">
            <span class=" card-title"><?= $mhs['nama']; ?></span>
            <ul>
              <li>NRP : <?= $mhs['nrp']; ?></li>
              <li>Nama : <?= $mhs['nama']; ?></li>
              <li>Email : <?= $mhs['email']; ?></li>
              <li>Jurusan : <?= $mhs['jurusan']; ?></li><br>
              <li style="text-align: center"><a href="ubah.php?id=<?= $mhs['id']; ?>" class="pink-effect pink lighten-5 btn black-text">Ubah</a>
                <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Apakah anda yakin?');" class="pink-effect pink lighten-5 btn black-text">Hapus</a></li><br>
              <li style="text-align: center"><a href="index.php" class="pink-effect pink lighten-5 btn black-text">Kembali ke Daftar Mahasiswa</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="css/js/materialize.min.js"></script>
</body>

</html>