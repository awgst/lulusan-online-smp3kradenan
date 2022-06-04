<?php

$hostname="localhost";
$username="root";
$password="";
$db="pengunguman_kelulusan";

$koneksi=new mysqli($hostname,$username,$password);

    if($koneksi)
    {
        mysqli_select_db($koneksi,$db);
    }
    else{
        echo "Error";
    }

?>