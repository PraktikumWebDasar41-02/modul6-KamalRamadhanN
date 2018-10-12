<html>
<head>
	<title>Form Regris</title>
	<h2>Regis</h2>
	
</head>
<body>
	<form method="POST">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<br>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<br>
		<tr>
			<td>Pass</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<br>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="D3MI-41-01">D3MI4101
				&nbsp;
			<td><input type="radio" name="kelas" value="D3MI-41-02">D3MI4102
				&nbsp;
			<td><input type="radio" name="kelas" value="D3MI-41-03">D3MI4103
				&nbsp;
			<td><input type="radio" name="kelas" value="D3MI-41-04">D3MI4104
				&nbsp;
				</td>
		</tr>
		<br>
		<tr>
			<td>JK</td>
			<td>:</td>
			<td><input type="radio" name="jnskel" value="Laki-laki">Lakilaki 
				&nbsp;
				<input type="radio" name="jnskel" value="Perempuan">Perempuan 
				&nbsp;
				</td>
		</tr>
		<br>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi" style="width: 160px" required>
				<option value="prod">Program Studi</option>
				<option value="MI">D3 Manajemen Informatika</option>
				<option value="TK">D3 Teknik Komputer</option>
				<option value="PH">D3 Perhotelan</option>
				<option value="DKV">S1 Desain Komunikasi Visual</option>
				<option value="KB">S1 Komunikasi dan Bisnis</option>
			</select></td>
		</tr>
		<br>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td>
				<input type="checkbox" name="hobi" value="mancing">Mancing
				<input type="checkbox" name="hobi" value="balap">Balapan
				<input type="checkbox" name="hobi" value="berantem">Gulat
				<input type="checkbox" name="hobi" value="touring">Touring
				<input type="checkbox" name="hobi" value="futsal">Futsal<br>
			</td>
		</tr>
		
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="fak">Fakultas</option>
				<option value="FIT">Fakultas Ilmu Terapan</option>
				<option value="FIK">Fakultas Industri Kreatif</option>
				<option value="FKB">Fakultas Komunikasi & Bisnis</option>
				<option value="FEB">Fakultas Ekonomi & Bisnis</option>
			</select></td>
		</tr>
		<br>
		<tr>
			<td>Alamat</td>
			<td>:</td>
				<input type="textarea" name="alamat" value="">
		</tr>
		<br>
	<input type="submit" name="submit">
</form>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		include"prosesregris.php";
	}
?>