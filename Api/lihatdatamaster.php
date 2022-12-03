<?php
    require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
    class read extends koneksii{
    public function lihatdata(){
        $sql = "SELECT akun.id_akun as id_akun , nama_lengkap,password,no_hp,rt,rw, alamat FROM akun JOIN penduduk ON akun.id_akun = penduduk.id_akun
        ";
        $result= $this->koneksi->prepare($sql);
        $result->execute();
        return $result; 
                                      
        }  
    }

    class readprofile extends koneksii{
        public function lihatprofile(){
            $sql = "SELECT nama_lengkap,image_profil FROM akun JOIN penduduk ON akun.id_akun = penduduk.id_akun 
            WHERE akun.id_akun = 'admin' ";
            $result= $this->koneksi->prepare($sql);
            $result->execute();
            return $result; 
                                          
            }  
        }
       

?>