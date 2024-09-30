<?php 
    
    $data = [80,90,75,100,85,100,66];
    $cari = 100;

    function hitungKemunculanAngka(array $data, int $angkaCari): int {
        $jumlahKemunculan = 0;
        foreach ($data as $nilai){
            if($nilai === $angkaCari){
                $jumlahKemunculan++;
            }
        }
        return $jumlahKemunculan;
    }

    $hasil = hitungKemunculanAngka($data, $cari);
    echo "jumlah angka $cari = $hasil"; 
?>