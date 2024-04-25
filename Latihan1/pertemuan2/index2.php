<?php

 // built in function untuk manifulasi string

 // explode, implode, strlen, strcmp

 // strlen => mengetahui panjang string
 echo strlen("Hello World"), "<br>";
 echo strlen("Selamat Datang di BLK Karawang"),"<br>";

 // str_word_count => menghitung jumlah kata
 echo str_word_count("jam rawan overtinking capek banget loh"), "<br>";

 // strcmp => membandingan 2 buah string/kata
 // strcmp => membandingan 2 string  berdasarkan ukuran huruf
 $kata1 = "Katak";
 $kata2 = "katak";

 if (strcmp($kata1, $kata2) !== 0) {
    echo "$kata1 tidak sama dengan $kata2";
 } else {
    echo "$kata1 sama dengan $kata2";
 }

 // explode => memecah string

 echo "<br>";
 print_r(explode("-", "Ayam-Kecap-Aku-Suka-Aku-Suka", ));
 echo "<br>";
 print_r(explode("-", "fikih-ratna-janah-maubi-adeh-dani", )) ;
 echo "<br>";

 // Implode => menggabungkan array menjadi string
 $str = array("Selamat", "Datang", "di", "Pemrograman", "PHP");
 echo implode (" ", $str), "<br>";

 // Strtolower => merupakan huruf besar menjadi kecil
 echo strtolower("Harap tenang! sedang belajar"), "<br>";

 // strtoupper => merubah hurup kecil menjadi besar
 echo strtoupper("ada udang di dalam bakwan"),"<br>";

 // Substr => mengambil beberapa karakter didalam string
 $kata3 = "Pelatihan";
 echo substr($kata3, 2, 5), "<br>";
 echo substr($kata3, -7, 5); // ngambil dari belakang

?>