<?php
// Array
$arr = array (1, 3, 4, 7, 9, 11, 30);

print_r($arr);

// cara baru bikin array di PHP 
$arr2 = ["fikih", "janah", "ratna", "adeh", "maubi"];

print_r($arr2);
print "<br>";
var_dump($arr2);
print "<br>";
echo $arr2[3];

// mengedit isi array
$arr[3] = "Danis";

//menambah isi array
$arr[4] = "topik";
print "<br>";

//menambah isi array
$arr2[] = "saepul";
print_r($arr2) ;

print "<br>";
//foraech
foreach ($arr2 as $a) {
    echo $a , "<br>";
}

?>