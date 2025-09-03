<?php
    
    //properties atau attribute
    class mobil_pajero
{
    public $warna = "Hitam";
    public $kursi = "4";

    // Method atau Fungsi
    public function bersuara()
    {
        return "Mberr";
    }
    
}

// inisiasi (pembuatan object)
$Mobil1 = new mobil_pajero ();
echo "Warna Moobil: " . $Mobil1->warna . "<br>";
echo "Kursi : " . $Mobil1->kursi . "<br>";
echo "Suara: " . $Mobil1->bersuara() . "<br>";

