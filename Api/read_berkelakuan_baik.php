<?php

header("Acces-Control-Allow-Origin: *");
$db = mysqli_connect('localhost','root','','kepuharjo');
if(!$db)
{
	echo "Database connection failed";
}
    $id_akun = $_POST['id_akun'];
    $sql = "SELECT * FROM surat_berkelakuan_baik WHERE id_akun = '".$id_akun."' ORDER BY id_surat DESC";
    $data = mysqli_query($db, $sql);
    $rows = array();

    while ($r = mysqli_fetch_assoc($data)) {
        $rows[] = $r;
    }
     echo json_encode($rows);
?>
