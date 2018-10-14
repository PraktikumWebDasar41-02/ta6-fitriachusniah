<?php
 session_start();
                    include "koneksi.php";
                    $nim =  $_SESSION['NIM'];
                    $nama = $_SESSION['Nama'];
                     $sql = "SELECT * FROM mahasiswa WHERE NIM = '$nim'";
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
                    <br><br>
                                        <b>Your Profile</b><br>
                                        <img src="user.png" height="60" width="60" style="border-radius: 35px; background-color: transparent;">
                    <?php
                   
                        if ($result->num_rows > 0) {
                          
                            while($row = $result->fetch_assoc()) {
                            
                                echo "<table>";
                                echo "<tr><td>Student ID</td><td>:</td><td>". $row["NIM"]."</td></tr>";
                                echo "<tr><td>Name</td><td>:</td><td>". $row["Nama"]."</td></tr>";
                                echo "<tr><td>Gender</td><td>:</td><td>". $row["Jk"]."</td></tr>";
                                echo "<tr><td>Class</td><td>:</td><td>". $row["Kelas"]."</td></tr>";
                                echo "<tr><td>Faculty</td><td>:</td><td>". $row["Fakultas"]."</td></tr>";
                                echo "</table>";
                    

                                     echo "<br><a href='8_editprofile.php?id=".$row['NIM']."'>Edit Profile</a>";
                                    
                                
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