<?php

header("Acces-Control-Allow-Origin: *");
error_reporting(E_ALL);
ini_set('display_errors','1');
include 'koneksi.php';

if (isset($_POST['id_akun']) && isset($_POST['nama_lengkap']) && isset($_POST['password']) && isset($_POST['no_hp']) ) {
    $id_akun = $_POST['id_akun'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $no_hp = $_POST['no_hp'];

    $checkSql = "SELECT * FROM akun WHERE id_akun = '".$id_akun."'";
    $checkResult = mysqli_query($conn, $checkSql);

    if ($checkResult->num_rows == 1) {
        $data = [
            'failed' => true,
            'message' => 'username and password already used'
        ];
        
        echo json_encode($data, JSON_PRETTY_PRINT);
    }else {
    $sql = "INSERT INTO akun (id_akun, nama_lengkap, password, no_hp) VALUES ('$id_akun', '$nama_lengkap', '$password', '$no_hp')";
    if (mysqli_query($conn, $sql)) {
        $data = [
            'success' => true,
            'message' => 'User Created Succesfully'
        ];
    } else {
        $data = [
            'failed' => true,
            'message' => 'User Created failed'
        ];
    }
    echo json_encode($data, JSON_PRETTY_PRINT);
    }
}else {
    $data = [
        'failed' => false,
        'message' => 'Please fill all the fields'
    ];
    
    echo json_encode($data, JSON_PRETTY_PRINT);
}
header('Content-type: application/json');

?>