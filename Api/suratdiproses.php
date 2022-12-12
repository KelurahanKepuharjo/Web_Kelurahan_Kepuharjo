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
            $sql = "SELECT surat_tidak_mampu.id_akun as id_akun, id_surat, no_surat, nama,tempat_lahir,tanggal_lahir, jenis_kelamin, kebangsaan, agama, status, pekerjaan,nik, alamat, no_pengantar, tgl_pengajuan, keterangan, keperluan, tgl_dibuat, status_surat,surat_tidak_mampu.image, akun.no_hp as no_hp from akun JOIN surat_tidak_mampu on akun.id_akun = surat_tidak_mampu.id_akun WHERE surat_tidak_mampu.status_surat = 'diproses'";
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