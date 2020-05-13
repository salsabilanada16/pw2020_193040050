<?php
session_start();

// Tidak bisa masuk ke halaman manapun sebelum login
if (!isset($_SESSION['login'])) {
  header("Location: php/login.php");
  exit;
}

require 'php/functions.php';

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

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>

  <!-- Style -->
  <link rel="stylesheet" href="css/index.css">
</head>

<body style="background-image: url('assets/img/Bg/1.gif'); background-repeat: no-repeat;">
  <!-- Navbar -->
  <section id="navbar">
    <nav class="nav-extended" id="home">
      <div class="nav-wrapper black navbar-fixed">
        <div class="container">
          <a href="#home" class="brand-logo center white-text">Daftar Mahasiswa</a>
        </div>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li>
            <button class="grey lighten-1">
              <a href="php/logout.php" class="black-text">Logout</a>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <div class="container">
      <a href="php/tambah.php" class="black btn white-text btn">Tambah Data Mahasiswa</a>
      <form action="" method="POST">
        <input type="text" name="keyword" placeholder="Masukan keyword pencarian.." autocomplete="off" autofocus style="margin-top: 20px;" class="keyword white-text">
        <button type="submit" name="cari" class="btn-small tombol-cari" style="margin-top: 10px;">Cari!</button>
      </form>
    </div>
    <br>
  </section>
  <!-- Akhir Navbar -->


  <!-- Cards -->
  <!-- Data tidak ditemukan -->
  <div class="container">
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
  </div>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="css/js/materialize.min.js"></script>
  <script src="css/js/script.js"></script>
</body>

</html>