<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<center>"?>
    <h1>SOAL 2</h1>
<?php
// Data username dan password yang valid
echo "<center>";
$id = [
    "admin" => "12345",
    "siswa" => "1111",
];
// Contoh input username dan password (bisa diganti sesuai kebutuhan)
$username = "admin";
$password = "12345";
// Cek apakah username ada di data validUsers
if (array_key_exists($username, $id)) {
    // Username benar, cek password
    if ($id[$username] === $password) {
        // Login berhasil sesuai role
        if ($username === "admin") {
            echo "Login berhasil sebagai Admin";
        } elseif ($username === "siswa") {
            echo "Login berhasil sebagai Siswa";
        }
    } else {
        // Password salah
        echo "Password salah";
}
} else {
        // Username tidak ditemukan
        echo "Username tidak ditemukan";
    }
?>
</body>
</html>