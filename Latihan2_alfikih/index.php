<?php
$mhs = [
    [
        "Nim" => "25524524676455",
        "Nama" => "Akbar",
        "Alamat" => "Cikampek",
        "Prodi" => "Informatika"
    ],
    [
        "Nim" => "4347646252366",
        "Nama" => "Fajar",
        "Alamat" => "Telagasari",
        "Prodi" => "Informatika"
    ],
    [
        "Nim" => "42148646477612",
        "Nama" => "Bisma",
        "Alamat" => "Isekai",
        "Prodi" => "Informatika"
    ],
    [
        "Nim" => "2382126564766",
        "Nama" => "Putra",
        "Alamat" => "Purwasari",
        "Prodi" => "Informatika"
    ],
    [
        "Nim" => "1324235475645",
        "Nama" => "Fahri",
        "Alamat" => "Telagasari",
        "Prodi" => "Informatika"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2 align = "center">Daftar Mahasiswa</h2>
      <table border ="1" cellpadding = "2" align = "center">
        <tr>
            <th><?php echo "Nim" ?></th>
            <th><?php echo "Nama" ?></th>
            <th><?php echo "Alamat" ?></th>
            <th><?php echo "Prodi" ?></th>
        </tr>

        <?php foreach ($mhs as $a) : ?>
        <tr>
            <td><?php echo $a ["Nim"] ?></td>
            <td><?php echo $a ["Nama"] ?></td>
            <td><?php echo $a ["Alamat"] ?></td>
            <td><?php echo $a ["Prodi"] ?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>

</body>
</html>