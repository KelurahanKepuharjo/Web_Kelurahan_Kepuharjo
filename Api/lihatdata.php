<?php
    require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
    class read extends koneksii{
    public function lihatdata(){
        $sql = "SELECT id_akun, nama_lengkap, password, no_hp FROM akun";
        $result= $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
                                    
        }
                                
                                 
    }
                            ?>