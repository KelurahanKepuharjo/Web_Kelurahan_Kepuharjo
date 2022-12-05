<?php
    require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
    class readsm extends koneksii{
    public function suratdiproses(){
        $sql = "SELECT id_akun,nama, tgl_surat_pengantar, status_surat from domisili WHERE status_surat = 'diproses'";
        $result= $this->koneksi->prepare($sql);
        $result->execute();
        return $result; 
                                      
        }  
    }
       

?>