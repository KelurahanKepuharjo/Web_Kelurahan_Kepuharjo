<?php
header('Content-Type: application/json');
include('koneksi.php');
if (!isset($_POST['id_akun']) && !isset($_POST['nama_almarhum']) && !isset($_POST['saksi_kematian']) && !isset($_POST['hubungan']) && !isset($_POST['hari']) && !isset($_POST['tanggal']) && !isset($_POST['alamat']) && !isset($_POST['nik_almarhum']) && !isset($_POST['penyebab_kematian']) && !isset($_POST['surat_digunakan_untuk']) && !isset($_POST['tgl_pengajuan'])) {
    echo json_encode("No Data Send");
    # code...
} else {
    $id_akun = $_POST['id_akun'];
    $nama_almarhum = $_POST['nama_almarhum'];
    $saksi_kematian = $_POST['saksi_kematian'];
    $hubungan = $_POST['hubungan'];
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $alamat = $_POST['alamat_terakhir'];
    $nik_almarhum = $_POST['nik_almarhum'];
    $penyebab_kematian = $_POST['penyebab_kematian'];
    $tgl_pengajuan = $_POST['tgl_pengajuan'];
    $surat_digunakan_untuk = $_POST['surat_digunakan_untuk'];

    $result = mysqli_query($conn, "INSERT INTO suket_kematian (id_akun,nama_almarhum,saksi_kematian,hubungan,hari,tanggal,bulan,tahun,alamat_terakhir,nik_almarhum,penyebab_kematian,tgl_pengajuan,surat_digunakan_untuk) 
    VALUES ('{$id_akun}','{$nama_almarhum}','{$saksi_kematian}','{$hubungan}','{$hari}','{$tanggal}','{$bulan}','{$tahun}','{$alamat}','{$nik_almarhum}','{$penyebab_kematian}','{$tgl_pengajuan}','{$surat_digunakan_untuk}')");
    
    if ($result) {
        echo json_encode("Succes");
    } else {
        echo json_encode("Failed");
    }   
}
?>