<?php

header("Acces-Control-Allow-Origin: *");
$db = mysqli_connect('localhost','root','','kepuharjo');
if(!$db)
{
	echo "Database connection failed";
}
    $sql = "SELECT * FROM berita ORDER BY id_berita DESC";
    $data = mysqli_query($db, $sql);
    $rows = array();

    while ($r = mysqli_fetch_assoc($data)) {
        $rows[] = $r;
    }
     print json_encode($rows);
?>
