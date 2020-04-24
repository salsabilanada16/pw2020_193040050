<?php
// Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040050');


// Query isi tabel Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


// Ubah data ke dalam array
//  $row = mysqli_fetch_row($result); // Array Numerik
//  $row = mysqli_fetch_assoc($result); // Array Associative
//  $row = mysqli_fetch_array($result); // Keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


// Tampung ke variable Mahasiswa
$mahasiswa = $rows;

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
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&family=Pacifico&display=swap" rel="stylesheet">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <!-- Navbar -->
  <nav>
    <div class="nav-wrapper grey darken-3">
      <a href="latihan1.php" class="brand-logo center">Daftar Mahasiswa</a>
    </div>
  </nav>

  <!-- Tabel -->
  <div class="container">
    <table class="centered striped z-depth-3" border="1" cellpadding="10" cellspacing="0">
      <thead>
        <tr>
          <th>#</th>
          <th>Gambar</th>
          <th>NRP</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Jurusan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        foreach ($mahasiswa as $mhs) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
            <td><?= $mhs['nrp']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
            <td>
              <a class="btn grey darken-3" href="">Ubah</a> <a href="" class="btn grey-text text-darken-3 white">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="css/js/materialize.min.js"></script>
</body>

</html>