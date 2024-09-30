<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text"  id="input-teks" name="teks" required>
        <button type="submit">cek angka</button>
    </form>
</body>
</html>

<?php
function  ceknilai($teks){
    //Mendefinisikan fu ngsi ceknilai yang menerima satu parameter $teks.
$result = preg_replace('/[^0-9]/', '', $teks);
//'/[^0-9]/' iye regeg
//Menggunakan preg_replace untuk menghapus semua karakter yang bukan angka dari string $teks.
// Hasilnya disimpan dalam variabel $result.

if($result) {
    //Mengecek apakah $result tidak kosong (berarti ada angka dalam string).
    $array = str_split($result);
    $hasil= "Teks ini mengandung angka: " . implode(',', $array);
     //Menggunakan str_split untuk memecah string angka menjadi array dengan setiap elemen adalah satu digit.
   //Menggunakan implode untuk menggabungkan elemen array menjadi string yang dipisahkan koma.
   $hasil= "Teks ini mengandung angka: " . implode(',', $array);
} else {
    $hasil ="Teks ini tidak mengandung angka";
    //Jika $result kosong (tidak ada angka), maka $hasil diatur menjadi string yang menyatakan bahwa teks tidak 
    //mengandung angka.
}
return $hasil;
//Mengembalikan string hasil yang telah dibuat.
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $teks = $_POST["teks"];
    
    echo "<p>". ceknilai($teks). "</p>";
    //Mengecek apakah metode request adalah POST.
   //Mengambil nilai dari input dengan nama teks dari $_POST.
  //Menampilkan hasil dari fungsi ceknilai dengan memasukkan nilai input teks ke dalamnya, dibungkus dalam tag HTML <p>.
}
?>
