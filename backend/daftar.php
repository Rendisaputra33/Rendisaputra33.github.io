<?php
      include "koneksi.php";
      if (isset($_POST['signup-button'])) { 
        $nama = $_POST['username'];
        $email = $_POST['email'];
        $pasword = $_POST['password'];
        $ulangi = $_POST['password'];
        if ($pasword == $ulangi) {
            msqli_query($koneksi, "INSERT login_user VALUES ('$nama','$email','$pasword','$ulangi')");
        }
    ?>