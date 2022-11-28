<?php

    $id_akun = $_POST["id_akun"];
    $nama_lengkap= $_POST["nama_lengkap"];
    $password= $_POST["password"];
    $no_hp = $_POST["no_hp"];
    
    require_once 'koneksi.php';

$findexist="select * from akun where id_akun='$id_akun'";

        $resultsearch=mysqli_query($conn,$findexist);
    if(mysqli_num_rows($resultsearch)>0)
    {
           while($row=mysqli_fetch_array($resultsearch))
          {
              $result["success"] = "3";
              $result["message"] = "user Already exist";

              echo json_encode($result, JSON_PRETTY_PRINT);
              mysqli_close($conn);
          }
  }
else{

    $sql = "INSERT INTO akun (id_akun,nama_lengkap,password,no_hp) VALUES ('$id_akun','$nama_lengkap','$password','$no_hp');";

    if ( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "Registration success";

        echo json_encode($result, JSON_PRETTY_PRINT);
        mysqli_close($conn);

    } else {
        $result["success"] = "0";
        $result["message"] = "error in Registration";
        echo json_encode($result, JSON_PRETTY_PRINT);
        mysqli_close($conn);
    }
}

?>