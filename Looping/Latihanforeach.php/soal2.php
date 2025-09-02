<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "<center>"; ?>
        <h1>SOAL 2</h1>
    <h3>Daftar nama siswa dan kelas</h3>

<?php
$siswa = [
    ["nama" => "Budi", "kelas" => "XI RPL 1"],
    ["nama" => "Ani", "kelas" => "XI RPL 2"],
    ["nama" => "Siti", "kelas" => "XI RPL 3"],
];

foreach ($siswa as $data) {
    echo "Nama: " . $data["nama"] . " - Kelas: " . $data["kelas"] . "<br>" , "<br>";
}
?>
</body>
</html>