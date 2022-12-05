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
$pdf->output();

?>