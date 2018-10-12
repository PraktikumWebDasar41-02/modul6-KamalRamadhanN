<form method="POST">
	<h2><center>Login</center></h2>
	<hr color = "black" size= "5px" width="300px">
	<table align="center">
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Pass</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="LOGIN" align="center"></td>
			<td><a href="regristrasi.php">Regis</a></td>
		</tr>
	</table><br><br>
			
			
	
</form>

<?php

error_reporting(0);

	if (isset($_POST['submit'])) {
		session_start();

		include"koneksi.php";

		$nim = $_POST['nim'];
		$pass = $_POST['pass'];

		$sql = "SELECT nim, pass FROM mhs WHERE nim='$nim'";

		$qry = mysqli_query($koneksi,$sql);
		$row = mysqli_fetch_row($qry);

		if ($nim == $row[0]) {
			if ($pass == $row[1]) {
				$_SESSION["status"]=['login'];
        		$_SESSION["username"]=$row[0];
        		$_SESSION["password"]=$row[1];

        		echo "Login Berhasil";
        		header("Location:view.php");
        		
			}
			else{
				echo "Password Salah";
			}
		}
		else{
			echo "NIM Salah";
		}
	}
?>