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
            $_SESSION['hak_akses'];
            if($_SESSION['hak_akses']=='2'){
               echo $row = "Diajukan";
            
            }elseif($_SESSION['hak_akses']=='3'){
                echo $row = "Disetujui RT";
            }elseif($_SESSION['hak_akses']=='1'){
                echo $row = "Disetujui RW";
            }else{
                
            }
         $rt= $_SESSION['rt'];
        $rw = $_SESSION['rw'];
            $sql = "SELECT surat_tidak_mampu.id_surat, surat_tidak_mampu.id_akun, surat_tidak_mampu.nama, surat_tidak_mampu.tgl_pengajuan ,surat_tidak_mampu.status_surat, surat_tidak_mampu.RT, surat_tidak_mampu.RW from surat_tidak_mampu WHERE status_surat = '$row'  AND RT = '$rt' AND  RW = '$rw'";
            $result= $this->koneksi->prepare($sql);
            $result->execute();
            return $result; 
                                          
            }  
        }
        class suratmasukdomisili extends koneksii{
            public function lihatsuratmasuk(){
                $_SESSION['hak_akses'];
        if($_SESSION['hak_akses']==2){
            $row = "Diajukan";
        }elseif($_SESSION['hak_akses']==3){
            $row = "Disetujui RT";
        }elseif($_SESSION['hak_akses']==4){
            $row = "Disetujui RW";
        }else{

        }
                $sql = "SELECT id_akun, nama, tgl_surat_pengantar,status_surat FROM domisili WHERE status_surat = '$row'
                ";
        
                $result= $this->koneksi->prepare($sql);
                $result->execute();
                return $result; 
                                              
                }  
            }

            class suratmasukakta extends koneksii{
                public function lihatsuratmasuk(){
                    $_SESSION['hak_akses'];
            if($_SESSION['hak_akses']=='2'){
               echo $row = "Diajukan";
            }elseif($_SESSION['hak_akses']=='3'){
                echo $row = "Disetujui RT";
            }elseif($_SESSION['hak_akses']=='1'){
                echo $row = "Disetujui RW";
            }else{
                
            }
                    $sql = "SELECT surat_akta_kelahiran.id_akun, surat_akta_kelahiran.nama_anak, surat_akta_kelahiran.tgl_pengajuan ,surat_akta_kelahiran.status_surat FROM surat_akta_kelahiran WHERE status_surat = '$row'
                    ";
                    $result= $this->koneksi->prepare($sql);
                    $result->execute();
                    return $result; 
                                                  
                    }  
                }

                class suratmasukpindah extends koneksii{
                    public function lihatsuratmasuk(){
                        $_SESSION['hak_akses'];
            if($_SESSION['hak_akses']=='2'){
               echo $row = "Diajukan";
            }elseif($_SESSION['hak_akses']=='3'){
                echo $row = "Disetujui RT";
            }elseif($_SESSION['hak_akses']=='1'){
                echo $row = "Disetujui RW";
            }else{
                
            }
                        $sql = "SELECT surat_pindah.id_akun, surat_pindah.nama, surat_pindah.tgl_dibuat ,surat_pindah.status_surat FROM surat_pindah WHERE status_surat = '$row'
                        ";
                        $result= $this->koneksi->prepare($sql);
                        $result->execute();
                        return $result; 
                                                      
                        }  
                    }

                    class suratmasukbelumnikah extends koneksii{
                        public function lihatsuratmasuk(){
                            $_SESSION['hak_akses'];
            if($_SESSION['hak_akses']=='2'){
               echo $row = "Diajukan";
            }elseif($_SESSION['hak_akses']=='3'){
                echo $row = "Disetujui RT";
            }elseif($_SESSION['hak_akses']=='1'){
                echo $row = "Disetujui RW";
            }else{
                
            }
                            $sql = "SELECT surat_ket_belum_menikah.id_akun, surat_ket_belum_menikah.nama, surat_ket_belum_menikah.tgl_pengajuan ,surat_ket_belum_menikah.status_surat FROM surat_ket_belum_menikah WHERE status_surat = '$row'";
                            $result= $this->koneksi->prepare($sql);
                            $result->execute();
                            return $result; 
                                                          
                            }  
                        }

                        class suratmasukkematian extends koneksii{
                            public function lihatsuratmasuk(){
                                $_SESSION['hak_akses'];
            if($_SESSION['hak_akses']=='2'){
               echo $row = "Diajukan";
            }elseif($_SESSION['hak_akses']=='3'){
                echo $row = "Disetujui RT";
            }elseif($_SESSION['hak_akses']=='1'){
                echo $row = "Disetujui RW";
            }else{
                
            }
                                $sql = "SELECT surat_kematian.id_akun, surat_kematian.nama_almarhum, surat_kematian.tanggal ,surat_kematian.status_surat FROM surat_kematian WHERE status_surat = '$row'
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