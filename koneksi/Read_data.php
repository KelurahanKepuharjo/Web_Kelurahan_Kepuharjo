<?php
session_start();
include('koneksi.php');
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
$array = array();
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        $data = array(
            'id_user' => $row['id'],
            'nama_user' => $row['username'],
            'pass' => md5($row['password']),
            'alamat_user' => $row['alamat'],
        );
    array_push($array, $data);
    }
}
echo json_encode($array);
?>