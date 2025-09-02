
<?php
$barang = [
    ["Meja", 10],
    ["Tipe-x", 3],
    ["Mouse", 2],
    ["Kursi", 8],
];
foreach ($barang as $item) {
    if ($item[1] < 5) {
        echo "Stok $item[0] hampir habis (sisa $item[1])<br>";
    }
}
