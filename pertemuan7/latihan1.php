<?php 
$mahasiswa = [
	["nama" => "Aditya Ramadhan",
	"nim" => "1301184380" ,
	"jurusan" => "Teknik Informatika", 
	"email"=> " eyditye@gmail.com",
	"gambar" => "boy2.png"],
	["gambar" => "boy1.png",
	"nama" =>"Ujang Surajang", 
	"nim" =>"1301184323" ,
	"jurusan"=> "Teknik Kedokteran",
	"email"=> " ujang@gmail.com"]];

?>

<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>DAFTAR MAHASISWA</h1>
<h1><?= $mahasiswa[1]["nim"]; ?></h1>
<?php foreach ($mahasiswa as $mhs) : ?>
	<ul>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?=$mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>&jurusan=<?= $mhs["jurusan"] ?>"><?=$mhs["nama"]; ?> </a>
	</ul>
<?php endforeach ?>
</body>
</html>


