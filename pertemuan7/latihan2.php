<?php 
 if (!isset($_GET["nama"])||
!isset($_GET["nim"])||
!isset($_GET["jurusan"])||
!isset($_GET["email"])||
!isset($_GET["gambar"])){
 	header("Location: latihan1.php");
 	exit;
 }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>
	<ul>
		<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["nim"]; ?></li>
		<li><?= $_GET["jurusan"]; ?></li>
		<li><?= $_GET["email"]; ?></li>
	</ul>
	<a href="latihan1.php">Kembali ke halaman seluruh mahasiswa</a>
</body>
</html>