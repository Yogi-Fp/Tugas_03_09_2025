<?php
include 'koneksi.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $koneksi->query("DELETE FROM siswa WHERE id=$id");

    $koneksi->query("SET @num := 0");
    $koneksi->query("UPDATE siswa SET id = (@num := @num + 1)");
    $koneksi->query("ALTER TABLE siswa AUTO_INCREMENT = 1");

} else {
    $koneksi->query("TRUNCATE TABLE siswa");
}

$koneksi->close();
header("Location: tampil_data.php");
?>
