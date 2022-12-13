<?php
require_once '../Web_Kelurahan_Kepuharjo/Api/oopkoneksi.php';
class read extends koneksii
{
    public function lihatdata()
    {
        $sql = "SELECT akun.id_akun as id_akun , nama_lengkap,password,no_hp,rt,rw, alamat FROM akun JOIN penduduk ON akun.id_akun = penduduk.id_akun
        ";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
}
class readberita extends koneksii
{
    public function lihatberita()
    {
        $sql = "SELECT berita.id_berita as id_berita , judul,sub_title,dekripsi FROM berita
        ";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }

    public function insertberita($judull, $bagann, $deskripsii){
        try {
            $sql = "INSERT INTO `berita`(`judul`, `sub_title`, `dekripsi`) VALUES (:judul, :sub_title, :dekripsi)";
            $result = $this->koneksi->prepare($sql);
            $result->bindParam(":judul",$judull);
            $result->bindParam(":sub_title",$bagann);
            $result->bindParam(":dekripsi",$deskripsii);
            $result->execute();
            return true;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            //throw $th;
        }
       

    }
}

class readprofile extends koneksii
{
    public function lihatprofile()
    {
        $sql = "SELECT nama_lengkap,image_profil FROM akun JOIN penduduk ON akun.id_akun = penduduk.id_akun 
            WHERE akun.id_akun = 'admin' ";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
}

class readsktm extends koneksii
{
    public function sumsktm()
    {
        $sql = "SELECT COUNT(id_surat) as sumid from surat_tidak_mampu WHERE status_surat = 'Diajukan'";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
}
class readdomisili extends koneksii
{
    public function sumdomisili()
    {
        $sql = "SELECT COUNT(domisili.id_surat) as sumid from domisili WHERE status_surat = 'Diajukan'";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
}
class readakta extends koneksii
{
    public function sumakta()
    {
        $sql = "SELECT COUNT(surat_akta_kelahiran.id_surat) as sumid from surat_akta_kelahiran WHERE status_surat = 'Diajukan'";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
}
class readpindah extends koneksii
{
    public function sumpindah()
    {
        $sql = "SELECT COUNT(surat_pindah.id_surat) as sumid from surat_pindah WHERE status_surat = 'Diajukan'";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
}
class readkematian extends koneksii
{
    public function sumkematian()
    {
        $sql = "SELECT COUNT(surat_kematian.id_surat) as sumid from surat_kematian WHERE status_surat = 'Diajukan'";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
}
class readbelumnikah extends koneksii
{
    public function sumbelumnikah()
    {
        $sql = "SELECT COUNT(surat_ket_belum_menikah.id_surat) as sumid from surat_ket_belum_menikah WHERE status_surat = 'Diajukan'";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
}


class readsmdash extends koneksii{
    public function sumsmdash(){
        $sql = "SELECT (SELECT COUNT(*) from domisili WHERE status_surat = 'diajukan')+ 
        (SELECT COUNT(*) from surat_tidak_mampu WHERE status_surat = 'diajukan') + 
        (SELECT COUNT(*) from surat_akta_kelahiran WHERE status_surat = 'diajukan') + 
        (SELECT COUNT(*) from surat_kematian WHERE status_surat = 'diajukan')+ 
        (SELECT COUNT(*) from surat_ket_belum_menikah WHERE status_surat = 'diajukan') +  
        (SELECT COUNT(*) from surat_pindah WHERE status_surat = 'diajukan') + 
        (SELECT COUNT(*) FROM surat_akta_kelahiran WHERE status_surat = 'diajukan') 
        as total ";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
     
}

class readspdash extends koneksii{
    public function sumspdash(){
        $sql = "SELECT (SELECT COUNT(*) from domisili WHERE status_surat = 'diproses')+ 
        (SELECT COUNT(*) from surat_tidak_mampu WHERE status_surat = 'diproses') + 
        (SELECT COUNT(*) from surat_akta_kelahiran WHERE status_surat = 'diproses') + 
        (SELECT COUNT(*) from surat_kematian WHERE status_surat = 'diproses')+ 
        (SELECT COUNT(*) from surat_ket_belum_menikah WHERE status_surat = 'diproses') +  
        (SELECT COUNT(*) from surat_pindah WHERE status_surat = 'diproses') + 
        (SELECT COUNT(*) FROM surat_akta_kelahiran WHERE status_surat = 'diproses') 
        as total ";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
     
}

class readssdash extends koneksii{
    public function sumssdash(){
        $sql = "SELECT (SELECT COUNT(*) from domisili WHERE status_surat = 'selesai')+ 
        (SELECT COUNT(*) from surat_tidak_mampu WHERE status_surat = 'selesai') + 
        (SELECT COUNT(*) from surat_akta_kelahiran WHERE status_surat = 'selesai') + 
        (SELECT COUNT(*) from surat_kematian WHERE status_surat = 'selesai')+ 
        (SELECT COUNT(*) from surat_ket_belum_menikah WHERE status_surat = 'selesai') +  
        (SELECT COUNT(*) from surat_pindah WHERE status_surat = 'selesai') + 
        (SELECT COUNT(*) FROM surat_akta_kelahiran WHERE status_surat = 'selesai') 
        as total ";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
     
}

class readstolakdash extends koneksii{
    public function sumstolakdash(){
        $sql = "SELECT (SELECT COUNT(*) from domisili WHERE status_surat = 'ditolak')+ 
        (SELECT COUNT(*) from surat_tidak_mampu WHERE status_surat = 'ditolak') + 
        (SELECT COUNT(*) from surat_akta_kelahiran WHERE status_surat = 'ditolak') + 
        (SELECT COUNT(*) from surat_kematian WHERE status_surat = 'ditolak')+ 
        (SELECT COUNT(*) from surat_ket_belum_menikah WHERE status_surat = 'ditolak') +  
        ( SELECT COUNT(*) from surat_pindah WHERE status_surat = 'ditolak') + 
        (SELECT COUNT(*) FROM surat_akta_kelahiran WHERE status_surat = 'ditolak') 
        as total ";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
     
}
