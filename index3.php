<?php
$e = 5; 
//Variabel $e diinisialisasi dengan nilai 5. Variabel ini akan digunakan dalam perhitungan perkalian di dalam loop.

for ($i = 1; $i <= 11; $i++) {  
 //Loop ini dimulai dengan $i bernilai 1 dan akan terus berlanjut hingga $i mencapai 11
 //. Setiap iterasi, $i akan meningkat satu (dalam hal ini $i++).
    if ($i % 2 != 0) { 
       // Kondisi ini memeriksa apakah $i adalah bilangan ganjil. Operator modulus % digunakan untuk mendapatkan sisa bagi $i dibagi 2. 
       //Jika hasilnya tidak sama dengan 0, maka $i adalah bilangan ganjil.
        $result = $i * 5;  
        echo "$i x $e = $result <br>";  
      //Jika $i adalah bilangan ganjil, maka program menghitung hasil perkalian $i dengan 5 dan menyimpannya dalam variabel $result.
      //Kemudian, hasilnya ditampilkan dalam format "i x e = result" dan diakhiri dengan tag <br> untuk memulai baris baru di output HTML.
    }
}
?>
