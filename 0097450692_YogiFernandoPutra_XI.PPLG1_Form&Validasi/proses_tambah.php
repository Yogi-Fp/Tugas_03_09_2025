<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$result = $koneksi->query("SELECT COUNT(*) AS total FROM siswa");
$row = $result->fetch_assoc();

if ($row['total'] == 0) {
    $koneksi->query("ALTER TABLE siswa AUTO_INCREMENT = 1");
}

$koneksi->query("INSERT INTO siswa (nama, email, alamat) VALUES ('$nama','$email','$alamat')");

$koneksi->close();
header("Location: tampil_data.php");
?>
