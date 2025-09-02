<?php
$film = [
    ["Kuntilanak", 9],
    ["Popeye", 7],
    ["madagaskar", 8],
    ["Upin ipin", 6],
];
foreach ($film as $f) {
    if ($f[1] >= 8) {
        echo "Film: $f[0], Rating: $f[1] <br>";
    }
}
