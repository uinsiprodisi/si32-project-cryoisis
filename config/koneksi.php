<?php

$servername = "localhost";
$database = "uinsi_nim";
$password = "";

$conn = mysqli_connect($servername,$database,$password);

if (!$conn) {
    die("Koneksi Gagal".mysqli_connect_error());
}

echo "Koneksi Berhasil";
mysqli_close();
?>