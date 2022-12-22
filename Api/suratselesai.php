<?php
    require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
    class suratselesai extends koneksii{
    public function lihatsuratselesaidomisili(){
        $sql = "SELECT id_akun, nama, tgl_pengajuan,status_surat FROM domisili WHERE status_surat = 'Disetujui RT'
        ";
        $result= $this->koneksi->prepare($sql);
        $result->execute();
        return $result; 
                                      
        }  
        public function lihatsuratselesaiSKTM(){
            $sql = "SELECT id_akun, nama, tgl_pengajuan,status_surat FROM surat_tidak_mampu WHERE status_surat = 'Disetujui RT'";
            $result= $this->koneksi->prepare($sql);
            $result->execute();
            return $result; 
                                          
            } 
            public function lihatsuratselesaiakta(){
                $sql = "SELECT surat_akta_kelahiran.id_akun, surat_akta_kelahiran.nama_anak, surat_akta_kelahiran.tgl_pengajuan, surat_akta_kelahiran.status_surat FROM surat_akta_kelahiran WHERE status_surat = 'Disetujui RT'";
                $result= $this->koneksi->prepare($sql);
                $result->execute();
                return $result; 
                                              
                } 
                public function lihatsuratselesaipindah(){
                    $sql = "SELECT surat_pindah.id_akun, surat_pindah.nama, surat_pindah.tgl_pengajuan, surat_pindah.status_surat from surat_pindah WHERE status_surat = 'Disetujui RT'";
                    $result= $this->koneksi->prepare($sql);
                    $result->execute();
                    return $result; 
                                                  
                    } 
                    
                        public function lihatsuratselesaikematian(){
                            $sql = "SELECT surat_kematian.id_akun, surat_kematian.nama_almarhum, surat_kematian.tgl_pengajuan, surat_kematian.status_surat from surat_kematian WHERE status_surat = 'Disetujui RT'";
                            $result= $this->koneksi->prepare($sql);
                            $result->execute();
                            return $result; 
                                                          
                            } 

                            public function lihatsuratselesaiusaha(){
                                $sql = "SELECT surat_usaha.id_akun, surat_usaha.nama, surat_usaha.tgl_pengajuan, surat_usaha.status_surat FROM surat_usaha WHERE status_surat = 'Disetujui RT'";
                                $result= $this->koneksi->prepare($sql);
                                $result->execute();
                                return $result; 
                                                              
                                } 
                                public function lihatsuratselesaibelumnikah(){
                                    $sql = "SELECT id_akun, nama, tgl_pengajuan, status_surat from surat_ket_belum_menikah WHERE status_surat = 'Disetujui RT'";
                                    $result= $this->koneksi->prepare($sql);
                                    $result->execute();
                                    return $result; 
                                                                  
                                    } 
    }
?>