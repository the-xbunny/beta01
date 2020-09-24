<?php
// host alamat server localhost/127.0.0.1
$host = "localhost";
// username login database server
$username = "root";
// password database server
$password = "";
// buat database
$database = "CREATE DATABASE belajarphp";

// buat koneksi
$connect = mysqli_connect($host, $username, $password);

// cek koneksi berhasil apa tidak
if (!$connect) {
    die("koneksi tidak berhasil" + mysqli_connect_error());
}
// query membuat database
$query = mysqli_query($connect, $database);
// cek apakah database berhasil di buat atau tidak
if (!$query) {
    echo "gagal" . mysqli_error($connect);
} else {
    echo "database berhasil di buat";
}