<?php 
    require 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysql_query("SELECT * FROM admin WHERE username='$username' and password='$password'");
    $cek = mysql_num_rows($query);
    echo $cek;
?>