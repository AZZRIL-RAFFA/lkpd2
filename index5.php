<?php
$bil1 = [80,77,65,89,55,12,90,86];
// Mendefinisikan array $bil1 dengan beberapa bilangan.
$bil2 = [77,99,55,81,45,90,91,98];
//Mendefinisikan array $bil2 dengan beberapa bilangan lainnya.  

$arrayResult = array_intersect($bil1, $bil2); //buat mencari nilai yang sama
//- Mencari elemen yang ada di kedua array $bil1 dan $bil2. Hasilnya adalah 
//array yang berisi nilai-nilai yang sama di kedua array, disimpan dalam variabel $arrayResult.
echo "bilangan yang ada di kedua variabel";
// Menampilkan teks "bilangan yang ada di kedua variabel".
echo "<br>";
//Menambahkan baris baru untuk pemformatan.
echo  implode(',', $arrayResult);
//Mengubah array $arrayResult menjadi string dengan elemen yang dipisahkan oleh koma, lalu menampilkannya.

echo "<br>";

echo "bilangan yang tidak ada di dalam variabel";
// Menampilkan teks "bilangan yang tidak ada di dalam variabel".
echo "<br>";
$arrayDif = array_diff($bil1, $bil2); //buat ngebedain nilai
//Mencari elemen yang ada di array $bil1 tetapi tidak ada di array $bil2. Hasilnya adalah array yang berisi
// nilai-nilai yang unik untuk $bil1, disimpan dalam variabel $arrayDif.
echo  implode(',', $arrayDif);
//Mengubah array $arrayDif menjadi string dengan elemen yang dipisahkan oleh koma, lalu menampilkannya.
?>