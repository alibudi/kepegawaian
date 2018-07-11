<?php
include 'actionn/koneksi.php';

if ($_GET['id_jabatan']) {
	$id = $_GET['id_jabatan'];

	$sql = "SELECT * FROM jabatan WHERE id_jabatan = ($id_jabatan)";
	$result = $connect->query($sql);
	$d = $result->fetch_assoc();

	$connect->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remove</title>
</head>
<body>

<h3>Do you really want to remove</h3>
<form action="actionn/jabatan_remove.php" method="post">
	
	<input type="text" name="id_jabatan" value="<?php echo $d['id_jabatan']?>"/>
	<button type="submit">Save</button>
	<a href="index.php"><button type="button">BACK</button></a>
</form>
</body>
</html>