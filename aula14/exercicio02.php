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
				function soma($a,$b){
					$soma = $a + $b;
					return $soma;
				}

				$x = 3;
				$y = 4;
				$resultado = soma($x,$y);

				echo "A soma entre <span class='foco'>$x</span> e <span class='foco'>$y</span> é igual a <span class='foco'>$resultado</span>";
			 ?>
		</div>
	</body>
</html>