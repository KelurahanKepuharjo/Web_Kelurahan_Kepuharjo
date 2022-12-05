<?php
    require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
    class suratmasuk extends koneksii{
    public function lihatsuratmasuk(){
        $sql = "SELECT id_akun, nama, tgl_surat_pengantar,status_surat FROM domisili WHERE status_surat = 'Diajukan'
        ";
        $result= $this->koneksi->prepare($sql);
        $result->execute();
        return $result; 
                                      
        }  
    }

    // class readprofile extends koneksii{
    //     public function lihatprofile(){
    //         $sql = "SELECT nama_lengkap,image_profil FROM akun JOIN penduduk ON akun.id_akun = penduduk.id_akun 
    //         WHERE akun.id_akun = 'admin' ";
    //         $result= $this->koneksi->prepare($sql);
    //         $result->execute();
    //         return $result; 
                                          
    //         }  
    //     }
       

?>