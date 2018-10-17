<?php
	echo("Hasil Pencarian");
	mysql_connect("localhost","","");
	mysql_select_db("TEST_DB");

	$perintah = "SELECT * FROM hm WHERE nim like '%cari%'";
	$hasil = mysql_query($perintah);
	$jumlah = mysql_num_rows($hasil);

	if ($jumlah > 0) {
		echo ("Data yang ditemukan : $jumlah<br>");
		while ($data = mysql_fetch_row($hasil)) {
			echo ("Nama : $data[1]<br>");
			echo ("NIM : $data[2]<br>");
			echo ("Jenis Kelamin : $data[3]<br>");
			echo ("Program Studi : $data[4]<br>");
			echo ("Fakultas : $data[5]<br>");
			echo ("Asal : $data[6]<br>");
			echo ("Moto Hidup : $data[7]<br>");
		}else {
			echo "Maaf, data yang anda cari tidak ada";
		}
	}
?>