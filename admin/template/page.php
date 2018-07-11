<?php 
#INI adlah file untuk konversi halaman yang akan tampil
$hlm='';
if (isset($_GET['hal'])) {
	$hlm=$_GET['hal'];
}
$currrent_page=$hlm;

switch ($hlm) {
	case 'dasboard':$hlm="include 'pages/dasboard.php';";
		break;
	case 'user':$hlm="include 'pages/user.php';";
		break;
	case 'user_add':$hlm="include 'pages/user_add.php';";
		break;
	case 'update_user':$hlm="include 'pages/user_update.php';";
		break;
	case 'jabatan':$hlm="include 'pages/jabatan.php';";
		break;
	case 'jabatan_add':$hlm="include 'pages/jabatan_add.php';";
		break;
	case 'jabatan_update':$hlm="include 'pages/jabatan_update.php';";
		break;
	case 'unit_kerja':$hlm="include 'pages/unit_kerja.php';";
		break;
	case 'pangkat':$hlm="include 'pages/pangkat.php';";
		break;
	case 'lokasi':$hlm="include 'pages/lokasi.php';";
		break;
	case 'lokasi_update':$hlm="include 'pages/lokasi_update.php';";
		break;
	case 'lokasi_add':$hlm="include 'pages/lokasi_add.php';";
		break;
	case 'unit_update':$hlm="include 'pages/unit_update.php';";
		break;
	case 'pangkat_update':$hlm="include 'pages/pangkat_update.php';";
		break;
}
$content=$hlm;
 ?>