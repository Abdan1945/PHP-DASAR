<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
   <?php echo "<center>";?>
    <h1>SOAL 1</h1></p>
<?php

echo "<center>";
$nilai = 50; 


if ($nilai >= 90) {
    echo "Lulus dengan predikat A";
} elseif ($nilai >= 75) {
    echo "Lulus dengan predikat B";
} elseif ($nilai >= 60) {
    echo "Lulus dengan predikat C";
} else {
    echo "Tidak Lulus dengan predikat D-Z";
}
?>
</body>
</html>