<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./assets/style/style.css">
    <link rel="shortcut icon" href="./assets/images/post-it.png" type="image/x-icon">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Berhasil</title>
</head>
<body>
    <?php
include 'koneksi.php'; //memanggil file koneksi.php

$mata_kuliah = $_POST['mata_kuliah'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$ruangan = $_POST['ruangan'];

$sql = "INSERT INTO jadwal_kuliah (mata_kuliah, hari, jam, ruangan) VALUES ('$mata_kuliah', '$hari', '$jam', '$ruangan')";

if (mysqli_query($koneksi, $sql)) {
  echo '<p class="text-center">Data berhasil ditambahkan.</p>';
  echo "<br>";
  echo '<a href="index.php"><p class="text-center">Kembali</p></a>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

