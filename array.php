<?php
//array dengan penulisan kata kunci index
// $buah = array("Anggur", "Jeruk", "Strawberry");

//array dengan penulisan kata kunci index secara manual
// $buah[0]="Anggur";
// $buah[1]="Jeruk";
// $buah[2]="Strawberry";

//penulisan array dengan assosiatif
// $datadiri = [
//     "nama" => "Ardin N Harefa",
//     "goldarah" => "B",
//     "alamat" => "Medan"
// ];

// echo "Nama: " . $datadiri["nama"] . "<br>";
// echo "Goldarah: " . $datadiri["goldarah"] . "<br>";
// echo "Aama: " . $datadiri["nama"] . "<br>";


//Array Multimedia
// $a = [250, true, ["jeruk", "pepaya", "pisang"]];
// echo $a[2][2];
// var_dump($a);

//mengenal tipe data NULL dan bisa juga menggunakan ??
$datadiri = [
    "nama" => "ardin",
    "goldarah" => null,
    "alamat" => "Medan"
];
echo $datadiri["status"] ?? null;


?>