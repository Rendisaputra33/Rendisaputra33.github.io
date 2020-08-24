<?php
include 'koneksi.php';

$username = $_POST['email'];
$password = $_POST['Password'];

$query = mysqli_query("SELECT * FROM login_user WHERE email='$username',password='$password'");
$validasi = mysqli_query($query);

if($validasi > 0) {
    session_start();
    $_SESSION['email'] = $username;
    $_SESSION['status'] = 'login';
    header("location:dasbord.php");
}else{
    header("location:login.php");
}
?>