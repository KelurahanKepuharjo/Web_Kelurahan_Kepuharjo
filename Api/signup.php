<?php
$db = mysqli_connect('localhost','root','','kepuharjo');
$id_akun = $_POST['id_akun'];
$nama_lengkap = $_POST['nama_lengkap'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$no_hp = $_POST['no_hp'];
$hak_akses = $_POST['hak_akses'];

$sql = "SELECT id_akun FROM akun WHERE id_akun = '".$id_akun."'";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
if($count == 1){
	echo json_encode("Error");
}else{
	$insert = "INSERT INTO akun (id_akun, nama_lengkap, password, no_hp, hak_akses) VALUES ('$id_akun', '$nama_lengkap', '$password', '$no_hp', '$hak_akses')";
		$query = mysqli_query($db,$insert);
		if($query){
			echo json_encode("Success");
		}
}
?>