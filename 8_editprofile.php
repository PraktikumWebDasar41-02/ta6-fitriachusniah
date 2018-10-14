<?php
	session_start();
	include "koneksi.php";
	$nim = $_SESSION['NIM'];
	$nama = $_SESSION['Nama'];
   	$sql = mysqli_query($con, "SELECT * FROM mahasiswa WHERE NIM = '$nim'");
	$preview = mysqli_fetch_row($sql);
	
?>
<html>
    <head>
        <title>
            TA6 FitriaRiadatul
        </title>
        <link href="cssku.css" rel="stylesheet" type="text/css">
    </head>

    <body  background="bg.jpg">
        <center>
            <div id="container">
				<?php include "header.php"; ?>

                <div  id="container2">
                    <br><br>
				                               <form method="post">
						<table>
							<tr>
								<td>Student ID</td><td>:</td>
								<td><input type="text" name="nim" readonly="readonly" value="<?php echo $preview['0'] ?>"></td>
							</tr>
							<tr>
								<td>Name</td><td>:</td>
								<td><input type="text" name="nama" value="<?php echo $preview['1'] ?>"></td>
							</tr>
							<tr>
								<td>Gender</td><td>:</td>

								<td>
									
									<input type="radio" name="jk" value="L" <?php echo ($preview['2']=='L')?'checked':'' ?>>L
									<input type="radio" name="jk" value="P" <?php echo ($preview['2']=='P')?'checked':'' ?>>P
								</td>
							</tr>
							<tr>
								<td>Class</td><td>:</td>
								<td>
									<select name="kelas">
										<option value="41-01" <?php echo ($preview['3']=='41-01')?'selected':'' ?>>41-01</option>
										<option value="41-02" <?php echo ($preview['3']=='41-02')?'selected':'' ?>>41-02</option>
										<option value="41-03" <?php echo ($preview['3']=='41-03')?'selected':'' ?>>41-03</option>
										<option value="41-04" <?php echo ($preview['3']=='41-04')?'selected':'' ?>>41-04</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Faculty</td><td>:</td>
								<td>
									<select name="fakultas">
										<option value="FIK" <?php echo ($preview['4']=='FIK')?'selected':'' ?>>Fakultas Industri Kreatif</option>
										<option value="FEB" <?php echo ($preview['4']=='FEB')?'selected':'' ?>>Fakultas Ekonomi dan Bisnis</option>
										<option value="FKB" <?php echo ($preview['4']=='FKB')?'selected':'' ?>>Fakultas Komunikasi dan Bisnis</option>
										<option value="FIT" <?php echo ($preview['4']=='FIT')?'selected':'' ?>>Fakultas Ilmu Terapan</option>\
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="3"><center><input type="submit" name="edit" value="EDIT"></center></td>
							</tr>
						</table>
					</form>         
                </div>


                <div id="footer">
                    <center>
                        <br>
                        <font color="#fff" size="-1">
                            &copy; Copyright 2018. All rights reserved.<br>
                            Fakultas Ilmu Terapan Universitas Telkom <br>
                            Fitria Riadatul Chusniah (6701171069)
                        </font>
                    </center>
                </div>
            </div>
        </center>
    </body>
</html>

<?php
if(isset($_POST['edit'])){
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
			 $query = "UPDATE mahasiswa SET Nama = '$nama',Jk = '$jk',Kelas = '$kelas',Fakultas = '$fakultas' WHERE NIM = '$nim'";
			  if(mysqli_query($con,$query)){
			   	header("location:3_halamanawal.php");
			   	echo "Berhasil di ubah";
				    $con->close();
			  }else{
			   echo "gagal";
			  }
	}else{
		echo "data gagal diedit";
	}

	
}

?>
