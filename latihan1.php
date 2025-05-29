<?php

// $mahasiswa = [
//     [
//         "nama" => "fitratul aini",
//         "nim" => "2217020008",
//         "email" => "fitratul@gmail.com"
//     ],
//     [
//         "nama" => "aini",
//         "nim" => "2217020018",
//         "email" => "aini@gmail.com"
//     ]

// ];


$db = new PDO('mysql:host=localhost;dbname=db_mahasiswa', 'root', '');
$db = $db->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


$data = json_encode($mahasiswa);
echo $data;

?>