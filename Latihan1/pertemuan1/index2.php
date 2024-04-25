<?php
// php di dalam html

//cara membuat variabel di php
// keyword : const, let, var
// variabel $
// scope = cangkupan
//variabel global && variabel lokal
// variabel global = variabel yang bisa diakses di mana saja
// variabel lokal = variabel yang bisa di akses di bagian tertentu

$angka = 20;
echo $angka;

$nama = "Alfikih Nur Banyu Segara";

// gak boleh pake  spasi
// gak boleh di awali nomor
// kalau mau di spasi, pake tanda underscore (_)

$nama_depan = "Budi";
$nama_belakang = "Utomo";


// concatenation -> menggabungkan string
echo $nama_depan . " " . $nama_belakang

// operator aritmatika = +,-,*,/,%
// operator assignment = =,+=,-=,*=
// operator perbandingan = <,>,<=, >=
// ==, !=, ===, !==
// operator logika = $$, ||, !

// Tipe data di PHP = Integer, Float, String, Boolean

var_dump(1 == "1");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
</head>

<body>
    <h1><?php echo "Selamat Datang " . $nama ?></h1>
</body>

</html>