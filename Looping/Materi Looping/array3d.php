<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<center>";?>
    <h1>ARRAY 3 D</h1>
<?php
    $nilai = [
        ["nama" =>"Andi", "mapel"  => ["Matematika" => 80, "IPA" => 90, "Bahasa" => 85]],
        ["nama" =>"Budi",  "mapel" => ["Matematika" => 75, "IPA" => 88, "Bahasa" => 79]],
        ["nama"=> "Citra", "mapel" => ["Matematika" => 92, "IPA" => 81, "Bahasa" => 87]],
    ];

    foreach ($nilai as $data) {
        echo "Nilai " . $data["nama"] . ":<br>";
        foreach ($data["mapel"] as $pelajaran => $nilai) {
            echo "- $pelajaran: $nilai <br>";
        }
        echo "<br>";
}
?>
</body>
</html>
