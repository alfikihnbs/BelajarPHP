<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <h2>Tahun Kabisat</h2>

</body>
</html>

<?php
$tahun = 2023;

if ($tahun % 400 == 0) {
    echo $tahun. " adalah tahun kabisat.";
} else if ($tahun % 100 == 0) {
    echo $tahun. " adalah bukan tahun kabisat.";
} else if ($tahun % 4 == 0) {
    echo $tahun." adalah tahun kabisat.";
} else {
    echo $tahun." adalah bukan tahun kabisat.";
}
?>