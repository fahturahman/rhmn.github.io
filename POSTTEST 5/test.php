<?php
  require "koneksi.php";
  




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
  <div class="bg">
    <div class="container">
      <div class="head">
        <div class="title">
        <h2>Dashboard Sparepart</h2>
      </div>
      </div>
      <div class="table-box">
        <table>
          <tr>
            <td class="">No</td>
            <td class="">Nama Sparepart</td>
            <td class="">Harga</td>
            <td class="">Foto</td>
            <td class="">Action</td>
          </tr>
          <?php
          $query = mysqli_query($koneksi, "SELECT * FROM tb_sparepart");
          $no = 1;

          while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$row[Nama]</td>";
            echo "<td>$row[harga]</td>"; 
            echo "<td>
                <img src = 'databaseImages/$row[foto]' class = 'gambar-cover' alt = 'Gambar';
            </td>";
            echo "<td class='action'>
                <a href='editData.php?id=$row[id]' class='kuning'><i class='uil uil-edit'></i></a>
                <a href='deleteDataaksi.php?id=$row[id]' class='merah'><i class='uil uil-trash-alt'></i></a>
                </td>";
            echo "</tr>";
            $no++;
          }
          ?>
        </table>
        <div class="tombol">
          <a href="addData.php">Tambah Data</a>
        </div>
      </div >
      <a href="index.html"><button class="botton">BALIK</button></a>
    </div>
  </div>
</body>
</html>