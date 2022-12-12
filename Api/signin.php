<?php
 $db = mysqli_connect('localhost','root','','kepuharjo');
 $id_akun = $_POST['id_akun'];
 $password = $_POST['password']; 
 $sql = "SELECT * FROM akun WHERE id_akun = '".$id_akun."'";
 $result = mysqli_query($db,$sql);
    // $result = array(); 
 if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password']) ) {
        echo json_encode([ 
        'success' => true,    
        'user' => $row, 
        JSON_PRETTY_PRINT
    ]);    
    } else {
                     echo json_encode([
            'message' => "Password Salah"]
        );
    }
 } 
 else{
 	echo json_encode(['message' => "Nik dan Password Salah"]);
 }
?>

