<?php
include'koneksi.php';
if ($_POST) {
	$id_lokasi = $_POST['id_lokasi'];
  	$nm_lokasi = $_POST['nm_lokasi'];
  	$alamat_lokasi = $_POST['alamat_lokasi'];
  	$no_hp = $_POST['no_hp'];
	$sql = "INSERT INTO lokasi_krj (id_lokasi,nm_lokasi,alamat_lokasi,no_hp) VALUES ('$id_lokasi', '$nm_lokasi','alamat_lokasi','no_hp')";
	if ($connect->query($sql)==TRUE) {
		header('location: ./admin/?hal=lokasi.php');
	}else{
		echo "Eror" .$sql. '' . $connect->connect_error;	
	}
	$connect->close();
}
?>