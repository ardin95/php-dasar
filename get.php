<?php

$nama = $_GET['nama'];
$alamat = $_GET['alamat'];


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

<form>
    <input type="text" name='nama'>
    <input type="text" name='alamat'>
    <input type="submit">
</form>
<h1>Selamat datang <?php echo $nama; ?></h1>
<p>Anda tinggal di <?php echo $alamat; ?></p>
    
</body>
</html>