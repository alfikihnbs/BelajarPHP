<?php

// User defined function
/*
function namaFungsi($param1, $param2, $param3, ...){
    // perintah di eksekusi
}
*/

// camelCase
// penjumlahan => biasanya digunakan ketika class => OOP

function penjumlahan($a, $b)
{
    return $a + $b;
}

function luasSegitiga($alas, $tinggi){
    return 0.5 *$alas *$tinggi;
}
echo penjumlahan(4, 3), "<br>";

$alas = 4;
$tinggi = 5;

echo " Luas segitiga dengan panjang alas $alas dan tinggi $tinggi adalah ". luasSegitiga($alas, $tinggi);

//function iniFungsi($param1 = "", $param2 = ""){
//}

//echo iniFungsi();

function sapa($waktu = "", $nama = "")
{
    if ($waktu === "" && $nama === "") {
        return "Selamat Datang, User";
    } else {
        return "Selamat $waktu, $nama";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Function</title>
</head>
<body>
    <h1><?php echo sapa("Siang", "kevin")?><h1>
</body>
</html>