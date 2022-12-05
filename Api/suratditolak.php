<?php
    require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
    class suratditolak extends koneksii{
    public function lihatsuratditolak(){
        $sql = "SELECT id_akun, nama, tgl_surat_pengantar,status_surat FROM domisili WHERE status_surat = 'Ditolak'
        ";
        $result= $this->koneksi->prepare($sql);
        $result->execute();
        return $result; 
                                      
        }  
    }
?>