<?php
  require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="addDataaksi.php" method="POST" enctype="multipart/form-data">
        <h3>Tambah Sparepart</h3>
        <div class="inputBox">
          <label for="">Nama Sparepart</label>
          <input type="text" name="nama" placeholder="Oli" required>
        </div>
        <div class="inputBox">
          <label for="">Harga</label>
          <input type="number" name="Harga" placeholder="100000" required>
        </div>
        <div class="inputBox">
          <label for="">Foto</label>
          <input type="file" name="foto"  required>
        </div>
        <input type="submit" value="Tambah Sparepart" name="tambah">
        <a href="test.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>