<!DOCTYPE html>
<html>
<head>
	<title>daftar penghuni</title>
</head>
<body>
	<img src="dinsos.png" width="100" height="100">
<h5 align="left">dinas sosial</h5>
<h5>kota tangerang </h5>
<h5>daftar penghuni dinas sosial </h5>




<?php 
$koneksi = mysqli_connect("localhost", "root", "", "dinsos");
$data = mysqli_query($koneksi, "SELECT * FROM penghuni");
?>
<table border="1" width="100">
	<thead>
		<th>nomor</th>
		<th>nama</th>
		<th>alamat</th>
		<th>nomor telepon </th>
	</thead>
<?php
while ($isi=mysqli_fetch_array($data)){ 
	?>
	<tbody>
	<td><?php echo $isi['nomor']; ?></td>
	<td><?php echo $isi['nama']; ?></td>
	<td><?php echo $isi['alamat']; ?></td>
	<td><?php echo $isi['nomor_telepon']; ?></td>
</tbody>
<?php
}
?>
</table>




</body>
</html>