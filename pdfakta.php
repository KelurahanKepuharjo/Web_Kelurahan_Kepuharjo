<?php
$nomor = $_POST['nomor'];
$nama = $_POST['namaanak'];
$ttl = $_POST['ttl'];
$kebangsaan = $_POST['kebangsaan'];
$kelamin = $_POST['kelamin'];
$status = $_POST['status'];
$pekerjaan = $_POST['pekerjaan'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$namaayah = $_POST['namaayah'];
$umurayah = $_POST['umurayah'];
$bangsaayah = $_POST['bangsaayah'];
$pekerjaanayah = $_POST['pekerjaanayah'];
$alamatayah = $_POST['alamatayah'];
$namaibu = $_POST['namaibu'];
$umuribu = $_POST['umuribu'];
$bangsaibu = $_POST['bangsaibu'];
$pekerjaanibu = $_POST['pekerjaanibu'];
$alamatibu = $_POST['alamatibu'];
$tanggalsurat = $_POST['tanggalsurat'];

//mengambil dokumen surat
$document = file_get_contents("suratakta.rtf");


//mereplace semua kata yang ada di file dengan variabel
$document = str_replace("#NOMOR", $nomor, $document);
$document = str_replace("#NAMA", $nama, $document);
$document = str_replace("#TTL", $ttl, $document);
$document = str_replace("#KELAMIN", $kelamin, $document);
$document = str_replace("#KEBANGSAAN", $kebangsaan, $document);
$document = str_replace("#STATUS", $status, $document);
$document = str_replace("#PEKERJAAN", $pekerjaan, $document);
$document = str_replace("#NIK", $nik, $document);
$document = str_replace("#ALAMAT", $alamat, $document);
$document = str_replace("#NAYAH", $namaayah, $document);
$document = str_replace("#UAYAH", $umurayah, $document);
$document = str_replace("#BAYAH", $bangsaayah, $document);
$document = str_replace("#PAYAH", $pekerjaanayah, $document);
$document = str_replace("#AAYAH", $alamatayah, $document);
$document = str_replace("#NIBU", $namaibu, $document);
$document = str_replace("#UIBU", $umuribu, $document);
$document = str_replace("#BIBU", $bangsaibu, $document);
$document = str_replace("#PIBU", $pekerjaanibu, $document);
$document = str_replace("#AIBU", $alamatibu, $document);
$document = str_replace("#TANGGAL", date('d-m-Y', strtotime($tanggalsurat)), $document);


// header untuk membuka file yang dihasilkan dengna aplikasi Ms. Word
// nama file yang dihasilkan adalah surat izin.docx
header("Content-type: application/msword");
header("Content-disposition: inline; filename=$nama.doc");
header("Content-length: " . strlen($document));
echo $document;
?>