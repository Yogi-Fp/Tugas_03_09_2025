<?php

include 'koneksi.php';

$query = "SELECT * FROM siswa";

$result = $koneksi->query($query);

echo "
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    th, td {
        padding: 12px 15px;
        text-align: left;
    }
    th {
        background-color: #4CAF50;
        color: white;
        text-transform: uppercase;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    a {
        color: #3498db;
        text-decoration: none;
        margin: 0 5px;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
";

$no= 1;
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['alamat'] . "</td>
                <td>
                    <a href='edit_data.php?id=" . $row['id'] . "'>Edit</a> |
                    <a href='hapus_data.php?id=" . $row['id'] . "' onclick='return confirm(\"Yakin ingin menghapus data?\")'>Hapus</a>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Tidak ada data siswa.</p>";
    echo "<a href='tambah_data.php'>Tambah Data Siswa</a>";
}

$koneksi->close();
?>
