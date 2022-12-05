<?php
    require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
    class suratselesai extends koneksii{
    public function lihatsuratselesai(){
        $sql = "SELECT id_akun, nama, tgl_surat_pengantar,status_surat FROM domisili WHERE status_surat = 'Selesai'
        ";
        $result= $this->koneksi->prepare($sql);
        $result->execute();
        return $result; 
                                      
        }  
    }
?>