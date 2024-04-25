<?php
// PERULANGAN
// for
// while
// do while

// 1. for
for ($i = 1; $i <= 10; $i++) {
    echo " Angka ke-$i <br>";
}

for ($j = 10; $j >= 10; $j--) {
    echo " Angka ke-$j <br>";   

}

// 2. While
$k = 0;
while ($k <= 10) {
    echo " Bilangan ke-$k <br>";
    $k++;
}

// 3. Do While
$x = 0;
do{
    echo "Bilangan ke-$x <br> ";
    $x++;
} while ($x <= 10);
?>