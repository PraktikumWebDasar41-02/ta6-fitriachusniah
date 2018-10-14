<?php
	 session_start();
                    include "koneksi.php";
                    $nim =  $_SESSION['NIM'];
                    $nama = $_SESSION['Nama'];
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
    					         <b>Your Posts</b>
                     <?php
                            include_once("koneksi.php");
                            $batas = 5;
                                if(isset($_GET['page']) && !empty($_GET['page'])){
                                    $start = $_GET['page'];
                                }else{
                                    $start = 1;
                                }

                            $mulai = ($start * $batas) - $batas;

                            $query = "SELECT * FROM postingan WHERE NIM = '$nim' ORDER BY id DESC";
                            $tampil = mysqli_query($con, $query);
                            $result = mysqli_num_rows($tampil);
                            $lastPage = ceil($result/$batas);
                            $firstPage = 1;
                            $nextPage = $start + 1;
                            $previousPage = $start - 1;
                            $query2 = "SELECT *
                            FROM postingan WHERE NIM = '$nim' ORDER BY id DESC LIMIT $mulai, $batas";
                            $tampil2 = mysqli_query($con, $query2);
                    ?>
                            <table border="0" style="border: solid thin #666">
                                <thead>
                                    <tr>
                                        <th>Post Title</th>
                                        <th>Post Date</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                    <?php
                            while($row = mysqli_fetch_assoc($tampil2)){
                    ?>
                                    <tr style="border: solid thin #666">
                                        <td style="border: solid thin #666"><?php echo $row['judul']; ?></td>
                                        <td style="border: solid thin #666"><?php echo $row['tanggal']; ?></td>
                                        <td style="border: solid thin #666"><?php echo "<a href='5__detailposting.php?id=".$row['id']."'><img height='70px' src=image/".$row['gambar'].">"; ?></td>
                                    </tr>
                    <?php 
                            } 
                    ?>
                                </tbody>
                            </table>
                               <?php if($start != $firstPage) { ?>
                                       
                                        <a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
                                        <span aria-hidden="true">First</span>
                                        </a>
                                     
                                        <?php } ?>
                                        <?php if($start >= 2) { ?>
                                        <a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a>
                                        <?php } ?>
                                        <a class="page-link" href="?page=<?php echo $start ?>"><?php echo $start ?></a>
                                        <?php if($start != $lastPage) { ?>
                                        <a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a>
                                        <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
                                        <span aria-hidden="true">Last</span>
                                        </a>
                                        
                                <?php } ?>
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

?>