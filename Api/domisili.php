<?php
header('Content-Type: application/json');
include('koneksi.php');
if (!isset($_POST['id_akun']) && !isset($_POST['id_surat']) && !isset($_POST['no_surat']) && !isset($_POST['nama']) && !isset($_POST['tempat_lahir']) && !isset($_POST['tanggal_lahir']) && !isset($_POST['jenis_kelamin']) && !isset($_POST['kebangsaan']) && !isset($_POST['agama']) 
&& !isset($_POST['status_perkawinan']) && !isset($_POST['pekerjaan']) && !isset($_POST['nik']) && !isset($_POST['alamat']) && !isset($_POST['RT']) && !isset($_POST['RW']) && !isset($_POST['no_pengantar_surat']) && !isset($_POST['tgl_surat_pengantar']) && !isset($_POST['alamat_domisili_kel_kepu']) && !isset($_POST['surat_digunakan_untuk']) && !isset($_POST['tgl_surat_dibuat']) && !isset($_POST['status_surat']) && !isset($_POST['id_image'])) {
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
    $status_perkawinan = $_POST['status_perkawinan'];
    $pekerjaan = $_POST['pekerjaan'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $pengantar_rt_rw = $_POST['pengantar_rt_rw'];
    $tgl_surat_rt_rw = $_POST['tgl_surat_rt_rw'];
    $no_surat = $_POST['no_surat'];
    $alamat_domisili_di_kel_kepu = $_POST['alamat_domisili_di_kel_kepu'];
    $surat_digunakan_untuk = $_POST['surat_digunakan_untuk'];
    $tgl_dibuat = $_POST['tgl_dibuat'];

    $result = mysqli_query($conn, "INSERT INTO domisili (id_akun,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,kebangsaan,agama,status_perkawinan,pekerjaan,nik,alamat,surat_digunakan_untuk,pengantar_rt_rw,tgl_surat_rt_rw,no_surat,alamat_domisili_di_kel_kepu_tgl_dibuat) VALUES ('{$id_akun}','{$nama}','{$tempat_lahir}','{$tanggal_lahir}','{$jenis_kelamin}','{$kebangsaan}','{$agama}','{$status_perkawinan}','{$pekerjaan}','{$nik}','{$alamat}','{$surat_digunakan_untuk}','{$pengantar_rt_Rw}')");
    if ($result) {
        echo json_encode("Succes");
    } else {
        echo json_encode("Failed");
    }   
}
?>