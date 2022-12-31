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
$tanggalsurat = $_POST['tanggalsurat'];
$ketsurat = $_POST['ketsurat'];


$pdf->SetFont('Times','',12);
$pdf->SetXY(20,84);
$pdf->MultiCell(0, 6, "             Yang bertanda tangan di bawah ini kami Lurah Kepuharjo Kecamatan Lumajang Kabupaten Lumajang menerangkan bahwa : ",
0, 'L', false, 20);

$pdf->SetXY(42,102);
$pdf->MultiCell(0, 6, "Nama                            : $nama
Tempat,Tgl Lahir         : $ttl
Jenis Kelamin               : $kelamin
Kebangsaan / Agama    : $kebangsaan
Status 	                          : $status
Pekerjaan 	                    : $pekerjaan
NIK	                              : $nik
Alamat 	                        : $alamat
",
0, 'L', false, 20);
$pdf->Image('images/stempel.png',120,216,33,0,'PNG');
$pdf->Image('images/ttd.png',110,220,40,0,'PNG');
        $pdf->SetXY(20,156);
        $pdf->MultiCell(0, 6, "             Kelurahan Kepuharjo Kecamatan Lumajang 

        Adalah benar sampai dengan saat ini adalah warga kami dan menurut sepengetahuan kami. Bahwa nama yang tersebut di atas benar – benar belum pernah menikah. Surat keterangan ini dipergunakan untuk persyaratan administrasi pengajuan KPR.

        Demikian surat keterangan ini kami buat dan untuk dapat dipergunakan sebagaimana mestinya.
       


                                                                                    Lumajang, $tanggalsurat
                                                                                    LURAH KEPUHARJO
                                                                                                            

                                                                                    

                                                                                    MUHAMMAD SAIFUL,S.AP
                                                                                    NIP. 19720202 199803 1 010

        ",
        0, 'L', false, 20);
?>