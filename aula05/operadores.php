<!DOCTYPE html>
<html>
	<head>
		<title>Curso de PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>
	<body>
		<h1>Operadores Aritméticos</h1>
		<div>
			<?php 
				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				$media = ($n1 + $n2)/2;

				/*Teremos o mesmo resultado na tela de impressão colocando o echo concatenando a mensagem
				 *com a variável, ou colocando a variável dentro das aspas duplas.*/
				echo "<h2>A média entre <span>".$n1."</span> e <span>".$n2."</span> é igual a <span>".$media."</span></h2>";

				echo "<br><h2>A média entre <span>$n1</span> e <span>$n2</span> é igual a <span>$media<span></h2>";

				echo "<br><h2>A Soma entre <span>$n1</span> e <span>$n2</span> é igual a <span>".($n1+$n2)."</h2></span>";

				echo "<br><h2>A Subtração entre <span>$n1</span> e <span>$n2</span> é igual a <span>".($n1-$n2)."</h2></span>";

				echo "<br><h2>A Divisão entre <span>$n1</span> e <span>$n2</span> é igual a <span>".($n1/$n2)."</h2></span>";

				echo "<br><h2>O Resto da Divisão entre <span>$n1</span> e <span>$n2</span> é igual a <span>".($n1%$n2)."</h2></span>";
			 ?>
		</div>
	</body>
</html>