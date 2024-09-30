<?php
    class Mobil {
        protected $merek;
        protected $warna;
        protected $cc;
        protected $harga;

        public function __construct($merek, $warna, $cc, $harga) {
            $this->merek = $merek;
            $this->warna = $warna;
            $this->cc = $cc;
            $this->harga = $harga;
            echo "Mobil info: $merek, $warna, $cc cc, Rp $harga<br>";
        }

        public function berjalan() {
            echo "Mobil $this->merek sedang berjalan.<br>";
        }
    }

    class MobilSport extends Mobil {
        private $topSpeed;

        public function __construct($merek, $warna, $cc, $harga, $topSpeed) {
            parent::__construct($merek, $warna, $cc, $harga);
            $this->topSpeed = $topSpeed;
            echo "Top speed: $topSpeed km/h<br>";
        }

        public function turbocuyy() {
            echo "Mobil $this->merek menggunakan turbo boost!<br>";
        }
    }

    $mobilSport1 = new MobilSport("Ferrari", "Merah", 3000, 5000000000, 350);
    $mobilSport1->berjalan();
    $mobilSport1->turboBocuyy();
    ?>