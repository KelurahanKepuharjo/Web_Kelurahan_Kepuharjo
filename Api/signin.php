<?php
 $db = mysqli_connect('localhost','root','','kepuharjo');
 $id_akun = $_POST['id_akun'];
 $password = $_POST['password'];
 $sql = "SELECT * FROM akun WHERE id_akun = '".$id_akun."'";
 $result = mysqli_query($db,$sql);

 if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password']) ) {
        echo json_encode("Berhasil Login");    
    } else {
        echo json_encode("Password Salah");
    }
 } 
 else{
 	echo json_encode("Nik dan Password Salah");
 }
?>

