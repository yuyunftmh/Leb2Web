<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Input Data</h2>
    <form method="POST">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br><br>
		<label for="tgl_lahir">Tanggal Lahir:</label>
		<input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>
		<label for="pekerjaan">Pekerjaan:</label>
		<select id="pekerjaan" name="pekerjaan">
			<option value="karyawan">Karyawan</option>
			<option value="dosen">Dosen</option>
            <option value="programmer">Programmer</option>
		</select><br><br>
		<input type="submit" value="Submit">
	</form>
    <?php
    $nama = $_POST["nama"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $pekerjaan = $_POST["pekerjaan"];

    $tanggal_lahir = new DateTime($tgl_lahir);
    $sekarang = new DateTime();
    $umur = $sekarang->diff($tanggal_lahir)->y;

    if ($pekerjaan == "karyawan") {
        $gaji = 5000000;
    } else if ($pekerjaan == "dosen") {
        $gaji = 7000000;
    } else if ($pekerjaan == "programmer") {
        $gaji = 8000000;
    }

    echo "<h2>Hasil Input Data</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Tanggal Lahir: " . $tgl_lahir . "<br>";
    echo "Umur: " . $umur . " Tahun<br>";
    echo "Pekerjaan: " . $pekerjaan . "<br>";
    echo "Gaji: Rp " . $gaji . "<br>";
    ?>
</body>
</html>