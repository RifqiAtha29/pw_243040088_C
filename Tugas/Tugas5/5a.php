<?php
$mahasiswa = [
    [
        "nama" => "Rifqi Atha",
        "nrp" => "243040088",
        "email" => "rizkie2345@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muahmmad Chandra",
        "nrp" => "243040055",
        "email" => "chndra367@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Fauzan Ardhi",
        "nrp" => "243040089",
        "email" => "ozannnnnn@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Febri Cahyo",
        "nrp" => "243040043",
        "email" => "ucill129@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Hikmat Indrawan",
        "nrp" => "243040075",
        "email" => "hikin99@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Pratama Azhar",
        "nrp" => "243040054",
        "email" => "walidd@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Albani Aditya",
        "nrp" => "243040099",
        "email" => "aditbgz77@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Putra Rammadan",
        "nrp" => "243040091",
        "email" => "ramadan55@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhammad Rafi",
        "nrp" => "243040022",
        "email" => "rafiiii129@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Fahreza Putra",
        "nrp" => "243040051",
        "email" => "fhrzz@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>