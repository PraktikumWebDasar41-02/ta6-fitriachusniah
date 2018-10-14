<?php
	session_start();
	include "koneksi.php";
?>
<html>
<head><title>TA 6 Fitria Riadatul Chusniah - 6701171069</title></head>
<body background="bg.jpg" style="color: #fff">
	<center>
		<br><br><br><br>
		<table style="border: solid thin #666; height: 250px; width: 300px;">
			<form method="post">
			<tr>
				<td>NIM</td><td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td><td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td><td>:</td>
				<td><input type="radio" name="jk" value="L" checked="checked">L <input type="radio" name="jk" value="P">P </td>
			</tr>
			<tr>
				<td>Kelas</td><td>:</td>
				<td>
					<select name="kelas">
						<option value="41-01">41-01</option>
						<option value="41-02">41-02</option>
						<option value="41-03">41-03</option>
						<option value="41-04">41-04</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td><td>:</td>
				<td>
					<select name="fakultas">
						<option value="FIK">Fakultas Industri Kreatif</option>
						<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
						<option value="FKB">Fakultas Komunikasi dan Bisnis</option>
						<option value="FIT">Fakultas Ilmu Terapan</option>\
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3"><center><input type="submit" name="submit" value="SIGN UP"><br>
					<a href="2_formlogin.php">Login</a></center></td>
			</tr>
		</table>
		
	</form>
		</table>
	</center>
	
</body>
</html>

<?php
if (isset($_POST['submit'])){
	$nim 		= $_POST['nim'];
	$len_nim	= strlen($nim);
	$nama 		= $_POST['nama'];
	$len_nama	= strlen($nama);
	$kelas 		= $_POST['kelas'];
	$jk			= $_POST['jk'];
	$fakultas 	= $_POST['fakultas'];

	$cek = true;

	if(empty($nim)){
		echo "NIM Tidak Boleh KOSONG! <br>";
		$cek = false;
	}else{
		if($len_nim!=10){
			echo "NIM harus 10 Karakter! <br>";
			$cek = false;
		}else{
			if(!is_numeric($nim)){
				echo "NIM harus angka! <br>";
				$cek = false;
			}
		}
	}

	if(empty($nama)){
		echo "Nama Tidak Boleh KOSONG! <br>";
		$cek = false;
	}else{
		if($len_nama>35){
			echo "Nama maksimal 35 Karakter! <br>";
			$cek = false;
		}else{
			if(is_numeric($nama)){
				echo "Nama tidak boleh angka! <br>";
				$cek = false;
			}
		}
	}

	if($cek==true){
				$query= "INSERT INTO mahasiswa (NIM,Nama,Jk,Kelas,Fakultas) VALUES ('$nim','$nama','$jk','$kelas','$fakultas')";
			
			$hasil = mysqli_query($con,$query);
			if($hasil){
				echo "berhasil";
			}else{
				echo "data gagal diinput";
			}
	}else{
		echo "data gagal diinput";
	}
	
}
?>

