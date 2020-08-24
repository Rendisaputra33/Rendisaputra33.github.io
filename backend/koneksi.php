<?php
$host="localhost";
$user="root";
$pass="";
$db="lowongan";
$koneksi=mysqli_connect($host,$user,$pass);
$db_koneksi=mysqli_select_db($koneksi,$db);
?>