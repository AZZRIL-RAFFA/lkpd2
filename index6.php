<?php 
$student = [
    //Mendefinisikan variabel $student yang merupakan array berisi daftar siswa.
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    //Menambahkan elemen pertama ke array $student, yaitu array asosiatif yang mewakili 
    //siswa dengan nama "Andi" dan array nilai-nilai yang diperoleh.
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    //Menambahkan elemen kedua ke array $student, yaitu array asosiatif untuk siswa bernama "Beni" beserta nilai-nilainya.
    [
        'nama' => 'Deni',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    //Menambahkan elemen ketiga ke array $student, yaitu array asosiatif untuk siswa bernama "Deni" dengan nilai-nilainya.
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
    //Menambahkan elemen keempat ke array $student, yaitu array asosiatif untuk siswa bernama "Eko" dengan nilai-nilainya.
];

foreach ($student as $s) {
    //Memulai loop foreach untuk iterasi setiap elemen dalam array $student, di mana setiap elemen disimpan dalam variabel $s.
    $nama = $s['nama'];
    //Mengambil nilai dari kunci 'nama' dalam array $s dan menyimpannya dalam variabel $nama.
    $nilai = $s['nilai'];
    //Mengambil nilai dari kunci 'nilai' dalam array $s dan menyimpannya dalam variabel $nilai.
    $rataRata = array_sum($nilai) / count($nilai);
    //Menghitung rata-rata dari nilai-nilai yang ada di array $nilai. Fungsi array_sum($nilai) menjumlahkan semua nilai, dan count($nilai) 
    //menghitung jumlah elemen. Hasilnya adalah rata-rata nilai.
    echo " $nama = $rataRata\n <br>";
    //Menampilkan nama siswa dan rata-rata nilai mereka dalam format teks dengan baris baru dan tag HTML <br> untuk pemisah baris di halaman web.

}
?>