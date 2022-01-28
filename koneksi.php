<?php
    $servername="localhost";
    $username="root";
    $password= "";
    $database="05_petugas_12rpl1";

    $konek= mysqli_connect($servername,$username,$password,$database);
    if ($konek->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      //echo "Connected successfully";
?>