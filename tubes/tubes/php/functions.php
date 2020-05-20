<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("Connection to the database failed!");
  mysqli_select_db($conn, "tubes_193040050") or die("Database wrong!");

  return $conn;
}

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


// U P L O A D
function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // Ketika tidak ada gambar yg dipilih
  if ($error == 4) {
    // echo "<script>
    //        alert('Pilih gambar terlebih dahulu!');
    //     </script>";
    return 'nophoto.png';
  }

  // Cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png', 'gif'];
  // Pecah nama file
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('You chose not a picture!');
          </script>";
    return false;
  }

  // Cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png' && $tipe_file != 'image/gif') {
    echo "<script>
            alert('You chose not a picture!');
          </script>";
    return false;
  }

  // Cek ukuran file
  // Maksimal 1Mb == 1000000 byte
  if ($ukuran_file > 1000000) {
    echo "<script>
            alert('File size too large!');
          </script>";
    return false;
  }

  // Lolos pengecekan
  // Siap upload file
  // Generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;

  move_uploaded_file($tmp_file, '../img/' . $nama_file_baru);

  return $nama_file_baru;
}


// T A M B A H
// fungsi untuk menambahkan data didalam database
function tambah($data)
{
  $conn = koneksi();

  // $Gambar = htmlspecialchars($data['Gambar']);
  // Upload Gambar
  $Gambar = upload();
  if (!$Gambar) {
    return false;
  }

  $Kode = htmlspecialchars($data['Kode']);
  $Nama = htmlspecialchars($data['Nama']);
  $Harga = htmlspecialchars($data['Harga']);
  $Warna = htmlspecialchars($data['Warna']);
  $Ukuran = htmlspecialchars($data['Ukuran']);
  $Material = htmlspecialchars($data['Material']);

  $query = "INSERT INTO 
                pakaian
                VALUES
            (null,'$Gambar', '$Kode', '$Nama', '$Harga', '$Warna', '$Ukuran', '$Material')
                ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


// H A P U S
function hapus($Id)
{
  $conn = koneksi();

  // Menghapus gambar di folder img
  $pkn = query("SELECT * FROM pakaian WHERE Id = $Id")[0];
  if ($pkn['Gambar'] != 'nophoto.png') {
    unlink('../img/' . $pkn['Gambar']);
  }

  mysqli_query($conn, "DELETE FROM pakaian WHERE Id = $Id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


// U B A H
function ubah($data)
{
  $conn = koneksi();

  $Id = $data['Id'];
  // $Gambar = htmlspecialchars($data['Gambar']);
  $Gambar_lama = htmlspecialchars($data['Gambar_lama']);

  $Gambar = upload();
  if (!$Gambar) {
    return false;
  }

  if ($Gambar == 'nophoto.png') {
    $Gambar = $Gambar_lama;
  }
  $Kode = htmlspecialchars($data['Kode']);
  $Nama = htmlspecialchars($data['Nama']);
  $Harga = htmlspecialchars($data['Harga']);
  $Warna = htmlspecialchars($data['Warna']);
  $Ukuran = htmlspecialchars($data['Ukuran']);
  $Material = htmlspecialchars($data['Material']);

  $queryubah = "UPDATE pakaian SET
                    Gambar = '$Gambar',
                    Kode = '$Kode',
                    Nama = '$Nama',
                    Harga = '$Harga',
                    Warna = '$Warna',
                    Ukuran = '$Ukuran',
                    Material = '$Material'
                    WHERE Id = '$Id' ";

  mysqli_query($conn, $queryubah) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


// C A R I
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM pakaian
              WHERE 
              Kode LIKE '%$keyword%' OR
              Nama LIKE '%$keyword%' OR
              Harga LIKE '%$keyword%' OR
              Warna LIKE '%$keyword%' OR
              Ukuran LIKE '%$keyword%' OR
              Material LIKE '%$keyword%'
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
    'pesan' => 'Username  / Password Wrong!'
  ];
}


// R E G I S T R A S I
function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));  /* strtolower -> Apapun yang dituliskan sama usernya akan menjadi huruf kecil */
  $password1 = mysqli_real_escape_string($conn, $data['password1']);  /* mysqli_real_escape_string -> Yang akan ngecek password itu ada script jahat atau tidak */
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // Jika username atau password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('Username / password can't be empty!');
          </script>";
    return false;
  }

  // Jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('Username already registered!');
          </script>";
    return false;
  }

  // Jika konfirmasi password tidak sesuai dengan password
  if ($password1 !== $password2) {
    echo "<script>
            alert('Confirm Password Incorrect!');
          </script>";
    return false;
  }

  // Jika username < 5 digit (tidak boleh < 5)
  if (strlen($username) < 5) {
    echo "<script>
              alert('The Username is too short!');
              document.location.href = 'registrasi.php';
            </script>";
    return false;
  }

  // Jika password < 5 digit (tidak boleh < 5)
  if (strlen($password1) < 5) {
    echo "<script>
            alert('The Password is too short!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika username & password sudah sesuai
  // Enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);

  // Tambah user baru
  $query_tambah = "INSERT INTO user 
                        VALUES
                    (null, '$username', '$password_baru')
                    ";
  mysqli_query($conn, $query_tambah) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
