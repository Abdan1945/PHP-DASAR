
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form oop</title>
</head>
<body>
    <fieldset>
    <legend>
        Biodata Siswa
    </legend>
    <form action="" method="post">
        
        <label for="">Nama</label>
        <input type="text" name="nama" required><br>
        <label for="">Kelas</label>
        <input type="text" name="kelas" required><br>
        <label for="">Jenis Kelamin</label>
        <input type="radio" name="jenis_kelamin" value = "Laki-laki" required>Laki-laki 
        <input type="radio" name="jenis_kelamin" value = "Perempuan" required>Perempuan <br>
        <label for="">Tanggal Lahir </label>
        <input type="date" name="tanggal_lahir" value = "" required><br>
        <label for="">Agama</label>
        <select name= "agama" id=""> <br> <br>
                <option value="Islam">Islam</option><br>
                <option value="Kristen">kristen</option><br>
                <option value="Budha">Budha</option>
            </select><br>
        <br><input type="submit" value= "Submit"><br>
</form>
    </fieldset>

    <?php 
        class Biodata 
        {
            public $nama;
            public $kelas;
            public $Jenis_kelamin;
            public $tanggal_lahir;
            public $agama;

            public function __construct ($nama, $kelas, $Jenis_kelamin, $tanggal_lahir, $agama)
            {
                $this -> nama = $nama;
                $this -> kelas = $kelas;
                $this -> Jenis_kelamin = $Jenis_kelamin;
                $this -> tanggal_lahir = $tanggal_lahir;
                $this -> agama = $agama;
            }

            public function tampilkanbiodata ()
            {
                return "Nama: " . $this -> nama . "<br>" . 
                "kelas: " . $this->kelas . "<br>" . 
                "jenis_Kelamin: " . $this -> Jenis_kelamin . "<br>" .
                "tanggal_lahir: " . $this -> tanggal_lahir . "<br>" .
                "agama: " . $this -> agama . "<br>";
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = $_POST ['nama'];
        $b = $_POST ['kelas'];
        $c = $_POST ['jenis_kelamin'];
        $d = $_POST ['tanggal_lahir'];
        $e = $_POST ['agama'];


        $biodata = new Biodata ($a, $b, $c, $d, $e);
        echo $biodata -> tampilkanbiodata ();
        
        }
    ?>
        </body>
    </html>