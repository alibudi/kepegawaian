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
	case 'hukuman':$hlm="include 'pages/hukuman.php';";
		break;
	case 'hukuman_add':$hlm="include 'pages/hukuman_add.php';";
		break;
	case 'hukuman_update':$hlm="include 'pages/hukuman_update.php';";
		break;
	case 'pegawai':$hlm="include 'pages/pegawai.php';";
		break;
	case 'pegawai_add':$hlm="include 'pages/pegawai_add.php';";
		break;
	case 'prestasi':$hlm="include 'pages/prestasi.php';";
		break;
	case 'prestasi_add':$hlm="include 'pages/prestasi_add.php';";
		break;
	case 'prestasi_update':$hlm="include 'pages/prestasi_update.php';";
		break;
	case 'sk_kerja':$hlm="include 'pages/sk_kerja.php';";
		break;
	case 'sk_add':$hlm="include 'pages/sk_add.php';";
		break;
	case 'sk_update':$hlm="include 'pages/sk_update.php';";
		break;
	case 'pegawai_update':$hlm="include 'pages/pegawai_update.php';";
		break;

}
$content=$hlm;
 ?>