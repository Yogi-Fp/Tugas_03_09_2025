<?php
$host = "localhost";
$user = "root";
$pass = "150620";
$db   = "db_siswa";

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
