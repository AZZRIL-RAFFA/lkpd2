<?php 

function hitungPecahan($jumlah) {
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
    $hasil = [];

    foreach ($pecahan as $nilai) {
        if ($jumlah >= $nilai) {
            $lembar = floor($jumlah / $nilai);
            $hasil[$nilai] = $lembar;
            $jumlah -= $lembar * $nilai;
        }
    }

    return $hasil;
}

$jumlahUang = 140500;
$pecahanUang = hitungPecahan($jumlahUang);

echo "Uang: Rp. " . number_format($jumlahUang, 0, ',', '.') . "\n <br>";
echo "Lembar Rupiah: \n <br>";

foreach ($pecahanUang as $nilai => $lembar) {
    echo "Rp. " . number_format($nilai, 0, ',', '.') . " : " . $lembar . "\n <br>";
}


?>