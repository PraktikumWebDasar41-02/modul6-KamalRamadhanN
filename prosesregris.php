<?php
	error_reporting(0);
	include"koneksi.php";

  	if (isset($_POST['submit'])) {
		include"koneksi.php";
		if ($koneksi) {

			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$kelas = $_POST['kelas'];
			$prodi = $_POST['prodi'];
			$fakultas = $_POST['fakultas'];
			$hobi = $_POST['hobi'];
			$alamat = $_POST['alamat'];
			$password = $_POST['pass'];
			$jnskel = $_POST['jnskel'];
	
			$query = mysqli_query($koneksi,"SELECT*FROM mhs WHERE nim ='$nim'");
			$row = mysqli_fetch_array($query);
			$cari = strpos($nama, is_numeric($nama));

			
			if(strlen($nim)==10 && is_numeric($nim) == TRUE && !empty($nim)){
				if (strlen($nama)<=25 && is_string($nama) ==TRUE && !empty($nama)) {
						if ($nim!==$row['nim'] && !empty($nim)) {
								if (preg_match("/^[a-zA-Z ]*$/", $nama)) {
									if (isset($hobi)) {
										if(!empty($password)){
										
											$sql = $koneksi->query("
											INSERT INTO `mhs` (`nim`, `nama`, `kelas`,`jnskel`,`prodi`,`fakultas`,`hobi`,`alamat`,`pass`)
											VALUES ('$nim', '$nama', '$kelas','$jnskel','$prodi','$fakultas','$hobi','$alamat','$password')");

											echo "<h2>Registrasi Berhasil</h2><br>";
											echo "Silahkan Login <a href='login.php'><input type='submit' value='Halaman Utama'></a>";

										}
										else{
											echo "Masukkan Password !!";
										}
									}
									else{
										echo "Hobi Kosong !!!, Hobi Minimal 1";
									}
								}
								else{
									echo "Nama Tidak Boleh Kosong !!";
								}
						}
						else{
							echo "NIM sudah ada !!";
						}
					}	
				else{
					echo "Nama Kosong !!";
				}
			}
			else{
				echo "NIM Kosong !!";
			}
					
		}
		else{
			echo "REGISTRASI GAGAL";
		}
	}  		
 ?>