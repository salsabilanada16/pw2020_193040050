<?php
// Mencegah file diakses sebelum melakukan login
session_start();

// Tidak bisa masuk ke halaman manapun sebelum login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}


// menghubungkan dengan file php lainnya
require 'functions.php';


// Jika tidak ada id di URL
if (!isset($_GET['Id'])) {
    header("Location: admin.php");
    exit;
}


// Mengambil id dari URL
$Id = $_GET['Id'];

if (hapus($Id) > 0) {
    echo "<script>
            alert('Data Successfully Deleted!');
            document.location.href = 'admin.php';
        </script>";
} else {
    echo "<script>
            alert('Data Failed to Delete!');
            document.location.href = 'admin.php';
        </script>";
}
