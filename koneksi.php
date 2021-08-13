<?php
//inisiasi nilai-nilai parameter koneksi
$namaServer = "localhost";
$namaPengguna = "root";
$password = "";

//membuat koneksi
$koneksi = new mysqli($namaServer, $namaPengguna, $password);
//memeriksa apakah koneksi sukses
if($koneksi->connect_error){
    die("Koneksi gagal: ".$koneksi->connect_error."<br>");
}

echo "Koneksi sukses. <br>";
$koneksi -> set_charset("utf8");
?>