<?php
header('Content-Type: application/json');
include('koneksi.php');
if (!isset($_POST['id_akun']) && !isset($_POST['tgl_dibuat']) && !isset($_POST['no_surat']) && !isset($_POST['sifat']) && !isset($_POST['lampiran']) && !isset($_POST['perihal']) && !isset($_POST['nama']) && !isset($_POST['tempat_lahir']) && !isset($_POST['tanggal_lahir']) && !isset($_POST['jenis_kelamin']) && !isset($_POST['status']) && !isset($_POST['agama']) && !isset($_POST['alamat_asal']) && !isset($_POST['alamat_tujuan']) && !isset($_POST['kelurahan']) && !isset($_POST['kecamatan']) && !isset($_POST['kabupaten']) && !isset($_POST['provinsi']) && !isset($_POST['alamat_pindah']) && !isset($_POST['pengikut']) && !isset($_POST['tgl_pengajuan']) && !isset($_POST['surat_digunakan_untuk'])) {
    echo json_encode("No Data Send");
    # code...
} else {
    $id_akun = $_POST['id_akun'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $status = $_POST['status'];
    $agama = $_POST['agama'];
    $alamat_asal = $_POST['alamat_asal'];
    $alamat_tujuan = $_POST['alamat_tujuan'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];
    $alamat_pindah = $_POST['alamat_pindah'];
    $pengikut = $_POST['pengikut'];
    $tgl_pengajuan = $_POST['tgl_pengajuan'];
    $surat_digunakan_untuk = $_POST['surat_digunakan_untuk'];

    $result = mysqli_query($conn, "INSERT INTO suket_pindah (id_akun,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,status,agama,alamat_asal,alamat_tujuan,kelurahan,kecamatan,kabupaten,provinsi,alamat_pindah,pengikut,tgl_pengajuan,surat_digunakan_untuk) 
    VALUES ('{$id_akun}','{$nama}','{$tempat_lahir}','{$tanggal_lahir}','{$jenis_kelamin}','{$status}','{$agama}','{$alamat_asal}','{$alamat_tujuan}','{$kelurahan}','{$kecamatan}','{$kabupaten}','{$provinsi}','{$alamat_pindah}','{$pengikut}','{$tgl_pengajuan}','{$surat_digunakan_untuk}')");
    
    if ($result) {
        echo json_encode("Succes");
    } else {
        echo json_encode("Failed");
    }   
}
?>