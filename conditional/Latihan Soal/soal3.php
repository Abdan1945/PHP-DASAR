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
$total = 600000;
$diskon  = 0;

if (total >= 500000) { 
    $diskon = 0.2 * $total;
}elseif ($total >= 250000) {
    $diskon = 0.1 * $total; 
}else {
    $diskon = 0;
}

echo "Total" . $total . "<br>";
echo "Diskon" . $diskon . "<br>";
echo "Total setelah diskon: " . ($total - $diskon) . "<br>";

?>
</body>
</html>