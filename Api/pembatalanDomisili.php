<?php
$db = mysqli_connect('localhost','root','','kepuharjo');
$id_surat = $_POST['id_surat'];
$statusSurat = $_POST['status_surat'];
$result = $db->query("UPDATE domisili SET status_surat = '$statusSurat' WHERE id_surat = '$id_surat'");
if ($result) {
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('success'=>false));
}
?>