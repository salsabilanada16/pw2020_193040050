<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_193040050") or die("Database salah!");

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

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $Gambar = htmlspecialchars($data['Gambar']);
    $Kode = htmlspecialchars($data['Kode']);
    $Nama = htmlspecialchars($data['Nama']);
    $Harga = htmlspecialchars($data['Harga']);
    $Warna = htmlspecialchars($data['Warna']);
    $Ukuran = htmlspecialchars($data['Ukuran']);
    $Material = htmlspecialchars($data['Material']);

    $query = "INSERT INTO pakaian
                        VALUES
                        (' ','$Gambar', '$Kode', '$Nama', '$Harga', '$Warna', '$Ukuran', '$Material')
                        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// HAPUS
function hapus($Id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pakaian WHERE Id = $Id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


// UBAH
function ubah($data)
{
    $conn = koneksi();

    $Id = $data['Id'];
    $Gambar = htmlspecialchars($data['Gambar']);
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
                    WHERE Id = $Id";
    mysqli_query($conn, $queryubah) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


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


function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // Cek Username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = 'username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('Username sudah digunakan');
                </script>";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
