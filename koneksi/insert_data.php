<?php
session_start();
include('koneksi.php');
$uname = $_POST['username'];
$pw =  md5($_POST['password']);
$alm = $_POST['alamat'];
$sql = "INSERT INTO user (username, password, alamat) values('$uname', '$pw', '$alm')";
if(mysqli_query($conn, $sql)){
    echo "Data Berhasil Ditambahkan";
    }else{
    echo "Error: " .$sql. " ";
    }
?>