<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./assets/style/edit.css">
    <link rel="shortcut icon" href="./assets/images/post-it.png" type="image/x-icon">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Edit Data Jadwal</title>
</head>
<body>
  <?php
  include 'koneksi.php'; //memanggil file koneksi.php

  $id = $_GET['id'];

  $sql = "SELECT * FROM jadwal_kuliah WHERE id=$id";
  $result = mysqli_query($koneksi, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    echo "Tidak ada data.";
  }

  mysqli_close($koneksi);
  ?>
  <div class="container">
      <h1 class="text text-center">Edit Jadwal</h1>
      <form class="jadwal" action="edit.php" method="post">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <div class="mb-3">
              <label class="form-label">Mata Kuliah:</label>
              <input type="text" name="mata_kuliah" value="<?php echo $row['mata_kuliah']; ?>">
          </div>
          <div class="mb-3">
              <label class="form-label">Hari:</label>
              <input type="text" name="hari" value="<?php echo $row['hari']; ?>">
          </div>
          <div class="mb-3">
              <label class="form-label">Ruangan:</label>
              <input type="text" name="ruangan" value="<?php echo $row['ruangan']; ?>">
          </div>
          <div class="mb-3">
              <label class="form-label">Jam:</label>
              <input type="time" name="jam" value="<?php echo $row['jam']; ?>">
          </div>
          <button type="submit">Simpan</button>
          </form>
          </div>
    </body>
</html>
