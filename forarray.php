<?php

$arr_warna = ['merah','biru','kuning','merah','hijau','biru'];
$jumlah = 0;
if($arr_warna[0]=='merah')
{
    $jumlah++;
}
if($arr_warna[1]=='merah')
{
    $jumlah++;
}
if($arr_warna[2]=='merah')
{
    $jumlah++;
}
if($arr_warna[3]=='merah')
{
    $jumlah++;
}
if($arr_warna[4]=='merah')
{
    $jumlah++;
}
if($arr_warna[5]=='merah')
{
    $jumlah++;
}

echo $jumlah;


/* ============================== */

$arr_warna	= ['merah','biru','kuning','merah','hijau','biru','merah','biru','kuning','merah','hijau','biru'];
$jumlah=0;
//jumlah elemen array ada 11
for($i=0;$i<11;$i++)
{
    if($arr_warna[$i]=='merah')
    {
        $jumlah++;
    }
}
echo "Jumlah warna merah ".$jumlah;
?>