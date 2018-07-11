<?php
include'koneksi.php';
if ($_POST) {
	$id_jabatan = $_POST['id_jabatan'];
	$nm_jabatan = $_POST['nm_jabatan'];
	$sql = "INSERT INTO jabatan (id_jabatan,nm_jabatan) VALUES ('$id_jabatan', '$nm_jabatan')";
	if ($connect->query($sql)==TRUE) {
		header('location: ./admin/?hal=jabatan.php');
	}else{
		echo "Eror" .$sql. '' . $connect->connect_error;	
	}
	$connect->close();
}
?>