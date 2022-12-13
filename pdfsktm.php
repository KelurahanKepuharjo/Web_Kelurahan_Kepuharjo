
<?php
use Mpdf\Tag\Center;
    // $nomor = $_POST['nomor'];
    // $nama = $_POST['nama'];
    // $ttl = $_POST['ttl'];
    // $kebangsaan = $_POST['kebangsaan'];
    // $kelamin = $_POST['kelamin'];
    // $status = $_POST['status'];
    // $pekerjaan = $_POST['pekerjaan'];
    // $nik = $_POST['nik'];
    // $alamat = $_POST['alamat'];
    // $tanggalsurat = $_POST['tanggalsurat'];
    


    
    
     
    require("../Web_Kelurahan_Kepuharjo/fpdf185/fpdf.php");
 
    $pdf = new FPDF();
    $pdf->AddPage();
    // $pdf->SetFont('Times','B');
    // $pdf->SetXY(63,33);
    // $pdf->SetFontSize(16);
    // $pdf->Write(0,'KELURAHAN KEPUHARJO');
    // $pdf->SetFont('Times','');
    // $pdf->SetXY(63,39);
    // $pdf->SetFontSize(14);
    // $pdf->Write(0,'Jl. Langsep No. 18 Telp. (0334) 888243');

    // $pdf->SetFont('Times','',12);
    $pdf->Image('../Web_Kelurahan_Kepuharjo/images/headersurat.png',0,0,0);
    // $pdf->SetXY(90,45);
    // $pdf->SetFontSize(14);
    // $pdf->Write(0,'LUMAJANG');
    $pdf->SetXY(10,10);
    $pdf->SetFont('Times','B',14);
    $pdf->Cell(0,80,'SURAT KETERANGAN TIDAK MAMPU',0,0,'C');

    $pdf->SetFont('Times','');
    $pdf->SetXY(70,52);
    $pdf->SetFontSize(14);
    $pdf->Write(10,'Nomor : ');
    // $pdf->Write(10,$nomor);
    $pdf->SetFont('Times','');
    $pdf->SetXY(40,68);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Yang bertanda tangan di bawah ini kami Lurah Kepuharjo Kecamatan ');
    $pdf->SetFont('Times','');
    $pdf->SetXY(25,74);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Lumajang Kabupaten Lumajang menerangkan bahwa : ');
    $pdf->SetXY(25,88);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Nama                                : ');
    // $pdf->Write(0,$nama);
    $pdf->SetXY(25,96);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Tempat, Tanggal Lahir     : ');
    // $pdf->Write(0,$ttl);
    $pdf->SetXY(25,104);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Kebangsaan/Agama          : ');
    // $pdf->Write(0,$kebangsaan);
    $pdf->SetXY(25,112);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Status                                : ');
    // $pdf->Write(0,$status);
    $pdf->SetXY(25,120);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Pekerjaan                          : ');
    // $pdf->Write(0,$pekerjaan);
    $pdf->SetXY(25,128);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               NIK                                   : ');
    // $pdf->Write(0,$nik);
    $pdf->SetXY(25,136);
    $pdf->SetFontSize(12);
    $pdf->Write(0,'               Alamat                              : ');
    // $pdf->Write(0,$alamat);
    $pdf->SetXY(40,150);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Adalah benar sampai dengan saat ini warga kami dan berdasarkan Surat ');
    $pdf->SetXY(25,156);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'pengantar Nomer.   Tanggal, dan pengakuannya. Bahwa nama yang tersebut diatas');
    $pdf->SetXY(25,162);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'benar keluarga tidak mampu. Surat keterangan ini hanya dipergunakan untuk ');
    $pdf->SetXY(40,174);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Demikian surat keterangan ini kami buat untuk dapat dipergunakan ');
    $pdf->SetXY(25,180);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'sebagaimana mestinnya.');
    $pdf->SetXY(45,200);
    $pdf->SetFontSize(14);
    $pdf->Write(0,'Mengetahui,                                     Lumajang, ');
    // $pdf->Write(0,$tanggalsurat);
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

    // $pdf->Write(100,$name);
    // $pdf->Write(100,$email);
    // $pdf->Write(100,$mobile);
    // $pdf->Output('D', "filename.pdf", true);
    $pdf->output();
?>