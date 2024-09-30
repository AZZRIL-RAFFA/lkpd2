<?php
function hitungKategoriUsia($dataUsia) {
    $jumlahDewasa = 0;
    $jumlahAnakAnak = 0;

    foreach ($dataUsia as $usia) {
        if ($usia >= 17) {
            $jumlahDewasa++;
        } else {
            $jumlahAnakAnak++;
        }
    }

    echo "List Usia: " . implode(", ", $dataUsia) . "\n";
    echo "<br>";
    echo "Jumlah Kategori Dewasa: " . $jumlahDewasa . "\n";
    echo "<br>";
    echo "Jumlah Kategori Anak-Anak: " . $jumlahAnakAnak . "\n";
}

$dataUsia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
hitungKategoriUsia($dataUsia);
?>