<?php

//menampilkan text di browser
// echo "Hello World";

//fungsi pada php "uswords(mebuat huruf awal menjadi kapital)"
//strtoupper untuk membuat hufuf menjadi kapital semua
$nama = strtoupper("ardin natalius");

//round adalah untuk membulatkan bilangan int
$a = 10;
$b = 3;
$c = $a / $b;
echo round($c, 2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $nama; ?></h1>
    
</body>
</html>

