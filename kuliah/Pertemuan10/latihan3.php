<?php
require 'functions.php';

// Tampung ke variable Mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/css/materialize.min.css" media="screen,projection" />

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
    <div class="nav-wrapper pink lighten-5 navbar-fixed">
      <div class="container">
        <a href="#" class="brand-logo center black-text">Daftar Mahasiswa</a>
      </div>
    </div>
    <div class="nav-content">
      <ul class="tabs pink lighten-5">
        <div class="container">
          <li class="tab"><a href="tambah.php" class="black-text">Tambah Data Mahasiswa</a></li>
        </div>
      </ul>
    </div>
  </nav>




  <!-- Cards -->
  <div class="container">
    <div class="row">
      <?php foreach ($mahasiswa as $mhs) : ?>
        <div class="col s12 m4">
          <div class="card z-depth-3">
            <div class="card-image">
              <img src="img/<?= $mhs['gambar']; ?>" height="500px">
            </div>

            <div class="card-content">
              <p class="nama">
                <span class="teal-text text-darken-4">
                  <?= $mhs['nama'] ?><br>
                </span>
            </div>
            <div class="card-action">
              <a href="detail.php?id=<?= $mhs['id']; ?>" class="pink-effect pink lighten-5 btn black-text">Lihat Detail</a>
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