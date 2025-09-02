<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<center>";?>
    <h1>SOAL 5</h1>
<?php
$nilaiSiswa = [
    "Abdan" => 100,
    "Fadhlan"  => 75,
    "Gojin" => 80,
];
foreach ($nilaiSiswa as $nama => $nilai) {
    if ($nilai >= 75) {
        echo "$nama lulus dengan nilai $nilai <br><br>";
    } else {
        echo "$nama tidak lulus (nilai: $nilai) <br>";
    }
}
?>
</body>
</html>