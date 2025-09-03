
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="proses_tambah.php" method="POST">
        <h2>Formulir Tambah Data Siswa</h2>
        <label for="nama">Nama :</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="alamat">Alamat :</label><br>
        <textarea name="alamat" id="alamat" required></textarea><br><br>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>
