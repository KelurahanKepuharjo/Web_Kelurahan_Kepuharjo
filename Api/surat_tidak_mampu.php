<?php
$db = mysqli_connect('localhost','root','','kepuharjo');
    $id_akun = $_POST['id_akun'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin']; 
    $kebangsaan = $_POST['kebangsaan'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $tgl_pengajuan = $_POST['tgl_pengajuan'];
    $keperluan = $_POST['keperluan'];
    $status_surat = $_POST['status_surat'];
    $rt = $_POST['RT'];
    $rw = $_POST['RW'];
    $image = $_FILES['image']['name']; 

    $imagePath = "uploads/".$image;
    move_uploaded_file($_FILES['image']['tmp_name'],$imagePath);
    $db->query("INSERT INTO surat_tidak_mampu (id_akun,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,kebangsaan,agama,status,pekerjaan,nik,alamat,tgl_pengajuan,keperluan,status_surat,RT,RW,image) VALUES ('".$id_akun."','".$nama."','".$tempat_lahir."','".$tanggal_lahir."','".$jenis_kelamin."','".$kebangsaan."','".$agama."','".$status."','".$pekerjaan."','".$nik."','".$alamat."','".$tgl_pengajuan."','".$keperluan."','".$status_surat."','".$rt."','".$rw."','".$image."')");
?>