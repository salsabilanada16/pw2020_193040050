<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_193040050") or die("Database salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

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
                (null,'$Gambar', '$Kode', '$Nama', '$Harga', '$Warna', '$Ukuran', '$Material');
            ";

    mysqli_query($conn, $query);
    echo mysqli_errno($conn);
    return mysqli_affected_rows($conn);
}


// HAPUS
function hapus($Id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pakaian WHERE Id = $Id");

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

    $queryubah = "UPDATE pakaian
                        SET
                        Gambar = '$Gambar',
                        Kode = '$Kode',
                        Nama = '$Nama',
                        Harga = '$Harga',
                        Warna = '$Warna',
                        Ukuran = '$Ukuran',
                        Material = '$Material' ";
    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}
