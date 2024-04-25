<?php
// Function -> program didalam program

// 1. Built-in Function => Fungsi yang sudah tersedia di PHP
// 2. User-Defined Function => Fungsi yang dibuat oelh programmer

// date, time, mktime, strtitime

/*// Date -> Tanggal
date_default_timezone_set("Asia/Jakarta");
echo date("l j F Y H:i:s");


i => nama hari yang lengkap
d => hari format 01 sampai 31
j => hari format 1 sampai 31
M => hari format 3 karater (Jan, Feb, Mar, ...) 
F => nama bulan lengkap
Y => Tahun

H => Jam
i => menit
s => detik
*/

// TIME = jumlah detik sejak 1 januari 1970
// echo time();

// MkTime
//date_default_timezone_set("Asia/Jakarta");
//echo mktime(0, 0, 0, 1, 28, 2000); // jumlah deti dari 1 januari 1970 - tanggal yang di tentukan

// strtotime => 
echo strtotime("24 April 2024");

// date_parse => memecahkan tanggal
print_r(date_parse("24-04-2024"));

?>