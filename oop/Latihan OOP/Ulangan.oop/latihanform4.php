
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Sebuah Form</title>
</head>
<body>
    <fieldset>
    <legend>
        Biodata 
    </legend>

    <form action="" method="POST">
        <label for="">Nama Lengkap:</label> 
        <input type="text" name="nama"><br><br>

        <label for="">Tanggal Lahir </label>
        <input type="date" name="tanggal_lahir" value = "" required><br><br>

         <label for="">Jenis Kelamin: </label>
        <input type="radio" name="jenis_kelamin" value = "Laki-laki" required>Laki-laki 
        <input type="radio" name="jenis_kelamin" value = "Perempuan" required>Perempuan <br>
      </select><br>

        <label for="">Tinggi Badan:</label> 
        <input type="number" name="tinggi"><br><br>

        <label for="">Berat Badan:</label> 
        <input type="number" name="berat"><br><br>

        <input type="submit" value="Submit">
        </form>
</table>
    <table border ="1">
<?php
   

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];

    echo "Nama Lengkap: " . $nama . "<br>";
    echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
    echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
    echo "Tinggi Badan: " . $tinggi . " cm<br>";
    echo "Berat Badan: " . $berat . " kg<br>";

    
    
}?>
</table>
</body>
</html>
