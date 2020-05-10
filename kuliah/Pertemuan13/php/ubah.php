<?php
session_start();

// Tidak bisa masuk ke halaman manapun sebelum login
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

// Ambil id dari URL
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

// Cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = '../index.php';
          </script>";
  } else {
    echo "Data Gagal Diubah!";
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

  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="../css/ubah.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>

  <style>
    body {
      background-image: url(../assets/img/Bg/2.jpg);
    }

    #title h3 {
      color: white;
    }

    #ubah {
      margin-top: 30px;
      margin-bottom: 30px;
    }

    #ubah input {
      width: 570px;
    }

    #ubah .row {
      margin-left: 30px;
      margin-top: 30px;
    }

    #ubah label {
      font-size: 20px;
    }

    #ubah .gambar {
      font-size: 15px;
      margin-top: -20px;
      margin-bottom: 10px;
    }

    #ubah .row img {
      display: block;
      padding-top: 20px;
    }

    #ubah button {
      margin-left: 250px;
      margin-bottom: 20px;
    }

    #ubah .back {
      margin-left: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- Title -->
    <section id="title">
      <h3>Form Ubah Data Mahasiswa</h3>
    </section>
    <!-- Akhir Title -->

    <!-- Form -->
    <div class="container">
      <section id="ubah" class="grey lighten-5">
        <div class="row">
          <form action="" method="POST" class="col s6" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
            <div class="row">
              <div class="input-field col s6">
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" autofocus required value="<?= $mhs['nama']; ?>">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <label for="nrp">NRP :</label><br>
                <input type="text" name="nrp" required value="<?= $mhs['nrp']; ?>">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <label for="email">Email :</label><br>
                <input type="text" name="email" required value="<?= $mhs['email']; ?>">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <label for="jurusan">Jurusan :</label><br>
                <input type="text" name="Jurusan" required value="<?= $mhs['jurusan']; ?>">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input type="hidden" name="gambar_lama" value="<?= $mhs['gambar']; ?>">
                <label for="gambar" class="gambar">Gambar :</label><br>
                <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                <img src="../assets/img/<?= $mhs['gambar']; ?>" width="300" class="img-preview">
              </div>
            </div>
        </div>
        <button class="btn waves-effect grey darken-3 z-depth-2" type="submit" name="tambah">Change Data!</button>
        <button class="btn waves-effect grey darken-3 z-depth-2 back" type="submit" href="../index.php">Back</button>
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