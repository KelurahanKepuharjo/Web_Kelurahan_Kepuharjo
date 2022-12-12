<?php
$db = mysqli_connect('localhost','root','','kepuharjo');
    $id_akun = $_POST['id_akun'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kebangsaan = $_POST['kebangsaan'];
    $agama = $_POST['agama'];
    $status_perkawinan = $_POST['status_perkawinan'];
    $pekerjaan = $_POST['pekerjaan'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $surat_digunakan_untuk = $_POST['surat_digunakan_untuk'];
    $image = $_FILES['image']['name'];

    $imagePath = "uploads/".$image; 
    move_uploaded_file($_FILES['image']['tmp_name'],$imagePath); 
    $db->query("INSERT INTO domisili (id_akun,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,kebangsaan,agama,status_perkawinan,pekerjaan,nik,alamat,surat_digunakan_untuk,image) VALUES ('{$id_akun}','{$nama}','{$tempat_lahir}','{$tanggal_lahir}','{$jenis_kelamin}','{$kebangsaan}','{$agama}','{$status_perkawinan}','{$pekerjaan}','{$nik}','{$alamat}','{$surat_digunakan_untuk}','{$image}')");
?>