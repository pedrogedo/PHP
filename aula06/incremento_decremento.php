<!DOCTYPE html>
<html>
	<head>
		<title>Curso de PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>
	<body>
		<div>
			<?php 
				$atual = $_GET["ano"];

				echo "<h1>Incremento Decremento</h1>";
				echo "<h2>O ano atual é $atual. O ano anterior é ".--$atual."<h2>";
				echo "<h2>O ano atual é $atual. O próximo ano é ".++$atual."<h2>";
			 ?>
		</div>
	</body>
</html>