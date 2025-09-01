<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<center>";?>
    <h1>SOAL 3</h1>
<?php
echo "<center>";
function hitungTotalBayar($totalBelanja)
{
    if ($totalBelanja >= 500000) {
        $diskon = 0.20; // 20%
    } elseif ($totalBelanja >= 250000) {
        $diskon = 0.10; // 10%
    } else {
        $diskon = 0; // tidak ada diskon
    }
    $totalBayar = $totalBelanja - ($totalBelanja * $diskon);
    return $totalBayar;
}
// Contoh penggunaan
$totalBelanja = 600000;
$totalBayar   = hitungTotalBayar($totalBelanja);
echo "Total belanja: Rp " . number_format($totalBelanja, 0, ',', '.') . "";
echo "Total bayar setelah diskon: Rp " . number_format($totalBayar, 0, ',', '.') . "";
?>
</body>
</html>