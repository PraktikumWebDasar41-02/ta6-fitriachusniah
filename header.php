   <head>
        <link href="cssku.css" rel="stylesheet" type="text/css">
    </head>
  <div  id="top_menu">
                

                         <ul>
                            <li>
                                <a href='logout.php'>LOGOUT</a>
                            </li>
                             <li><?php 
                            $nick = explode(' ', $nama);
                            echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        Hai, $nick[0]";?></li>
                            <li>
                                    <a href='7_semuaposting.php'>All Post</a>
                            </li>
                            <li>
                                    <a href='5_daftarposting.php'>My Post</a>
                            </li>
                             <li>
                                    <a href='4_posting.php'>(+)Add New Post</a>
                            </li>
                            <li>
                                    <a href="3_halamanawal.php">Home</a>
                            </li>
                        </ul>

                </div>