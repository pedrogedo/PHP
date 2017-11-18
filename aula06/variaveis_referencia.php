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
				$a = 5; //A variável $a recebe o valor 5
				$b = 3; //A variável $b recebe o valor 3
				$b += 7; //A variável $b recebe recebe ela mesma + 7, ou seja 3 + 7.

				echo "<h1>Variável de Referência</h2>";
				echo "<h2>O valor da variável A é: <span>$a</span><h2>";
				echo "<h2>O valor da variável B é: <span>$b</span><h2>";

				$b = &$a; //O & na frente da variável $a, indica que $b faz referência em $a.
				$b += 5;
				echo "<h2>O valor da variável A é: <span>$a</span><h2>";
				echo "<h2>O valor da variável B é: <span>$b</span><h2>";
			 ?>
		</div>
	</body>
</html>