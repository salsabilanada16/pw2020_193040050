<?php
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
        mysqli_select_db($conn, "pw_193040050") or die("Database salah!");

        return $conn;
    }

    function query($sql) {
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

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
                        ('','$Gambar', '$Kode', '$Nama', '$Harga', '$Warna', '$Ukuran', '$Material')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


    function hapus($Id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM pakaian WHERE Id = $Id");
        
        return mysqli_affected_rows($conn);
    }
?>