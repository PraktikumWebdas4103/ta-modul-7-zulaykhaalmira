<?php
	include 'lihatdata.php';
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$jk = $_POST['jk'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];

	$query = "DELETE FROM hm WHERE nama='$nama', nim='$nim', jk='$jk', prodi='$prodi', fakultas='$fakultas', asal='$asal', moto='$moto'";
	mysqli_query($con,$query);
	header("location: inputdata.php");
?>