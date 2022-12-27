<?php
include_once '../web_kelurahan_kepuharjo/Api/oopkoneksi.php';
class updatert extends koneksii{
    public function idRTsktm($idsp, $id)
{
    try {
        $sql = "UPDATE surat_tidak_mampu SET status_surat =:statuss WHERE id_surat =:idsurat";
        $result = $this->koneksi->prepare($sql);
        $result->bindParam(":statuss", $idsp);
        $result->bindParam(":idsurat", $id);
        $result->execute();
        // if ($result->rowCount() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

public function idRTDomisili($idsp, $id)
{
    try {
        $sql = "UPDATE domisili SET status_surat =:statuss WHERE id_surat =:idsurat";
        $result = $this->koneksi->prepare($sql);
        $result->bindParam(":statuss", $idsp);
        $result->bindParam(":idsurat", $id);
        $result->execute();
        // if ($result->rowCount() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

public function idRTAkta($idsp, $id)
{
    try {
        $sql = "UPDATE surat_akta_kelahiran SET status_surat =:statuss WHERE id_surat =:idsurat";
        $result = $this->koneksi->prepare($sql);
        $result->bindParam(":statuss", $idsp);
        $result->bindParam(":idsurat", $id);
        $result->execute();
        // if ($result->rowCount() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

public function idRTBelumnikah($idsp, $id)
{
    try {
        $sql = "UPDATE surat_ket_belum_menikah SET status_surat =:statuss WHERE id_surat =:idsurat";
        $result = $this->koneksi->prepare($sql);
        $result->bindParam(":statuss", $idsp);
        $result->bindParam(":idsurat", $id);
        $result->execute();
        // if ($result->rowCount() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

public function idRTkematian($idsp, $id)
{
    try {
        $sql = "UPDATE surat_kematian SET status_surat =:statuss WHERE id_surat =:idsurat";
        $result = $this->koneksi->prepare($sql);
        $result->bindParam(":statuss", $idsp);
        $result->bindParam(":idsurat", $id);
        $result->execute();
        // if ($result->rowCount() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

public function idRTUsaha($idsp, $id)
{
    try {
        $sql = "UPDATE surat_usaha SET status_surat =:statuss WHERE id_surat =:idsurat";
        $result = $this->koneksi->prepare($sql);
        $result->bindParam(":statuss", $idsp);
        $result->bindParam(":idsurat", $id);
        $result->execute();
        // if ($result->rowCount() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

public function idRTkelakuanBaik($idsp, $id)
{
    try {
        $sql = "UPDATE surat_berkelakuan_baik SET status_surat =:statuss WHERE id_surat =:idsurat";
        $result = $this->koneksi->prepare($sql);
        $result->bindParam(":statuss", $idsp);
        $result->bindParam(":idsurat", $id);
        $result->execute();
        // if ($result->rowCount() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

}


?>