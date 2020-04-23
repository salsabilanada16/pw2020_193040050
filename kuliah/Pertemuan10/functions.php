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
  if (mysqli_num_rows($result)) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }

  return $rows;
}
