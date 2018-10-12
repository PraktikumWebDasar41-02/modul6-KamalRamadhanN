<?php
$server = "localhost";
	$username = "root";
	$password = "";
	$db = "kamalamaw";
	$koneksi = mysqli_connect()($server,$username,$password,$db);

	session_start();
	if ($_SESSION['status'] !="login") {
		header("Location:login.php");
	}
	echo " Hallo ";
	$hasil = mysqli_query($koneksi,"SELECT * FROM mhs");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	<table border="1">
	<tr>
		<h1>Tampilan Data Registrasi</h1>
		<th>Nama</th>
		<th>Nim</th>
		<th>Kelas</th>
		<th>Jenis Kelamin</th>
		<th>Hobi</th>
		<th>Fakultas</th>
		<th>Alamat</th> 
	</tr> 
	<?php
	while ($row =mysqli_fetch_assoc($hasil)): {
	?>
	<tr>
	<td><?= $row["nama"];	?></td>
	<td><?= $row["nim"];	?></td>
	<td><?= $row["kelas"];	?></td>
	<td><?= $row["jnskel"];	?></td>
	<td><?= $row["hobi"];	?></td>
	<td><?= $row["fakultas"];	?></td>
	<td><?= $row["alamat"];	?></td>
	</tr>

	<?php endwhile; ?>

</table>
</body>
</html>