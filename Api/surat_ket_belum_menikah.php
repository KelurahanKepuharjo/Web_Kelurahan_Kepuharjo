<?php
header('Content-Type: application/json');
include('koneksi.php');
if (!isset($_POST['id_akun']) && !isset($_POST['nama']) && !isset($_POST['tempat_lahir']) && !isset($_POST['tanggal_lahir']) && !isset($_POST['jenis_kelamin']) && !isset($_POST['kebangsaan']) && !isset($_POST['agama']) && !isset($_POST['status']) && !isset($_POST['pekerjaan']) && !isset($_POST['nik']) && !isset($_POST['alamat']) && !isset($_POST['surat_digunakan_untuk']) && !isset($_POST['tgl_pengajuan'])) {
    echo json_encode("No Data Send");
    # code...
} else {
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
    $surat_digunakan_untuk = $_POST['surat_digunakan_untuk'];

    $result = mysqli_query($conn, "INSERT INTO surat_ket_belum_menikah (id_akun,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,kebangsaan,agama,status,pekerjaan,nik,alamat,surat_digunakan_untuk,tgl_pengajuan) 
    VALUES ('{$id_akun}','{$nama}','{$tempat_lahir}','{$tanggal_lahir}','{$jenis_kelamin}','{$kebangsaan}','{$agama}','{$status}','{$pekerjaan}','{$nik}','{$alamat}','{$surat_digunakan_untuk},'{$tgl_pengajuan}')");
    if ($result) {
        echo json_encode("Succes");
    } else {
        echo json_encode("Failed");
    }   
}
?>