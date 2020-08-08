 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 1</title>
 	<style>
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: yellow;
 			text-align: center;
 			line-height: 50px;
 			margin: 5px;
 			float: left; 
 			transition: 1s;
 		} 	
 		.kotak:hover {
 			transform: rotate(360deg);
 			border-radius: 50%;
 		}
 		.clear {
 			clear: both;
 		}
 	</style>
 </head>
 <body>
 	<?php 
 	$angka = [[1,2,3,100],[4,5,6,22],[7,8,9,45]];
 	 ?>
 	 <?php foreach ($angka as $akg ) : ?>
 	 	<?php foreach ($akg as $b ) : ?> 
 	 		<div class="kotak"><?= $b; ?></div>
 	 	<?php endforeach ?>
 	 	<div class="clear"></div>
 	 <?php endforeach ?>
 </body>
 </html>