<?php
$mahasiswa = [
    ["arlan", "12345", "Teknik Informatika", "anjaygeming1@gmail.com", "https://i.pinimg.com/564x/49/41/8b/49418b7054ab754d6f259cdc4d3a81d5.jpg"],
    ["satya", "56789", "Sistem Informasi", "satya123@gmail.com", "https://i.pinimg.com/564x/7b/91/54/7b915438f51b6aabe12322bce421f424.jpg"],
    ["artha", "98765", "Manajemen Informatika", "artha@gmail.com", "https://i.pinimg.com/564x/68/eb/f7/68ebf73614f5e9420bb9617f80fd6903.jpg"],
    ["yordi", "67890", "Desain Produk", "yordi@gmail.com", "https://i.pinimg.com/564x/19/b3/49/19b34959b6b092ac7648f8ba6f2e24dd.jpg"],
    ["sigma", "00123", "Bisnis Digital", "sigma@gmail.com", "https://i.pinimg.com/564x/e5/a2/2e/e5a22e580177ca14363f7494c8dfb4c9.jpg"]
];
?>

<!-- HTML Table -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan foreach</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $data ) : ?>
        <ul>
            <li>Nama : <?= $data[0];?></li>
            <li>NIM : <?= $data[1];?></li>
            <li>Jurusan : <?= $data[2];?></li>
            <li>Email : <?= $data[3];?></li>
            <li>Gambar : <br> <img width="25%" src="<?= $data[4];?>" alt="">
            </li>
        </ul>
    <?php endforeach;?>
    
</body>
</html>