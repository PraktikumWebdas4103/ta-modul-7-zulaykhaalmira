<?php
	include 'koneksi.php';
	$sql = mysqli_query($con,"SELECT * FROM hm");
?>

<form method="POST">
	<table>
		<tr>
			<td><a href = "inputdata.php">Input Data</a></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><input type="text" name="nim" placeholder="NIM"><input type="submit" name="submit" value="Cari"></td>
		</tr>
	</table>
	<table border="1">
		<tr>
			<td>NO</td>
			<td>NAMA</td>
			<td>NIM</td>
			<td><center>Aksi</center></td>
		</tr>
		<?php
			if(mysqli_num_rows($sql)>0) {
				$no = 1;
				while ($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $data['nama'] ?></td>
			<td><?php echo $data['nim'] ?></td>
			<td><a href="deletedata.php">Delete |</a>
			<a href="detaildata.php">Detail</a></td>
		</tr>
		<?php $no++; } ?>
		<?php } ?>
	</table>
</form>