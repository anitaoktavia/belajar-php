<?php

// 1. Buat koneksi dengan MySQL
$con = mysqli_connect("localhost","root","","fakultas");

// 2. Cek koneksi dengan Mysql
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}else{
    echo 'koneksi berhasil';
}

// 3 membaca data dari tabel mysql
$sql = "SELECT * FROM mahasiswa";

// 4. menampilkan data, dengan menjalankan sql query
$mahasiswa = [];
if ($result = mysqli_query($con, $sql)) {
    // tampilkan data satu per satu
    while ($row = mysqli_fetch_assoc($result)) {
        $mahasiswa[] = $row;
    }
    mysqli_free_result($result);
  }

// 5. tutup koneksi mysql
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="insert.php">Tambah Data</a>
    <table border=1 style="width: 100%;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php foreach ($mahasiswa as $row): ?>
            <tr>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jenis_kelamin'] ?></td>
                <td><?= $row['tanggal_lahir'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id'] ?>" >Edit</a> | 
                    <a href="delete.php?id=<?= $row['id'] ?>" >Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>