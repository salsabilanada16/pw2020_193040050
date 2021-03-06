<?php
// Mencegah file diakses sebelum melakukan login
session_start();

// Tidak bisa masuk ke halaman manapun sebelum login
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

// Cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = '../index.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = '../index.php';
          </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Lobster&family=Pacifico&Playfair+Display:ital@1&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>

  <link rel="stylesheet" href="../css/tambah.css">

  <style>
    body {
      background-image: url(../assets/img/Bg/1.jpg);
    }

    h3 {
      color: white;
      font-family: 'Lobster';
    }

    .row {
      margin-top: 20px;
      padding-left: 30px;
    }

    .row label {
      font-size: 15px;
    }

    #tambah button {
      margin-left: 250px;
      margin-bottom: 20px;
    }

    #tambah .back {
      margin-left: 20px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h3>Form Tambah Data Mahasiswa</h3>

    <!-- Form -->
    <div class="container">
      <section id="tambah" class="grey lighten-5">
        <div class="row">
          <form action="" method="POST" class="col s6" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s6">
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" autofocus required>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <label for="nrp">NRP :</label><br>
                <input type="text" name="nrp" required>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <label for="email">Email :</label><br>
                <input type="text" name="email" required>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <label for="jurusan">Jurusan :</label><br>
                <input type="text" name="Jurusan" required>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <label for="gambar">Gambar :</label><br><br>
                <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                <img src="../assets/img/nophoto.png" width="300" style="display: block; padding-top: 20px;" class="img-preview">
              </div>
            </div>
        </div>
        <button class="btn waves-effect grey darken-3 z-depth-2" type="submit" name="tambah">Add Data!</button>
        <a href="../index.php" class="btn waves-effect grey darken-3 z-depth-2 back">Back</a>
        </form>
      </section>
    </div>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../css/js/materialize.min.js"></script>
    <script>
      $(document).ready(function() {
        M.updateTextFields();
      });
    </script>
    <script src="../css/js/script.js"></script>
</body>

</html>