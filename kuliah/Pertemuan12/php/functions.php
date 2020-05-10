<?php

// Koneksi ke Database
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040050');
}

// Querynya bisa dipakai kemana-mana
function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // Jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              mahasiswa
            VALUES
              (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar');
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE mahasiswa SET
              nama = '$nama',
              nrp = '$nrp',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar'
            WHERE id = '$id' ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
              WHERE 
              nama LIKE '%$keyword%' OR
              nrp LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              jurusan LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // Cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {

    // Cek password
    if (password_verify($password, $user['password'])) {    /* password_verify -> Kebalikan dari password_hash. Dia akan ngebandingin string biasa dgn string yg udah diacak */
      // Set session
      $_SESSION['login'] = true;

      header("Location: ../index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username  / Password Salah!'
  ];
}


function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));  /* strtolower -> Apapun yang dituliskan sama usernya akan menjadi huruf kecil */
  $password1 = mysqli_real_escape_string($conn, $data['password1']);  /* mysqli_real_escape_string -> Yang akan ngecek password itu ada script jahat atau tidak */
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // Jika username atau password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('Username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('Username sudah terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika konfirmasi password tidak sesuai dengan password
  if ($password1 !== $password2) {
    echo "<script>
            alert('Konfirmasi password tidak sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika username < 5 digit (tidak boleh < 5)
  if (strlen($username) < 5) {
    echo "<script>
              alert('Username terlalu pendek!');
              document.location.href = 'registrasi.php';
            </script>";
    return false;
  }

  // Jika password < 5 digit (tidak boleh < 5)
  if (strlen($password1) < 5) {
    echo "<script>
            alert('Password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika username & password sudah sesuai
  // Enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT); // PASSWORD_DEFAULT -> Kalau suatu saat enkripsi passwordnya diperbaharui, dia udah ngambil yang paling baru */

  // Insert ke tabel user
  $query = "INSERT INTO user
                VALUES
              (null, '$username', '$password_baru')
              ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
