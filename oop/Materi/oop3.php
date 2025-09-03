<?php
    class kucing {
        public $nama;
        public $warna;
        public $jenis;
        //method khusus yang akan di panggil pertama kali / di awal
        public function __construct ($nama,$warna,$jenis)
        {
            $this -> nama = $nama;
            $this -> warna = $warna;
            $this -> jenis = $jenis;
        }

        public function makan ()
        {
            return "Kucing sedang makan";
        }
    }

    $kucing1 =  new kucing ("Jojon", "Abu" , "Persia");
    echo "Nama kucing 1: " . $kucing1-> nama . "<br>";
    echo "Warna kucing 1 : " . $kucing1-> warna . "<br>";
    echo "Jenis kucing 1: " . $kucing1-> jenis . "<br>";
