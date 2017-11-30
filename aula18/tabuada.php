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
				$numero = $_GET["numero"];

				echo "A tabuada de <span class='foco'>$numero</span> é:<br><br>";
				for($cont = 1; $cont <= 10; $cont++){
					$resultado = $numero * $cont;
					echo "$numero x $cont = $resultado<br>";
				}
			 ?>
			 <br><a href="tabuada.html" class="botao">Voltar</a>
		</div>
	</body>
</html>