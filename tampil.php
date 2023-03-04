<?php
include 'koneksi.php'; //memanggil file koneksi.php

$sql = "SELECT * FROM jadwal_kuliah";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
  //output data dari setiap baris
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - Mata Kuliah: " . $row["mata_kuliah"]. " - Hari: " . $row["hari"]. " - Jam: " . $row["jam"]. "- Ruangan" . $row["ruangan"]. "<br>";
  }
} else {
  echo "Tidak ada data.";
}

mysqli_close($koneksi);
?>
