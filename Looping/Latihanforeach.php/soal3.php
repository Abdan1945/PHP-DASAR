<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
// While
$nyawa = 3;
while ($nyawa > 0) {
    echo "Game masih berjalan (nyawa: $nyawa)<br>";
    $nyawa--;
}
echo "Game over<br><br>";

// Do While
$nyawa = 3;
do {
    echo "Game masih berjalan (nyawa: $nyawa)<br>";
    $nyawa--;
} while ($nyawa > 0);
echo "Game over";
?>
</body>
</html>