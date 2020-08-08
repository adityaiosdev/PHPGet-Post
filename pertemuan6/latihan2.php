<?php 
$mahasiswa = [
	["nama" => "Aditya Ramadhan",
	"nim" => "1301184380" ,
	"jurusan" => "Teknik Informatika", 
	"email"=> " eyditye@gmail.com",
	"gambar" => "584c65e26e7d5809d2fa634d.png"],
	["gambar" => "dnwqunr.png",
	"nama" =>"Ujang Surajang", 
	"nim" =>"1301184323" ,
	"jurusan"=> "Teknik Kedokteran",
	"email"=> " ujang@gmail.com"]];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<?= $mahasiswa[1]["nim"] ?>
	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs) : ?>
	<ul>
		<li>Gambar : <img src="img/<?= $mhs["gambar"]; ?>"></li>
		<li>Nama : <?= $mhs["nama"] ;?></li>
		<li>NIM : <?= $mhs["nim"] ;?></li>
		<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
		<li>Email : <?= $mhs["email"]; ?></li>
	</ul>
	<?php endforeach ?>
</body>
</html>

