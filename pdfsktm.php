<?php

$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$kebangsaan = $_POST['kebangsaan'];
$kelamin = $_POST['kelamin'];
$status = $_POST['status'];
$pekerjaan = $_POST['pekerjaan'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$no = $_POST['nopengantarsurat'];
$tgl = $_POST['tglpengajuan'];
$keperluan = $_POST['keperluan'];
$tanggalsurat = $_POST['tanggalsurat'];


//mengambil dokumen surat
$document = file_get_contents("suratsktm.rtf");


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
$document = str_replace("#NO", $no, $document);
$document = str_replace("#TGL", date('d-m-Y', strtotime($tgl)), $document);
$document = str_replace("#KET", $keperluan, $document);
$document = str_replace("#TANGGAL", date('d-m-Y', strtotime($tanggalsurat)), $document);


// header untuk membuka file yang dihasilkan dengna aplikasi Ms. Word
// nama file yang dihasilkan adalah surat izin.docx
header("Content-type: application/msword");
header("Content-disposition: inline; filename=$nama.doc");
header("Content-length: " . strlen($document));
echo $document;

?>