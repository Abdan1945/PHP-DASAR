<?php
    class Motor
{
    public $nama_motor;
    public $warna;
    public $roda;
    public $merk;
    //method khusus yang akan di panggil pertama kali / di awal
    public function __construct($nama_motor,$warna, $roda, $merk)
    {
        $this->nama_motor = $nama_motor;
        $this->warna  = $warna;
        $this->roda = $roda;
        $this->merk = $merk;
    }

    public function maju()
    {
        return "Motor sedang maju";
    }
}

$Motor1 = new Motor("Beat karbu", " Hitam ", " 2 ", " Honda " );
echo "Nama Motor: " . $Motor1->nama_motor . "<br>";
echo "Warna Motor: " . $Motor1->warna . "<br>";
echo "Jumlah Roda motor : " . $Motor1->roda . "<br>";
echo "Merk Motor : " . $Motor1->merk . "<br>";
echo "Motor sedang? : " . $Motor1->maju() . "<br>";
