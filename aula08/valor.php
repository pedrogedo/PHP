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
				$valor = $_GET["valor"];
				$raiz = sqrt($valor);
				echo "A raiz de <span>$valor = ".number_format($raiz,2);
			?>
			<a href="exercicio.html">Voltar</a>
		</div>
	</body>
</html>

