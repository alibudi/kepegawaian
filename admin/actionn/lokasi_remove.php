<?php
include 'koneksi.php';

if ($_POST) {
	$id_jabatan = $_POST['id_jabatan'];

	// $sql = "UPDATE berita_tbl SET   WHERE id = {$id}";
	// 		if ($connect->query($sql) == TRUE)
	$sql = "DELETE from jabatan WHERE id_jabatan = {$id_jabatan}";
			if ($connect->query($sql) == TRUE)
			 {
		header('location: admin/?hal=jabatan.php');
	}else{
		echo "Eror : ".$connect->error;
	}
	$connect->close();
}
?>