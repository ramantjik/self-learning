<?php
$mahasiswa = [
    ['Moch. Rahadian Amantjik', '13421084', 'Teknik Industri', 'rahamantjik@gmail.com'],
    ['Ajim', '13421084', 'Teknik Industri', 'rahamantjik@gmail.com'],
    ['Zaki', '13421084', 'Teknik Industri', 'rahamantjik@gmail.com'],
    ['Naufal', '13421084', 'Teknik Industri', 'rahamantjik@gmail.com']
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <?php foreach($mhs as $m) : ?>
            <li><?= $m; ?></li>
         <?php endforeach; ?>
    </ul>
    <?php endforeach; ?>
</body>
</html>