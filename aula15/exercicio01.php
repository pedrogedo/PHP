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
				function teste(&$x){ //&$x é uma referência a variável $a.
					$x += 2;
					echo "O valor de X é <span class='foco'>$x</span><br>";
				}

				$a = 3;
				teste($a);
				echo "O valor de A é <span class='foco'>$a";
			 ?>
		</div>
	</body>
</html>