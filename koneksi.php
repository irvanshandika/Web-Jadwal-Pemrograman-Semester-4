<?php
$host = "localhost"; //alamat server
$user = "id20380388_irvanshandika"; //username database
$pass = "@ns|o(UD#1ND^5o{"; //password database
$db = "id20380388_db_jadwal_kuliah"; //nama database

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
