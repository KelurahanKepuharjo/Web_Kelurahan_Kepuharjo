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

    class sktm extends koneksii{
        public function suratdiproses(){
            $sql = "SELECT id_akun,nama, tgl_pengajuan, status_surat from surat_tidak_mampu WHERE status_surat = 'diproses'";
            $result= $this->koneksi->prepare($sql);
            $result->execute();
            return $result; 
                                          
            }  
        }
    

        class readprosessktm extends koneksii{
            public function suratdiproses(){
                $sql = "SELECT id_akun,nama, tgl_pengajuan, status_surat from surat_tidak_mampu WHERE status_surat = 'diproses'";
                $result= $this->koneksi->prepare($sql);
                $result->execute();
                return $result; 
                                              
                }  
            }
        // class suratbelumnikah extends koneksii{
        //     public function suratdiproses(){
        //         $sql = "SELECT id_akun,nama, tgl_pengajuan, status_surat from surat_ket_belum_nikah WHERE status_surat = 'diproses'";
        //         $result= $this->koneksi->prepare($sql);
        //         $result->execute();
        //         return $result; 
                                              
        //         }  
        //     }    

?>