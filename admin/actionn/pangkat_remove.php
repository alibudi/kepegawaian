<?php
include 'koneksi.php';

if ($_POST) {
	$id_jabatan = $_POST['id_pangkat'];

	// $sql = "UPDATE berita_tbl SET   WHERE id = {$id}";
	// 		if ($connect->query($sql) == TRUE)
	$sql = "DELETE from pangkat WHERE id_pangkat = {$id_pangkat}";
			if ($connect->query($sql) == TRUE)
			 {
		header('location: admin/?hal=jabatan.php');
	}else{
		echo "Eror : ".$connect->error;
	}
	$connect->close();
}
?>