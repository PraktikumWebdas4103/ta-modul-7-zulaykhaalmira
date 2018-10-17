<form method="POST">
	Nama <input type="text" name="nama"><br>
	NIM <input type="text" name="nim"><br>
	Jenis Kelamin <input type="radio" name="jk">Perempuan
	<input type="radio" name="jk">Laki-Laki<br>
	Program Studi <select name="prodi">
        <option value="Manajemen Informatika">Manajemen Informatika</option>
        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
        <option value="Administasi Bisnis">Administasi Bisnis</option>
        <option value="DKV">DKV</option>
    </select><br>
	Fakultas <select name="fakultas">
        <option value="FIT">FIT</option>
        <option value="FKB">FKB</option>
        <option value="FEB">FEB</option>
        <option value="FIK">FIK</option>
    </select><br>
	Asal <input type="text" name="asal"><br>
	Moto Hidup <input type="textarea" name="moto"><br>
	<input type="submit" name="submit" value="Input">
</form>

<?php
	include 'koneksi.php';

	$servername = "localhost";
    $nama = "root";
    $nim = "";
    $db = "jurnalhm";

    if($con==false){
        die("Koneksi Gagal" . $con->connect_error);
    }

	if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prodi'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];

	$sql = "INSERT INTO hm (nama, nim, jk, prodi, fakultas, asal, moto) values ('$nama', '$nim', '$jk', '$prodi', '$fakultas', '$asal', '$moto')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "<center>ERROR<center>";
	}
	header('location:lihatdata.php');
	}
?>