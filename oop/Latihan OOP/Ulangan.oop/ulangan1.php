
<!DOCTYPE html>
<html>
<head>
    <title>Menghitung tagihan listrik di komplek</title>
</head>
<body>
    
    <h1>Menghitung tagihan listik di komplek</h1>
    <form method="post">
        Abonemen (Rp): <input type="number" name="abonemen" required><br><br>
        Tarif per kWh (Rp): <input type="number" name="tarif" required><br><br>
        Pemakaian (kWh): <input type="number" name="pemakaian" required><br><br>
        <button type="submit">Hitung Tagihan</button>
    </form>

    <?php
class Komplek
{
    public $abonemen;
    public $tarifPerKwh;
    public $pemakaian;
    public $ppn = 0.10;
    public $biayaTambahan = 100000;

    public function __construct($a, $b, $c)
    {
        $this->abonemen    = $a;
        $this->tarifPerKwh = $b;
        $this->pemakaian   = $c;
    }

    public function hitungTotal()
    {

        $total = $this->abonemen + ($this->tarifPerKwh * $this->pemakaian);

        if ($this->pemakaian > 500) {
            $total += $this->biayaTambahan;
        }

        $total += $total * $this->ppn;

        return $total;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $abonemen    = $_POST['abonemen'];
    $tarifPerKwh = $_POST['tarif'];
    $pemakaian   = $_POST['pemakaian'];

    $tagihan = new komplek($abonemen, $tarifPerKwh, $pemakaian);
    $total   = $tagihan->hitungTotal();

    echo "<h3>Hasil Perhitungan</h3>";
    echo "Abonemen: Rp " . number_format($abonemen, 0, ',', '.') . "<br>";
    echo "Tarif per kWh: Rp " . number_format($tarifPerKwh, 0, ',', '.') . "<br>";
    echo "Pemakaian: " . $pemakaian . " kWh<br>";
    echo "Total Tagihan (termasuk PPN): Rp " . number_format($total, 0, ',', '.');
}
?>
</body>
</html>
