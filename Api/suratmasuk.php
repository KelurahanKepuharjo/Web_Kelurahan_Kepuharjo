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

    class suratmasuksktm extends koneksii{
        public function lihatsuratmasuk(){
            $sql = "SELECT surat_tidak_mampu.id_akun, surat_tidak_mampu.nama, surat_tidak_mampu.tgl_pengajuan ,surat_tidak_mampu.status_surat FROM surat_tidak_mampu WHERE status_surat = 'Diajukan'
            ";
            $result= $this->koneksi->prepare($sql);
            $result->execute();
            return $result; 
                                          
            }  
        }
        class suratmasukdomisili extends koneksii{
            public function lihatsuratmasuk(){
                $sql = "SELECT id_akun, nama, tgl_surat_pengantar,status_surat FROM domisili WHERE status_surat = 'Diajukan'
                ";
                $result= $this->koneksi->prepare($sql);
                $result->execute();
                return $result; 
                                              
                }  
            }

            class suratmasukakta extends koneksii{
                public function lihatsuratmasuk(){
                    $sql = "SELECT surat_akta_kelahiran.id_akun, surat_akta_kelahiran.nama_anak, surat_akta_kelahiran.tgl_pengajuan ,surat_akta_kelahiran.status_surat FROM surat_akta_kelahiran WHERE status_surat = 'Diajukan'
                    ";
                    $result= $this->koneksi->prepare($sql);
                    $result->execute();
                    return $result; 
                                                  
                    }  
                }

                class suratmasukpindah extends koneksii{
                    public function lihatsuratmasuk(){
                        $sql = "SELECT surat_pindah.id_akun, surat_pindah.nama, surat_pindah.tgl_dibuat ,surat_pindah.status_surat FROM surat_pindah WHERE status_surat = 'Diajukan'
                        ";
                        $result= $this->koneksi->prepare($sql);
                        $result->execute();
                        return $result; 
                                                      
                        }  
                    }

                    class suratmasukbelumnikah extends koneksii{
                        public function lihatsuratmasuk(){
                            $sql = "SELECT surat_ket_belum_menikah.id_akun, surat_ket_belum_menikah.nama, surat_ket_belum_menikah.tgl_pengajuan ,surat_ket_belum_menikah.status_surat FROM surat_ket_belum_menikah WHERE status_surat = 'Diajukan'";
                            $result= $this->koneksi->prepare($sql);
                            $result->execute();
                            return $result; 
                                                          
                            }  
                        }

                        class suratmasukkematian extends koneksii{
                            public function lihatsuratmasuk(){
                                $sql = "SELECT surat_kematian.id_akun, surat_kematian.nama_almarhum, surat_kematian.tanggal_dibuat ,surat_kematian.status_surat FROM surat_kematian WHERE status_surat = 'Diajukan'
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