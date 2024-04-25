<?php
function tambahHari($hariIni, $jumlahHari) {
    $namaHari = date('N', strtotime("$hariIni + $jumlahHari days"));
    $hariId = "";

    switch ($namaHari) {
        case 1:
            $hariId =  "Senin";
            break;
        case 2:
            $hariId = "Selasa";
            break;
        case 3:
            $hariId =  "Rabu";
            break;
        case 4:
            $hariId ="Kamis";
            break;
        case 5:
            $hariId = "Jum'at";
            break;
        case 6:
            $hariId = "Sabtu";
            break;
        case 7:
            $hariId = "Minggu";
            break;
        default:
            $hariId = "Nama Hari Tidak Valid";
    }
    
    return $hariId;
}

$tanggalAwal = "2004-12-27";
$jumlahHari = 100;

$tanggalSetelah = tambahHari($tanggalAwal, $jumlahHari);
$namaHariSetelah = tambahHari($tanggalAwal, $jumlahHari);

echo "Tanggal setelah $jumlahHari hari : $tanggalSetelah <br>";
echo "Nama Hari : $namaHariSetelah";
?>