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
				$x = "variavel"; //A variável $x recebe o conteúdo "variavel"
				$$x = "Variável da Variável";//Adicionando mais um $ a frente da variável $x, criamos a variável tendo seu nome o conteúdo da variável $x: $variavel e recebendo o conteúdo "Variável da Variável" 

				echo "<h1>Variável de Variável";
				echo "<h2>O conteúdo da variável X é: <span>$x</span><h2>";
				echo "<h2>O conteúdo da variável criada recebeu o valor <span>$variavel</span><h2>";
			 ?>
		</div>
	</body>
</html>