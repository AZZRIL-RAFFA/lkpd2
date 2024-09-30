<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raff</title>
    <style>
            body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

form {
    margin: 20px auto;
    padding: 20px;
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

input[type="number"],
select {
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    font-size: 14px;
}

input[type="submit"] {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 3px;
    background-color: #4CAF50;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.result {
    margin-top: 20px;
    font-weight: bold;
}

    </style>
</head>
<body>
<form action="" method="post">
    <label for="jumlah_liter">Masukkan Jumlah Liter :</label>
    <input type="number" id="jumlah_liter" name="jumlah_liter" required>
    
    <label for="jenis_bahan_bakar">Pilih Tipe Bahan Bakar :</label>
    <select id="jenis_bahan_bakar" name="jenis_bahan_bakar" required>
        <option value="Shell Super">Shell Super</option>
        <option value="Shell V-Power">Shell V-Power</option>
        <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
        <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
    </select>
    
    <input type="submit" value="Beli">
<?php

class Beli {
    private $harga;
    private $jumlah;
    private $jenis;
    private $ppn;
    //gua disini bikin property yang bernama harga,jumlah,jenis,dan ppn//

    public function __construct($harga, $jumlah, $jenis, $ppn) {
        $this->harga = $harga;
        $this->jumlah = $jumlah;
        $this->jenis = $jenis;
        $this->ppn = $ppn;
        //Selanjutnya, class Beli memiliki konstruktor yang digunakan untuk menginisialisasi nilai property-property tersebut.
        // Konstruktor ini memiliki empat parameter, yaitu $harga, $jumlah, $jenis, dan $ppn.
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getJumlah() {
        return $this->jumlah;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function getPpn() {
        return $this->ppn;
    }

    // Method-method ini digunakan untuk mengambil nilai dari property-property yang telah didefinisikan sebelumnya.

    public function hitungTotal() {
        return $this->getHarga() * $this->getJumlah() * (1 + ($this->getPpn() / 100));
    }
    //Method hitungTotal() digunakan untuk menghitung total harga setelah dihitung dengan persentase PPN.
  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hargaShellSuper = 15420;
    $hargaShellVPower = 16130;
    $hargaShellVPowerDiesel = 18310;
    $hargaShellVPowerNitro = 16510;
    //Deklarasi variabel $hargaShellSuper, $hargaShellVPower, $hargaShellVPowerDiesel, 
    //dan $hargaShellVPowerNitro untuk menyimpan harga setiap jenis bahan bakar.

    $jenisBahanBakar = $_POST['jenis_bahan_bakar'];
    $jumlahLiter = $_POST['jumlah_liter'];
    //Mengambil data jenis_bahan_bakar dan jumlah_liter dari form yang dikirim melalui method POST.

    if ($jenisBahanBakar == 'Shell Super') {
        $harga = $hargaShellSuper;
    } elseif ($jenisBahanBakar == 'Shell V-Power') {
        $harga = $hargaShellVPower;
    } elseif ($jenisBahanBakar == 'Shell V-Power Diesel') {
        $harga = $hargaShellVPowerDiesel;
    } elseif ($jenisBahanBakar == 'Shell V-Power Nitro') {
        $harga = $hargaShellVPowerNitro;
    }

    $beli = new Beli($harga, $jumlahLiter, $jenisBahanBakar, 10);

    $total = $beli->hitungTotal();

    echo "Anda membeli bahan bakar minyak tipe $jenisBahanBakar<br>";
    echo "Total dengan jumlah : $jumlahLiter Liter<br>";
    echo "Yang harus anda bayar Rp. ". number_format($total, 2, ',', '.'). "<br>";
}

?>

</form>
</body>
</html>
