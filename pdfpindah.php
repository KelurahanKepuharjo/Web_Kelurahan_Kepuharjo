<?php

require("../Web_Kelurahan_Kepuharjo/fpdf185/fpdf.php");
 
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image('../Web_Kelurahan_Kepuharjo/images/logohp.png',18,8,50);
    $pdf->SetFont('Times','',14);
    $pdf->SetXY(70,18);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'PEMERINTAH KABUPATEN LUMAJANG');
    $pdf->SetXY(85,24);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'KECAMATAN LUMAJANG');
    $pdf->SetFont('Times','',20);
    $pdf->SetXY(75,30);
    $pdf->SetFontSize(18);
    $pdf->Write(0,'KELURAHAN KEPUHARJO');
    $pdf->SetFont('TIMES','',14);
    $pdf->SetXY(75,36);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Jl. Langsep No. 18 Telp. (0334) 888243');
    $pdf->SetFont('TIMES','',14);
    $pdf->SetXY(99,42);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'LUMAJANG');
    $pdf->SetFont('TIMES','',14);
    $pdf->SetXY(130,54);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Lumajang, ');
    $pdf->SetXY(145,60);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Kepada');
    $pdf->SetXY(135,66);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Yth. Camat Lumajang');
    $pdf->SetXY(143,78);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Di - Lumajang');
    $pdf->SetXY(30,66);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Nomor     : ');
    $pdf->SetXY(30,72);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Sifat         : Penting');
    $pdf->SetXY(30,78);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Lampiran : 1 (Satu) Bendel)');
    $pdf->SetXY(30,84);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Perihal     : Surat Keterangan Pindah');
    $pdf->SetFont('Times','');
    $pdf->SetXY(50,96);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Bersama ini kami kirimkan dengan hormat Surat Keterangan');
    $pdf->SetFont('Times','');
    $pdf->SetXY(40,102);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Pindah atas :');
    $pdf->SetXY(25,108);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Nama                                : ');
    // $pdf->Write(0,$nama);
    $pdf->SetXY(25,114);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Tempat, Tanggal Lahir     : ');
    // $pdf->Write(0,$ttl);
    $pdf->SetXY(25,120);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Kebangsaan/Agama          : ');
    // $pdf->Write(0,$kebangsaan);
    $pdf->SetXY(25,126);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Status                                : ');
    // $pdf->Write(0,$status);
    $pdf->SetXY(25,132);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Pekerjaan                          : ');
    // $pdf->Write(0,$pekerjaan);
    $pdf->SetXY(25,138);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               NIK                                   : ');
    // $pdf->Write(0,$nik);
    $pdf->SetXY(25,144);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Alamat                              : ');
    $pdf->SetFont('Times','');
    $pdf->SetXY(50,156);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Bersangkutan benar - benar penduduk Kelurahan Kepuharjo ');
    $pdf->SetFont('Times','');
    $pdf->SetXY(40,162);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Kecamatan Lumajang Kabupaten Lumajang, sepanjang pengamatan ');
    $pdf->SetFont('Times','');
    $pdf->SetXY(40,168);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'kami orang tersebut berkelakuan baik dan tidak pernah terlibat urusan');
    $pdf->SetFont('Times','');
    $pdf->SetXY(40,174);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'kriminal sampai dengan tanggal dikeluarkan surat keterangan ini, adapun');
    $pdf->SetFont('Times','');
    $pdf->SetXY(40,180);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'data terlampir.');
    $pdf->SetFont('Times','');
    $pdf->SetXY(50,192);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Demikian untuk menjadikan periksa.');
    $pdf->SetXY(120,204);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'LURAH KEPUHARJO');
    $pdf->SetXY(35,206);
    $pdf->SetFontSize(14);
    $pdf->Image('../Web_Kelurahan_Kepuharjo/images/ttd.png',120,210,50);
    $pdf->Image('../Web_Kelurahan_Kepuharjo/images/stempel.png',110,200,40);
    $pdf->SetXY(110,236);
    $pdf->SetFont('Times','B');
    $pdf->SetFont('Times','U');
    $pdf->SetFontSize(14);
    $pdf->Write(0,'MUHAMMAD SAIFUL,S.AP');
    $pdf->SetXY(110,242);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(14);
    $pdf->Write(0,'NIP.19720202 199803 1 010');

$pdf->AddPage();
$pdf->Image('../Web_Kelurahan_Kepuharjo/images/logohp.png',18,8,50);
    $pdf->SetFont('Times','',14);
    $pdf->SetXY(70,18);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'PEMERINTAH KABUPATEN LUMAJANG');
    $pdf->SetXY(85,24);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'KECAMATAN LUMAJANG');
    $pdf->SetFont('Times','',20);
    $pdf->SetXY(75,30);
    $pdf->SetFontSize(18);
    $pdf->Write(0,'KELURAHAN KEPUHARJO');
    $pdf->SetFont('TIMES','',14);
    $pdf->SetXY(75,36);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Jl. Langsep No. 18 Telp. (0334) 888243');
    $pdf->SetFont('TIMES','',14);
    $pdf->SetXY(99,42);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'LUMAJANG');
    $pdf->SetXY(35,54);
    $pdf->SetFont('Times','B');
    $pdf->SetFont('Times','U');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'BIODATA PENDUDUK WARGA NEGARA INDONESIA');
    $pdf->SetXY(30,66);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'DATA INDIVIDU :');

    $pdf->SetFont('Arial','B',12);
    $pdf->SetXY(30,75);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
   
$width_cell=array(10,70,70);
$pdf->SetFillColor(193,229,252);
$pdf->Cell($width_cell[0],10,'1',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Nama Lengkap',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,85);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'2',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Tempat Lahir',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,95);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'3',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Tanggal Lahir',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,105);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'4',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Jenis Kelamin',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,115);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'5',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Golongan Darah',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,125);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'6',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Agama ',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,135);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'7',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Pendidikan Terakhir',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,145);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'8',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Pekerjaan',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,155);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'9',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Penyandang Cacat',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,165);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'10',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Status Perkawinan',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,175);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'11',1,0,'L',false); // First column of row 2 
$pdf->Cell($width_cell[1],10,'Status Hubungan Dalam Keluarga',1,0,'L',false); // Second column of row 2
$pdf->Cell($width_cell[2],10,'Three',1,0,'L',false); // Third column of row 2
$pdf->SetXY(30,185);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'12',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'No Induk Penduduk Ibu',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,195);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'13',1,0,'L',false); // First column of row 2 
$pdf->Cell($width_cell[1],10,'Nama Lengkap Ibu',1,0,'L',false); // Second column of row 2
$pdf->Cell($width_cell[2],10,'Three',1,0,'L',false); // Third column of row 2
$pdf->SetXY(30,205);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'14',1,0,'L',false); // First column of row 2 
$pdf->Cell($width_cell[1],10,'No Induk Penduduk Ayah',1,0,'L',false); // Second column of row 2
$pdf->Cell($width_cell[2],10,'Three',1,0,'L',false); // Third column of row 2
$pdf->SetXY(30,215);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'15',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Nama Lengkap Ayah',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,225);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'16',1,0,'L',false); // First column of row 2 
$pdf->Cell($width_cell[1],10,'Alamat Sebelumnya ',1,0,'L',false); // Second column of row 2
$pdf->Cell($width_cell[2],10,'Three',1,0,'L',false); 
$pdf->SetXY(30,235);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'17',1,0,'L',false); // First column of row 2 
$pdf->Cell($width_cell[1],10,'Alamat Pindah atau Tujuan Pindah',1,0,'L',false); // Second column of row 2
$pdf->Cell($width_cell[2],10,'Three',1,0,'L',false); // Third column of row 2
$pdf->SetXY(30,245);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'18',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Pengikut',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 

$pdf->SetXY(30,270);
$pdf->SetFont('Times','');
$pdf->SetFontSize(16);


// $pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('../Web_Kelurahan_Kepuharjo/images/logohp.png',18,8,50);
    $pdf->SetFont('Times','',14);
    $pdf->SetXY(70,18);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'PEMERINTAH KABUPATEN LUMAJANG');
    $pdf->SetXY(85,24);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'KECAMATAN LUMAJANG');
    $pdf->SetFont('Times','',20);
    $pdf->SetXY(75,30);
    $pdf->SetFontSize(18);
    $pdf->Write(0,'KELURAHAN KEPUHARJO');
    $pdf->SetFont('TIMES','',14);
    $pdf->SetXY(75,36);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Jl. Langsep No. 18 Telp. (0334) 888243');
    $pdf->SetFont('TIMES','',14);
    $pdf->SetXY(99,42);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'LUMAJANG');
    $pdf->SetFont('TIMES','',14);
    $pdf->SetXY(30,60);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'DATA KEPEMILIKAN PENDUDUK :');
    
    $pdf->SetFont('Arial','B',12);
    $pdf->SetXY(30,75);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$width_cell=array(10,70,70);
$pdf->SetFillColor(193,229,252);
$pdf->Cell($width_cell[0],10,'1',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Nama Lengkap',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,85);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'2',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Tempat Lahir',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,95);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'3',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Tanggal Lahir',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false); // Third column of row 1 
$pdf->SetXY(30,105);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'4',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Jenis Kelamin',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false);
$pdf->SetXY(30,115);
    $pdf->SetFont('Times','');
    $pdf->SetFontSize(16);
    $pdf->Write(0,'');
$pdf->Cell($width_cell[0],10,'5',1,0,'L',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,'Jenis Kelamin',1,0,'L',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,'Four',1,0,'L',false);
$pdf->SetXY(40,174);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Demikian surat keterangan ini kami buat untuk dapat dipergunakan ');
    $pdf->SetXY(25,180);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'sebagaimana mestinnya.');
    $pdf->SetXY(45,200);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Mengetahui,                                     Lumajang, ');
    $pdf->Write(0,'$tanggalsurat');
    $pdf->SetXY(35,206);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'CAMAT LUMAJANG                               LURAH KEPUHARJO');
    $pdf->SetXY(35,206);
    $pdf->SetFontSize(14);
    $pdf->Image('../Web_Kelurahan_Kepuharjo/images/ttd.png',120,210,50);
    $pdf->Image('../Web_Kelurahan_Kepuharjo/images/stempel.png',110,200,40);
    $pdf->SetXY(35,240);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'                                                                MUHAMMAD SAIFUL,S.AP');




    



    $pdf->output();

?>


