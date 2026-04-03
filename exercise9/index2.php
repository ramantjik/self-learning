<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// ada 4 cara
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative --> disarankan
// mysqli_fetch_array() // mengembalikan array numerik dan associative --> berat kalau datanya besar karena mengembalikan nilainya double
// mysqli_fetch_object() // mengembalikan object

// while ($mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding='10' cellspacing = '0'>
    <tr>
        <th>No. Urut</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i=1; ?> 
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr align="center">
        <td><?= $i ?></td>
        <td>
            <a href="">ubah</a> | 
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"] ?>" alt="" width="100px"></td>
        <td><?= $row["nim"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile; ?>
</table>

</body>
</html>