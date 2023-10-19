<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nama = $_POST["nama"];
    $Nim = $_POST["nim"];
    $no_hp = $_POST["no_hp"];
    $password = $_POST["password"];

    // Validasi untuk nomor handphone (minimal 12 digit)
    if (strlen($no_hp) < 12) {
        echo "Nomor Handphone harus memiliki minimal 10 digit.";
    } else {
       
        // Contoh: Menampilkan data yang telah diinputkan
        echo "Terima kasih telah login ngab, $nama!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b><a href="index.html">Kembali</a></b></h3>
</body>
</html>