<?php
	 session_start();
                    include "koneksi.php";
                    $nim =  $_SESSION['NIM'];
                    $nama = $_SESSION['Nama'];
                    $id = $_GET['id'];
                     $sql = mysqli_query($con,"SELECT * FROM postingan WHERE id = '$id'");
                       $preview = mysqli_fetch_row($sql);
?>
<html>
    <head>
        <title>
            TA6 FitriaRiadatul
        </title>
        <link href="cssku.css" rel="stylesheet" type="text/css">
    </head>

    <body background="bg.jpg">
        <center>
            <div id="container">

              <?php include "header.php"; ?>

                <div  id="container2">
                    <br>
					    <form action="#" method="post" enctype="multipart/form-data">
						<table>
							<tr>
								<td>Post Title</td><td>:</td>
								<td><input type="text" name="judul" value="<?php echo $preview['3'] ?>"></td>
							</tr>
							<tr>
								<td>Post</td><td>:</td>
								<td><textarea name="postingan" rows="20" cols="80"><?php echo $preview['2']?></textarea></td>
							</tr>
							<tr>
								<td>Image</td><td>:</td>
								<td><img height='100px' src=image/<?php echo $preview['5']?>> <input type="file" name="foto"></td>
							</tr>
							<tr>
								<td colspan="3">
									<center><br><input type="submit" name="submit" value="SUBMIT"></center>
								</td>
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
	include "koneksi.php";
    if(isset($_POST['submit'])){
    $nim 		=  $_SESSION['NIM'];
	//$tgl = date("Y-m-d");
	date_default_timezone_set('Asia/Jakarta');
	$now 		= date("Y-m-d"); 
	$postingan 	= $_POST['postingan'];
	$judul 		= $_POST['judul'];
	$gambar 	=  basename($_FILES["foto"]["name"]);
	$len 		= str_word_count($_POST['postingan']);

	//echo "$nim - $tgl - $postingan - $gambar - $len";
	if($len<30){
		echo "postingan minimal 30 kata";
	}else{

			if(empty($_FILES["foto"]["name"])){
				
				$query = "UPDATE postingan SET postingan = '$postingan',judul = '$judul',tanggal = '$now' WHERE id = '$id'";
			}else{
				$query = "UPDATE postingan SET postingan = '$postingan',judul = '$judul',tanggal = '$now',gambar = '$gambar' WHERE id = '$id'";
			}
			
			$update = mysqli_query($con,$query);
			if($update){
                header("Location:5__detailposting.php?id=".$id."");
			}else{
				echo "Gagal";
			}
	}
}

?>