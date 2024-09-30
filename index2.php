<?php 

    $lamaJamKerja = 14;
    //$lamaJamKerja = 14; - Mendefinisikan variabel $lamaJamKerja dengan nilai 14, menunjukkan jumlah total jam kerja.
    $jamNormal = 8;
    $jamLebih = $lamaJamKerja - $jamNormal;  
    $kompensiJamPertama = 50000;
    $kompensiJamBerikutnya = 25000;

    if ($jamLebih > 0){
        //if ($jamLebih > 0){ - Mengecek jika ada jam lebih kerja (lebih dari 0).
        $totalKompensi = $kompensiJamPertama + ($jamLebih - 1) * $kompensiJamBerikutnya;
        //$totalKompensi = $kompensiJamPertama + ($jamLebih - 1) * $kompensiJamBerikutnya; - Menghitung total kompensasi.
        // Kompensasi untuk jam lebih pertama ditambahkan dengan kompensasi untuk jam-jam berikutnya (jam lebih dikurangi 1).
    } else {
        $totalKompensi = 0;
        //else { $totalKompensi = 0; } - Jika tidak ada jam lebih kerja, kompensasi total adalah 0.
    }

    echo "Lama jam kerja : " . $lamaJamKerja . " Jam <br>"; 
    //Menampilkan jumlah total jam kerja.
    echo "Jam lebih : " . $jamLebih . " Jam <br>";
    //Menampilkan jumlah jam lebih kerja.
    echo "Jumlah kompensasi : Rp." . number_format($totalKompensi, 0, ',', '.');
    //Menampilkan total kompensasi dengan format mata uang Indonesia.

?>
