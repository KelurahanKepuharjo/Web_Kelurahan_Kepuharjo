<?php
header('Content-Type: application/json');
include('koneksi.php');
if (!isset($_POST['id_akun']) && !isset($_POST['nama_anak']) && !isset($_POST['tempat_lahir']) && !isset($_POST['tanggal_lahir']) && !isset($_POST['jenis_kelamin']) && !isset($_POST['agama']) && !isset($_POST['status']) && !isset($_POST['pekerjaan']) && !isset($_POST['nik']) && !isset($_POST['alamat']) && !isset($_POST['nama_ayah']) && !isset($_POST['umur_ayah']) && !isset($_POST['kebangsaan_ayah']) && !isset($_POST['agama_ayah']) && !isset($_POST['pekerjaan_ayah']) && !isset($_POST['almat_ayah']) && !isset($_POST['nama_ibu']) && !isset($_POST['umur_ibu']) && !isset($_POST['kebangsaan_ibu']) && !isset($_POST['agama_ibu']) && !isset($_POST['pekerjaan_ibu']) && !isset($_POST['alamat_ibu']) && !isset($_POST['tgl_pengajuan']) && !isset($_POST['surat_digunakan_untuk'])) {
    echo json_encode("No Data Send");
    # code...
} else {
    $id_akun = $_POST['id_akun'];
    $nama_anak = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kebangsaan = $_POST['kebangsaan'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $nama_ayah = $_POST['nama_ayah'];
    $umur_ayah = $_POST['umur_ayah'];
    $kebangsaan_ayah = $_POST['kebangsaan_ayah'];
    $agama_ayah = $_POST['agama_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $alamat_ayah = $_POST['alamat_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $umur_ibu = $_POST['umur_ibu'];
    $kebangsaan_ibu = $_POST['kebangsaan_ibu'];
    $agama_ibu = $_POST['agama_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $alamat_ibu = $_POST['alamat_ibu'];
    $tgl_pengajuan = $_POST['tgl_pengajuan'];
    $surat_digunakan_untuk = $_POST['surat_digunakan_untuk'];

    $result = mysqli_query($conn, "INSERT INTO suket_akta_kelahiran(id_akun,nama_lengkap,tempat_lahir,tanggal_lahir,jenis_kelamin,kebangsaan,agama,status,pekerjaan,nik,alamat,nama_ayah,umur_ayah,kebangsaan_ayah,agama_ayah,pekerjaan_ayah,alamat_ayah,nama_ibu,umur_ibu,kebangsaan_ibu,agama_ibu,pekerjaan_ibu,alamat_ibu,tgl_pengajuan,surat_digunakan_untuk) 
    VALUES ('{$id_akun}','{$nama_anak}','{$tempat_lahir}','{$tanggal_lahir}','{$jenis_kelamin}','{$kebangsaan}','{$agama}','{$status}','{$pekerjaan}','{$nik}','{$alamat}','{$nama_ayah}','{$umur_ayah}','{$kebangsaan_ayah}','{$agama_ayah}','{$pekerjaan_ayah}','{$alamat_ayah}','{$nama_ibu}','{$umur_ibu}','{$kebangsaan_ibu}','{$agama_ibu}','{$pekerjaan_ibu}','{$alamat_ibu}','{$tgl_pengajuan}','{$surat_digunakan_untuk}')");
    if ($result) {
        echo json_encode("Succes");
    } else {
        echo json_encode("Failed");
    }   
}
?>