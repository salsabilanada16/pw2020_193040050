<?php
require 'functions.php';

// Jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Mengambil id dari URL
$id = $_GET['id'];


if (hapus($id) > 0) {
  echo "<script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'index.php';
        </script>";
} else {
  echo "<script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'index.php';
        </script>";
}
