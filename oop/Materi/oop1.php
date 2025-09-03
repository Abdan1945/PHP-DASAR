<?php
echo "<center>";
    //properties atau attribute
    class kucing {
        public $warna = "Abu";
        public $jumlah_kaki = "4";

        // Method atau Fungsi
        public function bersuara ()
        {
            return "Meong-meong";
        }
        public function berburu ()
        {
            return "Kucing berburu tikus";
        }
    }

    // inisiasi (pembuatan object)
    $kucing1 = new Kucing ();
    echo "warna kucing 1: " . $kucing1 -> warna . "<br>";
    echo "Jumlah kaki Kucing 1: " . $kucing1 -> jumlah_kaki . "<br>";
    echo "Suara Kucing 1: " . $kucing1->bersuara (). "<br>";
    echo "kucing berburu tikus 1: " . $kucing1->berburu () . "<br>";

