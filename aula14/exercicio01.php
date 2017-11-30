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
				function soma($a, $b){
					$soma = $a + $b;
					echo "A soma entre <span class='foco'>$a</span> e <span class='foco'>$b</span> é igual a <span class='foco'>$soma</span>";
				}

				soma(10,5);
			 ?>
		</div>
	</body>
</html>