<?php
	 session_start();
                    include "koneksi.php";
                    $nim =  $_SESSION['NIM'];
                    $nama = $_SESSION['Nama'];
                    $id = $_GET['id'];
                     $sql = "SELECT id,postingan.NIM,postingan,judul,tanggal,gambar,mahasiswa.Nama 
                            FROM postingan
                            INNER JOIN mahasiswa
                            USING(NIM)
                            WHERE id = '$id'";
                        $result = $con->query($sql);
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
                    <?php
                   
                        if ($result->num_rows > 0) {
                          
                            while($row = $result->fetch_assoc()) {
                            
                                //echo "<table border='1'>";
                                echo "<center>";
                                    echo "<mark><b>". $row["judul"]."</b></mark><br>oleh<br>";
                                    echo "<mark>".$row["Nama"]."</mark> | ". $row["tanggal"]."<br><br>";
                                    echo "<p align='justify'>".$row["postingan"]."</p><br>";
                                    echo "<img height='100px' src=image/".$row['gambar'].">";
                                echo "</center>";
                               
                                    if($row['Nama']!=$nama){
                                        echo "<a href='7_semuaposting.php'>Back</back>";
                                     
                                    }else{
                                        echo "<br><a href='6_editposting.php?id=".$row['id']."'>Edit Post</a>";
                                         echo " | <a href='7_semuaposting.php'>Back</back>";
                                    }
                
                            }
                        } else {
                            echo "0 results";
                        }
                        $con->close();
                    ?>
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