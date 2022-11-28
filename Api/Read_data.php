<?php
session_start();
include('koneksi.php');
$sql = "SELECT * FROM berita";
$result = mysqli_query($conn, $sql);
$array = array();
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        $data = array(
            'id_berita' => $row['id_berita'],
            'judul' => $row['judul'],
            'sub_title' => $row['sub_title'],
            'dekripsi' => $row['dekripsi'],
        );
    array_push($array, $data);
    }
}
echo json_encode($array);
?>