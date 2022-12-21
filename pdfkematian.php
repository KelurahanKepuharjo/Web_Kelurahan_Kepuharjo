<?php
$nomor = $_POST['nomor'];
$nama = $_POST['namamendiang'];
$saksi = $_POST['saksi'];
$hubungan = $_POST['hubungan'];
$hari = $_POST['harikematian'];
$tgl = $_POST['tglkematian'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$penyebab = $_POST['penyebabkematian'];
$ketsurat = $_POST['ketpengajuan'];
$tanggal = $_POST['tanggalsurat'];


$document = file_get_contents("suratkematian.rtf");


//mereplace semua kata yang ada di file dengan variabel
$document = str_replace("#NOMOR", $nomor, $document);
$document = str_replace("#ALMARHUM", $nama, $document);
$document = str_replace("#SAKSI", $saksi, $document);
$document = str_replace("#HUBUNGAN", $hubungan, $document);
$document = str_replace("#HARI", $hari, $document);
$document = str_replace("#TGL", $tgl, $document);
$document = str_replace("#NIK", $nik, $document);
$document = str_replace("#ALAMAT", $alamat, $document);
$document = str_replace("#PENYEBAB", $penyebab, $document);
$document = str_replace("#KET", $ketsurat, $document);
$document = str_replace("#TANGGAL", date('d-m-Y', strtotime($tanggal)), $document);


// header untuk membuka file yang dihasilkan dengna aplikasi Ms. Word
// nama file yang dihasilkan adalah surat izin.docx
header("Content-type: application/msword");
header("Content-disposition: inline; filename=$nama.doc");
header("Content-length: " . strlen($document));
echo $document;

?>