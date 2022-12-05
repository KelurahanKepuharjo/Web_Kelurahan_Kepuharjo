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
        
        class readsktm extends koneksii{
            public function sumsktm(){
                $sql = "SELECT COUNT(id_surat) as sumid from surat_tidak_mampu";
                $result= $this->koneksi->prepare($sql);
                $result->execute();
                return $result; 
            }
        }
        class readdomisili extends koneksii{
            public function sumdomisili(){
                $sql = "SELECT COUNT(domisili.id_surat) as sumid from domisili";
                $result= $this->koneksi->prepare($sql);
                $result->execute();
                return $result; 
            }
        }
        class readakta extends koneksii{
            public function sumakta(){
                $sql = "SELECT COUNT(surat_akta_kelahiran.id_surat) as sumid from surat_akta_kelahiran";
                $result= $this->koneksi->prepare($sql);
                $result->execute();
                return $result; 
            }
        }
        class readpindah extends koneksii{
            public function sumpindah(){
                $sql = "SELECT COUNT(surat_pindah.id_surat) as sumid from surat_pindah";
                $result= $this->koneksi->prepare($sql);
                $result->execute();
                return $result; 
            }
        }
        class readkematian extends koneksii{
            public function sumkematian(){
                $sql = "SELECT COUNT(surat_kematian.id_surat) as sumid from surat_kematian";
                $result= $this->koneksi->prepare($sql);
                $result->execute();
                return $result; 
            }
        }
        class readbelumnikah extends koneksii{
            public function sumbelumnikah(){
                $sql = "SELECT COUNT(surat_ket_belum_menikah.id_surat) as sumid from surat_ket_belum_menikah";
                $result= $this->koneksi->prepare($sql);
                $result->execute();
                return $result; 
            }
        }

        
       

?>