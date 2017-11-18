<!DOCTYPE html>
<html>
	<head>
		<title>Curso de PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>
	<body>
		<h1>Funções Aritméticas</h1>
		<div>
			<?php 
				$n1 = $_GET["x"];
				$n2 = $_GET["y"];
				$media = ($n1 + $n2)/2;

				/*Teremos o mesmo resultado na tela de impressão colocando o echo concatenando a mensagem
				 *com a variável, ou colocando a variável dentro das aspas duplas.*/
				echo "<h2>Valores recebidos <span>$n1</span> e <span>$n2</span></h2>";
				echo "<h2>O valor absoluto de <span>$n1</span> = <span>".abs($n1)."</span></h2>";
				echo "<h2>O valor de <span>$n1<sup>$n2</sup></span> = <span>".pow($n1, $n2)."</span></h2>";
				echo "<h2>A raiz quadrada de <span>$n1</span> = <span>".sqrt($n1)."</span></h2>";
				echo "<h2>O valor arredondado de <span>$n1</span> = <span>".round($n1)."</span></h2>";
				echo "<h2>A parte inteira de <span>$n1</span> = <span>".intval($n1)."</span></h2>";
				echo "<h2>O valor de <span>$n1</span> em moeda = <span>R$".number_format($n1,2,",",".");			
			 ?>
		</div>
	</body>
</html>